@extends('layouts.common')
@section('title', 'Article Page')


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
                <a class="nav-link" href="#">Web</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Mobile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Desktop</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Game</a>
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

            <form class="d-flex" role="search" action="{{ route('home.search') }}" method="POST" >
                @csrf
                <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search">
                <button type="submit" class="search-icon bg-white" >
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </form>
            </div>
            </div>
        </nav>
    </header>

    <main>
            <div class="article-header" >
                <div class="container">
                <div class="header-category">
                    <span class="me-1">Technology</span> | <span class="ms-1">Microsoft</span>
                </div>
                <div class="header-title">
                    <h2>
                        {{$post->title}}
                    </h2>
                </div>
                </div>
            </div>
            <div class="article-main">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="article-img">
                                <img src="/images/{{$post->image_path}}" alt="...">
                            </div>
                            <div class="article-subtitle">
                                <span>{{$post->title}}</span>
                            </div>
                            <div class="article-datetime">
                                <time datetime="01-01-2023">{{date('d-m-y', strtotime($post->updated_at))}}</time>
                            </div>
                            <div class="article-body">
                                <article>
                                    {!! $post->description !!}
                                </article>
                                <section class="suggested-stories">
                                    <h2 class="section-title">
                                        Suggested Articles
                                    </h2>
                                    <div class="stories">

                                        @foreach ($random_posts as $item)
                                            <a href="/home/{{$item->id}}" class="article-link">
                                                <div class="story-card mt-5">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                    <img src="/images/{{$item->image_path}}" alt="...">
                                                    </div>
                                                    <div class="col-sm-8">
                                                    <p>{{$item->title}}</p>
                                                    </div>
                                                </div>
                                                </div>
                                            </a>
                                        @endforeach

                                    </div>
                                </section>
                                <article>
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Commodi soluta ut iste. Voluptatibus cupiditate in dolorum? </p>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam natus facere deserunt amet error alias? Eius nobis illo officia deleniti, ullam cupiditate blanditiis fugit sint iste perferendis, perspiciatis nostrum quasi.
                                    </p>
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/U3axpYKzyos" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    <h3>Another title</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus repellendus velit sint explicabo, nihil officia, officiis voluptatum</p>
                                    <p>
                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. At, excepturi. Porro, ipsum ex maxime suscipit error quidem? Quia laudantium, soluta, numquam vitae hic eos, at iure quasi error optio corrupti?
                                    </p>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam minima facilis dicta, perferendis dolorum consectetur et repellendus hic dolorem itaque sed esse. Fugit accusantium obcaecati cum, odio accusamus quam a?
                                    </p>
                                    <span class="keyword me-3">Lorem.</span>
                                    <span class="keyword me-3">Camputer</span>
                                    <span class="keyword me-3">Upsum</span>
                                </article>
                            </div>


                            <section class="comments mt-5">
                                <h2 class="section-title">
                                    Comments
                                </h2>
                                @if (Auth::check())
                                    <form action="{{ url('/comments') }}" method="POST">
                                        @csrf
                                        <textarea name="comment" id="comment" class="comment-textarea" placeholder="Write your comment here"></textarea>
                                        <input type="hidden" name="post_id" value="{{ $post->id }}">
                                        <button type="submit" class="button">Publish</button>

                                    </form>

                                @else
                                    <section class="comments mt-5">
                                        <h2 class="section-title">
                                            Login to add comments
                                        </h2>
                                    </section>
                                @endif
                                <hr>
                                <div class="comment-cards" id="comment-cards">

                                    @if ($comments->isEmpty())
                                        <p>No comments yet. Be the first to leave a comment!</p>
                                    @else
                                        @foreach ($comments as $item)
                                            <div class="comment-card">
                                                <div class="row">

                                                    <div class="col-lg-2 col-3">
                                                        <div class="user-photo">
                                                        <img src="./images/user_img/user_2.jpg" alt="...">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-10 col-9">
                                                        <div class="comment-text">
                                                            <div class="d-flex justify-content-between">

                                                                <span class="user-name">{{$item->user->name}}</span>

                                                                @if(Auth::check() && Auth::user()->id == $item->user_id)

                                                                    <form action="{{ url('/comments' . '/' . $item->id) }}" method="post" class="">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button type="submit" onclick="return confirm('Confirm delete?')" class="btn bg-danger text-white btn-sm btn-rounded mt-2 ">
                                                                            <i class="fa-solid fa-trash text-white"></i>
                                                                        </button>
                                                                    </form>

                                                                @endif
                                                            </div>
                                                            <p>
                                                                {{$item->comment}}
                                                            </p>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                                <hr class="mt-5 mb-5">
                            </section>


                            <section class="related-articles">
                                <h2 class="section-title">
                                    Related articles
                                </h2>
                                <div class="row">

                                    @foreach ($related_posts as $item)
                                        <div class="col-sm-4">
                                            <a href="/home/{{$item->id}}" class="article-link">
                                            <img src="/images/{{$item->image_path}}" alt="...">
                                            <div class="article-text mt-3">
                                                <span class="article-category">
                                                    {{$item->category->category}}
                                                </span>
                                                <h5 class="article-title">
                                                    {{$item->title}}
                                                </h5>
                                            </div>
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="text-center">
                                <a href="#" class="btn button">
                                    More
                                </a>
                                </div>
                                <hr class="mt-4 mb-5">
                            </section>
                        </div>
                        <div class="col-md-4">
                            <div class="most-read">
                                <h2>Most Read</h2>

                                @foreach ($most_read_posts as $item)
                                    <a href="#" class="article-link">
                                        <div class="most-read-article">
                                            <img src="/images/{{$item->image_path}}" alt="...">
                                            <div class="most-read-text">
                                                <h4 class="article-title">
                                                    {{$item->title}}
                                                </h4>
                                                <time datetime="01/01/2023">{{date('d-m-y', strtotime($post->updated_at))}}</time>
                                            </div>
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </main>


@endsection
