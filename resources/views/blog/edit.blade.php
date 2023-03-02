@extends('layouts.common')
@section('title', 'Update Article Page')

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

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-12 col-md-8">
                <form action="/blog/{{$post->slug}}"  method="POST" id="form-task" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                        <div class="modal-header border-0 bg-white">
                            <h5 class="modal-title text-danger">Update Post</h5>
                            <a href="#" class="btn-close" data-bs-dismiss="modal"></a>
                        </div>
                        <div class="modal-body">
                                <!-- This Input Allows Storing Task Index  -->
                                <input type="hidden" id="product-id" name="product-id">
                                <div class="mb-3">
                                    <label class="form-label text-white">Post Title</label>
                                    <input type="text" name="title" value="{{$post->title}}" class="form-control" id="post-title"/>
                                </div>
                                {{-- <div class="mb-3">
                                    <label class="form-label text-white">Post Category</label>
                                    <select class="form-select" name="category-options[]" id="post-status">
                                        <option value="">Please select</option>
                                        <option value="web">Web</option>
                                        <option value="mobile">Mobile App</option>
                                        <option value="desktop">Desktop</option>
                                    </select>
                                </div> --}}

                                <div class="mb-3">
                                    <label class="form-label text-white">Post Category</label>
                                    <select class="form-select" name="category_option" id="post-status">
                                        <option value="">Please select</option>

                                        @foreach($categories as $item)
                                            <option value="{{$item->category}}"> {{$item->category}} </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label text-white">Post Content</label>
                                    <textarea class="form-control" name="description" rows="10" id="description">{{$post->description}}</textarea>
                                </div>

                                <div class="mb-0 w-50">
                                    <label class="form-label text-white">Post Image</label>
                                    <input type="file" name="image_path" class="form-control" id="image_path"/>
                                </div>
                        </div>

                    <div class="modal-footer border-0">
                        <a href="#" class="btn btn-white" data-bs-dismiss="modal">Cancel</a>
                        <button type="submit"  class="btn btn-primary task-action-btn" id="task-save-btn">Update Post</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
