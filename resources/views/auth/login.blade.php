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

    <main>
        <div class="container py-0 vh-100">
          <div class="row d-flex align-items-center justify-content-center h-100">
            <div class="col-md-8 col-lg-7 col-xl-6">
              <img src={{url('images/login.png')}} alt="login" class="img-fluid">
            </div>
            <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mb-4">
                            <label for="email" class="form-label ">Address email</label>
                            <input type="email" name="email" :value="old('email')" id="email" class="form-control form-control-lg" required>
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                        <div class="mb-4">
                            <label for="password" class="form-label ">Password</label>
                            <input type="password" id="password" type="password" name="password" class="form-control form-control-lg" required>
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>
                        <div class="form-check mb-4">
                            <label for="remember" class="form-check-label ">Remember me</label>
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
                    <p class="mb-0">If you don't have an account</p>
                    <a href="{{ route('register') }}" class="ms-3">Create a new account</a>
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


    {{-- <main class="my-4">
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
    </main> --}}
@endsection

