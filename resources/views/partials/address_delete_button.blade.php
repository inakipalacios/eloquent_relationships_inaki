<form action="{{route('address.destroy', ['id' => $address->id])}}" method="post">
    @csrf
    @method('DELETE')
    <input type="submit" class="btn btn-danger" value="🗑️ Delete">

</form>