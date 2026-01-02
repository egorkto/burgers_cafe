@extends('layouts.login')

@section('page.title', 'login')

@section('content')
    <div class="row justify-content-center">
        <div class="col-4">
            <x-form action="{{ route('login.attempt') }}" method="POST">
                <x-form-item>
                    <label>{{ __('Enter email') }}</label>
                    <input class="form-control" name="email" type="email">
                </x-form-item>
                <x-form-item>
                    <label>
                        {{ __('Enter password') }}
                    </label>
                    <input class="form-control" name="password" type="password">
                </x-form-item>
                <x-form-item class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" value="1" id="remember">
                    <label class="form-check-label" for="remember">
                        {{ __('Remember me') }}
                    </label>
                </x-form-item>
                <button class="btn btn-primary" type='submit'>{{ __('Login') }}</button>
            </x-form>
        </div>
    </div>
@endsection
