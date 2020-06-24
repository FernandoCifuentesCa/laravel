<?php

namespace App\Http\Controllers;

use App\comments;
use Illuminate\Http\Request;
use Illuminate\Mail\Message;

class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['comments']=comments::paginate(25);
        return view('comments.index',$datos);

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('comments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $fields=[
            'content'=> 'required|string|max:250',
            'posts_id'=>'required|string|max:250'
        ];
        $message=["required"=>":attribute is required"];

        $this->validate($request,$fields,$message);

        $datacomments=request()->all();

        $datacomments= request()->except('_token');

        comments::insert($datacomments);

        $datos['comments']=comments::paginate(25);
        return view('comments.index',$datos);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\comments  $comments
     * @return \Illuminate\Http\Response
     */
    public function show(comments $comments)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\comments  $comments
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        //
        $comments =comments::findOrFail($id);

        return view('comments.edit',compact('comments'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\comments  $comments
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $comments= request()->except('_token','_method');
        comments::where('id','=',$id)->update($comments);
        
        $comments =comments::findOrFail($id);
        return view('comments.edit',compact('comments'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\comments  $comments
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        comments::destroy($id);
        return redirect('comments');
    }
}
