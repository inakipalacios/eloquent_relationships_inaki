<form action="{{route('post.edit', ['id'=>$post->id])}}" method="get">
    @csrf
    <input type="submit" class="btn btn-secondary m-2" value="✏️ Edit">
</form>