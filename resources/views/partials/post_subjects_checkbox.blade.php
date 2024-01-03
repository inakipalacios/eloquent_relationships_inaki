<div class="mb-3">
    @foreach($subjects as $subject)
        @php
        $checked = in_array($subject->name, $post->subjects->pluck('name')->toArray());
        @endphp
        <input type="checkbox" id="{{ $subject->id }}" name="subjects[]" value="{{ $subject->id }}" {{ $checked ? 'checked' : '' }}>
        <label for="{{ $subject->id }}">{{ $subject->name }}</label><br>
    @endforeach
</div>