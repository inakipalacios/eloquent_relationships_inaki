<div class="mt-4 d-flex justify-content-center">
    <form class="w-50" action="{{route('subject.store')}}" method="post">
        @csrf
        <h3>Create subjects</h3>
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <input class="btn btn-primary" type="submit" value="+ Create subject">
    </form>

</div>