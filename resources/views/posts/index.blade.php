@extends('layouts.main')

@section('content')
@include('partials.post_create_form')

    @forelse($posts as $post)
    <div class="card mb-3">
        <div class="card-header">
            {{ $post->user->name }}
        </div>
        <div class="card-header d-flex flex-row justify-content-end">
            @forelse($post->subjects as $subject)
            <div class="subject_div m-2">
                {{ $subject->name }}
            </div>
            @empty
            @endforelse
        </div>
        <div class="card-body">
            <h5 class="card-title">{{$post->title}}</h5>
            <p class="card-text">{{$post->content}}</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
            @include('partials.post_delete_button')
        </div>
    </div>
    @empty
    @endforelse
@endsection