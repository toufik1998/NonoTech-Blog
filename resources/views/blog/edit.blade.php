{{-- @extends('layouts.common')
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
                        <img src="/images/{{  Auth::user()->profile_picture }}" alt="">
						<span>
                            <span class="d-none d-md-inline text-warning">{{ Auth::user()->name }}</span>
							<b class="caret text-warning"></b>
						</span>
					</a>

                    <div class="dropdown-menu dropdown-menu-end me-1">
                        <x-responsive-nav-link :href="route('profile.edit')" class="dropdown-item">
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
                                                this.closest('form').submit();" class="dropdown-item">
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


						<ul>

							<li><a href="#" class="btn category-btn  my-1" style="width: 100%; border-bottom-right-radius: 0;">More settings</a></li>
							<li><a href={{route('blog.index')}} class="btn post-btn" style="width: 100%; border-bottom-right-radius: 0;">Articles</a></li>

						</ul>

						<a href="#" class="icon-post text-center mb-3">
							<i class="fa-solid fa-blog  fa-2x text-warning"></i>
						</a>
						<a href="#" class="icon-post2 text-center">
							<i class="fa-brands fa-typo3 fa-2x text-warning"></i>
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
						<li class="breadcrumb-item active" style="color: #ff8906">NanoTech || Edit Article </li>
					</ol>

				</div>

				<div class="ms-auto">
				<a href={{ url('/dashboard/create') }} id="addButton"  class="btn btn-rounded text-white px-4 rounded-pill mb-2" style="background-color: #ff8906"><i class="fa fa-plus fa-lg me-2 ms-n2 text-white"></i> Add Post</a>
                {{-- <a href={{ url('/category/create') }} id="addButton"  class="btn btn-rounded text-white px-4 rounded-pill mb-2" style="background-color: #ff8906"><i class="fa fa-plus fa-lg me-2 ms-n2 text-white"></i> Add Category</a> --}}

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
										{{$postCount}}
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

						<div class="col-xl-3 col-sm-6 col-12 mb-4">
							<div class="card">
								<div class="card-body">
									<div class="d-flex justify-content-between px-md-1">
									<div class="align-self-center">
										<i class="fa-solid fa-lock-open text-warning fa-3x"></i>
									</div>
									<div class="text-end">
										<h3>
											3
										</h3>
										<p class="mb-0">Users</p>
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
				{{-- <div class="row">
					<div class="col-sm-12 col-md-7 col-lg-5">
						<form action="" method="POST" class="d-flex">
							<input class="form-control me-2" name="search" type="search" placeholder="Search for post" aria-label="Search">
							<button class="btn btn-outline-warning" name="show" type="submit">Search</button>
						</form>
					</div>
				</div> --}}
                <div class="row justify-content-center">
                    <div class="col-sm-12 col-md-8">
                        <form action="/blog/{{$post->id}}"  method="POST" id="form-task" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                                <div class="modal-header border-0 bg-white">
                                    <h5 class="modal-title text-danger">Update Post</h5>
                                    <a href="#" class="btn-close" data-bs-dismiss="modal"></a>
                                </div>
                                <div class="modal-body">
                                        <!-- This Input Allows Storing Task Index  -->
                                        <input type="hidden" id="product-id" name="product-id">
                                        {{-- <div class="mb-3">
                                            <label class="form-label text-white">Post Title</label>
                                            <input type="text" name="title" value="{{$post->title}}" class="form-control" id="post-title"/>
                                        </div> --}}

                                        <div class="mb-3">
                                            <label class="form-label text-white" for="plat-name">Post title</label>
                                            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="plat-name" value="{{ old('title', $post->title) }}"/>
                                            @error('title')
                                                <div class="invalid-feedback text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>


                                        {{-- <div class="mb-3">
                                            <label class="form-label text-white">Post Category</label>
                                            <select class="form-select" name="category_id" id="post-status">
                                                <option value="">Please select</option>

                                                @foreach($categories as $item)
                                                        <option value="{{$item->id}}"> {{$item->category}} </option>

                                                @endforeach
                                            </select>
                                        </div> --}}

                                        <div class="mb-3">
                                            <label class="form-label text-white">Post Category</label>
                                            <select class="form-select @error('category_id') is-invalid @enderror" name="category_id" id="post-status">
                                                <option value="">Please select</option>

                                                @foreach($categories as $item)
                                                    <option value="{{$item->id}}" {{ (old('category_id') ?? $post->category_id) == $item->id ? 'selected' : '' }}> {{$item->category}} </option>
                                                @endforeach
                                            </select>

                                            @error('category_id')
                                                <div class="invalid-feedback text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        {{-- <div class="form-group mb-3">
                                            <label for="tags" class="text-white d-block mb-3 form-label">Tags:</label>
                                            @foreach($tags as $item)
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input cursor-pointer" type="checkbox" name="tags[]" value="{{ $item->id }}" id="{{ $item->name }}"
                                                {{ collect(old('tags'))->contains($item->id) ? 'checked' : '' }}>
                                              <label class="form-check-label text-white" for="{{ $item->name }}">
                                                {{ $item->name }}
                                              </label>
                                            </div>
                                            @endforeach
                                        </div> --}}

                                        <div class="form-group mb-3">
                                            <label for="tags" class="text-white d-block mb-3 form-label">Tags:</label>
                                            @foreach($tags as $item)
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input cursor-pointer" type="checkbox" name="tags[]" value="{{ $item->id }}" id="{{ $item->name }}"
                                                    {{ in_array($item->id, $post->tags->pluck('id')->toArray()) ? 'checked' : '' }}>
                                                    <label class="form-check-label text-white" for="{{ $item->name }}">
                                                        {{ $item->name }}
                                                    </label>
                                                </div>
                                            @endforeach
                                            @error('tags')
                                                <div class="invalid-feedback text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        {{-- <div class="mb-3">
                                            <label class="form-label text-white">Post Content</label>
                                            <textarea class="form-control" name="description" rows="10" id="editor">{{$post->description}}</textarea>
                                        </div> --}}

                                        <div class="mb-3">
                                            <label class="form-label text-white">Post Content</label>
                                            <textarea class="form-control @error('description') is-invalid @enderror" name="description" rows="10" id="editor">
                                                {{ old('description', $post->description) }}
                                            </textarea>
                                            @error('description')
                                                <div class="invalid-feedback text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        {{-- <div class="mb-0 w-50">
                                            <label class="form-label text-white">Post Image</label>
                                            <input type="file" name="image_path" class="form-control" id="image_path"/>
                                        </div> --}}

                                        <div class="mb-0">
                                            <label class="form-label text-white">Post Image</label>
                                            <input type="file" name="image_path" class="form-control @error('image_path') is-invalid @enderror" id="plat-image"/>
                                            @error('image_path')
                                                <div class="invalid-feedback text-danger">{{ $message }}</div>
                                            @enderror
                                            @if ($post->image_path)
                                                <div class="mt-2">
                                                    {{-- <img src="{{ asset($post->image_path) }}" alt="Post Image" width="150"> --}}
                                                    <img src="../../images/{{$post->image_path}}" alt="Post Image"
                                                        style="width: 75px; height: 75px"
                                                        class="rounded-circle bg-white"
                                                    >
                                                </div>
                                            @endif
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

			<!-- section of table -->

		</div>
		<!-- END #content -->


		<!-- BEGIN scroll-top-btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top" data-toggle="scroll-to-top"><i class="fa fa-angle-up"></i></a>
		<!-- END scroll-top-btn -->
	</div>
	<!-- END #app -->




@endsection


@section('script')
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>

@endsection
