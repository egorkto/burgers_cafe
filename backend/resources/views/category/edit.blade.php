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
                            href="{{ route('category.show', $category->id) }}">{{ __('Back') }}</a>
                    </div>
                </div>
                <x-form action="{{ route('category.update', $category->id) }}" method="PUT" enctype="multipart/form-data"
                    id="edit_form">
                    <x-form-item>
                        <label>{{ __('Enter title:') }}</label>
                        <input class="form-control" name="title" type="text" value="{{ $category->title }}">
                        <x-form-input-error name="title" />
                    </x-form-item>
                </x-form>
                <x-form action="{{ route('category.delete', $category->id) }}" method="DELETE" id="delete_form">
                </x-form>
                <div class="d-flex flex-row justify-content-between">
                    <button class="btn btn-primary" type='submit' form="edit_form">{{ __('Update') }}</button>
                    <button class="btn btn-danger" type='submit' form="delete_form">{{ __('Delete') }}</button>
                </div>
            </div>
        </div>
    </div>
@endsection
