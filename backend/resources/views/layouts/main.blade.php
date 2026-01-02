@extends('layouts.base')
@section('main')
    <div class="d-flex flex-row">
        @include('includes.sidebar')
        <div>
            @include('includes.header')
            @yield('content')
        </div>
    </div>
@endsection
