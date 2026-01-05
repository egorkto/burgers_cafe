<?php
$admin = Auth::guard('admin')->user();
?>
<div class="d-flex flex-column flex-shrink-0 p-3 text-white vh-100 bg-dark" style="width: 100%;">
    <span class="fs-4">{{ __('Panel') }}</span>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <x-nav-link class="text-white" routeName="home">{{ __('Home') }}</x-nav-link>
        </li>
        <li class="nav-item">
            <x-nav-link class="text-white" routeName="product">{{ __('Menu') }}</x-nav-link>
        </li>
        <li class="nav-item">
            <x-nav-link class="text-white" routeName="currency">{{ __('Currencies') }}</x-nav-link>
        </li>
    </ul>
    <hr>
    <div class="dropdown">
        <img src="{{ asset('storage/admin/avatars/' . $admin->avatar) }}" alt="Avatar" width="32" height="32"
            class="rounded-circle me-2">
        <strong>{{ $admin->name }}</strong>
    </div>
</div>
