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
                        <a class="btn btn-secondary" href="{{ route('category') }}">{{ __('Back') }}</a>
                    </div>
                </div>
                <x-form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
                    <x-form-item>
                        <label>{{ __('Enter title:') }}</label>
                        <input class="form-control" name="title" type="text" value="{{ old('title') }}">
                        <x-form-input-error name="title" />
                    </x-form-item>
                    <button class="btn btn-primary" type='submit'>{{ __('Create') }}</button>
                </x-form>
            </div>
        </div>
    </div>
@endsection
