<?php
require('include/c_config.php');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- Mirrored from loopinfosol.in/themeforest/ekka-html-v33/ekka-admin/product-add.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 02 Dec 2022 06:48:59 GMT -->
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="Ekka - Admin Dashboard HTML Template.">

	<title>Ekka - Admin Dashboard HTML Template.</title>

	<!-- GOOGLE FONTS -->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&amp;family=Poppins:wght@300;400;500;600;700;800;900&amp;family=Roboto:wght@400;500;700;900&amp;display=swap" rel="stylesheet">

	<link href="../../../../cdn.jsdelivr.net/npm/%40mdi/font%404.4.95/css/materialdesignicons.min.css" rel="stylesheet" />

	<!-- PLUGINS CSS STYLE -->
	<link href="assets/plugins/simplebar/simplebar.css" rel="stylesheet" />

	<!-- ekka CSS -->
	<link id="ekka-css" rel="stylesheet" href="assets/css/ekka.css" />

	<!-- FAVICON -->
	<link href="assets/img/favicon.png" rel="shortcut icon" />

</head>

<body class="ec-header-fixed ec-sidebar-fixed ec-sidebar-dark ec-header-light" id="body">

	<!-- WRAPPER -->
	<div class="wrapper">

		<!-- LEFT MAIN SIDEBAR -->
		<?php include('include/sidebar.php') ?>

		<!-- PAGE WRAPPER -->
		<div class="ec-page-wrapper">

			<!-- Header -->
			<header class="ec-main-header" id="header">
				<nav class="navbar navbar-static-top navbar-expand-lg">
					<!-- Sidebar toggle button -->
					<button id="sidebar-toggler" class="sidebar-toggle"></button>
					<!-- search form -->
					<div class="search-form d-lg-inline-block">
						<div class="input-group">
							<input type="text" name="query" id="search-input" class="form-control"
							placeholder="search.." autofocus autocomplete="off" />
							<button type="button" name="search" id="search-btn" class="btn btn-flat">
								<i class="mdi mdi-magnify"></i>
							</button>
						</div>
						<div id="search-results-container">
							<ul id="search-results"></ul>
						</div>
					</div>

					<!-- navbar right -->
					<div class="navbar-right">
						<ul class="nav navbar-nav">
							<!-- User Account -->
							<li class="dropdown user-menu">
								<button class="dropdown-toggle nav-link ec-drop" data-bs-toggle="dropdown"
								aria-expanded="false">
								<img src="assets/img/user/user.png" class="user-image" alt="User Image" />
							</button>
							<ul class="dropdown-menu dropdown-menu-right ec-dropdown-menu">
								<!-- User image -->
								<li class="dropdown-header">
									<img src="assets/img/user/user.png" class="img-circle" alt="User Image" />
									<div class="d-inline-block">
										John Deo <small class="pt-1">john.example@gmail.com</small>
									</div>
								</li>
								<li>
									<a href="user-profile.html">
										<i class="mdi mdi-account"></i> My Profile
									</a>
								</li>
								<li>
									<a href="#">
										<i class="mdi mdi-email"></i> Message
									</a>
								</li>
								<li>
									<a href="#"> <i class="mdi mdi-diamond-stone"></i> Projects </a>
								</li>
								<li class="right-sidebar-in">
									<a href="javascript:0"> <i class="mdi mdi-settings-outline"></i> Setting </a>
								</li>
								<li class="dropdown-footer">
									<a href="index.html"> <i class="mdi mdi-logout"></i> Log Out </a>
								</li>
							</ul>
						</li>
						<li class="dropdown notifications-menu custom-dropdown">
							<button class="dropdown-toggle notify-toggler custom-dropdown-toggler">
								<i class="mdi mdi-bell-outline"></i>
							</button>

							<div class="card card-default dropdown-notify dropdown-menu-right mb-0">
								<div class="card-header card-header-border-bottom px-3">
									<h2>Notifications</h2>
								</div>

								<div class="card-body px-0 py-0">
									<ul class="nav nav-tabs nav-style-border p-0 justify-content-between" id="myTab"
									role="tablist">
									<li class="nav-item mx-3 my-0 py-0">
										<a href="#" class="nav-link active pb-3" id="home2-tab"
										data-bs-toggle="tab" data-bs-target="#home2" role="tab"
										aria-controls="home2" aria-selected="true">All (10)</a>
									</li>

									<li class="nav-item mx-3 my-0 py-0">
										<a href="#" class="nav-link pb-3" id="profile2-tab" data-bs-toggle="tab"
										data-bs-target="#profile2" role="tab" aria-controls="profile2"
										aria-selected="false">Msgs (5)</a>
									</li>

									<li class="nav-item mx-3 my-0 py-0">
										<a href="#" class="nav-link pb-3" id="contact2-tab" data-bs-toggle="tab"
										data-bs-target="#contact2" role="tab" aria-controls="contact2"
										aria-selected="false">Others (5)</a>
									</li>
								</ul>

								<div class="tab-content" id="myTabContent3">
									<div class="tab-pane fade show active" id="home2" role="tabpanel"
									aria-labelledby="home2-tab">
									<ul class="list-unstyled" data-simplebar style="height: 360px">
										<li>
											<a href="javscript:void(0)"
											class="media media-message media-notification">
											<div class="position-relative mr-3">
												<img class="rounded-circle" src="assets/img/user/u2.jpg"
												alt="Image">
												<span class="status away"></span>
											</div>
											<div class="media-body d-flex justify-content-between">
												<div class="message-contents">
													<h4 class="title">Nitin</h4>
													<p class="last-msg">Lorem ipsum dolor sit, amet
														consectetur adipisicing elit. Nam itaque
													doloremque odio, eligendi delectus vitae.</p>

													<span
													class="font-size-12 font-weight-medium text-secondary">
													<i class="mdi mdi-clock-outline"></i> 30 min
													ago...
												</span>
											</div>
										</div>
									</a>
								</li>

								<li>
									<a href="javscript:void(0)"
									class="media media-message media-notification media-active">
									<div class="position-relative mr-3">
										<img class="rounded-circle" src="assets/img/user/u1.jpg"
										alt="Image">
										<span class="status active"></span>
									</div>
									<div class="media-body d-flex justify-content-between">
										<div class="message-contents">
											<h4 class="title">Lovina</h4>
											<p class="last-msg">Donec mattis augue a nisl
												consequat, nec imperdiet ex rutrum. Fusce et
											vehicula enim. Sed in enim eu odio vehic.</p>

											<span
											class="font-size-12 font-weight-medium text-white">
											<i class="mdi mdi-clock-outline"></i> Just
											now...
										</span>
									</div>
								</div>
							</a>
						</li>

						<li>
							<a href="javscript:void(0)"
							class="media media-message media-notification">
							<div class="position-relative mr-3">
								<img class="rounded-circle" src="assets/img/user/u5.jpg"
								alt="Image">
								<span class="status away"></span>
							</div>
							<div class="media-body d-flex justify-content-between">
								<div class="message-contents">
									<h4 class="title">Crinali</h4>
									<p class="last-msg">Lorem ipsum dolor sit, amet
										consectetur adipisicing elit. Nam itaque
									doloremque odio, eligendi delectus vitae.</p>

									<span
									class="font-size-12 font-weight-medium text-secondary">
									<i class="mdi mdi-clock-outline"></i> 1 hrs
									ago...
								</span>
							</div>
						</div>
					</a>
				</li>

				<li>
					<a href="javscript:void(0)"
					class="media media-message media-notification event-active">

					<div
					class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-info text-white">
					<i class="mdi mdi-calendar-check font-size-20"></i>
				</div>

				<div class="media-body d-flex justify-content-between">
					<div class="message-contents">
						<h4 class="title">Upcomming event added</h4>
						<p class="last-msg font-size-14">03/Jan/2020 (1pm -
						2pm)</p>

						<span
						class="font-size-12 font-weight-medium text-secondary">
						<i class="mdi mdi-clock-outline"></i> 10 min
						ago...
					</span>
				</div>
			</div>
		</a>
	</li>

	<li>
		<a href="javscript:void(0)"
		class="media media-message media-notification">

		<div
		class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-warning text-white">
		<i class="mdi mdi-chart-areaspline font-size-20"></i>
	</div>

	<div class="media-body d-flex justify-content-between">
		<div class="message-contents">
			<h4 class="title">Yearly Sales report</h4>
			<p class="last-msg font-size-14">Lorem ipsum dolor
				sit, amet consectetur adipisicing elit. Nam
				itaque doloremque odio, eligendi delectus vitae.
			</p>

			<span
			class="font-size-12 font-weight-medium text-secondary">
			<i class="mdi mdi-clock-outline"></i> 1 hrs
			ago...
		</span>
	</div>
</div>
</a>
</li>

<li>
	<a href="javscript:void(0)"
	class="media media-message media-notification">

	<div
	class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-primary text-white">
	<i
	class="mdi mdi-account-multiple-check font-size-20"></i>
</div>

<div class="media-body d-flex justify-content-between">
	<div class="message-contents">
		<h4 class="title">New request</h4>
		<p class="last-msg font-size-14">Add Dany Jones as
			your contact consequat nec imperdiet ex rutrum.
		Fusce et vehicula enim. Sed in enim.</p>

		<span
		class="my-1 btn btn-sm btn-success">Accept</span>
		<span
		class="my-1 btn btn-sm btn-secondary">Delete</span>

		<span
		class="font-size-12 font-weight-medium text-secondary d-block">
		<i class="mdi mdi-clock-outline"></i> 5 min
		ago...
	</span>
</div>
</div>
</a>
</li>

<li>
	<a href="javscript:void(0)"
	class="media media-message media-notification">

	<div
	class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-danger text-white">
	<i class="mdi mdi-server-network-off font-size-20"></i>
</div>

<div class="media-body d-flex justify-content-between">
	<div class="message-contents">
		<h4 class="title">Server overloaded</h4>
		<p class="last-msg font-size-14">Donec mattis augue
			a nisl consequat, nec imperdiet ex rutrum. Fusce
		et vehicula enim. Sed in enim eu odio vehic.</p>

		<span
		class="font-size-12 font-weight-medium text-secondary">
		<i class="mdi mdi-clock-outline"></i> 30 min
		ago...
	</span>
</div>
</div>
</a>
</li>

<li>
	<a href="javscript:void(0)"
	class="media media-message media-notification">

	<div
	class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-purple text-white">
	<i class="mdi mdi-playlist-check font-size-20"></i>
</div>

<div class="media-body d-flex justify-content-between">
	<div class="message-contents">
		<h4 class="title">Task complete</h4>
		<p class="last-msg font-size-14">Nam ut nisi erat.
			Ut quis tortor varius, hendrerit arcu quis,
		congue nisl. In scelerisque, sem ut ve.</p>

		<span
		class="font-size-12 font-weight-medium text-secondary">
		<i class="mdi mdi-clock-outline"></i> 2 hrs
		ago...
	</span>
</div>
</div>
</a>
</li>

</ul>
</div>

<div class="tab-pane fade" id="profile2" role="tabpanel"
aria-labelledby="profile2-tab">
<ul class="list-unstyled" data-simplebar style="height: 360px">
	<li>
		<a href="javscript:void(0)"
		class="media media-message media-notification">
		<div class="position-relative mr-3">
			<img class="rounded-circle" src="assets/img/user/u6.jpg"
			alt="Image">
			<span class="status away"></span>
		</div>
		<div class="media-body d-flex justify-content-between">
			<div class="message-contents">
				<h4 class="title">Hardiko</h4>
				<p class="last-msg">Donec mattis augue a nisl
					consequat, nec imperdiet ex rutrum. Fusce et
				vehicula enim. Sed in enim eu odio vehic.</p>

				<span
				class="font-size-12 font-weight-medium text-secondary">
				<i class="mdi mdi-clock-outline"></i> 1 hrs
				ago...
			</span>
		</div>
	</div>
</a>
</li>

<li>
	<a href="javscript:void(0)"
	class="media media-message media-notification">
	<div class="position-relative mr-3">
		<img class="rounded-circle" src="assets/img/user/u7.jpg"
		alt="Image">
		<span class="status away"></span>
	</div>
	<div class="media-body d-flex justify-content-between">
		<div class="message-contents">
			<h4 class="title">Browin</h4>
			<p class="last-msg">Nam ut nisi erat. Ut quis tortor
				varius, hendrerit arcu quis, congue nisl. In
			scelerisque, sem ut ve.</p>

			<span
			class="font-size-12 font-weight-medium text-secondary">
			<i class="mdi mdi-clock-outline"></i> 1 hrs
			ago...
		</span>
	</div>
</div>
</a>
</li>

<li>
	<a href="javscript:void(0)"
	class="media media-message media-notification media-active">
	<div class="position-relative mr-3">
		<img class="rounded-circle" src="assets/img/user/u1.jpg"
		alt="Image">
		<span class="status active"></span>
	</div>
	<div class="media-body d-flex justify-content-between">
		<div class="message-contents">
			<h4 class="title">jenelia</h4>
			<p class="last-msg">Donec mattis augue a nisl
				consequat, nec imperdiet ex rutrum. Fusce et
			vehicula enim. Sed in enim eu odio vehic.</p>

			<span
			class="font-size-12 font-weight-medium text-white">
			<i class="mdi mdi-clock-outline"></i> Just
			now...
		</span>
	</div>
</div>
</a>
</li>

<li>
	<a href="javscript:void(0)"
	class="media media-message media-notification">
	<div class="position-relative mr-3">
		<img class="rounded-circle" src="assets/img/user/u2.jpg"
		alt="Image">
		<span class="status away"></span>
	</div>
	<div class="media-body d-flex justify-content-between">
		<div class="message-contents">
			<h4 class="title">Bhavlio</h4>
			<p class="last-msg">Lorem ipsum dolor sit, amet
				consectetur adipisicing elit. Nam itaque
			doloremque odio, eligendi delectus vitae.</p>

			<span
			class="font-size-12 font-weight-medium text-secondary">
			<i class="mdi mdi-clock-outline"></i> 1 hrs
			ago...
		</span>
	</div>
</div>
</a>
</li>

<li>
	<a href="javscript:void(0)"
	class="media media-message media-notification">
	<div class="position-relative mr-3">
		<img class="rounded-circle" src="assets/img/user/u5.jpg"
		alt="Image">
		<span class="status away"></span>
	</div>
	<div class="media-body d-flex justify-content-between">
		<div class="message-contents">
			<h4 class="title">Browini</h4>
			<p class="last-msg">Lorem ipsum dolor sit, amet
				consectetur adipisicing elit. Nam itaque
			doloremque odio, eligendi delectus vitae.</p>

			<span
			class="font-size-12 font-weight-medium text-secondary">
			<i class="mdi mdi-clock-outline"></i> 1 hrs
			ago...
		</span>
	</div>
</div>
</a>
</li>

</ul>
</div>

<div class="tab-pane fade" id="contact2" role="tabpanel"
aria-labelledby="contact2-tab">
<ul class="list-unstyled" data-simplebar style="height: 360px">
	<li>
		<a href="javscript:void(0)"
		class="media media-message media-notification event-active">

		<div
		class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-info text-white">
		<i class="mdi mdi-calendar-check font-size-20"></i>
	</div>

	<div class="media-body d-flex justify-content-between">
		<div class="message-contents">
			<h4 class="title">Upcomming event added</h4>
			<p class="last-msg font-size-14">03/Jan/2020 (1pm -
			2pm)</p>

			<span
			class="font-size-12 font-weight-medium text-secondary">
			<i class="mdi mdi-clock-outline"></i> 10 min
			ago...
		</span>
	</div>
</div>
</a>
</li>

<li>
	<a href="javscript:void(0)"
	class="media media-message media-notification">

	<div
	class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-warning text-white">
	<i class="mdi mdi-chart-areaspline font-size-20"></i>
</div>

<div class="media-body d-flex justify-content-between">
	<div class="message-contents">
		<h4 class="title">New Sales report</h4>
		<p class="last-msg font-size-14">Lorem ipsum dolor
			sit, amet consectetur adipisicing elit. Nam
			itaque doloremque odio, eligendi delectus vitae.
		</p>

		<span
		class="font-size-12 font-weight-medium text-secondary">
		<i class="mdi mdi-clock-outline"></i> 1 hrs
		ago...
	</span>
</div>
</div>
</a>
</li>

<li>
	<a href="javscript:void(0)"
	class="media media-message media-notification">

	<div
	class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-primary text-white">
	<i
	class="mdi mdi-account-multiple-check font-size-20"></i>
</div>

<div class="media-body d-flex justify-content-between">
	<div class="message-contents">
		<h4 class="title">New Request</h4>
		<p class="last-msg font-size-14">Add Dany Jones as
			your contact consequat nec imperdiet ex rutrum.
		Fusce et vehicula enim. Sed in enim.</p>

		<span
		class="my-1 btn btn-sm btn-success">Accept</span>
		<span
		class="my-1 btn btn-sm btn-secondary">Delete</span>

		<span
		class="font-size-12 font-weight-medium text-secondary d-block">
		<i class="mdi mdi-clock-outline"></i> 5 min
		ago...
	</span>
</div>
</div>
</a>
</li>

<li>
	<a href="javscript:void(0)"
	class="media media-message media-notification">

	<div
	class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-danger text-white">
	<i class="mdi mdi-server-network-off font-size-20"></i>
</div>

<div class="media-body d-flex justify-content-between">
	<div class="message-contents">
		<h4 class="title">Server overloaded</h4>
		<p class="last-msg font-size-14">Donec mattis augue
			a nisl consequat, nec imperdiet ex rutrum. Fusce
		et vehicula enim. Sed in enim eu odio vehic.</p>

		<span
		class="font-size-12 font-weight-medium text-secondary">
		<i class="mdi mdi-clock-outline"></i> 30 min
		ago...
	</span>
</div>
</div>
</a>
</li>

<li>
	<a href="javscript:void(0)"
	class="media media-message media-notification">

	<div
	class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-purple text-white">
	<i class="mdi mdi-playlist-check font-size-20"></i>
</div>

<div class="media-body d-flex justify-content-between">
	<div class="message-contents">
		<h4 class="title">New Task complete</h4>
		<p class="last-msg font-size-14">Nam ut nisi erat.
			Ut quis tortor varius, hendrerit arcu quis,
		congue nisl. In scelerisque, sem ut ve.</p>

		<span
		class="font-size-12 font-weight-medium text-secondary">
		<i class="mdi mdi-clock-outline"></i> 2 hrs
		ago...
	</span>
</div>
</div>
</a>
</li>
</ul>
</div>
</div>
</div>
</div>

<ul class="dropdown-menu dropdown-menu-right d-none">
	<li class="dropdown-header">You have 5 notifications</li>
	<li>
		<a href="#">
			<i class="mdi mdi-account-plus"></i> New user registered
			<span class=" font-size-12 d-inline-block float-right"><i
				class="mdi mdi-clock-outline"></i> 10 AM</span>
			</a>
		</li>
		<li>
			<a href="#">
				<i class="mdi mdi-account-remove"></i> User deleted
				<span class=" font-size-12 d-inline-block float-right"><i
					class="mdi mdi-clock-outline"></i> 07 AM</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class="mdi mdi-chart-areaspline"></i> Sales report is ready
					<span class=" font-size-12 d-inline-block float-right"><i
						class="mdi mdi-clock-outline"></i> 12 PM</span>
					</a>
				</li>
				<li>
					<a href="#">
						<i class="mdi mdi-account-supervisor"></i> New client
						<span class=" font-size-12 d-inline-block float-right"><i
							class="mdi mdi-clock-outline"></i> 10 AM</span>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="mdi mdi-server-network-off"></i> Server overloaded
							<span class=" font-size-12 d-inline-block float-right"><i
								class="mdi mdi-clock-outline"></i> 05 AM</span>
							</a>
						</li>
						<li class="dropdown-footer">
							<a class="text-center" href="#"> View All </a>
						</li>
					</ul>
				</li>
				<li class="right-sidebar-in right-sidebar-2-menu">
					<i class="mdi mdi-settings-outline mdi-spin"></i>
				</li>
			</ul>
		</div>
	</nav>
</header>

<!-- CONTENT WRAPPER -->
<div class="ec-content-wrapper">
	<div class="content">
		<div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
			<div>
				<h1>Add Product</h1>
				<p class="breadcrumbs"><span><a href="index.html">Home</a></span>
					<span><i class="mdi mdi-chevron-right"></i></span>Product</p>
				</div>
				<div>
					<a href="product-list.html" class="btn btn-primary"> View All
					</a>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="card card-default">
						<div class="card-header card-header-border-bottom">
							<h2>Add Product</h2>
						</div>

						<div class="card-body">
						<form class="row g-3" id="product_add_post">
							<div class="row ec-vendor-uploads">
								<div class="col-lg-4">
									<div class="ec-vendor-img-upload">
										<div class="ec-vendor-main-img">
											<div class="avatar-upload">
												<div class="avatar-edit">
													<input type='file' id="imageUpload" name="img_big" class="ec-image-upload"
													accept=".png, .jpg, .jpeg" />
													<label for="imageUpload">
														<img src="assets/img/icons/edit.svg"
														class="svg_img header_svg" alt="edit" /></label>
													</div>
													<div class="avatar-preview ec-preview">
														<div class="imagePreview ec-div-preview">
															<img class="ec-image-preview"
															src="assets/img/products/vender-upload-preview.jpg"
															alt="edit" />
														</div>
													</div>
												</div>
												<div class="thumb-upload-set colo-md-12">
													<div class="thumb-upload">
														<div class="thumb-edit">
															<input type='file' name="img_small_1" id="thumbUpload01"
															class="ec-image-upload"
															accept=".png, .jpg, .jpeg" />
															<label for="imageUpload"><img
																src="assets/img/icons/edit.svg"
																class="svg_img header_svg" alt="edit" /></label>
															</div>
															<div class="thumb-preview ec-preview">
																<div class="image-thumb-preview">
																	<img class="image-thumb-preview ec-image-preview"
																	src="assets/img/products/vender-upload-thumb-preview.jpg"
																	alt="edit" />
																</div>
															</div>
														</div>
														<div class="thumb-upload">
															<div class="thumb-edit">
																<input type='file' name="img_small_2" id="thumbUpload02"
																class="ec-image-upload"
																accept=".png, .jpg, .jpeg" />
																<label for="imageUpload"><img
																	src="assets/img/icons/edit.svg"
																	class="svg_img header_svg" alt="edit" /></label>
																</div>
																<div class="thumb-preview ec-preview">
																	<div class="image-thumb-preview">
																		<img class="image-thumb-preview ec-image-preview"
																		src="assets/img/products/vender-upload-thumb-preview.jpg"
																		alt="edit" />
																	</div>
																</div>
															</div>
															<div class="thumb-upload">
																<div class="thumb-edit">
																	<input type='file' name="img_small_3" id="thumbUpload03"
																	class="ec-image-upload"
																	accept=".png, .jpg, .jpeg" />
																	<label for="imageUpload"><img
																		src="assets/img/icons/edit.svg"
																		class="svg_img header_svg" alt="edit" /></label>
																	</div>
																	<div class="thumb-preview ec-preview">
																		<div class="image-thumb-preview">
																			<img class="image-thumb-preview ec-image-preview"
																			src="assets/img/products/vender-upload-thumb-preview.jpg"
																			alt="edit" />
																		</div>
																	</div>
																</div>
																<div class="thumb-upload">
																	<div class="thumb-edit">
																		<input type='file' name="img_small_4" id="thumbUpload04"
																		class="ec-image-upload"
																		accept=".png, .jpg, .jpeg" />
																		<label for="imageUpload"><img
																			src="assets/img/icons/edit.svg"
																			class="svg_img header_svg" alt="edit" /></label>
																		</div>
																		<div class="thumb-preview ec-preview">
																			<div class="image-thumb-preview">
																				<img class="image-thumb-preview ec-image-preview"
																				src="assets/img/products/vender-upload-thumb-preview.jpg"
																				alt="edit" />
																			</div>
																		</div>
																	</div>
																	<div class="thumb-upload">
																		<div class="thumb-edit">
																			<input type='file' name="img_small_5" id="thumbUpload05"
																			class="ec-image-upload"
																			accept=".png, .jpg, .jpeg" />
																			<label for="imageUpload"><img
																				src="assets/img/icons/edit.svg"
																				class="svg_img header_svg" alt="edit" /></label>
																			</div>
																			<div class="thumb-preview ec-preview">
																				<div class="image-thumb-preview">
																					<img class="image-thumb-preview ec-image-preview"
																					src="assets/img/products/vender-upload-thumb-preview.jpg"
																					alt="edit" />
																				</div>
																			</div>
																		</div>
																		<div class="thumb-upload">
																			<div class="thumb-edit">
																				<input type='file' name="img_small_6" id="thumbUpload06"
																				class="ec-image-upload"
																				accept=".png, .jpg, .jpeg" />
																				<label for="imageUpload"><img
																					src="assets/img/icons/edit.svg"
																					class="svg_img header_svg" alt="edit" /></label>
																				</div>
																				<div class="thumb-preview ec-preview">
																					<div class="image-thumb-preview">
																						<img class="image-thumb-preview ec-image-preview"
																						src="assets/img/products/vender-upload-thumb-preview.jpg"
																						alt="edit" />
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="col-lg-8">
																<div class="ec-vendor-upload-detail"> 
																		<div class="col-md-6">
																			<label for="inputEmail4" class="form-label">Product name</label>
																			<input type="text" class="form-control slug-title" name="Product_name" id="inputEmail4">
																		</div>
																		<div class="col-md-6">
																			<label class="form-label">Select Categories</label> 
																				<select name="categories" id="Categories" class="form-select">
																					<?php 
																			$sql="SELECT m.Name as cat, s.Parent_uniqueid,s.Name as sub FROM main_category as m left JOIN Sub_Category as s ON m.unique_id = s.Parent_uniqueid ";
																			$qry=mysqli_query($conn,$sql);
																			while($row=mysqli_fetch_array($qry)) {
																				$category=$row[0];
																				$uniqueid=$row[1]; 
																				$sub_category=$row[2]; 
																				echo"<optgroup label='$category'>"; 
																				  echo"<option value='$sub_category-$uniqueid'>$sub_category</option>";
																				 
																				echo"</optgroup>"; 
																					} ?> 
																				</select>
																			</div>
																			<div class="col-md-12">
																				<label for="slug" class="col-12 col-form-label">Slug</label> 
																				<div class="col-12">
																					<input id="slug" name="slug" class="form-control here set-slug" type="text">
																				</div>
																			</div>
																			<div class="col-md-12">
																				<label class="form-label">Sort Description</label>
																				<textarea class="form-control" name="Description" rows="2"></textarea>
																			</div>
																			<div class="col-md-4 mb-25">
																				<label class="form-label">Colors</label>
																				<input type="color" class="form-control form-control-color"
																				name="ColorInput1" id="exampleColorInput1" value="#ff6191 "
																				title="Choose your color">
																				<input type="color" class="form-control form-control-color"
																				name="ColorInput2" id="exampleColorInput2" value="#33317d"
																				title="Choose your color">
																				<input type="color" class="form-control form-control-color"
																				name="ColorInput3" id="exampleColorInput3" value="#56d4b7"
																				title="Choose your color">
																				<input type="color" class="form-control form-control-color"
																				name="ColorInput4" id="exampleColorInput4" value="#009688"
																				title="Choose your color">
																			</div>
																			<div class="col-md-8 mb-25">
																				<label class="form-label">Size</label>
																				<div class="form-checkbox-box">
																					<div class="form-check form-check-inline">
																						<input type="checkbox" name="size_s" value="1">
																						<label>S</label>
																					</div>
																					<div class="form-check form-check-inline">
																						<input type="checkbox" name="size_m" value="1">
																						<label>M</label>
																					</div>
																					<div class="form-check form-check-inline">
																						<input type="checkbox" name="size_l" value="1">
																						<label>L</label>
																					</div>
																					<div class="form-check form-check-inline">
																						<input type="checkbox" name="size_xl" value="1">
																						<label>XL</label>
																					</div>
																					<div class="form-check form-check-inline">
																						<input type="checkbox" name="size_xxl" value="1">
																						<label>XXL</label>
																					</div>
																				</div>
																			</div>
																			<div class="col-md-6">
																				<label class="form-label">Price <span>( In USD
																				)</span></label>
																				<input type="number" name="Price" class="form-control" id="price1">
																			</div>
																			<div class="col-md-6">
																				<label class="form-label">Quantity</label>
																				<input type="number" name="Quantity"  class="form-control" id="quantity1">
																			</div>
																			<div class="col-md-12">
																				<label class="form-label">Full Detail</label>
																				<textarea class="form-control" name="Full_Detail" rows="4"></textarea>
																			</div>
																			<div class="col-md-12">
																				<label class="form-label">Product Tags <span>( Type and
																				make comma to separate tags )</span></label>
																				<input type="text" class="form-control" id="group_tag"
																				name="group_tag" value="" placeholder=""
																				data-role="tagsinput" />
																			</div>
																			<div class="col-md-12">
																				<button type="submit" class="btn btn-primary">Submit</button>
																			</div>
																		 
																	</div>
																</div>
															</div>
														</form>
														</div>
													</div>
												</div>
											</div>
										</div> <!-- End Content -->
									</div> <!-- End Content Wrapper -->

									<!-- Footer -->
									<footer class="footer mt-auto">
										<div class="copyright bg-white">
											<p>
												Copyright &copy; <span id="ec-year"></span><a class="text-primary"
												href="https://themeforest.net/user/ashishmaraviya" target="_blank"> Ekka Admin Dashboard</a>. All Rights Reserved.
											</p>
										</div>
									</footer>

								</div> <!-- End Page Wrapper -->
							</div> <!-- End Wrapper -->

							<!-- Common Javascript -->
							<script src="assets/plugins/jquery/jquery-3.5.1.min.js"></script>
							<script src="assets/js/bootstrap.bundle.min.js"></script>
							<script src="assets/plugins/tags-input/bootstrap-tagsinput.js"></script>
							<script src="assets/plugins/simplebar/simplebar.min.js"></script>
							<script src="assets/plugins/jquery-zoom/jquery.zoom.min.js"></script>
							<script src="assets/plugins/slick/slick.min.js"></script>

							<!-- Option Switcher -->
							<script src="assets/plugins/options-sidebar/optionswitcher.js"></script>

							<!-- Ekka Custom -->
							<script src="assets/js/ekka.js"></script>
							<script src="js/main.js"></script>
						</body>


						<!-- Mirrored from loopinfosol.in/themeforest/ekka-html-v33/ekka-admin/product-add.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 02 Dec 2022 06:49:00 GMT -->
						</html>