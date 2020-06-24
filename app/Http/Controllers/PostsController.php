<?php

namespace App\Http\Controllers;

use App\posts;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['posts']=posts::paginate(25);
        return view('posts.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('posts.create');
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
            'content'=> 'required|string|max:250'
        ];
        $message=["required"=>":attribute is required"];

        $this->validate($request,$fields,$message);

        $dataposts=request()->all();

        $dataposts= request()->except('_token');

        posts::insert($dataposts);

        $datos['posts']=posts::paginate(25);
        return view('posts.index',$datos);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function show(posts $posts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $post =posts::findOrFail($id);

        return view('posts.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $post= request()->except('_token','_method');
        posts::where('id','=',$id)->update($post);
        
        $post =posts::findOrFail($id);
        return view('posts.edit',compact('post'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        posts::destroy($id);
        return redirect('posts');
    }
}
