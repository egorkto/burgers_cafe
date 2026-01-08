@props(['method' => 'GET'])
@php
    $method = strtoupper($method);
    $isSpecialMethod = in_array($method, ['PUT', 'PATCH', 'DELETE']);
@endphp

<form {{ $attributes }} method="{{ $isSpecialMethod ? 'POST' : $method }}">
    @unless ($method === 'GET')
        @csrf
    @endunless
    @if ($isSpecialMethod)
        @method($method)
    @endif
    {{ $slot }}
</form>
