@extends('layouts.common')
@section('title', 'Home Page')

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
                        <a href="{{ url('/menu_plat') }}" class="btn">Dashboard</a>
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

    <main>
        <section class="posts">
            <div class="container ">
                <div class="row my-4">
                    <div class="col-sm-12 col-md-6">
                        <img src="./images/picture-14.jpg" alt="picture image">
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <h3 class="title-post text-white mb-3">How to create a blog with laravel?</h3>
                        <span>
                            <span class="text-white font-weight-bold">By:</span> <span class="writer-name text-warning">Toufik Shima</span>
                            <p class="p-post text-white py-2">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Itaque voluptatum optio expedita magnam quisquam fugit
                                consectetur harum a nulla numquam tenetur dicta, repellat,
                                eligendi deleniti assumenda quo neque facere aperiam.
                                Itaque voluptatum optio expedita magnam quisquam fugit
                                consectetur harum a nulla numquam tenetur dicta, repellat,
                                eligendi deleniti assumenda quo neque facere aperiam.
                            </p>
                            <a href="#" class="btn">Read More</a>
                        </span>
                    </div>
                </div>
                <div class="row my-4">
                    <div class="col-sm-12 col-md-6">
                        <img src="./images/picture-11.jpg" alt="picture image">
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <h3 class="title-post text-white mb-3">How to create a blog with laravel?</h3>
                        <span>
                            <span class="text-white font-weight-bold">By:</span> <span class="writer-name text-warning">Toufik Shima</span>
                            <p class="p-post text-white py-2">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Itaque voluptatum optio expedita magnam quisquam fugit
                                consectetur harum a nulla numquam tenetur dicta, repellat,
                                eligendi deleniti assumenda quo neque facere aperiam.
                                Itaque voluptatum optio expedita magnam quisquam fugit
                                consectetur harum a nulla numquam tenetur dicta, repellat,
                                eligendi deleniti assumenda quo neque facere aperiam.
                            </p>
                            <a href="#" class="btn">Read More</a>
                        </span>
                    </div>
                </div>
                <div class="row my-4">
                    <div class="col-sm-12 col-md-6">
                        <img src="./images/picture-13.jpg" alt="picture image">
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <h3 class="title-post text-white mb-3">How to create a blog with laravel?</h3>
                        <span>
                            <span class="text-white font-weight-bold">By:</span> <span class="writer-name text-warning">Toufik Shima</span>
                            <p class="p-post text-white py-2">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Itaque voluptatum optio expedita magnam quisquam fugit
                                consectetur harum a nulla numquam tenetur dicta, repellat,
                                eligendi deleniti assumenda quo neque facere aperiam.
                                Itaque voluptatum optio expedita magnam quisquam fugit
                                consectetur harum a nulla numquam tenetur dicta, repellat,
                                eligendi deleniti assumenda quo neque facere aperiam.
                            </p>
                            <a href="#" class="btn">Read More</a>
                        </span>
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection
