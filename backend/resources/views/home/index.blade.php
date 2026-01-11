@extends('layouts.main')
@section('content')
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside"
            aria-expanded="false">First Dropdown</a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li class="dropend">
                <a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown"
                    data-bs-auto-close="outside" aria-expanded="false">2nd Dropdown</a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="#">Menu item</a></li>
                    <li><a class="dropdown-item" href="#">Menu item</a></li>
                    <li class="dropend">
                        <a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown"
                            data-bs-auto-close="outside" aria-expanded="false">3rd Dropdown</a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#">Menu item</a></li>
                            <li><a class="dropdown-item" href="#">Menu item</a></li>
                            <li><a class="dropdown-item" href="#">Menu item</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li>
                <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
        </ul>
    </li>
@endsection
