<form action="{{route('user.posts', ['id'=>$user->id])}}" method="get">
    @csrf
    <input type="submit" class="btn btn-info" value="Posts">
</form>