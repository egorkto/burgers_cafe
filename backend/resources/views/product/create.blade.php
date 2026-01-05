@extends('layouts.main')

@section('page.title', 'Create')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-4">
                <div class="d-flex justify-content-between">
                    <div>
                        <h4>{{ __('Creating') }}</h4>
                    </div>
                    <div>
                        <a class="btn btn-secondary" href="{{ route('product') }}">{{ __('Back') }}</a>
                    </div>
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger small p-2">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <x-form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                    <x-form-item>
                        <label>{{ __('Enter name:') }}</label>
                        <input class="form-control" name="name" type="text">
                    </x-form-item>
                    <x-form-item>
                        <label for="image" class="form-label">{{ __('Upload image') }}</label>
                        <input class="form-control" type="file" id="image" name="image">
                    </x-form-item>
                    <x-form-item>
                        <label>{{ __('Enter description:') }}</label>
                        <x-textarea name="description" rows="3"></x-textarea>
                    </x-form-item>
                    <x-form-item>
                        <label>{{ __('Enter price:') }}</label>
                        <input class="form-control w-50" name="price" type="number">
                    </x-form-item>
                    <button class="btn btn-primary" type='submit'>{{ __('Create') }}</button>
                </x-form>
            </div>
        </div>
    </div>
@endsection
