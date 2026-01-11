@extends('layouts.main')

@section('page.title', 'User requests')

@section('content')
    <div class="container">
        <h4>{{ __('Requests') }}</h4>
        <div class="row d-flex justify-content-center">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex flex-row justify-content-between">
                            <x-form action="{{ route('user-request') }}" method='GET' class="d-flex form-inline gap-3">
                                <x-search name="search" />
                                <x-sort>
                                    <x-sort-option>{{ __('Date') }}</x-sort-option>
                                    <x-sort-option value="name">{{ __('Name') }}</x-sort-option>
                                    <x-sort-option value="message">{{ __('Message') }}</x-sort-option>
                                </x-sort>
                            </x-form>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="list-group">
                            @foreach ($requests as $request)
                                <a href="{{ route('user-request.show', $request->id) }}"
                                    class="list-group-item list-group-item-action">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">{{ $request->name }}</h5>
                                        <small
                                            class="text-body-secondary">{{ $request->created_at->diffForHumans() }}</small>
                                    </div>
                                    <p class="text-truncate mb-1">{{ $request->message }}</p>
                                </a>
                            @endforeach
                        </div>
                        @if ($requests->isEmpty())
                            {{ __('No one menu elements') }}
                        @else
                        @endif
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center my-2">
                {{ $requests->links() }}
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
