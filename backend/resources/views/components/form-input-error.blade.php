@props(['name'])

@error($name)
    <div class="text-danger"><small>{{ $message }}</small></div>
@enderror
