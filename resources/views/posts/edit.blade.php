@extends('layouts.main')

@section('content')
    <div class="mt-4 d-flex justify-content-center">
    <form class="w-50" action="{{route('post.update', ['id'=>$post->id])}}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}">
            </div>
            <div class="mb-3">
            <label for="content">Content:</label>
            <textarea class="form-control" id="content" name="content" rows="4" required>{{$post->content}}</textarea>
            </div>
            @include('partials.post_subjects_checkbox')
            <input class="btn btn-primary" type="submit" value="Update post">
    </form>
</div>
@endsection