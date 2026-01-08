@extends('layouts.main')

@section('page.title', 'Edit')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="d-flex justify-content-between">
                    <div>
                        <h4>{{ __('Editing') }}</h4>
                    </div>
                    <div>
                        <a class="btn btn-secondary"
                            href="{{ route('currency.show', $currency->id) }}">{{ __('Back') }}</a>
                    </div>
                </div>
                <x-form action="{{ route('currency.update', $currency->id) }}" method="PUT" enctype="multipart/form-data"
                    id="edit_form">
                    <x-form-item>
                        <label>{{ __('Enter id:') }}</label>
                        <input class="form-control" name="id" type="text" value="{{ $currency->id }}">
                        <x-form-input-error name="id" />
                    </x-form-item>
                    <x-form-item>
                        <label>{{ __('Enter name:') }}</label>
                        <input class="form-control" name="name" type="text" value="{{ $currency->name }}">
                        <x-form-input-error name="name" />
                    </x-form-item>
                    <x-form-item>
                        <label>{{ __('Enter exchange rate:') }}</label>
                        <input class="form-control" name="rate" type="number" value="{{ $currency->exchange_rate }}">
                        <x-form-input-error name="rate" />
                    </x-form-item>
                </x-form>
                <x-form action="{{ route('currency.delete', $currency->id) }}" method="DELETE" id="delete_form">
                </x-form>
                <div class="d-flex flex-row justify-content-between">
                    <button class="btn btn-primary" type='submit' form="edit_form">{{ __('Update') }}</button>
                    <button class="btn btn-danger" type='submit' form="delete_form">{{ __('Delete') }}</button>
                </div>
            </div>
        </div>
    </div>
@endsection
