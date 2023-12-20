@extends('layouts.main')

@section('content')
    @include('partials.create_user_form')

    <table class="table table-striped mt-4">
        <tr>
            <th>Name</th>
            <th>Surname</th>
            <th>Email</th>
            <th></th>
            <th></th>
        </tr>
    @forelse($users as $user)
        <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->surname}}</td>
            <td>{{$user->email}}</td>
            <td>@include('partials.edit_button')</td>
            <td>@include('partials.delete_button')</td>
        </tr>
    @empty
    @endforelse
    </table>
@endsection