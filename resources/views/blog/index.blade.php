{{-- @extends('layouts.common')
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

                    <form method="POST" action="{{ route('logout') }}" class="d-inline">
                        @csrf

                        <a href="{{route('logout')}}" onclick="event.preventDefault();
                        this.closest('form').submit();" class="btn "> {{ __('Log Out') }}</a>

                    </form>

                    <a href="{{ url('/dashboard') }}" class="btn ">Dashboard</a>


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

                @if(Auth::check())
                    <a href="/blog/create" class="btn">Create Article</a>
                @endif

                @foreach ($posts as $post)
                    <div class="row my-4">
                        <div class="col-sm-12 col-md-6">
                            <img class="w-100" src="/images/{{$post->image_path}}" alt="picture image" >
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <h3 class="title-post text-white mb-3">{{$post->title}}</h3>
                            <span>
                                <span class="text-white font-weight-bold">By:</span>
                                <span class="writer-name text-warning">{{$post->user->name}} </span>
                                <span class="text-muted">On {{date('d-m-y', strtotime($post->updated_at))}}</span>
                                <p class="p-post text-white py-2">
                                    {{$post->description}}
                                </p>
                                <a href="/blog/{{$post->slug}}" class="btn">Read More</a>
                            </span>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </main>

@endsection --}}



@extends('layouts.common-dash')

@section('title', 'Dashboard || Admin page')

@section('content')

	<!-- BEGIN #app -->
	<div id="app" class="app app-header-fixed app-sidebar-fixed" >
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
					<a href="#" class="navbar-link dropdown-toggle d-flex align-items-center" data-bs-toggle="dropdown">
						{{-- <img src="../../images/user-15.jpg" alt=""> --}}
                        <img src="/images/{{  Auth::user()->profile_picture }}" alt="">

						<span>
                            <span class="d-none d-md-inline text-warning">{{ Auth::user()->name }}</span>
							<b class="caret text-warning"></b>
						</span>
					</a>
					<div class="dropdown-menu dropdown-menu-end me-1">
                        <x-responsive-nav-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-responsive-nav-link>
						{{-- <a href="javascript:;" class="dropdown-item">Edit Profile</a> --}}
						<a href="javascript:;" class="dropdown-item">Setting</a>
						<div class="dropdown-divider"></div>
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-responsive-nav-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-responsive-nav-link>
                        </form>
						{{-- <a href="./logout.php" class="dropdown-item">Log Out</a> --}}
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
						<a href="javascript:;" class="menu-profile-link" data-toggle="app-sidebar-profile" data-target="#appSidebarProfileMenu">
							<div class="menu-profile-cover with-shadow"></div>
							<div class="menu-profile-image">
                                <img src="/images/{{  Auth::user()->profile_picture }}" alt="">
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


						{{-- <ul>

							<li><a href="#" class="btn category-btn  my-1" style="width: 100%; border-bottom-right-radius: 0;">More Settings</a></li>
                            <li><a href="#" class="btn post-btn  my-1" style="width: 100%; border-bottom-right-radius: 0;">Articles</a></li>


						</ul> --}}

                        <ul>

							<li><a href="#" class="btn category-btn  my-1" style="width: 100%; border-bottom-right-radius: 0;">More settings</a></li>
							<li><a href={{route('blog.index')}} class="btn post-btn" style="width: 100%; border-bottom-right-radius: 0;">Articles</a></li>
                            <li><a href="{{ url('/') }}" class="btn  mt-1 tag-btn" style="width: 100%; border-bottom-right-radius: 0;">Home</a></li>
                            <li><a href="#" class="btn subcategory-btn  my-1" style="width: 100%; border-bottom-right-radius: 0;">More Features</a></li>

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
						<a href="javascript:;"  class="app-sidebar-minify-btn ms-auto toggler-btn" data-toggle="app-sidebar-minify"><i class="fa fa-angle-double-left"></i></a>
					</div>
					<!-- END minify-button -->

					<!-- BEGIN minify-button -->
					<div class="menu-item d-flex">
						<a href="javascript:;"  class="app-sidebar-minify-btn ms-auto toggler-btn2" data-toggle="app-sidebar-minify"><i class="fa fa-angle-double-left"></i></a>
					</div>
					<!-- END minify-button -->

                    <!-- BEGIN minify-button -->
					<div class="menu-item d-flex">
						<a href="javascript:;"  class="app-sidebar-minify-btn ms-auto toggler-btn3" data-toggle="app-sidebar-minify"><i class="fa fa-angle-double-left"></i></a>
					</div>
					<!-- END minify-button -->

                    <!-- BEGIN minify-button -->
					<div class="menu-item d-flex">
						<a href="javascript:;"  class="app-sidebar-minify-btn ms-auto toggler-btn4" data-toggle="app-sidebar-minify"><i class="fa fa-angle-double-left"></i></a>
					</div>
					<!-- END minify-button -->
				</div>
				<!-- END menu -->
			</div>
			<!-- END scrollbar -->
		</div>
		<div class="app-sidebar-bg"></div>
		<div class="app-sidebar-mobile-backdrop"><a href="#" data-dismiss="app-sidebar-mobile" class="stretched-link"></a></div>
		<!-- END #sidebar -->

		<!-- BEGIN #content -->
		<div id="content" class="app-content" >
			<div class="d-flex align-items-center mb-3">
				<div>
					<!-- BEGIN page-header -->
					<h1 class="page-header mb-0" style="color: #ff8906">
						Hi, Welcome {{ Auth::user()->name }}
					</h1>
					<!-- END page-header -->
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="/" style="color: #f5be7f">Home</a></li>
						<li class="breadcrumb-item active" style="color: #ff8906">NanoTech || Articles </li>
					</ol>

				</div>

				<div class="ms-auto">
				<a href={{ url('/blog/create') }} id="addButton"  class="btn btn-rounded text-white px-4 rounded-pill mb-2" style="background-color: #ff8906"><i class="fa fa-plus fa-lg me-2 ms-n2 text-white"></i> Add Post</a>

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
                                        {{$posts->count()}}
									</h3>
									<p class="mb-0">Articles</p>
								</div>
								</div>
							</div>
						   </div>
						</div>
						<div class="col-xl-3 col-sm-6 col-12 mb-4">
							<div class="card">
								<div class="card-body">
									<div class="d-flex justify-content-between px-md-1">
									<div class="align-self-center">
										<i class="fa-solid fa-chart-bar text-danger fa-3x"></i>
									</div>
									<div class="text-end">
										<h3>
											3
										</h3>
										<p class="mb-0">Categories</p>
									</div>
									</div>
								</div>
							</div>
						</div>


					</div>
				</section>
			</div>

			<!-- section of Search for posts -->
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-7 col-lg-5">
						<form action="{{ url('blog') }}" method="GET" class="d-flex">
							<input class="form-control me-2" name="searchQuery" type="search" placeholder="Search for tag" aria-label="Search">
							<button class="btn btn-outline-warning"  type="submit">Search</button>
						</form>
					</div>
				</div>
			</div>

			<!-- section of table -->
			<div class="container-fluid my-2 section-table">
				<div class="row">
					<div class="col">
						<div class="shadow-4 rounded-5 overflow-hidden">
							<div class="table-responsive">
								<table class="table align-middle mb-0" style="background-color: #2F3843; border-radius: 1rem;">
									<thead class="text-white-50" style="background-color:  #2F3843; border-radius: 1rem;">
										<tr style="color: #8D949D;">
										<th>Title</th>
										<th>Description</th>
                                        <th>Category</th>
										<th>Created By:</th>
										<th>Actions</th>
										</tr>
									</thead>
									<tbody>

                                        @foreach($posts as $item)

                                            {{-- @if ($item->user_id == Auth::user()->id) --}}

                                                <tr style="color: #fff; border-bottom: black;">
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <img
                                                            {{-- <img src="{{ url('public/images/'.$item->image) }}" --}}

                                                                src="../../images/{{$item->image_path}}"
                                                                alt=""
                                                                style="width: 75px; height: 75px"
                                                                class="rounded-circle bg-white"
                                                            />
                                                            <div class="ms-3">
                                                                <p class="fw-bold mb-1">{{ $item->title }}</p>
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <span class="badge badge-success rounded-pill ms-4">{!! $item->description !!}</span>
                                                    </td>

                                                    <td>
                                                        <span class="badge badge-success rounded-pill ms-4">{{ $item->category->category }}</span>
                                                    </td>
                                                    <td>
                                                        <p class="fw-normal mb-1 ms-2">{{ $item->user->name }}</p>
                                                    </td>
                                                    <td>
                                                        <a href="/blog/{{$item->id}}" class="btn bg-success text-white btn-sm btn-rounded mt-2">
                                                            <i class="fa-regular fa-eye text-white"></i>
                                                        </a>


                                                            <a href="{{ url('blog/' . $item->id . '/edit') }}" class="btn bg-success text-white btn-sm btn-rounded mt-2">
                                                                <input type="hidden" name="update-id" value="{{$item->id}}">
                                                                <i class="fa-sharp fa-solid fa-pen-to-square text-white"></i>
                                                            </a>
                                                            {{-- <button type="button" id="update-btn" onclick="editTask({{$item->id}})" class="btn bg-success text-white btn-sm btn-rounded mt-2" data-bs-toggle="modal" data-bs-target="#modal-task">
                                                                <input type="hidden" name="update-id" value="{{$item->id}}">
                                                                <i class="fa-sharp fa-solid fa-pen-to-square text-white"></i>
                                                            </button> --}}
                                                        <form method="post" action="{{ url('/blog' . '/' . $item->id) }}" style="display: inline;">
                                                            @csrf
                                                            @method("DELETE")
                                                            {{-- <button type="submit" name="delete" id="buttonDelete" class="d-none">
                                                                <input type="hidden" name="delete-id" value="{{$item->id}}">
                                                            </button> --}}
                                                            <button type="submit"  name="delete" onclick="return confirm('Confirm delete?')" class="btn bg-danger text-white btn-sm btn-rounded mt-2 ">
                                                                <input type="hidden" name="delete-id" value="{{$item->id}}">
                                                                <i class="fa-solid fa-trash text-white"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            {{-- @endif --}}
                                        @endforeach

									</tbody>
								</table>

                                <div class="d-flex justify-content-center my-3">
                                    <nav aria-label="...">
                                        <ul class="pagination">
                                            @if ($posts->onFirstPage())
                                                <li class="page-item disabled"><span class="page-link">&laquo;</span></li>
                                            @else
                                                <li class="page-item"><a class="page-link" href="{{ $posts->previousPageUrl() }}" rel="prev">&laquo;</a></li>
                                            @endif

                                            @foreach ($posts as $key => $post)
                                                <li class="page-item"><a class="page-link" href="#">{{ $key + 1 }}</a></li>
                                            @endforeach

                                            @if ($posts->hasMorePages())
                                                <li class="page-item"><a class="page-link" href="{{ $posts->nextPageUrl() }}" rel="next">&raquo;</a></li>
                                            @else
                                                <li class="page-item disabled"><span class="page-link">&raquo;</span></li>
                                            @endif
                                        </ul>
                                    </nav>
                                </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END #content -->


		<!-- BEGIN scroll-top-btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top" data-toggle="scroll-to-top"><i class="fa fa-angle-up"></i></a>
		<!-- END scroll-top-btn -->
	</div>
	<!-- END #app -->




@endsection



