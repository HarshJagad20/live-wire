<div>
    <h1>All posts</h1>
    <table border="1px">
        <tr>
            <td>Title</td>
            <td>Body</td>
        </tr>

        @if($posts->count())
        @foreach($posts as $post)
        <tr>
            <td>{{$post->title}}</td>
            <td>{{$post->body}}</td>
        </tr>
        @endforeach
        @endif

    </table>
</div>