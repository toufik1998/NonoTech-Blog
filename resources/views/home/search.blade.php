@extends('layouts.common')
@section('title', 'Search Page')

@section('content')
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

            {{-- <form class="d-flex" role="search" action="{{ route('home.search') }}" method="GET" >
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <a href="./search.html" class="search-icon"><i class="fa-solid fa-magnifying-glass"></i></a>
            </form> --}}
            </div>
            </div>
        </nav>
    </header>

    <main>
        <div class="container">
          <div class="row">
            <div class="col-md-8">
              <div class="search-form">
                <form  action="{{ route('home.search') }}" method="POST">
                    @csrf
                  <input type="text" placeholder="Search here" name="search" value="{{$searchTerm}}" required>
                  <button type="submit" class="button">Search</button>
                </form>
              </div>
              <div class="search-line">
                <span>Best 50 result</span>
                {{-- <div class="ranking">
                  <span>Order:</span>
                  <form action="{{route('home.search')}}" method="POST">
                    @csrf
                    <select name="ranking_by" id="ranking_by">
                        <option value="date">Date</option>
                        <option value="alphabet" >Alphabet</option>
                      </select>
                      <button type="submit">submit</button>
                  </form>
                </div> --}}
              </div>
              <hr>
              <div class="search-articles" id="search-articles">

                @foreach ($posts as $item)
                    <div class="article-card">
                        <a href="article.html" class="article-link">
                        <div class="row">
                            <div class="col-md-4">
                            <img src="/images/{{$item->image_path}}" alt="...">
                            </div>
                            <div class="col-md-8">
                            <h4>{{$item->title}}</h4>
                            <p>
                                {{$item->title}}
                            </p>
                            <time datetime="01/01/2023">{{date('d-m-y', strtotime($item->updated_at))}}</time>
                            </div>
                        </div>
                        </a>
                    </div>
                @endforeach

              </div>
            </div>
            <div class="col-md-4">

            </div>
          </div>
          <div class="more-resulte text-center">
            <a href="#" class="btn button">More Results</a>
          </div>
          <hr>
        </div>
    </main>


@endsection
