@extends('layouts.common')
@section('title', 'show Page')

@section('content')
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

    <div class="container">
        {{session()->get('success')}}

        @if(session()->has('success'))
            <div class="alert alert-warning alert-dismissible fade show w-50 mx-auto" role="alert">
                <strong>Success!</strong> {{session()->get('success')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif


        <div class="head-post">
            <h3 class="title-post text-white mb-3">{{$post->title}}</h3>
            <span>
                <span class="text-white font-weight-bold">By:</span>
                <span class="writer-name text-warning">{{$post->user->name}} </span>
                <span class="text-muted">On {{date('d-m-y', strtotime($post->updated_at))}}</span>

                {{-- <a href="/blog/{{$post->slug}}" class="btn">Read More</a> --}}
            </span>
        </div>

        <div class="body-post">
            <div class="image-post">
                <img class="w-100" style="height: 70vh" src="/images/{{$post->image_path}}" alt="picture image" >
            </div>
            <p class="p-post text-white py-4">
                {{$post->description}}
            </p>

            @if(Auth::user() && Auth::user()->id === $post->user_id)
                <a href="/blog/{{$post->slug}}/edit" class="btn">Update Post</a>

                <form action="/blog/{{$post->slug}}" method="POST" enctype="multipart/form-data" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete Post</button>
                </form>

            @endif

        </div>
    </div>
@endsection
