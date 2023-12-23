<form action="{{route('post.destroy', ['id' => $post->id])}}" method="post">
    @csrf
    @method('DELETE')
    <input type="submit" class="btn btn-danger" value="🗑️ Delete">

</form>