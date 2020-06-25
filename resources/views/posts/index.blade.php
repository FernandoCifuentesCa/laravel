@extends('layouts.app')


@section('content')

<div class="container">

 <a class="nav-link" href="{{ route('posts.create') }}">{{ __('Add a Post') }}</a>

<table class="table table-dark">
    <thead class="thead-dark">
        <tr>
            <th style="text-align: center">Posts</th>
        </tr>
    </thead>


    <tbody>
    @foreach($posts as $post)
        <tr>
            <td>{{$post->content}}</td>
            <th> <a href=" {{ url('posts/'.$post->id.'/edit') }} ">Editar</a> | 
            <form method="post" action=" {{url('/posts/'.$post->id) }} ">
            {{ csrf_field() }}
            {{method_field('DELETE') }}
            <button type="submit" onclick="return confirm('¿Borrar?');">Borrar</button>
            </form> </th>
    @endforeach
    </tbody>
</table>


</div>
@endsection