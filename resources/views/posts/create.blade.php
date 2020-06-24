create a new post
@if(count($errors)>0)
<div class="alert alert-danger" role="alert">
    <ul>
        @foreach ($errors->all() as $error)
        <li> {{$error }}</li>
            
        @endforeach
        
    </ul>
</div>
@endif
<form action="{{ url('/posts')}}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
<laber for="content">{{'Content:'}}</label>
<input type="content" name="content" id="content" value="">
<br/>

<input type="submit" value="Agregar">

</form>