@extends('layouts.base')
@section('main')
    @include('includes.header')
    <div class="container">
        @yield('content')
    </div>
@endsection
