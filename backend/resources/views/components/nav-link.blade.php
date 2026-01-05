@props(['routeName'])
<?php
$activeLinkClass = isset($routeName) ? active_link("{$routeName}*") : '';
$route = isset($routeName) ? route("{$routeName}") : '#';
?>
<a {{ $attributes->class(['nav-link', "{$activeLinkClass}"]) }} aria-current="page"
    href="{{ $route }}">{{ $slot }}</a>
