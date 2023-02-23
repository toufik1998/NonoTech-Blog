{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}


@extends('layouts.common')
@section('title', 'Login Page')

@section('content')
    <main class="my-4">
        <div class="container py-5 vh-100">
        <div class="row d-flex align-items-center justify-content-center h-100">
            <div class="col-md-8 col-lg-7 col-xl-6">
            <img src={{url('images/sign_foto.png')}} alt="login" class="img-fluid">
            </div>

            <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                <x-auth-session-status class="mb-4" :status="session('status')" />
                <form  method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-4">
                        <label for="email" class="form-label text-white">Address email</label>
                        <input type="email" name="email" :value="old('email')" id="email" class="form-control form-control-lg" required>
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                    <div class="mb-4">
                        <label for="password" class="form-label text-white">Password</label>
                        <input type="password" id="password" type="password" name="password" class="form-control form-control-lg" required>
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
                    <div class="form-check mb-4">
                        <label for="remember" class="form-check-label text-white">Remember me</label>
                        <input type="checkbox" name="remember" id="remember" class="form-check-input">
                    </div>

                    <button type="submit" class="btn button me-5">Login</button>
                    @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                    @endif

                </form>
            <div class="d-flex mt-4">
                <p class="mb-0 text-white">If you dont' have an account</p>
                <a href="signup.html" class="ms-3">Create new account</a>
            </div>
            <div class="d-flex mt-4">
                <p class="fw-bold mx-3 mb-0  text-white">
                You can login with
                </p>
            </div>
            <div class="social-media-login">
                <a href="#" class="btn login-buttons" role="button">
                <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#" class="btn login-buttons" role="button">
                <i class="fab fa-twitter"></i>
                </a>
            </div>
            </div>


        </div>
        </div>
    </main>
@endsection

