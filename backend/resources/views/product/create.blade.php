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
                        <a class="btn btn-secondary" href="{{ route('product') }}">{{ __('Back') }}</a>
                    </div>
                </div>
                <x-form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                    <x-form-item>
                        <label>{{ __('Enter name:') }}</label>
                        <input class="form-control" name="name" type="text" value="{{ old('name') }}">
                        <x-form-input-error name="name" />
                    </x-form-item>
                    <x-form-item>
                        @livewire('react-image-choice', ['imageFileName' => '', 'field' => 'image'])
                        <x-form-input-error name="image" />
                    </x-form-item>
                    <x-form-item>
                        <label>{{ __('Enter description:') }}</label>
                        <x-textarea name="description" rows="3">{{ old('description') }}</x-textarea>
                        <x-form-input-error name="description" />
                    </x-form-item>
                    <x-form-item>
                        <label>{{ __('Enter price:') }}</label>
                        <input class="form-control w-50" name="price" type="number" value="{{ old('price') }}">
                        <x-form-input-error name="price" />
                    </x-form-item>
                    <x-form-item>
                        <label>{{ __('Select category:') }}</label>
                        <select class="form-select" aria-label="Category select" name="category_id">
                            <option value="" selected>{{ __('None') }}</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->title }}</option>
                            @endforeach
                        </select>
                    </x-form-item>
                    <button class="btn btn-primary" type='submit'>{{ __('Create') }}</button>
                </x-form>
            </div>
        </div>
    </div>
@endsection
