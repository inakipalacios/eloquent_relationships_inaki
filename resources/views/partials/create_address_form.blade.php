<div class="mt-4 d-flex justify-content-center">
    <form class="w-50" action="{{route('address.store')}}" method="post">
        @csrf
        <h3>Cambiar el action de este formulario</h3>
            <div class="mb-3">
                <label for="name" class="form-label">Municipality</label>
                <input type="text" class="form-control" id="municipality" name="municipality">
            </div>
            <div class="mb-3">
                <label for="surname" class="form-label">Street</label>
                <input type="text" class="form-control" id="street" name="street">
            </div>
            <div class="mb-3">
                <label for="surname" class="form-label">Number</label>
                <input type="number" class="form-control" id="number" name="number">
            </div>
            @include('partials.select_users')
            @foreach($users as $user)
            <input type="checkbox" id="{{ $user->id }}" name="users[]" value="{{ $user->id }}">
            <label for="{{ $user->id }}">{{$user->name}}</label><br>
            @endforeach
            <input class="btn btn-primary" type="submit" value="+ Asign address">
    </form>

</div>