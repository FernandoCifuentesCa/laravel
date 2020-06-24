<table class="table table-dark">
    <thead class="thead-dark">
        <tr>
            <th>Post ID</th>
            <th>content</th>
        </tr>
    </thead>


    <tbody>
    @foreach($comments as $comment)
        <tr>
            <td>{{$comment->posts_id}}</td>
            <td>{{$comment->content}}</td>
            <th> <a href=" {{ url('comments/'.$comment->id.'/edit') }} ">Editar</a> | 
            <form method="post" action=" {{url('/comments/'.$comment->id) }} ">
            {{ csrf_field() }}
            {{method_field('DELETE') }}
            <button type="submit" onclick="return confirm('¿Borrar?');">Borrar</button>
            </form> </th>
    @endforeach
    </tbody>
</table>