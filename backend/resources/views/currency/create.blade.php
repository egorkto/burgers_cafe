@extends('layouts.main')

@section('page.title', 'Create')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="d-flex justify-content-between">
                    <div>
                        <h4>{{ __('Creating') }}</h4>
                    </div>
                    <div>
                        <a class="btn btn-secondary" href="{{ route('currency') }}">{{ __('Back') }}</a>
                    </div>
                </div>
                <x-form action="{{ route('currency.store') }}" method="POST" enctype="multipart/form-data">
                    <x-form-item>
                        <label>{{ __('Enter id:') }}</label>
                        <input class="form-control" name="id" type="text" value="{{ old('id') }}">
                        <x-form-input-error name="id" />
                    </x-form-item>
                    <x-form-item>
                        <label>{{ __('Enter name:') }}</label>
                        <input class="form-control" name="name" type="text" value="{{ old('name') }}">
                        <x-form-input-error name="name" />
                    </x-form-item>
                    <x-form-item>
                        <label>{{ __('Enter exchange rate:') }}</label>
                        <input class="form-control w-50" name="exchange_rate" type="number"
                            value="{{ old('exchange_rate') }}">
                        <x-form-input-error name="exchange_rate" />
                    </x-form-item>
                    <button class="btn btn-primary" type='submit'>{{ __('Create') }}</button>
                </x-form>
            </div>
        </div>
    </div>
@endsection
