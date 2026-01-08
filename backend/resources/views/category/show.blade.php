@extends('layouts.main')

@section('page.title', "{$category->title}")

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div>
                    <h4>{{ $category->title }}</h4>
                </div>
                <div class="d-flex gap-2">
                    <a class="btn btn-primary" href="{{ route('category.edit', $category->id) }}">{{ __('Edit') }}</a>
                    <a class="btn btn-secondary" href="{{ route('category') }}">{{ __('Back') }}</a>
                </div>
            </div>
        </div>
    </div>
@endsection
