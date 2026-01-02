@props(['routeName'])

<a class="nav-link {{ $routeName != '' ? active_link("{$routeName}*") : '' }}" aria-current="page"
    href="{{ route("{$routeName}") }}">{{ $slot }}</a>
