@extends('layouts.main')

@section('content')
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @include('partials.create_user_form')

    <table class="table table-striped mt-4">
        <tr>
            <th>Name</th>
            <th>Surname</th>
            <th>Age</th>
            <th>Birthday</th>
            <th>Gender</th>
            <th>Email</th>
            <th>Municipality</th>
            <th>Street</th>
            <th>Number</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
    @forelse($users as $user)
        <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->surname}}</td>
            <td>{{$user->age}}</td>
            <td>{{$user->date_of_birth}}</td>
            <td>{{$user->gender}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->address->municipality ?? ' '}}</td>
            <td>{{$user->address->street ?? ' '}}</td>
            <td>{{$user->address->number ?? ' '}}</td>
            <td>@include('partials.edit_button')</td>
            <td>@include('partials.delete_button')</td>
            <td>@include('partials.user_posts_button')</td>
        </tr>
    @empty
    @endforelse
@endsection