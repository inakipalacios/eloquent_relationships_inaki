<form action="{{route('user.edit', ['id'=>$user->id])}}" method="get">
    @csrf
    <input type="submit" class="btn btn-secondary" value="✏️ Edit">
</form>