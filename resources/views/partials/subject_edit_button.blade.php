<form action="{{route('subject.edit', ['id'=>$subject->id])}}" method="get">
    @csrf
    <input type="submit" class="btn btn-secondary" value="✏️ Edit">
</form>