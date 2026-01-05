@extends('layouts.base')
@push('css')
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
@endpush
@section('main')
    <div class="d-flex flex-row">
        <div class="sidebar position-fixed">
            @include('includes.sidebar')
        </div>
        <div class="content">
            @include('includes.header')
            @yield('content')
        </div>
    </div>
@endsection
