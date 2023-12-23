<form action="{{route('subject.destroy', ['id' => $subject->id])}}" method="post">
    @csrf
    @method('DELETE')
    <input type="submit" class="btn btn-danger" value="🗑️ Delete">

</form>