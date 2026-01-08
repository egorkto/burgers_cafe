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
                        <a class="btn btn-secondary" href="{{ route('product.show', $product->id) }}">{{ __('Back') }}</a>
                    </div>
                </div>
                <x-form action="{{ route('product.update', $product->id) }}" method="PUT" enctype="multipart/form-data"
                    id="edit_form">
                    <x-form-item>
                        <label>{{ __('Enter name:') }}</label>
                        <input class="form-control" name="name" type="text" value="{{ $product->name }}">
                        <x-form-input-error name="name" />
                    </x-form-item>
                    <x-form-item>
                        @livewire('react-image-choice', ['imageFileName' => $product->image, 'field' => 'image'])
                        <x-form-input-error name="image" />
                    </x-form-item>
                    <x-form-item>
                        <label>{{ __('Enter description:') }}</label>
                        <x-textarea name="description" rows="3">{{ $product->description }}</x-textarea>
                        <x-form-input-error name="description" />
                    </x-form-item>
                    <x-form-item>
                        <label>{{ __('Enter price:') }}</label>
                        <input class="form-control w-50" name="price" type="number" value="{{ $product->price }}">
                        <x-form-input-error name="price" />
                    </x-form-item>
                    <x-form-item>
                        <label>{{ __('Select category:') }}</label>
                        <select class="form-select" aria-label="Category select" name="category_id">
                            <option value="" @selected($product->category == null)>
                                {{ __('None') }}
                            </option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" @selected(isset($product->category) && $product->category->id == $category->id)>
                                    {{ $category->title }}
                                </option>
                            @endforeach
                        </select>
                    </x-form-item>
                </x-form>
                <x-form action="{{ route('product.delete', $product->id) }}" method="DELETE" id="delete_form">
                </x-form>
                <div class="d-flex flex-row justify-content-between">
                    <button class="btn btn-primary" type='submit' form="edit_form">{{ __('Update') }}</button>
                    <button class="btn btn-danger" type='submit' form="delete_form">{{ __('Delete') }}</button>
                </div>
            </div>
        </div>
    </div>
@endsection
