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
                                <x-search name="search" />
                                <x-filter-dropdown :categories="$categories" inputName="category_ids[]"></x-filter-dropdown>
                                <x-sort>
                                    <x-sort-option>{{ __('Created') }}</x-sort-option>
                                    <x-sort-option value="updated">{{ __('Updated') }}</x-sort-option>
                                    <x-sort-option value="name">{{ __('Name') }}</x-sort-option>
                                    <x-sort-option value="price">{{ __('Price') }}</x-sort-option>
                                </x-sort>
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
    <script src="{{ asset('/js/changeCheckboxImage.js') }}"></script>
@endpush
