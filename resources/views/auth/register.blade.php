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

    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container">
            <a class="navbar-brand" href="#">NanoTech</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Technology</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Economy</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Sport</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Science</a>
            </li>

            </ul>


            @if (Route::has('login'))
                <div class="">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="btn">Dashboard</a>
                    @else
                        {{-- <a href="{{ route('login') }}" class="btn">Log in</a> --}}
                        <div class="login">
                            <i class="fa-solid fa-user"></i>
                            <div class="login-container">
                                <a href="{{ route('login') }}" class="button">Sign In</a>
                            </div>
                        </div>

                        <div class="login-button">
                            <a href="{{ route('login') }}" class="button">Sign In</a>
                        </div>

                        {{-- @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn mx-3">Register</a>
                        @endif --}}
                    @endauth
                </div>
            @endif

            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <a href="./search.html" class="search-icon"><i class="fa-solid fa-magnifying-glass"></i></a>
            </form>
            </div>
            </div>
        </nav>
    </header>

    <main class="my-5">
        <div class="container py-0 vh-100">
          <div class="row d-flex align-items-center justify-content-center h-100">
            <div class="col-md-8 col-lg-7 col-xl-6">
              <img src={{url('images/login.png')}} alt="login" class="img-fluid">
            </div>
            <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
              <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="mb-4">
                    <label for="username" class="form-label">User name </label>
                    <input type="text" id="name" name="name" class="form-control form-control-lg" :value="old('name')" required>
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>
                <div class="mb-4">
                    <label for="email" class="form-label"> Address email</label>
                    <input type="email" id="email" name="email" class="form-control form-control-lg" :value="old('email')" required>
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
                <div class="mb-4">
                    <label for="password" class="form-label"> Password</label>
                    <input type="password" id="password" name="password" class="form-control form-control-lg" required>
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />

                </div>
                <div class="mb-4">

                    <label for="password_confirmation" class="form-label"> Confirm Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" class="form-control form-control-lg" required>
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />

                </div>
                <button type="submit" class="btn button"> Creat account</button>
              </form>
              <div class="d-flex mt-4">
                <p class="mb-0">If you have an account</p>
                <a href="{{ route('login') }}" class="ms-3">Login</a>
              </div>
              <div class="d-flex mt-4">
                <p class="fw-bold mx-3 mb-0 text-muted">
                  Or you can login with
                </p>
              </div>
              <div class="social-media-login">
                <a href="#" class="btn login-button" role="button">
                  <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#" class="btn login-button" role="button">
                  <i class="fab fa-twitter"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
    </main>




@section('content')

@endsection
