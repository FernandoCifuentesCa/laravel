<table class="table table-dark">
    <thead class="thead-dark">
        <tr>
            <th>content</th>
        </tr>
    </thead>


    <tbody>
    @foreach($posts as $post)
        <tr>
            <td>{{$post->content}}</td>
            //<td>{{$post->comment}}</td>
            <th> <a href=" {{ url('posts/'.$post->id.'/edit') }} ">Editar</a> | 
            <form method="post" action=" {{url('/posts/'.$post->id) }} ">
            {{ csrf_field() }}
            {{method_field('DELETE') }}
            <button type="submit" onclick="return confirm('¿Borrar?');">Borrar</button>
            </form> </th>
    @endforeach
    </tbody>
</table>