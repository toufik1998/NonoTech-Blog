@extends('layouts.common')
@section('title', 'create Page')

@section('content')
    <!--Start the navbar +-->
    <nav class="navbar navbar-expand-md navbar-light  fixed-top shadow" id="navbar-example">
        <div class="container-fluid">
        <button class="navbar-toggler bg-white mb-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon bg-white"></span>
        </button>
        <a class="navbar-brand" href="#">NanoTech</a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item ">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#menu">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#contact">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/blog">Users Articles</a>
                </li>
            </ul>

            <!-- toggling button -->
            @if (Route::has('login'))
                <div class="">
                    @auth

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <a href="{{route('logout')}}" onclick="event.preventDefault();
                        this.closest('form').submit();" class="btn"> {{ __('Log Out') }}</a>

                    </form>

                    @else
                        <a href="{{ route('login') }}" class="btn">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn mx-3">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

        </div>
        </div>
    </nav>
    <!--Start the navbar-->

    <header id="home">
        <div class="header-title">
            <p class="p-one">NanoTech Blog</p>
            <p class="p-two">The Best Blog For You</p>
            <p class="p-three">All Articles</p>
        </div>
    </header>

    

@endsection
