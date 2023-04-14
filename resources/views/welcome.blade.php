@extends('layouts.common')
@section('title', 'Home Page')


@section('content')

    <header>
        <nav class="navbar navbar-expand-lg fixed-top" id="navbar">
            <div class="container">
                <a class="navbar-brand" href="#">NanoTech</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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

                        {{-- @if (Route::has('login'))

                            <div class="ms-5">
                                @auth
                                    @if (Auth::user()->is_admin == 1)
                                        <li class="nav-item navbar-user dropdown">
                                            <a href="#" class="nav-link dropdown-toggle d-flex align-items-center"
                                                data-bs-toggle="dropdown">
                                                <img src="/images/{{ Auth::user()->profile_picture }}" alt="" class="rounded-circle" style="width: 25px;">

                                                <span>
                                                    <span class="d-none d-md-inline text-danger">{{ Auth::user()->name }}</span>
                                                    <b class="caret text-warning"></b>
                                                </span>
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-end me-1">
                                                <x-responsive-nav-link :href="route('profile.edit')" class="dropdown-item">
                                                    {{ __('Profile') }}
                                                </x-responsive-nav-link>
                                                <a href="javascript:;" class="dropdown-item">Setting</a>
                                                <a href="{{ url('/adminboard') }}" class="btn dropdown-item">Dashboard</a>
                                                <div class="dropdown-divider"></div>
                                                <!-- Authentication -->
                                                <form method="POST" action="{{ route('logout') }}">
                                                    @csrf

                                                    <x-responsive-nav-link :href="route('logout')"
                                                        onclick="event.preventDefault();
                                                                        this.closest('form').submit();"
                                                        class="dropdown-item">
                                                        {{ __('Log Out') }}
                                                    </x-responsive-nav-link>
                                                </form>
                                            </div>
                                        </li>
                                    @else
                                        <li class="nav-item navbar-user dropdown">
                                            <a href="#" class="nav-link dropdown-toggle d-flex align-items-center"
                                                data-bs-toggle="dropdown">
                                                <img src="/images/{{ Auth::user()->profile_picture }}" alt="" class="rounded-circle" style="width: 25px;">

                                                <span>
                                                    <span class="d-none d-md-inline text-danger">{{ Auth::user()->name }}</span>
                                                    <b class="caret text-warning"></b>
                                                </span>
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-end me-1">
                                                <x-responsive-nav-link :href="route('profile.edit')" class="dropdown-item">
                                                    {{ __('Profile') }}
                                                </x-responsive-nav-link>
                                                <a href="javascript:;" class="dropdown-item">Setting</a>
                                                <a href="{{ url('/blog') }}" class="btn dropdown-item">Dashboard</a>
                                                <div class="dropdown-divider"></div>
                                                <!-- Authentication -->
                                                <form method="POST" action="{{ route('logout') }}">
                                                    @csrf

                                                    <x-responsive-nav-link :href="route('logout')"
                                                        onclick="event.preventDefault();
                                                                        this.closest('form').submit();"
                                                        class="dropdown-item">
                                                        {{ __('Log Out') }}
                                                    </x-responsive-nav-link>
                                                </form>
                                            </div>
                                        </li>
                                    @endif
                                @else
                                    <div class="login">
                                        <i class="fa-solid fa-user"></i>
                                        <div class="login-container">
                                            <a href="{{ route('login') }}" class="button">Sign In</a>
                                        </div>
                                    </div>

                                    <div class="login-button">
                                        <a href="{{ route('login') }}" class="button">Sign In</a>
                                    </div>
                                @endauth
                            </div>

                        @endif --}}

                    </ul>


                    {{-- @if (Route::has('login'))
                        <div class="">
                            @auth
                                @if (Auth::user()->is_admin == 1)
                                    <a href="{{ url('/adminboard') }}" class="btn">Dashboard</a>
                                @else
                                    <a href="{{ url('/blog') }}" class="btn">Dashboard</a>
                                @endif
                            @else
                                <div class="login">
                                    <i class="fa-solid fa-user"></i>
                                    <div class="login-container">
                                        <a href="{{ route('login') }}" class="button">Sign In</a>
                                    </div>
                                </div>

                                <div class="login-button">
                                    <a href="{{ route('login') }}" class="button">Sign In</a>
                                </div>
                            @endauth
                        </div>
                    @endif --}}

                    @if (Route::has('login'))

                            <div class="me-3">
                                @auth
                                    @if (Auth::user()->is_admin == 1)
                                        <div class="nav-item navbar-user dropdown">
                                            <a href="#" class="nav-link dropdown-toggle d-flex align-items-center"
                                                data-bs-toggle="dropdown">
                                                <img src="/images/{{ Auth::user()->profile_picture }}" alt=""
                                                    class="rounded-circle" style="width: 25px;">

                                                <span>
                                                    <span class="d-none d-md-inline text-danger">{{ Auth::user()->name }}</span>
                                                    <b class="caret text-warning"></b>
                                                </span>
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-end me-1">
                                                <x-responsive-nav-link :href="route('profile.edit')" class="dropdown-item">
                                                    {{ __('Profile') }}
                                                </x-responsive-nav-link>
                                                <a href="javascript:;" class="dropdown-item">Setting</a>
                                                <a href="{{ url('/adminboard') }}" class="btn dropdown-item">Dashboard</a>
                                                <div class="dropdown-divider"></div>
                                                <!-- Authentication -->
                                                <form method="POST" action="{{ route('logout') }}">
                                                    @csrf

                                                    <x-responsive-nav-link :href="route('logout')"
                                                        onclick="event.preventDefault();
                                                                        this.closest('form').submit();"
                                                        class="dropdown-item">
                                                        {{ __('Log Out') }}
                                                    </x-responsive-nav-link>
                                                </form>
                                            </div>
                                        </div>
                                    @else
                                        <div class="nav-item navbar-user dropdown">
                                            <a href="#" class="nav-link dropdown-toggle d-flex align-items-center"
                                                data-bs-toggle="dropdown">
                                                <img src="/images/{{ Auth::user()->profile_picture }}" alt=""
                                                    class="rounded-circle" style="width: 25px;">

                                                <span>
                                                    <span class="d-none d-md-inline text-danger">{{ Auth::user()->name }}</span>
                                                    <b class="caret text-warning"></b>
                                                </span>
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-end me-1">
                                                <x-responsive-nav-link :href="route('profile.edit')" class="dropdown-item">
                                                    {{ __('Profile') }}
                                                </x-responsive-nav-link>
                                                <a href="javascript:;" class="dropdown-item">Setting</a>
                                                <a href="{{ url('/blog') }}" class="btn dropdown-item">Dashboard</a>
                                                <div class="dropdown-divider"></div>
                                                <!-- Authentication -->
                                                <form method="POST" action="{{ route('logout') }}">
                                                    @csrf

                                                    <x-responsive-nav-link :href="route('logout')"
                                                        onclick="event.preventDefault();
                                                                        this.closest('form').submit();"
                                                        class="dropdown-item">
                                                        {{ __('Log Out') }}
                                                    </x-responsive-nav-link>
                                                </form>
                                            </div>
                                        </div>
                                    @endif
                                @else
                                    <div class="login">
                                        <i class="fa-solid fa-user"></i>
                                        <div class="login-container">
                                            <a href="{{ route('login') }}" class="button">Sign In</a>
                                        </div>
                                    </div>

                                    <div class="login-button">
                                        <a href="{{ route('login') }}" class="button">Sign In</a>
                                    </div>
                                @endauth
                            </div>

                    @endif

                    <form class="d-flex" role="search" action="{{ route('home.search') }}" method="POST">
                        @csrf
                        <input class="form-control me-2" type="search" name="search" placeholder="Search"
                            aria-label="Search">
                        <button type="submit" class="search-icon bg-white">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </form>
                </div>
            </div>
        </nav>

        <div class="header-news" style="margin-top: 6rem">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="carousel-news">
                            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                        class="active" aria-current="true" aria-label="Slide 1">1</button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                        aria-label="Slide 2">2</button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                        aria-label="Slide 3">3</button>
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

                            @foreach ($previousthreeRows as $item)
                                <a href="/home/{{ $item->id }}" class="article-link">
                                    <div class="row">
                                        <div class="col-5">
                                            <img src="../../images/{{ $item->image_path }}" alt="...">
                                        </div>
                                        <div class="col-7">
                                            <div class="article-text">
                                                <span class="article-category">
                                                    {{ $item->category->category }}
                                                </span>
                                                <h5 class="article-title">
                                                    {{ $item->title }}
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
                    Top Random Articles
                </h2>

                <div class="row">
                    @foreach ($random_posts as $item)
                        <div class="col-lg-3 col-md-4 col-sm-6 mt-4">
                            <a href="/home/{{ $item->id }}" class="article-link">
                                <img src="../../images/{{ $item->image_path }}" alt="..." class="img-fluid"
                                    style="width: 100%; height: 170px">
                                <div class="article-text mt-3">
                                    <span class="article-category">
                                        {{ $item->category->category }}
                                    </span>
                                    <h5 class="article-title">
                                        {{ $item->title }}
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

                <div class="owl-carousel owl-theme">

                    @foreach ($all_posts as $item)
                        @foreach ($all_categories as $category)
                            @if ($item->category_id == $category->id && $item->category->category == 'Web')
                                <div class="item">
                                    <div>
                                        <a href="/home/{{ $item->id }}" class="article-link">
                                            <img src="../../images/{{ $item->image_path }}" alt="..."
                                                class="img-fluid" style="width: 100%; height: 170px">
                                            <div class="article-text mt-3">
                                                <span class="article-category">
                                                    {{ $item->SubCategory->subcategory }}
                                                </span>
                                                <h5 class="article-title">
                                                    {{ $item->title }}
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
                                        <a href="/home/{{ $item->id }}" class="article-link">
                                            <img src="../../images/{{ $item->image_path }}" alt="..."
                                                class="img-fluid" style="width: 100%; height: 170px">
                                            <div class="article-text mt-3">
                                                <span class="article-category">
                                                    {{ $item->SubCategory->subcategory }}
                                                </span>
                                                <h5 class="article-title">
                                                    {{ $item->title }}
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
                            @if ($item->category_id == $category->id && $item->category->category == 'desktop')
                                <div class="item">
                                    <div>
                                        <a href="/home/{{ $item->id }}" class="article-link">
                                            <img src="../../images/{{ $item->image_path }}" alt="..."
                                                class="img-fluid" style="width: 100%; height: 170px">
                                            <div class="article-text mt-3">
                                                <span class="article-category">
                                                    {{ $item->SubCategory->subcategory }}
                                                </span>
                                                <h5 class="article-title">
                                                    {{ $item->title }}
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
                                        <a href="/home/{{ $item->id }}" class="article-link">
                                            <img src="../../images/{{ $item->image_path }}" alt="..."
                                                class="img-fluid" style="width: 100%; height: 170px">
                                            <div class="article-text mt-3">
                                                <span class="article-category">
                                                    {{ $item->SubCategory->subcategory }}
                                                </span>
                                                <h5 class="article-title">
                                                    {{ $item->title }}
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

                @foreach ($most_read_posts as $item)
                    @if (!$loop->first)
                        <div class="card-news">
                            <a href="/home/{{ $item->id }}">
                                <div class="row">
                                    <div class="col-md-5">
                                        <img src="../../images/{{ $item->image_path }}" alt="...">
                                    </div>
                                    <div class="col-md-7">
                                        <div class="card-text ">
                                            <h4>{{ $item->title }}</h4>
                                            <p class="">
                                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. <br>
                                                Amet atque natus nulla perferendis. Adipisci perferendis, <br>
                                                eius ex officiis quae doloremque, dolores, at ad velit <br>
                                                repudiandae minus et alias reprehenderit voluptate? <br>
                                                {!! $item->title !!}
                                            </p>
                                            <time datetime="18-12-2022">
                                                {{ date('d-m-y', strtotime($item->updated_at)) }}
                                            </time>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endif
                @endforeach
                <div class="card-news">
                    <a href="/home/{{ $most_read_posts[0]->id }}">
                        <div class="card-img">
                            <img src="../../images/{{ $most_read_posts[0]->image_path }}" alt="...">
                        </div>
                        <div class="card-text">
                            <h4>{{ $most_read_posts[0]->title }}</h4>
                            <time datetime="18-12-2022">
                                {{ date('d-m-y', strtotime($most_read_posts[0]->updated_at)) }}
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

                    @foreach ($users_posts as $item)
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <a href="/home/{{ $item->id }}">
                                <div class="opinions-card">
                                    <h5>{{ $item->title }}</h5>
                                    <div class="user-info">
                                        <img src="../../images/{{ $item->user->profile_picture }}" alt="...">
                                        <span>{{ $item->user->name }}</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
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
                            <a href="/home/{{ $item->id }}" class="article-link">
                                <img src="../../images/{{ $item->image_path }}" alt="...">
                                <div class="card-text mt-3">
                                    <span class="article-category">{{ $item->category->category }}</span>
                                    <h5 class="article-title">{{ $item->title }}</h5>
                                    <p>
                                        {!! $item->description !!}
                                    </p>
                                </div>
                            </a>
                        @endforeach
                    </div>
                    <div class="col-md-6">
                        @foreach ($last_two_posts as $item)
                            @if (!$loop->first)
                                <a href="/home/{{ $item->id }}" class="article-link">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <img src="../../images/{{ $item->image_path }}" alt="...">
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="card-text">
                                                <span class="article-category">
                                                    {{ $item->category->category }}
                                                </span>
                                                <h5 class="article-title">
                                                    {{ $item->title }}
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            @endif
                        @endforeach
                        <div class="row mt-4">

                            @foreach ($last_four_posts as $item)
                                @if ($loop->iteration > 2)
                                    <div class="col-sm-6">
                                        <a href="/home/{{ $item->id }}" class="article-link">
                                            <img src="../../images/{{ $item->image_path }}" alt="..."
                                                class="img-fluid" style="width: 100%; height: 170px">
                                            <div class="card-text mt-3">
                                                <span class="article-category">
                                                    {{ $item->category->category }}
                                                </span>
                                                <h5 class="article-title">
                                                    {{ $item->title }}
                                                </h5>
                                            </div>
                                        </a>
                                    </div>
                                @endif
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
