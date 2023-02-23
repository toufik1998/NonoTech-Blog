{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}


@extends('layouts.common')
@section('title', 'Register Page')

    <main class="my-4">
        <div class="container py-5 vh-100">
        <div class="row d-flex align-items-center justify-content-center h-100">

            <div class="col-md-8 col-lg-7 col-xl-6">
            <img src="images/sign_foto.png" alt="login" class="img-fluid">
            </div>
            <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
            <form  method="POST" action="{{ route('register') }}">
                @csrf
                <div class="mb-4">
                    <label for="username" class="form-label text-white">User name </label>
                    <input type="text" id="name" name="name" class="form-control form-control-lg" :value="old('name')" required>
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>
                <div class="mb-4">
                    <label for="email" class="form-label text-white"> Address email</label>
                    <input type="email" id="email" name="email" class="form-control form-control-lg" :value="old('email')" required>
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />

                </div>
                <div class="mb-4">
                    <label for="password" class="form-label text-white"> Password</label>
                    <input type="password" id="password" name="password" class="form-control form-control-lg" required>
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />

                </div>
                <div class="mb-4">

                    <label for="password_confirmation" class="form-label text-white"> Confirm Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" class="form-control form-control-lg" required>
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />

                </div>
                <button type="submit" class="btn button"> Creat account</button>
            </form>
            <div class="d-flex mt-4">
                <p class="mb-0 text-white">If you have an account</p>
                <a  href="{{ route('login') }}" class="ms-3">Login</a>
            </div>
            <div class="d-flex mt-4">
                <p class="fw-bold mx-3 mb-0 text-white">
                 Or you can login with
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


@section('content')

@endsection
