@extends('layouts.common')
@section('title', 'Home Page')



@section('content')

    {{-- <!--Start the navbar +-->
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
    <!--Start the navbar--> --}}

    {{-- <header>
        <div class="header-title">
            <p class="p-one">YouCode Plat</p>
            <p class="p-two">The Best Plats Menu</p>
            <p class="p-three">For Youcoders</p>
        </div>

    </header> --}}


    {{-- <main>
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
    </main> --}}

    <header>
        <nav class="navbar navbar-expand-lg fixed-top" id="navbar">
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
                <a class="nav-link" href="#web">Web</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#mobile">Mobile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#desktop">Desktop</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#game">Game</a>
            </li>

            </ul>


            @if (Route::has('login'))
                <div class="">
                    @auth
                        @if(Auth::user()->is_admin == 1)
                            <a href="{{ url('/adminboard') }}" class="btn">Dashboard</a>
                        @else
                            <a href="{{ url('/blog') }}" class="btn">Dashboard</a>
                        @endif
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

            <form class="d-flex" role="search" action="{{ route('home.search') }}" method="POST" >
                @csrf
                <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search">
                <button type="submit" class="search-icon">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
                {{-- <a href="./search.html"  class="search-icon"><i class="fa-solid fa-magnifying-glass"></i></a> --}}
            </form>
            </div>
            </div>
        </nav>

        <div class="header-news">
            <div class="container">
              <div class="row">
                <div class="col-lg-7">
                  <div class="carousel-news">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                      <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1">1</button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2">2</button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3">3</button>
                      </div>
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <a href="article.html">
                            <img src="./images/picture-1.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-text">
                              <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h3>
                            </div>
                          </a>
                        </div>
                        <div class="carousel-item">
                          <a href="article.html">
                            <img src="./images/picture-4.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-text">
                                <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h3>
                            </div>
                          </a>
                        </div>
                        <div class="carousel-item">
                          <a href="article.html">
                            <img src="./images/picture-7.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-text">
                                <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h3>
                            </div>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-5">
                  <div class="header-articles">
                    {{-- <a href="article.html" class="article-link">
                      <div class="row">
                        <div class="col-5">
                          <img src="./images/picture-12.jpg" alt="...">
                        </div>
                        <div class="col-7">
                          <div class="article-text">
                            <span class="article-category">
                              News
                            </span>
                            <h5 class="article-title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid deserunt dolores ipsa, repudiandae adipisci vel.</h5>
                          </div>
                        </div>
                      </div>
                    </a>
                    <a href="article.html" class="article-link">
                      <div class="row">
                        <div class="col-5">
                          <img src="./images/picture-13.jpg" alt="...">
                        </div>
                        <div class="col-7">
                          <div class="article-text">
                            <span class="article-category">
                              News
                            </span>
                            <h5 class="article-title">Lorem ipsum dolor sit amet consectetur adipisicing elit, Aliquid deserunt dolores ipsa, repudiandae adipisci vel.</h5>
                          </div>
                        </div>
                      </div>
                    </a>
                    <a href="article.html" class="article-link">
                      <div class="row">
                        <div class="col-5">
                          <img src="./images/picture-11.jpg" alt="...">
                        </div>
                        <div class="col-7">
                          <div class="article-text">
                            <span class="article-category">
                              News
                            </span>
                            <h5 class="article-title">Lorem ipsum dolor sit amet consectetur adipisicing eliT, Aliquid deserunt dolores ipsa, repudiandae adipisci vel.</h5>
                          </div>
                        </div>
                      </div>
                    </a> --}}

                    @foreach ($previousthreeRows as $item)
                    {{-- <a href="/blog/{{$post->slug}}" class="btn">Read More</a> --}}
                        <a href="/home/{{$item->id}}" class="article-link" >
                            <div class="row">
                            <div class="col-5">
                                <img src="../../images/{{$item->image_path}}" alt="...">
                            </div>
                            <div class="col-7">
                                <div class="article-text">
                                <span class="article-category">
                                    {{$item->category->category}}
                                </span>
                                <h5 class="article-title">
                                    {{-- Lorem ipsum dolor sit amet consectetur adipisicing eliT, Aliquid deserunt dolores ipsa, repudiandae adipisci vel. --}}
                                    {{$item->title}}
                                </h5>
                                </div>
                            </div>
                            </div>
                        </a>
                    @endforeach
                  </div>
                </div>
              </div>
            </div>
        </div>
    </header>

    <main>

        <section class="news">
            <div class="container">
              <h2 class="section-title">
                Top Articles
              </h2>
              {{-- <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 mt-4">
                    <a href="./article.html" class="article-link">
                      <img src="./images/picture-13.jpg" alt="...">
                      <div class="article-text mt-3">
                        <span class="article-category">
                          Economy
                        </span>
                        <h5 class="article-title">
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, sit vero? Perferendis praesentium consectetur.
                        </h5>
                      </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mt-4">
                    <a href="./article.html" class="article-link">
                      <img src="./images/picture-13.jpg" alt="...">
                      <div class="article-text mt-3">
                        <span class="article-category">
                          Economy
                        </span>
                        <h5 class="article-title">
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, sit vero? Perferendis praesentium consectetur.
                        </h5>
                      </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mt-4">
                    <a href="./article.html" class="article-link">
                      <img src="./images/picture-13.jpg" alt="...">
                      <div class="article-text mt-3">
                        <span class="article-category">
                          Economy
                        </span>
                        <h5 class="article-title">
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, sit vero? Perferendis praesentium consectetur.
                        </h5>
                      </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mt-4">
                    <a href="./article.html" class="article-link">
                      <img src="./images/picture-13.jpg" alt="...">
                      <div class="article-text mt-3">
                        <span class="article-category">
                          Economy
                        </span>
                        <h5 class="article-title">
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, sit vero? Perferendis praesentium consectetur.
                        </h5>
                      </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mt-4">
                    <a href="./article.html" class="article-link">
                      <img src="./images/picture-13.jpg" alt="...">
                      <div class="article-text mt-3">
                        <span class="article-category">
                          Economy
                        </span>
                        <h5 class="article-title">
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, sit vero? Perferendis praesentium consectetur.
                        </h5>
                      </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mt-4">
                    <a href="./article.html" class="article-link">
                      <img src="./images/picture-13.jpg" alt="...">
                      <div class="article-text mt-3">
                        <span class="article-category">
                          Economy
                        </span>
                        <h5 class="article-title">
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, sit vero? Perferendis praesentium consectetur.
                        </h5>
                      </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mt-4">
                    <a href="./article.html" class="article-link">
                      <img src="./images/picture-13.jpg" alt="...">
                      <div class="article-text mt-3">
                        <span class="article-category">
                          Economy
                        </span>
                        <h5 class="article-title">
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, sit vero? Perferendis praesentium consectetur.
                        </h5>
                      </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mt-4">
                  <a href="./article.html" class="article-link">
                    <img src="./images/picture-13.jpg" alt="...">
                    <div class="article-text mt-3">
                      <span class="article-category">
                        Economy
                      </span>
                      <h5 class="article-title">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, sit vero? Perferendis praesentium consectetur.
                      </h5>
                    </div>
                  </a>
                </div>
              </div> --}}
            <div class="row">
                @foreach ($random_posts as $item)
                    <div class="col-lg-3 col-md-4 col-sm-6 mt-4">
                        <a href="/home/{{$item->id}}" class="article-link">
                        <img src="../../images/{{$item->image_path}}" alt="..." class="img-fluid" style="width: 100%; height: 170px">
                        <div class="article-text mt-3">
                            <span class="article-category">
                                {{$item->category->category}}
                            </span>
                            <h5 class="article-title">
                            {{-- Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, sit vero? Perferendis praesentium consectetur. --}}
                                {{$item->title}}
                            </h5>
                        </div>
                        </a>
                    </div>
                @endforeach
            </div>

              <div class="text-center mt-5">
                <a href="#" class="btn button">
                  More
                </a>
              </div>
            </div>
        </section>

        <section class="news" id="web">
            <div class="container">
              <h2 class="section-title">
                Top Articles Web
              </h2>
              {{-- <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 mt-4">
                    <a href="./article.html" class="article-link">
                      <img src="./images/picture-13.jpg" alt="...">
                      <div class="article-text mt-3">
                        <span class="article-category">
                          Economy
                        </span>
                        <h5 class="article-title">
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, sit vero? Perferendis praesentium consectetur.
                        </h5>
                      </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mt-4">
                    <a href="./article.html" class="article-link">
                      <img src="./images/picture-13.jpg" alt="...">
                      <div class="article-text mt-3">
                        <span class="article-category">
                          Economy
                        </span>
                        <h5 class="article-title">
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, sit vero? Perferendis praesentium consectetur.
                        </h5>
                      </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mt-4">
                    <a href="./article.html" class="article-link">
                      <img src="./images/picture-13.jpg" alt="...">
                      <div class="article-text mt-3">
                        <span class="article-category">
                          Economy
                        </span>
                        <h5 class="article-title">
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, sit vero? Perferendis praesentium consectetur.
                        </h5>
                      </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mt-4">
                    <a href="./article.html" class="article-link">
                      <img src="./images/picture-13.jpg" alt="...">
                      <div class="article-text mt-3">
                        <span class="article-category">
                          Economy
                        </span>
                        <h5 class="article-title">
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, sit vero? Perferendis praesentium consectetur.
                        </h5>
                      </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mt-4">
                    <a href="./article.html" class="article-link">
                      <img src="./images/picture-13.jpg" alt="...">
                      <div class="article-text mt-3">
                        <span class="article-category">
                          Economy
                        </span>
                        <h5 class="article-title">
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, sit vero? Perferendis praesentium consectetur.
                        </h5>
                      </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mt-4">
                    <a href="./article.html" class="article-link">
                      <img src="./images/picture-13.jpg" alt="...">
                      <div class="article-text mt-3">
                        <span class="article-category">
                          Economy
                        </span>
                        <h5 class="article-title">
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, sit vero? Perferendis praesentium consectetur.
                        </h5>
                      </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mt-4">
                    <a href="./article.html" class="article-link">
                      <img src="./images/picture-13.jpg" alt="...">
                      <div class="article-text mt-3">
                        <span class="article-category">
                          Economy
                        </span>
                        <h5 class="article-title">
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, sit vero? Perferendis praesentium consectetur.
                        </h5>
                      </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mt-4">
                  <a href="./article.html" class="article-link">
                    <img src="./images/picture-13.jpg" alt="...">
                    <div class="article-text mt-3">
                      <span class="article-category">
                        Economy
                      </span>
                      <h5 class="article-title">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, sit vero? Perferendis praesentium consectetur.
                      </h5>
                    </div>
                  </a>
                </div>
              </div> --}}

                <div class="owl-carousel owl-theme">

                    @foreach ($all_posts as $item)
                        @foreach ($all_categories as $category)

                            @if ($item->category_id == $category->id && $item->category->category == 'Web')
                                <div class="item">
                                    <div>
                                        <a href="/home/{{$item->id}}" class="article-link">
                                            <img src="../../images/{{$item->image_path}}" alt="..." class="img-fluid" style="width: 100%; height: 170px">
                                            <div class="article-text mt-3">
                                                <span class="article-category">
                                                    {{$item->category->category}}
                                                </span>
                                                <h5 class="article-title">
                                                    {{-- Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, sit vero? Perferendis praesentium consectetur. --}}
                                                    {{$item->title}}
                                                </h5>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            @endif

                        @endforeach
                    @endforeach

                </div>

                <div class="text-center mt-5">
                    <a href="#" class="btn button">
                      More
                    </a>
                </div>
            </div>
        </section>

        <section class="news" id="mobile">
            <div class="container">
              <h2 class="section-title">
                Top Articles Mobile App
              </h2>


                <div class="owl-carousel owl-theme">

                    @foreach ($all_posts as $item)
                        @foreach ($all_categories as $category)

                            @if ($item->category_id == $category->id && $item->category->category == 'Mobile')
                                <div class="item">
                                    <div>
                                        <a href="/home/{{$item->id}}" class="article-link">
                                            <img src="../../images/{{$item->image_path}}" alt="..." class="img-fluid" style="width: 100%; height: 170px">
                                            <div class="article-text mt-3">
                                                <span class="article-category">
                                                    {{$item->category->category}}
                                                </span>
                                                <h5 class="article-title">
                                                    {{-- Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, sit vero? Perferendis praesentium consectetur. --}}
                                                    {{$item->title}}
                                                </h5>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            @endif

                        @endforeach
                    @endforeach

                </div>

                <div class="text-center mt-5">
                    <a href="#" class="btn button">
                      More
                    </a>
                </div>
            </div>
        </section>

        <section class="news" id="desktop">
            <div class="container">
              <h2 class="section-title">
                Top Articles Desktop App
              </h2>


                <div class="owl-carousel owl-theme">

                    @foreach ($all_posts as $item)
                        @foreach ($all_categories as $category)

                            @if ($item->category_id == $category->id && $item->category->category == 'Desktop')
                                <div class="item">
                                    <div>
                                        <a href="/home/{{$item->id}}" class="article-link">
                                            <img src="../../images/{{$item->image_path}}" alt="..." class="img-fluid" style="width: 100%; height: 170px">
                                            <div class="article-text mt-3">
                                                <span class="article-category">
                                                    {{$item->category->category}}
                                                </span>
                                                <h5 class="article-title">
                                                    {{-- Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, sit vero? Perferendis praesentium consectetur. --}}
                                                    {{$item->title}}
                                                </h5>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            @endif

                        @endforeach
                    @endforeach

                </div>

                <div class="text-center mt-5">
                    <a href="#" class="btn button">
                      More
                    </a>
                </div>
            </div>
        </section>

        <section class="news" id="game">
            <div class="container">
              <h2 class="section-title">
                Top Articles Game App
              </h2>


                <div class="owl-carousel owl-theme">

                    @foreach ($all_posts as $item)
                        @foreach ($all_categories as $category)

                            @if ($item->category_id == $category->id && $item->category->category == 'Game')
                                <div class="item">
                                    <div>
                                        <a href="/home/{{$item->id}}" class="article-link">
                                            <img src="../../images/{{$item->image_path}}" alt="..." class="img-fluid" style="width: 100%; height: 170px">
                                            <div class="article-text mt-3">
                                                <span class="article-category">
                                                    {{$item->category->category}}
                                                </span>
                                                <h5 class="article-title">
                                                    {{-- Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, sit vero? Perferendis praesentium consectetur. --}}
                                                    {{$item->title}}
                                                </h5>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            @endif

                        @endforeach
                    @endforeach

                </div>

                <div class="text-center mt-5">
                    <a href="#" class="btn button">
                      More
                    </a>
                </div>
            </div>
        </section>



        <section class="most-read">
            <div class="container">
              <h2 class="section-title">
                Most Read
              </h2>
              {{-- <div class="card-news">
                <a href="./article.html">
                  <div class="row">
                    <div class="col-md-5">
                      <img src="./images/picture-12.jpg" alt="...">
                    </div>
                    <div class="col-md-7">
                      <div class="card-text">
                        <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, sit vero? Perferendis praesentium consectetur.</h4>
                        <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                            Accusantium, atque, aperiam quae earum libero eum
                            non asperiores autem beatae dolorem quibusdam
                            corrupti! Aspernatur quas incidunt id voluptates aperiam facilis cupiditate.
                        </p>
                        <time datetime="18-12-2022">
                          Sunday, 22/02/2023
                        </time>
                      </div>
                    </div>
                  </div>
                </a>
              </div> --}}

              {{-- <div class="card-news">
                <a href="./article.html">
                  <div class="row">
                    <div class="col-md-5">
                      <img src="./images/picture-12.jpg" alt="...">
                    </div>
                    <div class="col-md-7">
                      <div class="card-text">
                        <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, sit vero? Perferendis praesentium consectetur.</h4>
                        <p>
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                             Amet atque natus nulla perferendis. Adipisci perferendis,
                             eius ex officiis quae doloremque, dolores, at ad velit
                             repudiandae minus et alias reprehenderit voluptate?
                        </p>
                        <time datetime="18-12-2022">
                            Sunday, 22/02/2023
                        </time>
                      </div>
                    </div>
                  </div>
                </a>
              </div> --}}

                @foreach ($most_read_posts as $item)
                    @if(!$loop->first)
                        <div class="card-news">
                            <a href="/home/{{$item->id}}">
                            <div class="row">
                                <div class="col-md-5">
                                <img src="../../images/{{$item->image_path}}" alt="...">
                                </div>
                                <div class="col-md-7">
                                <div class="card-text ">
                                    <h4>{{$item->title}}</h4>
                                    <p class="">
                                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. <br>
                                        Amet atque natus nulla perferendis. Adipisci perferendis, <br>
                                        eius ex officiis quae doloremque, dolores, at ad velit <br>
                                        repudiandae minus et alias reprehenderit voluptate? <br>
                                        {!! $item->title !!}
                                    </p>
                                    <time datetime="18-12-2022">
                                        {{date('d-m-y', strtotime($item->updated_at))}}
                                    </time>
                                </div>
                                </div>
                            </div>
                            </a>
                        </div>
                    @endif
                @endforeach
              <div class="card-news">
                <a href="/home/{{$most_read_posts[0]->id}}">
                  <div class="card-img">
                    <img src="../../images/{{ $most_read_posts[0]->image_path }}" alt="...">
                  </div>
                  <div class="card-text">
                    <h4>{{ $most_read_posts[0]->title }}</h4>
                    <time datetime="18-12-2022">
                        {{date('d-m-y', strtotime($most_read_posts[0]->updated_at))}}
                        {{-- {{ array_first($most_read_posts)->name }} --}}
                    </time>
                  </div>
                </a>
              </div>


            </div>
        </section>

        <section class="opinions">
            <div class="container">
              <h2 class="section-title">
                Opinion articles
            </h2>
              <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6">
                  <a href="./article.html">
                    <div class="opinions-card">
                        <h5>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</h5>
                        <div class="user-info">
                        <img src="./images/user_img/user_1.jpg" alt="...">
                        <span>Hilal halim</span>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                  <a href="./article.html">
                    <div class="opinions-card">
                        <h5>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</h5>
                        <div class="user-info">
                        <img src="./images/user_img/user_7.jpg" alt="...">
                        <span>Ramadan</span>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                  <a href="./article.html">
                    <div class="opinions-card">
                        <h5>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</h5>
                        <div class="user-info">
                        <img src="./images/user_img/user_6.jpg" alt="...">
                        <span>Said ghila</span>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                  <a href="./article.html">
                    <div class="opinions-card">
                        <h5>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</h5>
                        <div class="user-info">
                        <img src="./images/user_img/user_5.jpg" alt="...">
                        <span>Khalil khalil</span>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                  <a href="./article.html">
                    <div class="opinions-card">
                        <h5>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</h5>
                        <div class="user-info">
                        <img src="./images/user_img/user_4.jpg" alt="...">
                        <span>Majed jekil</span>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                  <a href="./article.html">
                    <div class="opinions-card">
                        <h5>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</h5>
                        <div class="user-info">
                        <img src="./images/user_img/user_1.jpg" alt="...">
                        <span>Adil chije</span>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                  <a href="./article.html">
                    <div class="opinions-card">
                        <h5>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</h5>
                        <div class="user-info">
                        <img src="./images/user_img/user_3.jpg" alt="...">
                        <span>Reda gadi</span>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                  <a href="./article.html">
                    <div class="opinions-card">
                      <h5>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</h5>
                      <div class="user-info">
                        <img src="./images/user_img/user_2.jpg" alt="...">
                        <span>Toufik Shima</span>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </div>
        </section>

        <section class="videos">
            <div class="container">
              <h2 class="section-title">
                Videos
              </h2>
              <div class="swiper">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <a href="article.html" class="article-link">
                      <div class="slide-img">
                        <img src="./images/picture-13.jpg" alt="...">
                        <i class="fa-solid fa-play"></i>
                      </div>
                      <div class="slide-text">
                        <h5 class="article-title">
                            Lorem ipsum dolor sit amet consectetur.
                        </h5>
                      </div>
                    </a>
                  </div>
                  <div class="swiper-slide">
                    <a href="article.html" class="article-link">
                      <div class="slide-img">
                        <img src="./images/picture-17.jpg" alt="...">
                        <i class="fa-solid fa-play"></i>
                      </div>
                      <div class="slide-text">
                        <h5 class="article-title">
                            Lorem ipsum dolor sit amet consectetur.
                        </h5>
                      </div>
                    </a>
                  </div>
                  <div class="swiper-slide">
                    <a href="article.html" class="article-link">
                      <div class="slide-img">
                        <img src="./images/picture-16.jpg" alt="...">
                        <i class="fa-solid fa-play"></i>
                      </div>
                      <div class="slide-text">
                        <h5 class="article-title">
                            Lorem ipsum dolor sit amet consectetur.
                        </h5>
                      </div>
                    </a>
                  </div>
                  <div class="swiper-slide">
                    <a href="article.html" class="article-link">
                      <div class="slide-img">
                        <img src="./images/picture-15.jpg" alt="...">
                        <i class="fa-solid fa-play"></i>
                      </div>
                      <div class="slide-text">
                        <h5 class="article-title">
                            Lorem ipsum dolor sit amet consectetur.
                        </h5>
                      </div>
                    </a>
                  </div>
                  <div class="swiper-slide">
                    <a href="article.html" class="article-link">
                      <div class="slide-img">
                        <img src="./images/picture-14.jpg" alt="...">
                        <i class="fa-solid fa-play"></i>
                      </div>
                      <div class="slide-text">
                        <h5 class="article-title">
                            Lorem ipsum dolor sit amet consectetur.
                        </h5>
                      </div>
                    </a>
                  </div>
                  <div class="swiper-slide">
                    <a href="article.html" class="article-link">
                      <div class="slide-img">
                        <img src="./images/picture-11.jpg" alt="...">
                        <i class="fa-solid fa-play"></i>
                      </div>
                      <div class="slide-text">
                        <h5 class="article-title">
                          Lorem ipsum dolor sit amet consectetur.
                        </h5>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="swiper-pagination"></div>
              </div>
            </div>
        </section>

        <section class="latest-news">
            <div class="container">
              <h2 class="section-title">
                Latest Articles
              </h2>
              <div class="row">
                <div class="col-md-6">
                   @foreach ($last_post as $item)
                        <a href="/home/{{$item->id}}" class="article-link">
                            <img src="../../images/{{$item->image_path}}" alt="...">
                            <div class="card-text mt-3">
                                <span class="article-category">{{$item->category->category}}</span>
                                <h5 class="article-title">{{$item->title}}</h5>
                                <p>
                                        {{-- Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                        Unde, voluptatum doloribus. Adipisci, libero itaque
                                        quibusdam natus atque commodi iusto eos totam,
                                        aperiam laudantium, magni consequuntur et molestiae dolores ullam officia? --}}
                                        {!! $item->description !!}
                                </p>
                            </div>
                        </a>
                   @endforeach
                </div>
                <div class="col-md-6">
                    @foreach ($last_two_posts as $item)
                        @if(!$loop->first)
                            <a href="/home/{{$item->id}}" class="article-link">
                                <div class="row">
                                <div class="col-sm-6">
                                    <img src="../../images/{{$item->image_path}}" alt="...">
                                </div>
                                <div class="col-sm-6">
                                    <div class="card-text">
                                    <span class="article-category">
                                        {{$item->category->category}}
                                    </span>
                                    <h5 class="article-title">
                                        {{-- Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, magnam. amet consectetur adipisicing elit. --}}
                                        {{$item->title}}
                                    </h5>
                                    </div>
                                </div>
                                </div>
                            </a>
                        @endif
                    @endforeach
                  <div class="row mt-4">
                    {{-- <div class="col-sm-6">
                      <a href="article.html" class="article-link">
                        <img src="./images/picture-13.jpg" alt="...">
                        <div class="card-text mt-3">
                          <span class="article-category">
                            Camputer
                          </span>
                          <h5 class="article-title">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, magnam. amet consectetur adipisicing elit.
                          </h5>
                        </div>
                      </a>
                    </div>
                    <div class="col-sm-6">
                      <a href="article.html" class="article-link">
                        <img src="./images/picture-12.jpg" alt="...">
                        <div class="card-text mt-3">
                          <span class="article-category">
                            News
                          </span>
                          <h5 class="article-title">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, magnam. amet consectetur adipisicing elit.
                          </h5>
                        </div>
                      </a>
                    </div> --}}



                    @foreach($last_four_posts as $item)
                        @if($loop->iteration > 2)
                            <div class="col-sm-6">
                                <a href="/home/{{$item->id}}" class="article-link">
                                    <img src="../../images/{{$item->image_path}}" alt="..." class="img-fluid" style="width: 100%; height: 170px">
                                    <div class="card-text mt-3">
                                    <span class="article-category">
                                        {{$item->category->category}}
                                    </span>
                                    <h5 class="article-title">
                                        {{-- Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, magnam. amet consectetur adipisicing elit. --}}
                                            {{$item->title}}
                                    </h5>
                                    </div>
                                </a>
                            </div>
                        @endif
                        {{-- @if(!$loop->first)
                        <div class="col-sm-6">
                            <a href="article.html" class="article-link">
                                <img src="../../images/{{$item->image_path}}" alt="..." class="img-fluid" style="width: 100%; height: 170px">
                                <div class="card-text mt-3">
                                  <span class="article-category">
                                    {{$item->category->category}}
                                  </span>
                                  <h5 class="article-title">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, magnam. amet consectetur adipisicing elit.
                                        {{$item->title}}
                                 </h5>
                                </div>
                            </a>
                        </div>
                        @endif --}}
                    @endforeach
                  </div>
                </div>
              </div>
              <div class="text-center mt-5">
                <a href="#" class="btn button">More</a>
              </div>
              <hr class="mt-5">
            </div>
        </section>

    </main>


@endsection
