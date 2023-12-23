@extends('layouts.main')

@section('content')
    @include('partials.subject_create_form')

    <table class="table table-striped mt-4">
        <tr>
            <th>Name</th>
            <th></th>
            <th></th>
        </tr>
    @forelse($subjects as $subject)
        <tr>
            <td>{{$subject->name}}</td>
            <td>@include('partials.subject_edit_button')</td>
            <td>@include('partials.subject_delete_button')</td>
        </tr>
    @empty
    @endforelse
@endsection