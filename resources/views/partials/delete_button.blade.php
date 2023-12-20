<form action="{{route('user.destroy', ['id' => $user->id])}}" method="post">
    @csrf
    @method('DELETE')
    <input type="submit" class="btn btn-danger" value="🗑️ Delete">

</form>