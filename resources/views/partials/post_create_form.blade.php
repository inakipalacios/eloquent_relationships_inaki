<div class="mt-4 d-flex justify-content-center">
    <form class="w-50" action="{{route('post.store')}}" method="post">
        @csrf
        <h3>Create posts</h3>
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <input type="text" class="form-control" id="content" name="content">
            </div>

            @include('partials.select_users')


            <div class="mb-3">
            @foreach($subjects as $subject)
                <input type="checkbox" id="{{ $subject->id }}" name="subjects[]" value="{{ $subject->id }}">
                <label for="{{ $subject->id }}">{{$subject->name}}</label><br>
            @endforeach
            </div>
            <input class="btn btn-primary" type="submit" value="+ Create post">
    </form>

</div>