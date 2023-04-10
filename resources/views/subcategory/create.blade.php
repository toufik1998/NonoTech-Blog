@extends('layouts.common-dash')

@section('title', 'Dashboard || Create category page')

@section('content')


	<!-- BEGIN #app -->
	<div id="app" class="app app-header-fixed app-sidebar-fixed">
		<!-- BEGIN #header -->
		<div id="header" class="app-header" style="background-color: #2D353C;">
			<!-- BEGIN navbar-header -->
			<div class="navbar-header">
				<a href="#" class="navbar-brand text-warning">NanoTech</a>
				<button type="button" class="navbar-mobile-toggler" data-toggle="app-sidebar-mobile">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
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

							<li><a href="{{ url('/category') }}" class="btn my-1 category-btn" style="width: 100%; border-bottom-right-radius: 0;"> Categories</a></li>
							<li><a href="{{ url('/adminboard') }}" class="btn post-btn" style="width: 100%; border-bottom-right-radius: 0;">Articles</a></li>
                            <li><a href="{{ url('/tag') }}" class="btn tag-btn mt-1" style="width: 100%; border-bottom-right-radius: 0;">Tags</a></li>
                            <li><a href={{route('subcategory.index')}} class="btn subcategory-btn  my-1" style="width: 100%; border-bottom-right-radius: 0;">SubCategories</a></li>

						</ul>

						<a href="#" class="icon-post text-center mb-3">
							<i class="fa-solid fa-blog  fa-2x text-warning"></i>
						</a>
						<a href="#" class="icon-post2 text-center mb-3">
							<i class="fa-brands fa-typo3 fa-2x text-warning"></i>
						</a>
                        <a href="#" class="icon-post3 text-center mb-3">
                            <i class="fa-solid fa-tag fa-2x text-warning"></i>
						</a>
                        <a href="#" class="icon-post4 text-center">
                            <i class="fa-solid fa-shapes fa-2x text-warning"></i>
						</a>


					</div>



					<!-- BEGIN minify-button -->
					<div class="menu-item d-flex">
						<a href="javascript:;" class="app-sidebar-minify-btn ms-auto toggler-btn" data-toggle="app-sidebar-minify"><i class="fa fa-angle-double-left"></i></a>
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
						<li class="breadcrumb-item active" style="color: #ff8906">NanoTech || Create Category </li>
					</ol>

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
											{{$categoryCount}}
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
										<i class="fa-solid fa-chart-bar text-danger fa-3x"></i>
									</div>
									<div class="text-end">
										<h3>
											{{$tagCount}}
										</h3>
										<p class="mb-0">Tags</p>
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
											{{$userCount}}
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


            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-12 col-md-8">
                        <form action="{{ url('subcategory') }}"  method="POST" id="form-task" enctype="multipart/form-data">
                            @csrf
                                <div class="modal-header border-0 bg-white">
                                    <h5 class="modal-title text-danger">Post</h5>
                                    <a href="#" class="btn-close" data-bs-dismiss="modal"></a>
                                </div>
                                <div class="modal-body">
                                        <!-- This Input Allows Storing Task Index  -->
                                        <input type="hidden" id="product-id" name="product-id">
                                        <div class="mb-3">
                                            <select name="category_id" class="form-control ">
                                                <option value="">Select</option>
                                                @foreach ($categories as $category)
                                                    <option value="{{$category->id}}">{{$category->category}}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label text-white">SubCategory Title</label>
                                            <input type="text" name="subcategory" class="form-control @error('subcategory') is-invalid @enderror" id="plat-name" value="{{ old('subcategory') }}"/>
                                            @error('subcategory')
                                                <div class="invalid-feedback text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>


                                </div>

                            <div class="modal-footer border-0">
                                <a href="#" class="btn btn-white" data-bs-dismiss="modal">Cancel</a>
                                <button type="submit" name="add-multiple-post" class="btn btn-primary task-action-btn" id="task-save-btn">Add SubCategory</button>
                            </div>
                        </form>
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




