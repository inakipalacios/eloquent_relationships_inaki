<div class="mb-3">
    <select class="form-select" name="user" id="user">
    <option value="#">Select user</option>
    @forelse($users as $user)
    <option value="{{$user->id}}">{{$user->name}}</option>
    @empty
    @endforelse
    <br>
</div>