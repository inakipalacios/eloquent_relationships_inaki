@extends('layouts.main')

@section('content')
    <div class="mt-4 d-flex justify-content-center">
    <form class="w-50" action="{{route('user.update', ['id'=>$user->id])}}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">
            </div>
            <div class="mb-3">
                <label for="surname" class="form-label">Surname</label>
                <input type="text" class="form-control" id="surname" name="surname" value="{{ $user->surname }}">
            </div>
            <div class="mb-3">
                <label for="age" class="form-label">Age</label>
                <input type="number" class="form-control" id="age" name="age" value="{{ $user->age }}">
            </div>
            <div class="mb-3">
                <label for="date_of_birth" class="form-label">Date of birth</label>
                <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" value ="{{ $user->date_of_birth }}">
            </div>
            <div class="mb-3">
                <label for="gender" class="form-label">Gender</label>
                <select class="form-select" id="gender" name="gender">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}">
            </div>
            <input class="btn btn-primary" type="submit" value="Update info">
    </form>
</div>
@endsection