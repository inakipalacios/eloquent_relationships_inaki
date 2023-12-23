@extends('layouts.main')

@section('content')
    <div class="mt-4 d-flex justify-content-center">
    <form class="w-50" action="{{route('subject.update', ['id'=>$subject->id])}}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $subject->name }}">
            </div>
            <input class="btn btn-primary" type="submit" value="Update subject">
    </form>
</div>
@endsection