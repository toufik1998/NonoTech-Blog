@extends('layouts.common-dash')

@section('title', 'Dashboard || Admin page')

@section('content')

    <!-- BEGIN #app -->
    <div id="app" class="app app-header-fixed app-sidebar-fixed">
        <!-- BEGIN #header -->
        <div id="header" class="app-header" style="background-color: #2D353C;">
            <!-- BEGIN navbar-header -->
            <div class="navbar-header">
                <a href="#" class="navbar-brand text-warning">NanoTech </a>
                <button type="button" class="navbar-mobile-toggler" data-toggle="app-sidebar-mobile">
                    <span class="icon-bar bg-warning"></span>
                    <span class="icon-bar bg-warning"></span>
                    <span class="icon-bar bg-warning"></span>
                </button>
            </div>
            <!-- END navbar-header -->
            <!-- BEGIN header-nav -->
            <div class="navbar-nav">

                <div class="navbar-item navbar-user dropdown">
                    <a href="#" class="navbar-link dropdown-toggle d-flex align-items-center"
                        data-bs-toggle="dropdown">
                        <img src="/images/{{ Auth::user()->profile_picture }}" alt="">
                        <span>
                            <span class="d-none d-md-inline text-warning">{{ Auth::user()->name }}</span>
                            <b class="caret text-warning"></b>
                        </span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-end me-1">
                        <x-responsive-nav-link :href="route('profile.edit')" class="dropdown-item">
                            {{ __('Profile') }}
                        </x-responsive-nav-link>
                        <a href="javascript:;" class="dropdown-item">Setting</a>
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
            </div>
            <!-- END header-nav -->
        </div>
        <!-- END #header -->

        <!-- BEGIN #sidebar -->
        <div id="sidebar" class="app-sidebar">
            <!-- BEGIN scrollbar -->
            <div class="app-sidebar-content" data-scrollbar="true" data-height="100%">
                <!-- BEGIN menu -->
                <div class="menu">
                    <div class="menu-profile">
                        <a href="javascript:;" class="menu-profile-link" data-toggle="app-sidebar-profile"
                            data-target="#appSidebarProfileMenu">
                            <div class="menu-profile-cover with-shadow"></div>
                            <div class="menu-profile-image">
                                <img src="/images/{{ Auth::user()->profile_picture }}" alt="">
                            </div>
                            <div class="menu-profile-info">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1">
                                        {{ Auth::user()->name }}
                                    </div>
                                    <div class="menu-caret ms-auto"></div>
                                </div>
                                <small>Front end developer</small>
                            </div>
                        </a>
                    </div>
                    <div id="appSidebarProfileMenu" class="collapse">
                        <div class="menu-item pt-5px">
                            <a href="javascript:;" class="menu-link">
                                <div class="menu-icon"><i class="fa fa-cog"></i></div>
                                <div class="menu-text">Settings</div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="javascript:;" class="menu-link">
                                <div class="menu-icon"><i class="fa fa-pencil-alt"></i></div>
                                <div class="menu-text"> Send Feedback</div>
                            </a>
                        </div>
                        <div class="menu-item pb-5px">
                            <a href="javascript:;" class="menu-link">
                                <div class="menu-icon"><i class="fa fa-question-circle"></i></div>
                                <div class="menu-text"> Helps</div>
                            </a>
                        </div>
                        <div class="menu-divider m-0"></div>
                    </div>

                    <div class="navigation-side">

                        <ul>

                            <li><a href="#" class="btn category-btn  my-1"
                                    style="width: 100%; border-bottom-right-radius: 0;">More settings</a></li>
                            <li><a href={{ route('blog.index') }} class="btn post-btn"
                                    style="width: 100%; border-bottom-right-radius: 0;">Articles</a></li>
                            <li><a href="{{ url('/') }}" class="btn  mt-1 tag-btn"
                                    style="width: 100%; border-bottom-right-radius: 0;">Home</a></li>
                            <li><a href="#" class="btn subcategory-btn  my-1"
                                    style="width: 100%; border-bottom-right-radius: 0;">More Features</a></li>

                        </ul>

                        <a href="#" class="icon-post text-center mb-3">
                            <i class="fa-solid fa-blog  fa-2x text-warning"></i>
                        </a>
                        <a href="#" class="icon-post2 text-center mb-3">
                            <i class="fa-brands fa-typo3 fa-2x text-warning"></i>
                        </a>
                        <a href="#" class="icon-post3 text-center mb-3">
                            <i class="fa-solid fa-house fa-2x text-warning"></i>
                        </a>
                        <a href="#" class="icon-post4 text-center">
                            <i class="fa-solid fa-shapes fa-2x text-warning"></i>
                        </a>

                    </div>



                    <!-- BEGIN minify-button -->
                    <div class="menu-item d-flex">
                        <a href="javascript:;" class="app-sidebar-minify-btn ms-auto toggler-btn"
                            data-toggle="app-sidebar-minify"><i class="fa fa-angle-double-left"></i></a>
                    </div>
                    <!-- END minify-button -->

                    <!-- BEGIN minify-button -->
                    <div class="menu-item d-flex">
                        <a href="javascript:;" class="app-sidebar-minify-btn ms-auto toggler-btn2"
                            data-toggle="app-sidebar-minify"><i class="fa fa-angle-double-left"></i></a>
                    </div>
                    <!-- END minify-button -->

                    <!-- BEGIN minify-button -->
                    <div class="menu-item d-flex">
                        <a href="javascript:;" class="app-sidebar-minify-btn ms-auto toggler-btn3"
                            data-toggle="app-sidebar-minify"><i class="fa fa-angle-double-left"></i></a>
                    </div>
                    <!-- END minify-button -->

                    <!-- BEGIN minify-button -->
                    <div class="menu-item d-flex">
                        <a href="javascript:;" class="app-sidebar-minify-btn ms-auto toggler-btn4"
                            data-toggle="app-sidebar-minify"><i class="fa fa-angle-double-left"></i></a>
                    </div>
                    <!-- END minify-button -->


                </div>
                <!-- END menu -->
            </div>
            <!-- END scrollbar -->
        </div>
        <div class="app-sidebar-bg"></div>
        <div class="app-sidebar-mobile-backdrop"><a href="#" data-dismiss="app-sidebar-mobile"
                class="stretched-link"></a></div>
        <!-- END #sidebar -->

        <!-- BEGIN #content -->
        <div id="content" class="app-content">
            <div class="d-flex align-items-center mb-3">
                <div>
                    <!-- BEGIN page-header -->
                    <h1 class="page-header mb-0" style="color: #ff8906">
                        Hi, Welcome {{ Auth::user()->name }}
                    </h1>
                    <!-- END page-header -->
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/" style="color: #f5be7f">Home</a></li>
                        <li class="breadcrumb-item active" style="color: #ff8906">NanoTech || Show Article </li>
                    </ol>

                </div>

                <div class="ms-auto">
                    <a href={{ url('/dashboard/create') }} id="addButton"
                        class="btn btn-rounded text-white px-4 rounded-pill mb-2" style="background-color: #ff8906"><i
                            class="fa fa-plus fa-lg me-2 ms-n2 text-white"></i> Add Post</a>

                </div>
            </div>

            <div class="container-fluid">
                <section>
                    <div class="row">
                        <div class="col-12 mt-3 mb-1">
                            <h5 class="text-uppercase" style="color: #ff8906">Minimal Statistics</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 col-sm-6 col-12 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between px-md-1">
                                        <div class="align-self-center">
                                            <i class="fa-brands fa-readme text-info fa-3x"></i>
                                        </div>
                                        <div class="text-end">
                                            <h3>
                                                {{ $postCount }}
                                            </h3>
                                            <p class="mb-0">Articles</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>
            </div>

            <div class="container">

                <div class="row justify-content-center">


                    <div class="head-post">
                        <h3 class="title-post text-white mb-3">{{ $post->title }}</h3>
                        <span>
                            <span class="text-white font-weight-bold">By:</span>
                            <span class="writer-name text-warning">{{ $post->user->name }} </span>
                            <span class="text-muted">On {{ date('d-m-y', strtotime($post->updated_at)) }}</span>

                        </span>
                    </div>

                    <div class="body-post">
                        <div class="image-post">
                            <img class="w-100" style="height: 70vh" src="/images/{{ $post->image_path }}"
                                alt="picture image">
                        </div>
                        <div class="p-post text-white py-4">
                            {!! $post->description !!}
                        </div>
                    </div>

                    <div class="form-group mb-3">
                        <label for="tags" class="text-white d-block mb-3 form-label">Tags:</label>
                        @foreach ($post->tags as $item)
                            <a href="#" id="addButton" class="btn btn-rounded text-white px-4 rounded-pill mb-2"
                                style="background-color: #ff8906">
                                <i class="fa-solid fa-tags"></i>
                                {{ $item->name }}
                            </a>
                        @endforeach
                    </div>

                    <div class="form-group mb-3">
                        <label for="tags" class="text-white d-block mb-3 form-label">Category:</label>

                        <a href="#" id="addButton" class="btn btn-rounded text-white px-4 rounded-pill mb-2"
                            style="background-color: #ff8906">
                            <i class="fa-solid fa-shapes"></i>
                            {{ $post->category->category }}
                        </a>

                    </div>


                    <div class="form-group mb-3">
                        <label for="tags" class="text-white d-block mb-3 form-label">SubCategory:</label>

                        <a href="#" id="addButton" class="btn btn-rounded text-white px-4 rounded-pill mb-2"
                            style="background-color: #ff8906">
                            <i class="fa-solid fa-shapes"></i>
                            {{ $post->SubCategory->subcategory }}
                        </a>

                    </div>


                    <div class="d-flex align-items-center bg-dark p-3 rounded">
                        <i class="fas fa-thumbs-up me-3 text-primary"></i>
                        <div class="text-white ">Likes<span class="ms-3">{{ $post->likes()->count() }}</span></div>
                    </div>
                </div>

            </div>

            <!-- section of table -->

        </div>
        <!-- END #content -->


        <!-- BEGIN scroll-top-btn -->
        <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top"
            data-toggle="scroll-to-top"><i class="fa fa-angle-up"></i></a>
        <!-- END scroll-top-btn -->
    </div>
    <!-- END #app -->




@endsection
