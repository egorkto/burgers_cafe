@props(['type' => 'button'])
<a {{ $attributes }}>
    <button type="{{ $type }}" class="btn btn-link text-decoration-none text-reset p-0">
        {{ $slot }}
    </button>
</a>
