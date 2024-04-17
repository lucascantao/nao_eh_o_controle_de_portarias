@extends('guest')
@section('title', 'portarias')
@section('authentication')
<div id="authentication_form" class="d-flex flex-column align-items-center p-4 bg-white">
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div class="mt-2">
            <label for="email">Email</label>
            <input id="email" class="mt-1 form-control" type="email" name="email" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-2">
            <label for="password">Senha</label>
            <input id="password" class="mt-1 form-control" type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4 d-flex justify-content-between">
            <div for="remember_me" class="form-check">
                <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
                <label class="form-check-label">Lembrar login</label>
            </div>
            @if (Route::has('password.request'))
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                {{ __('Forgot your password?') }}
            </a>
        @endif
        </div>

        <div class="d-flex items-center justify-end mt-4">
            <button type="submit" class="btn btn-success">
                Entrar
            </button>
        </div>
    </form>
</div>
@endsection
