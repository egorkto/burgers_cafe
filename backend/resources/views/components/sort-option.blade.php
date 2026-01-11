@props(['value' => ''])

<option {{ $attributes }} value="{{ $value }}" @selected(old('sort_by') == $value)>{{ $slot }}</option>
