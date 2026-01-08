@extends('layouts.main')

@section('page.title', 'Menu')

@section('content')
    <div class="container">
        <h4>{{ __('Categories') }}</h4>
        <div class="row d-flex justify-content-center">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex flex-row justify-content-between">
                            <form class="d-flex form-inline">
                                <div class='d-flex flex-row border border-2 rounded overflow-hidden'>
                                    <input class="border-0 border border-2 border-end p-1" type="search" placeholder="Search"
                                        aria-label="Search">
                                    <button class="btn border-0 rounded-0 bg-white" type="submit">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                            <path
                                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                                        </svg>
                                    </button>
                                </div>
                            </form>
                            <div>
                                <a class="btn btn-primary" href="{{ route('category.create') }}">{{ __('Add') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        @if ($categories->isEmpty())
                            {{ __('No one menu elements') }}
                        @else
                        @endif
                        <div class="list-group">
                            @foreach ($categories as $category)
                                <div class="list-group-item">
                                    <a href="{{ route('category.show', $category->id) }}"
                                        class="text-decoration-none text-black">
                                        <h4>{{ $category->title }}</h4>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
