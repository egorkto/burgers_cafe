@extends('layouts.main')

@section('page.title', "{$product->name}")

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="d-flex justify-content-between mb-3">
                    <div>
                        <h4>{{ $product->name }}</h4>
                    </div>
                    <div class="d-flex gap-2">
                        <a class="btn btn-primary" href="{{ route('product.edit', $product->id) }}">{{ __('Edit') }}</a>
                        <a class="btn btn-secondary" href="{{ url()->previous() }}">{{ __('Back') }}</a>
                    </div>
                </div>
                <div class="d-inline-block justify-content-center px-3 border border-black rounded-pill mb-2">
                    @if ($category)
                        <span>{{ $category->title }}</span>
                    @else
                        <span>No category</span>
                    @endif
                </div>
                <div class="mb-1">
                    <img src="{{ asset('storage/product/images/' . $product->image) }}" alt="image" width="100%">
                </div>
                <div>
                    <h4 class="fw-bold">{{ $product->price }} {{ __('RUB') }}</h4>
                </div>
                <div>
                    {{ $product->description }}
                </div>
            </div>
        </div>
    </div>
@endsection
