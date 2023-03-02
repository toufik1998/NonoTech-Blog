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
						<img src="../../images/user-15.jpg" alt="">
						<span>
                            <span class="d-none d-md-inline text-warning">{{ Auth::user()->name }}</span>
							<b class="caret text-warning"></b>
						</span>
					</a>
					<div class="dropdown-menu dropdown-menu-end me-1">
						<a href="javascript:;" class="dropdown-item">Edit Profile</a>
						<a href="javascript:;" class="dropdown-item">Setting</a>
						<div class="dropdown-divider"></div>
						<a href="./logout.php" class="dropdown-item">Log Out</a>
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
                                <img src="../../images/user-15.jpg" alt="">
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

							<li><a href="#" class="btn my-1 category-btn" style="width: 100%; border-bottom-right-radius: 0;">Articles</a></li>
							<li><a href="#" class="btn post-btn" style="width: 100%; border-bottom-right-radius: 0;">Categories</a></li>

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
						<a href="javascript:;" class="app-sidebar-minify-btn ms-auto toggler-btn" data-toggle="app-sidebar-minify"><i class="fa fa-angle-double-left"></i></a>
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
		<div id="content" class="app-content">
			<div class="d-flex align-items-center mb-3">
				<div>
					<!-- BEGIN page-header -->
					<h1 class="page-header mb-0" style="color: #ff8906">
						Hi, Welcome {{ Auth::user()->name }}
					</h1>
					<!-- END page-header -->
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:;" style="color: #f5be7f">Home</a></li>
						<li class="breadcrumb-item active" style="color: #ff8906">NanoTech || Create Category </li>
					</ol>

				</div>

			</div>


            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-12 col-md-8">
                        <form action="{{ url('category') }}"  method="POST" id="form-task" enctype="multipart/form-data">
                            @csrf
                                <div class="modal-header border-0 bg-white">
                                    <h5 class="modal-title text-danger">Post</h5>
                                    <a href="#" class="btn-close" data-bs-dismiss="modal"></a>
                                </div>
                                <div class="modal-body">
                                        <!-- This Input Allows Storing Task Index  -->
                                        <input type="hidden" id="product-id" name="product-id">
                                        <div class="mb-3">
                                            <label class="form-label text-white">Category title</label>
                                            <input type="text" name="category" class="form-control" id="plat-name"/>
                                        </div>


                                </div>

                            <div class="modal-footer border-0">
                                <a href="#" class="btn btn-white" data-bs-dismiss="modal">Cancel</a>
                                <button type="submit" name="add-multiple-post" class="btn btn-primary task-action-btn" id="task-save-btn">Add Category</button>
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




