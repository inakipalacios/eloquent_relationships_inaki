@extends('layouts.main')

@section('title', 'Edit address')


@section('content')
    <div class="mt-4 d-flex justify-content-center">
    <form class="w-50" action="{{route('address.update', ['id'=>$address->id])}}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="municipality" class="form-label">Municipality</label>
                <input type="text" class="form-control" id="municipality" name="municipality" value="{{ $address->municipality }}">
            </div>
            <div class="mb-3">
                <label for="street" class="form-label">Street</label>
                <input type="text" class="form-control" id="street" name="street" value="{{ $address->street }}">
            </div>
            <div class="mb-3">
                <label for="number" class="form-label">Number</label>
                <input type="number" class="form-control" id="number" name="number" value="{{ $address->number }}">
            </div>
            <input class="btn btn-primary" type="submit" value="Update info">
    </form>
</div>
@endsection