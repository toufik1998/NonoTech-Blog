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
                            <a href="{{ url('/dashboard') }}" class="btn">Dashboard</a>
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
            <p class="p-one">YouCode Plat</p>
            <p class="p-two">The Best Plats Menu</p>
            <p class="p-three">For Youcoders</p>
        </div>
    </header>

    <main>
        <section class="about text-center" id="about">
            <p class="sections-title">About</p>
            <p class="about-text">
                Toufik Shima frontend developer
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Toufik Shima frontend developer
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            </p>
        </section>

        <section class="categories mb-4" id="posts">
            <p class="sections-title text-center">Last Posts</p>
            <div class="web-category mb-5 ">
                <div class="container">
                    <p class="text-warning">Last posts in web developement <i class="fa-solid fa-turn-down mx-2" style="color: #ff8906;"></i></p>

                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-3">
                            <div class="card mb-3" style="width: 100%;">
                                <img src="./images/post-img1.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h6 class="card-title">Card title</h6>
                                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.
                                    Some quick example text to build.
                                  </p>
                                  <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3">
                            <div class="card mb-3" style="width: 100%;">
                                <img src="./images/post-img2.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h6 class="card-title">Card title</h6>
                                  <p class="card-text">Some quick example text to Some quick example text to build. build on the card title and make up the bulk of the card's content.</p>
                                  <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3">
                            <div class="card mb-3" style="width: 100%;">
                                <img src="./images/post-img3.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h6 class="card-title">Card title</h6>
                                  <p class="card-text">Some quick example Some quick example text to build. text to build on the card title and make up the bulk of the card's content.</p>
                                  <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3">
                            <div class="card mb-3" style="width: 100%;">
                                <img src="./images/post-img1.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h6 class="card-title">Card title</h6>
                                  <p class="card-text">Some quick example Some quick example text to build. text to build on the card title and make up the bulk of the card's content.</p>
                                  <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mobile-category mb-5">
                <div class="container">
                    <p class="text-warning">Last Posts in mobile app developement <i class="fa-solid fa-turn-down mx-2" style="color: #ff8906;"></i></p>

                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-3">
                            <div class="card mb-3" style="width: 100%;">
                                <img src="./images/post-img1.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h6 class="card-title">Card title</h6>
                                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.
                                    Some quick example text to build.
                                  </p>
                                  <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3">
                            <div class="card mb-3" style="width: 100%;">
                                <img src="./images/post-img2.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h6 class="card-title">Card title</h6>
                                  <p class="card-text">Some quick example text to Some quick example text to build. build on the card title and make up the bulk of the card's content.</p>
                                  <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3">
                            <div class="card mb-3" style="width: 100%;">
                                <img src="./images/post-img3.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h6 class="card-title">Card title</h6>
                                  <p class="card-text">Some quick example Some quick example text to build. text to build on the card title and make up the bulk of the card's content.</p>
                                  <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3">
                            <div class="card mb-3" style="width: 100%;">
                                <img src="./images/post-img1.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h6 class="card-title">Card title</h6>
                                  <p class="card-text">Some quick example Some quick example text to build. text to build on the card title and make up the bulk of the card's content.</p>
                                  <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="desktop-category mb-5">
                <div class="container">
                    <p class="text-warning">Last posts in desktop app <i class="fa-solid fa-turn-down mx-2" style="color: #ff8906;"></i></p>

                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-3">
                            <div class="card mb-3" style="width: 100%;">
                                <img src="./images/post-img1.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h6 class="card-title">Card title</h6>
                                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.
                                    Some quick example text to build.
                                  </p>
                                  <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3">
                            <div class="card mb-3" style="width: 100%;">
                                <img src="./images/post-img2.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h6 class="card-title">Card title</h6>
                                  <p class="card-text">Some quick example text to Some quick example text to build. build on the card title and make up the bulk of the card's content.</p>
                                  <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3">
                            <div class="card mb-3" style="width: 100%;">
                                <img src="./images/post-img3.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h6 class="card-title">Card title</h6>
                                  <p class="card-text">Some quick example Some quick example text to build. text to build on the card title and make up the bulk of the card's content.</p>
                                  <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3">
                            <div class="card mb-3" style="width: 100%;">
                                <img src="./images/post-img1.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h6 class="card-title">Card title</h6>
                                  <p class="card-text">Some quick example Some quick example text to build. text to build on the card title and make up the bulk of the card's content.</p>
                                  <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </section>
    </main>


@endsection
