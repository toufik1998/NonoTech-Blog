@extends('layouts.common')
@section('title', 'Article Page')


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
                            <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
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

                        {{-- @if(Route::has('login'))

                            <div class="ms-5">
                                @auth
                                    @if (Auth::user()->is_admin == 1)
                                        <li class="nav-item navbar-user dropdown">
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
                                        </li>
                                    @else
                                        <li class="nav-item navbar-user dropdown">
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
    </header>

    <main>
        <div class="article-header" style="margin-top: 5rem">
            <div class="container">
                <div class="header-category">
                    <span class="me-1">{{ $post->category->category }}</span> | <span
                        class="ms-1">{{ $post->SubCategory->subcategory }}</span>
                </div>
                <div class="header-title">
                    <h2>
                        {{ $post->title }}
                    </h2>
                </div>
            </div>
        </div>
        <div class="article-main">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="article-img">
                            <img src="/images/{{ $post->image_path }}" alt="...">
                        </div>

                        <div class="article-subtitle d-flex align-items-center">
                            <span>{{ $post->title }}</span>

                            @if (Auth::check())
                                <livewire:like-post :post="$post" />
                            @endif

                        </div>

                        <div class="article-datetime">
                            <time datetime="01-01-2023">{{ date('d-m-y', strtotime($post->updated_at)) }}</time>
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
                                        <a href="/home/{{ $item->id }}" class="article-link">
                                            <div class="story-card mt-5">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <img src="/images/{{ $item->image_path }}" alt="...">
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <p>{{ $item->title }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    @endforeach

                                </div>
                            </section>
                            <article>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Commodi soluta ut iste.
                                    Voluptatibus cupiditate in dolorum? </p>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam natus facere
                                    deserunt amet error alias? Eius nobis illo officia deleniti, ullam cupiditate blanditiis
                                    fugit sint iste perferendis, perspiciatis nostrum quasi.
                                </p>
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/U3axpYKzyos"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                                <h3>Another title</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus repellendus velit
                                    sint explicabo, nihil officia, officiis voluptatum</p>
                                <p>
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. At, excepturi. Porro, ipsum ex
                                    maxime suscipit error quidem? Quia laudantium, soluta, numquam vitae hic eos, at iure
                                    quasi error optio corrupti?
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam minima facilis dicta,
                                    perferendis dolorum consectetur et repellendus hic dolorem itaque sed esse. Fugit
                                    accusantium obcaecati cum, odio accusamus quam a?
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

                            <div>
                                @if (Auth::check())
                                    @livewire('add-comment', ['postId' => $post->id])
                                @else
                                    <section class="comments mt-5">
                                        <h2 class="section-title">
                                            Login to add comments
                                        </h2>
                                    </section>
                                @endif

                            </div>

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
                                                        <img src="/images/{{ $item->user->profile_picture }}"
                                                            alt="...">

                                                    </div>
                                                </div>
                                                <div class="col-lg-10 col-9">

                                                    <div class="comment-text">
                                                        <div
                                                            class="d-flex justify-content-between align-items-center mb-2">
                                                            <span class="user-name">{{ $item->user->name }}</span>

                                                            <span
                                                                class="d-flex justify-content-between align-items-center mb-2">
                                                                @if (Auth::check() && Auth::user()->id == $item->user_id)
                                                                    <form
                                                                        action="{{ url('/comments' . '/' . $item->id) }}"
                                                                        method="post" class="delete-form">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button type="submit"
                                                                            onclick="return confirm('Confirm delete?')"
                                                                            class="btn btn-danger btn-sm rounded-pill ml-2 delete-form">
                                                                            <i class="fas fa-trash text-white"></i>
                                                                        </button>
                                                                    </form>
                                                                    <button
                                                                        class="btn btn-info btn-sm rounded-pill ml-2 edit-comment"
                                                                        data-comment-id="{{ $item->id }}"
                                                                        data-post-id="{{ $item->post_id }}">
                                                                        <i class="fas fa-edit text-white"></i>
                                                                    </button>
                                                                @endif
                                                                <button
                                                                    class="btn btn-primary btn-sm rounded-pill ml-2 reply-comment"
                                                                    data-comment-id="{{ $item->id }}"
                                                                    wire:click="$emit('openReplyForm', {{ $item->id }})">Reply</button>



                                                                @foreach ($replies as $reply)
                                                                    @if ($item->id == $reply->comment_id)
                                                                        <button
                                                                            class="btn btn-secondary btn-sm rounded-pill ml-2 show-replies"
                                                                            data-comment-id="{{ $item->id }}"
                                                                            data-show="false">Show Replies</button>
                                                                    @endif
                                                                @endforeach

                                                            </span>

                                                            {{-- <span
                                                                class="d-flex justify-content-between align-items-center mb-2">
                                                                <i class="fa-solid fa-ellipsis edit-delete-reply-icon"></i>
                                                                <div class="edit-delete-reply-container"
                                                                    style="display:none;">
                                                                    @if (Auth::check() && Auth::user()->id == $item->user_id)
                                                                        <form
                                                                            action="{{ url('/comments' . '/' . $item->id) }}"
                                                                            method="post" class="delete-form">
                                                                            @csrf
                                                                            @method('DELETE')
                                                                            <button type="submit"
                                                                                onclick="return confirm('Confirm delete?')"
                                                                                class="btn btn-danger btn-sm rounded-pill ml-2 delete-form">
                                                                                Delete
                                                                            </button>
                                                                        </form>
                                                                        <button
                                                                            class="btn btn-info btn-sm rounded-pill ml-2 edit-comment"
                                                                            data-comment-id="{{ $item->id }}"
                                                                            data-post-id="{{ $item->post_id }}">
                                                                            Edit
                                                                        </button>
                                                                    @endif
                                                                    @if (Auth::check())
                                                                        <button
                                                                            class="btn btn-primary btn-sm rounded-pill ml-2 reply-comment"
                                                                            data-comment-id="{{ $item->id }}"
                                                                            wire:click="$emit('openReplyForm', {{ $item->id }})">Reply</button>
                                                                    @endif
                                                                    @foreach ($replies as $reply)
                                                                        @if ($item->id == $reply->comment_id)
                                                                            <button
                                                                                class="btn btn-secondary btn-sm rounded-pill ml-2 show-replies"
                                                                                data-comment-id="{{ $item->id }}"
                                                                                data-show="false">Show Replies</button>
                                                                        @endif
                                                                    @endforeach
                                                                </div>
                                                            </span> --}}

                                                        </div>
                                                        <p class="comment-paragraph"
                                                            id="comment-paragraph-{{ $item->id }}">
                                                            {{ $item->comment }}</p>
                                                        <textarea class="form-control comment-edit-textarea d-none" id="comment-edit-textarea-{{ $item->id }}"
                                                            rows="3">{{ $item->comment }}</textarea>
                                                        <div class="mt-2">
                                                            <button
                                                                class="btn btn-primary btn-sm rounded-pill save-comment d-none"
                                                                data-comment-id="{{ $item->id }}"
                                                                data-post-id="{{ $item->post_id }}">Save</button>
                                                            <button
                                                                class="btn btn-secondary btn-sm rounded-pill cancel-edit-comment d-none ml-2"
                                                                data-comment-id="{{ $item->id }}"
                                                                data-post-id="{{ $item->post_id }}"
                                                                data-parent-id="{{ $item->id }}">Cancel</button>
                                                        </div>

                                                        <div class="reply-form mt-2 ml-4 d-none"
                                                            id="reply-form-{{ $item->id }}"
                                                            style="position: relative;">

                                                            @livewire('add-reply', ['commentId' => $item->id, 'postId' => $post->id], key($item->id), ['parent_id' => $item->id])
                                                            <button type="button"
                                                                class="btn btn-secondary btn-sm rounded-pill mt-2 ml-2 cancel-reply-comment d-inline"
                                                                data-parent-id="{{ $item->id }}"
                                                                style="position: absolute; bottom: 0rem; left: 7rem;">Cancel</button>

                                                        </div>

                                                        @foreach ($replies as $reply)
                                                            @if ($item->id == $reply->comment_id)
                                                                <div class="replies mt-2 ml-4 d-none"
                                                                    id="replies-{{ $item->id }}">
                                                                    <div class="comment-text ml-4">
                                                                        <div
                                                                            class="d-flex justify-content-between align-items-center mb-2">
                                                                            <span
                                                                                class="user-name">{{ $reply->user->name }}</span>
                                                                            <span
                                                                                class="d-flex justify-content-between align-items-center mb-2">
                                                                                @if (Auth::check() && Auth::user()->id == $reply->user_id)
                                                                                    <form
                                                                                        action="{{ url('/comments' . '/' . $reply->id) }}"
                                                                                        method="post"
                                                                                        class="delete-form">
                                                                                        @csrf
                                                                                        @method('DELETE')
                                                                                        <button type="submit"
                                                                                            onclick="return confirm('Confirm delete?')"
                                                                                            class="btn btn-danger btn-sm rounded-pill ml-2 delete-form">
                                                                                            <i
                                                                                                class="fas fa-trash text-white"></i>
                                                                                        </button>
                                                                                    </form>
                                                                                    <button
                                                                                        class="btn btn-info btn-sm rounded-pill ml-2 edit-comment"
                                                                                        data-comment-id="{{ $reply->id }}"
                                                                                        data-post-id="{{ $item->post_id }}">
                                                                                        <i
                                                                                            class="fas fa-edit text-white"></i>
                                                                                    </button>
                                                                                @endif
                                                                            </span>
                                                                        </div>
                                                                        <p class="comment-paragraph"
                                                                            id="comment-paragraph-{{ $reply->id }}">
                                                                            {{ $reply->reply }}</p>
                                                                        <textarea class="form-control comment-edit-textarea d-none" id="comment-edit-textarea-{{ $reply->id }}"
                                                                            rows="3">{{ $reply->reply }}</textarea>
                                                                        <div class="mt-2">
                                                                            <button
                                                                                class="btn btn-primary btn-sm rounded-pill mt-2 save-comment d-none"
                                                                                data-comment-id="{{ $reply->id }}"
                                                                                ata-post-id="{{ $item->post_id }}">Save</button>
                                                                            <button
                                                                                class="btn btn-secondary btn-sm rounded-pill mt-2 cancel-edit-comment d-none ml-2"
                                                                                data-comment-id="{{ $reply->id }}"
                                                                                ata-post-id="{{ $item->post_id }}">Cancel</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @endif
                                                        @endforeach

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
                                        <a href="/home/{{ $item->id }}" class="article-link">
                                            <img src="/images/{{ $item->image_path }}" alt="...">
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
                                <a href="/home/{{ $item->id }}" class="article-link">
                                    <div class="most-read-article">
                                        <img src="/images/{{ $item->image_path }}" alt="...">
                                        <div class="most-read-text">
                                            <h4 class="article-title">
                                                {{ $item->title }}
                                            </h4>
                                            <time
                                                datetime="01/01/2023">{{ date('d-m-y', strtotime($post->updated_at)) }}</time>
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

@section('script')

    <script>
        // show, hide the icon of edit , delete reply
        // const icon = document.querySelector('.edit-delete-reply-icon');
        // const container = document.querySelector('.edit-delete-reply-container');

        // icon.addEventListener('click', () => {
        //     container.style.display = container.style.display === 'none' ? 'flex' : 'none';
        // });

        // const buttons = container.querySelectorAll('button');
        // buttons.forEach((button) => {
        //     button.addEventListener('click', () => {
        //         container.style.display = 'none';
        //         icon.style.display = 'block';
        //     });
        // });


        // Handle edit comment button click
        $(document).on('click', '.edit-comment', function() {
            const commentId = $(this).data('comment-id');

            $(`#comment-paragraph-${commentId}`).addClass('d-none');
            $(`#comment-edit-textarea-${commentId}`).removeClass('d-none');
            $(`#comment-edit-textarea-${commentId}`).val($(`#comment-paragraph-${commentId}`).text().trim());
            $(this).addClass('d-none');
            $(this).siblings('.delete-form').addClass('d-none'); // add this line
            $(this).siblings('.reply-comment').addClass('d-none');

            $(`[data-comment-id="${commentId}"].save-comment`).removeClass('d-none');
            $(`[data-comment-id="${commentId}"].cancel-edit-comment`).removeClass('d-none');


        });

        // Handle cancel edit comment button click
        $(document).on('click', '.cancel-edit-comment', function() {
            const commentId = $(this).data('comment-id');
            $(`#comment-paragraph-${commentId}`).removeClass('d-none');
            $(`#comment-edit-textarea-${commentId}`).addClass('d-none');
            $(this).addClass('d-none');
            $(`[data-comment-id="${commentId}"].save-comment`).addClass('d-none');
            $(`[data-comment-id="${commentId}"].edit-comment`).removeClass('d-none');
            $('.delete-form').removeClass('d-none');
            $('.reply-comment').removeClass('d-none');

        });

        // Handle save comment button click
        $(document).on('click', '.save-comment', function() {
            const commentId = $(this).data('comment-id');

            const comment = $(`#comment-edit-textarea-${commentId}`).val().trim();
            if (comment !== '') {

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    url: `/comments/${commentId}`,
                    type: 'PUT',
                    data: {
                        comment: comment,

                    },
                    success: function(response) {
                        console.log(response);
                        if (response.status === 'success') {
                            $(`#comment-paragraph-${commentId}`).text(comment);
                            $(`#comment-paragraph-${commentId}`).removeClass('d-none');
                            $(`#comment-edit-textarea-${commentId}`).addClass('d-none');
                            $(`[data-comment-id="${commentId}"].save-comment`).addClass('d-none');
                            $(`[data-comment-id="${commentId}"].cancel-edit-comment`).addClass(
                                'd-none');
                            $(`[data-comment-id="${commentId}"].edit-comment`).removeClass('d-none');
                            $('.delete-form').removeClass('d-none');
                            $('.reply-comment').removeClass('d-none');

                        } else {
                            alert('Failed to update comment. Please try again later.');
                        }
                    },
                    error: function() {
                        alert('An error occurred while updating the comment. Please try again later.');
                    }
                });
            }
        });



        $(document).ready(function() {
            // Show reply form when clicking "Reply" button
            $('.reply-comment').on('click', function() {
                var commentId = $(this).data('comment-id');
                $(this).addClass('d-none');
                $('#reply-form-' + commentId).removeClass('d-none');
                $('.delete-form').addClass('d-none'); // edit-comment
                $('.edit-comment').addClass('d-none'); // edit-comment


            });

            // Hide reply form when clicking "Cancel" button
            $('.cancel-reply-comment').on('click', function() {
                var parentId = $(this).data('parent-id');
                // var commentId = $(this).data('comment-id');
                console.log(parentId);
                $('#reply-form-' + parentId).addClass('d-none');
                // $('#reply-form-' + commentId).addClass('d-none');
                console.log('#reply-form-' + parentId);
                $('.delete-form').removeClass('d-none');
                $('.edit-comment').removeClass('d-none');
                $('.reply-comment').removeClass('d-none');

            });


        });


        $(document).ready(function() {
            // Show/hide replies
            $('.show-replies').click(function() {
                var commentId = $(this).data('comment-id');
                var repliesSection = $('#replies-' + commentId);
                var show = $(this).data('show');

                if (show == 'false') {
                    repliesSection.removeClass('d-none');
                    $(this).text('Hide Replies');
                    $(this).data('show', 'true');
                } else {
                    repliesSection.addClass('d-none');
                    $(this).text('Show Replies');
                    $(this).data('show', 'false');
                }
            });
        });

        Livewire.on('commentAdded', () => {
            window.location.reload();
        });

        document.addEventListener('livewire:load', function() {
            Livewire.on('replyAdded', () => {
                Livewire.emit('refreshComments');
            });
        });

        Livewire.on('replyAdded', function() {
            $('#form-reply').hide();
            window.location.reload();
            $('.cancel-reply-comment').trigger('click');
        });
    </script>


@endsection
