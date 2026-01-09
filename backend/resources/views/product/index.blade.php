@extends('layouts.main')

@section('page.title', 'Menu')

@section('content')
    <div class="container">
        <h4>{{ __('Menu') }}</h4>
        <div class="row d-flex justify-content-center">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex flex-row justify-content-between">
                            <x-form action="{{ route('product') }}" method='GET' class="d-flex form-inline gap-3">
                                <div class='d-flex flex-row border border-2 rounded overflow-hidden'>
                                    <input class="border-0 border border-2 border-end p-1" type="text"
                                        value="{{ old('search') }}" placeholder="Search" aria-label="Search" name="search">
                                    <button class="btn border-0 rounded-0 bg-white" type="submit">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                            <path
                                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                                        </svg>
                                    </button>
                                </div>
                                <div>
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-funnel" viewBox="0 0 16 16">
                                                <path
                                                    d="M1.5 1.5A.5.5 0 0 1 2 1h12a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.128.334L10 8.692V13.5a.5.5 0 0 1-.342.474l-3 1A.5.5 0 0 1 6 14.5V8.692L1.628 3.834A.5.5 0 0 1 1.5 3.5zm1 .5v1.308l4.372 4.858A.5.5 0 0 1 7 8.5v5.306l2-.666V8.5a.5.5 0 0 1 .128-.334L13.5 3.308V2z" />
                                            </svg>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <select class="form-select border-0" aria-label="Category select"
                                                    name="category_id">
                                                    <option value="" selected>{{ __('Category') }}</option>
                                                    @foreach ($categories as $category)
                                                        <option value="{{ $category->id }}">{{ $category->title }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="d-flex flex-row gap-1 text-nowrap align-items-center">
                                    <span>Sort by:</span>
                                    <select class="form-select border-0" aria-label="Category select" name="sort_by">
                                        <option value="" selected>{{ __('Created') }}</option>
                                        <option value="updated">{{ __('Updated') }}</option>
                                        <option value="name">{{ __('Name') }}</option>
                                        <option value="price">{{ __('Price') }}</option>
                                    </select>
                                    <label class="btn btn-outline-secondary" for="myCheckboxJS" id="checkboxLabel">
                                        <input class="btn-check" type="checkbox" id="myCheckboxJS" name="desc_sort">
                                        <div id="unchecked">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-arrow-up" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5" />
                                            </svg>
                                        </div>
                                        <div id="checked" hidden>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-arrow-down" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1" />
                                            </svg>
                                        </div>
                                    </label>
                                </div>
                            </x-form>
                            <div>
                                <a class="btn btn-primary" href="{{ route('product.create') }}">{{ __('Add') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        @if ($products->isEmpty())
                            {{ __('No one menu elements') }}
                        @else
                        @endif
                        <div class="list-group">
                            <div class="row row-cols-4 gy-3">
                                @foreach ($products as $product)
                                    <div class="col">
                                        <a href="{{ route('product.show', $product->id) }}"
                                            class="text-decoration-none text-black">
                                            <div class="card overflow-hidden">
                                                <img src="{{ asset('storage/product/images/' . $product->image) }}"
                                                    alt="image" width="100%">
                                                <div class="card-body">
                                                    <h5>{{ $product->name }}</h5>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center my-2">
                    {{ $products->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
@push('css')
    <link rel="stylesheet" href="{{ asset('/css/sortButton.css') }}">
@endpush
@push('js')
    <script src="{{ asset('/js/cleanEmptyGet.js') }} "></script>
@endpush
