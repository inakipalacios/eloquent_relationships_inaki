<form action="{{route('address.edit', ['id'=>$address->id])}}" method="get">
    @csrf
    <input type="submit" class="btn btn-secondary" value="✏️ Edit">
</form>