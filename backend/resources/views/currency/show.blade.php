@extends('layouts.main')

@section('page.title', "{$currency->id}")

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="d-flex flex-row justify-content-between mb-3">
                    <div class="d-flex align-items-center">
                        <h4 class="m-0">{{ $currency->id }}</h4>
                    </div>
                    <div class="d-flex gap-2">
                        <a class="btn btn-primary" href="{{ route('currency.edit', $currency->id) }}">{{ __('Edit') }}</a>
                        <a class="btn btn-secondary" href="{{ route('currency') }}">{{ __('Back') }}</a>
                    </div>
                </div>
                <div>
                    <p>{{ __('Title:') }} {{ $currency->name }}</p>
                </div>
                <div>
                    <p>{{ __('Exchange rate:') }} {{ $currency->exchange_rate }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
