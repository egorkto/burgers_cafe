@extends('layouts.main')

@section('page.title', "Request from {$request->name}")

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="d-flex justify-content-between mb-3">
                    <div>
                        <h4>{{ $request->name }}</h4>
                    </div>
                    <div class="d-flex gap-2">
                        <a class="btn btn-secondary" href="{{ url()->previous() }}">{{ __('Back') }}</a>
                        <x-form action="{{ route('user-request.delete', $request->id) }}" method="DELETE">
                            <button class="btn btn-danger" type='submit'>{{ __('Delete') }}</button>
                        </x-form>
                    </div>
                </div>
                <div>
                    <h6>{{ $request->message }} {{ __('RUB') }}</h6>
                </div>
                <div>
                    <h4>Contacts</h4>
                    <div>
                        @if (isset($request->email))
                            <p>{{ $request->email }}</p>
                        @endif
                        @if (isset($request->phone_number))
                            <p>{{ $request->phone_number }}</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
