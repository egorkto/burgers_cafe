@props(['method' => 'GET'])
@php
    $method = strtoupper($method);
@endphp

<form {{ $attributes }} method="{{ $method }}">
    @unless ($method === 'GET')
        @csrf
    @endunless
    @if (in_array($method, ['PUT', 'PATCH', 'DELETE']))
        @method($method)
    @endif
    {{ $slot }}
</form>
