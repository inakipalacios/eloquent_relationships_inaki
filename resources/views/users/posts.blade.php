@extends('layouts.main')

@section('content')
@forelse($user_posts as $post)
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
            <!--<a href="#" class="btn btn-primary">Go somewhere</a>-->
            <div  class="d-flex justify-content-center">
                @include('partials.post_delete_button')
                @include('partials.post_edit_button')
            </div>
        </div>
    </div>
    @empty
    @endforelse
@endsection