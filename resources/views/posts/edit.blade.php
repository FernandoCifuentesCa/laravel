@extends('layouts.app')


@section('content')

<div class="container">

<form action="{{ url('/posts/'.$post->id) }} " method= "post">
{{ csrf_field() }}
{{ method_field('PATCH') }}

<laber for="content">{{'Content:'}}</label>
<input type="content" name="content" id="content" value="{{$post->content}}">
<br/>


<input type="submit" value="Editar">

</form>

</div>
@endsection