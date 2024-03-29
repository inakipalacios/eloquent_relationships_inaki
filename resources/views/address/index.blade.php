@extends('layouts.main')

@section('title', 'Addresses')

@section('content')
@if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @include('partials.address_create_form')
    <table class="table table-striped mt-4">
        <tr>
            <th>User</th>
            <th>Municipality</th>
            <th>Street</th>
            <th>Number</th>
            <th></th>
            <th></th>
        </tr>
    @forelse($addresses as $address)
        <tr>
            <td>{{$address->user->name ?? ' '}}</td>
            <td>{{$address->municipality}}</td>
            <td>{{$address->street}}</td>
            <td>{{$address->number}}</td>
            <td>@include('partials.address_edit_button')</td>
            <td>@include('partials.address_delete_button')</td>
        </tr>
    @empty
    @endforelse
@endsection