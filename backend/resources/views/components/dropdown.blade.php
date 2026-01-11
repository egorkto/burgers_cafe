@if (isset($title))
    {{ $title }}
@else
    <x-dropdown-toggle>Dropdown</x-dropdown-toggle>
@endif
<ul {{ $attributes->class(['dropdown-menu']) }}>
    {{ $slot }}
</ul>
