create a new comment                        

@if(count($errors)>0)
<div class="alert alert-danger" role="alert">
    <ul>
        @foreach ($errors->all() as $error)
        <li> {{$error }}</li>
            
        @endforeach
        
    </ul>
</div>
@endif
<form action="{{ url('/comments')}}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
<laber for="content">{{'Content:'}}</label>
<input type="content" name="content" id="content" value="">
<br/>
<laber for="posts_id">{{'ID post:'}}</label>
<input type="posts_id" name="posts_id" id="posts_id" value="">
<br/>


<input type="submit" value="Agregar">

</form>