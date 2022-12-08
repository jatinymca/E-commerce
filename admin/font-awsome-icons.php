<!DOCTYPE html>
<html lang="en" dir="ltr">

<!-- Mirrored from loopinfosol.in/themeforest/ekka-html-v33/ekka-admin/font-awsome-icons.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 02 Dec 2022 06:49:13 GMT -->
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

	<!-- Ekka CSS -->
	<link id="ekka-css" href="assets/css/ekka.css" rel="stylesheet" />

	<!-- FAVICON -->
	<link href="assets/img/favicon.png" rel="shortcut icon" />
	
	<!-- Font Awsome iCon Kit Script -->
	<script src="../../../../kit.fontawesome.com/5488d9796f.js" crossorigin="anonymous"></script>
	
</head>
<body class="ec-header-fixed ec-sidebar-fixed ec-sidebar-dark ec-header-light" id="body">
		
	<!-- WRAPPER -->
	<div class="wrapper">
		
		<!-- LEFT MAIN SIDEBAR -->
		<div class="ec-left-sidebar ec-bg-sidebar">
			<div id="sidebar" class="sidebar ec-sidebar-footer">

				<div class="ec-brand">
					<a href="index.html" title="Ekka">
						<img class="ec-brand-icon" src="assets/img/logo/ec-site-logo.png" alt="" />
						<span class="ec-brand-name text-truncate">Ekka</span>
					</a>
				</div>

				<!-- begin sidebar scrollbar -->
				<div class="ec-navigation" data-simplebar>
					<!-- sidebar menu -->
					<ul class="nav sidebar-inner" id="sidebar-menu">
						<!-- Dashboard -->
						<li>
							<a class="sidenav-item-link" href="index.html">
								<i class="mdi mdi-view-dashboard-outline"></i>
								<span class="nav-text">Dashboard</span>
							</a>
							<hr>
						</li>

						<!-- Vendors -->
						<li class="has-sub">
							<a class="sidenav-item-link" href="javascript:void(0)">
								<i class="mdi mdi-account-group-outline"></i>
								<span class="nav-text">Vendors</span> <b class="caret"></b>
							</a>
							<div class="collapse">
								<ul class="sub-menu" id="vendors" data-parent="#sidebar-menu">
									<li class="">
										<a class="sidenav-item-link" href="vendor-card.html">
											<span class="nav-text">Vendor Grid</span>
										</a>
									</li>

									<li class="">
										<a class="sidenav-item-link" href="vendor-list.html">
											<span class="nav-text">Vendor List</span>
										</a>
									</li>
									<li class="">
										<a class="sidenav-item-link" href="vendor-profile.html">
											<span class="nav-text">Vendors Profile</span>
										</a>
									</li>
								</ul>
							</div>
						</li>

						<!-- Users -->
						<li class="has-sub">
							<a class="sidenav-item-link" href="javascript:void(0)">
								<i class="mdi mdi-account-group"></i>
								<span class="nav-text">Users</span> <b class="caret"></b>
							</a>
							<div class="collapse">
								<ul class="sub-menu" id="users" data-parent="#sidebar-menu">
									<li>
										<a class="sidenav-item-link" href="user-card.html">
											<span class="nav-text">User Grid</span>
										</a>
									</li>

									<li class="">
										<a class="sidenav-item-link" href="user-list.html">
											<span class="nav-text">User List</span>
										</a>
									</li>
									<li class="">
										<a class="sidenav-item-link" href="user-profile.html">
											<span class="nav-text">Users Profile</span>
										</a>
									</li>
								</ul>
							</div>
							<hr>
						</li>

						<!-- Category -->
						<li class="has-sub">
							<a class="sidenav-item-link" href="javascript:void(0)">
								<i class="mdi mdi-dns-outline"></i>
								<span class="nav-text">Categories</span> <b class="caret"></b>
							</a>
							<div class="collapse">
								<ul class="sub-menu" id="categorys" data-parent="#sidebar-menu">
									<li class="">
										<a class="sidenav-item-link" href="main-category.html">
											<span class="nav-text">Main Category</span>
										</a>
									</li>
									<li class="">
										<a class="sidenav-item-link" href="sub-category.html">
											<span class="nav-text">Sub Category</span>
										</a>
									</li>
								</ul>
							</div>
						</li>

						<!-- Products -->
						<li class="has-sub">
							<a class="sidenav-item-link" href="javascript:void(0)">
								<i class="mdi mdi-palette-advanced"></i>
								<span class="nav-text">Products</span> <b class="caret"></b>
							</a>
							<div class="collapse">
								<ul class="sub-menu" id="products" data-parent="#sidebar-menu">
									<li class="">
										<a class="sidenav-item-link" href="product-add.html">
											<span class="nav-text">Add Product</span>
										</a>
									</li>
									<li class="">
										<a class="sidenav-item-link" href="product-list.html">
											<span class="nav-text">List Product</span>
										</a>
									</li>
									<li class="">
										<a class="sidenav-item-link" href="product-grid.html">
											<span class="nav-text">Grid Product</span>
										</a>
									</li>
									<li class="">
										<a class="sidenav-item-link" href="product-detail.html">
											<span class="nav-text">Product Detail</span>
										</a>
									</li>
								</ul>
							</div>
						</li>

						<!-- Orders -->
						<li class="has-sub">
							<a class="sidenav-item-link" href="javascript:void(0)">
								<i class="mdi mdi-cart"></i>
								<span class="nav-text">Orders</span> <b class="caret"></b>
							</a>
							<div class="collapse">
								<ul class="sub-menu" id="orders" data-parent="#sidebar-menu">
									<li class="">
										<a class="sidenav-item-link" href="new-order.html">
											<span class="nav-text">New Order</span>
										</a>
									</li>
									<li class="">
										<a class="sidenav-item-link" href="order-history.html">
											<span class="nav-text">Order History</span>
										</a>
									</li>
									<li class="">
										<a class="sidenav-item-link" href="order-detail.html">
											<span class="nav-text">Order Detail</span>
										</a>
									</li>
									<li class="">
										<a class="sidenav-item-link" href="invoice.html">
											<span class="nav-text">Invoice</span>
										</a>
									</li>
								</ul>
							</div>
						</li>

						<!-- Reviews -->
						<li>
							<a class="sidenav-item-link" href="review-list.html">
								<i class="mdi mdi-star-half"></i>
								<span class="nav-text">Reviews</span>
							</a>
						</li>

						<!-- Brands -->
						<li>
							<a class="sidenav-item-link" href="brand-list.html">
								<i class="mdi mdi-tag-faces"></i>
								<span class="nav-text">Brands</span>
							</a>
							<hr>
						</li>

						<!-- Authentication -->
						<li class="has-sub">
							<a class="sidenav-item-link" href="javascript:void(0)">
								<i class="mdi mdi-login"></i>
								<span class="nav-text">Authentication</span> <b class="caret"></b>
							</a>
							<div class="collapse">
								<ul class="sub-menu" id="authentication" data-parent="#sidebar-menu">
									<li class="">
										<a href="sign-in.html">
											<span class="nav-text">Sign In</span>
										</a>
									</li>
									<li class="">
										<a href="sign-up.html">
											<span class="nav-text">Sign Up</span>
										</a>
									</li>
								</ul>
							</div>
						</li>

						<!-- Icons -->
						<li class="has-sub active expand">
							<a class="sidenav-item-link" href="javascript:void(0)">
								<i class="mdi mdi-diamond-stone"></i>
								<span class="nav-text">Icons</span> <b class="caret"></b>
							</a>
							<div class="collapse show">
								<ul class="sub-menu" id="icons" data-parent="#sidebar-menu">
									<li class="">
										<a class="sidenav-item-link" href="material-icon.html">
											<span class="nav-text">Material Icon</span>
										</a>
									</li>
									<li class="active">
										<a class="sidenav-item-link" href="font-awsome-icons.html">
											<span class="nav-text">Font Awsome Icon</span>
										</a>
									</li>
									<li class="">
										<a class="sidenav-item-link" href="flag-icon.html">
											<span class="nav-text">Flag Icon</span>
										</a>
									</li>
								</ul>
							</div>
						</li>

						<!-- Other Pages -->
						<li class="has-sub">
							<a class="sidenav-item-link" href="javascript:void(0)">
								<i class="mdi mdi-image-filter-none"></i>
								<span class="nav-text">Other Pages</span> <b class="caret"></b>
							</a>
							<div class="collapse">
								<ul class="sub-menu" id="otherpages" data-parent="#sidebar-menu">
									<li class="has-sub">
										<a href="404.html">404 Page</a>
									</li>
								</ul>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
		
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
			
			<!--  CONTENT WRAPPER -->
			<div class="ec-content-wrapper">
				<div class="content"> 
					<div class="breadcrumb-wrapper breadcrumb-wrapper-2">
						<h1>Font Awsome Icons</h1> 
						<p class="breadcrumbs"><span><a href="index.html">Home</a></span>
							<span><i class="mdi mdi-chevron-right"></i></span>Fontawsome</p>						
					</div>
					<!-- Did not specify the Color Class and CSS -->
					<div class="row">
						<div class="col-12">
							<div class="card card-default">
								<div class="card-body">
									<pre id="fa-preview" class="mx-0"><code>&lt;i class=&quot;fas fa-<span id="name">name</span>&quot;&gt;&lt;/i&gt;</code></pre>
									
									<h4 class="mb-4">Icons <small>[ click to copy to clipboard ]</small></h4>
									<div class="row icons-list">
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-ad"></i><span class="fa-span">fas fa-ad</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-air-freshener"></i><span class="fa-span">fas fa-air-freshener</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-align-right"></i><span class="fa-span">fas fa-align-right</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-anchor"></i><span class="fa-span">fas fa-anchor</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-angle-double-up"></i><span class="fa-span">fas fa-angle-double-up</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-angle-up"></i><span class="fa-span">fas fa-angle-up</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-archive"></i><span class="fa-span">fas fa-archive</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-arrow-alt-circle-right"></i><span class="fa-span">fas fa-arrow-alt-circle-right</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-arrow-circle-right"></i><span class="fa-span">fas fa-arrow-circle-right</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-arrow-right"></i><span class="fa-span">fas fa-arrow-right</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-arrows-alt-v"></i><span class="fa-span">fas fa-arrows-alt-v</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-atlas"></i><span class="fa-span">fas fa-atlas</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-baby"></i><span class="fa-span">fas fa-baby</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-bacon"></i><span class="fa-span">fas fa-bacon</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-balance-scale"></i><span class="fa-span">fas fa-balance-scale</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-band-aid"></i><span class="fa-span">fas fa-band-aid</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-basketball-ball"></i><span class="fa-span">fas fa-basketball-ball</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-battery-half"></i><span class="fa-span">fas fa-battery-half</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-beer"></i><span class="fa-span">fas fa-beer</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-bible"></i><span class="fa-span">fas fa-bible</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-biohazard"></i><span class="fa-span">fas fa-biohazard</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-blind"></i><span class="fa-span">fas fa-blind</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-bomb"></i><span class="fa-span">fas fa-bomb</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-book-dead"></i><span class="fa-span">fas fa-book-dead</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-bookmark"></i><span class="fa-span">fas fa-bookmark</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-bowling-ball"></i><span class="fa-span">fas fa-bowling-ball</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-boxes"></i><span class="fa-span">fas fa-boxes</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-briefcase"></i><span class="fa-span">fas fa-briefcase</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-brush"></i><span class="fa-span">fas fa-brush</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-bullseye"></i><span class="fa-span">fas fa-bullseye</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-business-time"></i><span class="fa-span">fas fa-business-time</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-calendar-check"></i><span class="fa-span">fas fa-calendar-check</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-calendar-times"></i><span class="fa-span">fas fa-calendar-times</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-campground"></i><span class="fa-span">fas fa-campground</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-car"></i><span class="fa-span">fas fa-car</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-car-side"></i><span class="fa-span">fas fa-car-side</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-caret-right"></i><span class="fa-span">fas fa-caret-right</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-caret-square-up"></i><span class="fa-span">fas fa-caret-square-up</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-cart-plus"></i><span class="fa-span">fas fa-cart-plus</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-chair"></i><span class="fa-span">fas fa-chair</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-chart-area"></i><span class="fa-span">fas fa-chart-area</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-check"></i><span class="fa-span">fas fa-check</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-cheese"></i><span class="fa-span">fas fa-cheese</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-chess-king"></i><span class="fa-span">fas fa-chess-king</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-chess-rook"></i><span class="fa-span">fas fa-chess-rook</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-chevron-circle-up"></i><span class="fa-span">fas fa-chevron-circle-up</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-chevron-up"></i><span class="fa-span">fas fa-chevron-up</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-circle-notch"></i><span class="fa-span">fas fa-circle-notch</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-clipboard-check"></i><span class="fa-span">fas fa-clipboard-check</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-closed-captioning"></i><span class="fa-span">fas fa-closed-captioning</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-cloud-moon"></i><span class="fa-span">fas fa-cloud-moon</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-cloud-sun"></i><span class="fa-span">fas fa-cloud-sun</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-code"></i><span class="fa-span">fas fa-code</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-cogs"></i><span class="fa-span">fas fa-cogs</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-comment-alt"></i><span class="fa-span">fas fa-comment-alt</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-comment-slash"></i><span class="fa-span">fas fa-comment-slash</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-compass"></i><span class="fa-span">fas fa-compass</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-concierge-bell"></i><span class="fa-span">fas fa-concierge-bell</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-copyright"></i><span class="fa-span">fas fa-copyright</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-crop-alt"></i><span class="fa-span">fas fa-crop-alt</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-crown"></i><span class="fa-span">fas fa-crown</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-cut"></i><span class="fa-span">fas fa-cut</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-desktop"></i><span class="fa-span">fas fa-desktop</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-dice-d20"></i><span class="fa-span">fas fa-dice-d20</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-dice-one"></i><span class="fa-span">fas fa-dice-one</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-digital-tachograph"></i><span class="fa-span">fas fa-digital-tachograph</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-dizzy"></i><span class="fa-span">fas fa-dizzy</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-dolly"></i><span class="fa-span">fas fa-dolly</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-door-open"></i><span class="fa-span">fas fa-door-open</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-drafting-compass"></i><span class="fa-span">fas fa-drafting-compass</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-drum-steelpan"></i><span class="fa-span">fas fa-drum-steelpan</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-dumpster-fire"></i><span class="fa-span">fas fa-dumpster-fire</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-eject"></i><span class="fa-span">fas fa-eject</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-envelope-open"></i><span class="fa-span">fas fa-envelope-open</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-eraser"></i><span class="fa-span">fas fa-eraser</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-exclamation"></i><span class="fa-span">fas fa-exclamation</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-expand-alt"></i><span class="fa-span">fas fa-expand-alt</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-eye"></i><span class="fa-span">fas fa-eye</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-fast-backward"></i><span class="fa-span">fas fa-fast-backward</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-feather"></i><span class="fa-span">fas fa-feather</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-file"></i><span class="fa-span">fas fa-file</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-file-code"></i><span class="fa-span">fas fa-file-code</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-file-excel"></i><span class="fa-span">fas fa-file-excel</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-file-invoice"></i><span class="fa-span">fas fa-file-invoice</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-file-pdf"></i><span class="fa-span">fas fa-file-pdf</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-file-upload"></i><span class="fa-span">fas fa-file-upload</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-fill-drip"></i><span class="fa-span">fas fa-fill-drip</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-fire"></i><span class="fa-span">fas fa-fire</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-fish"></i><span class="fa-span">fas fa-fish</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-flag-usa"></i><span class="fa-span">fas fa-flag-usa</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-folder-minus"></i><span class="fa-span">fas fa-folder-minus</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-football-ball"></i><span class="fa-span">fas fa-football-ball</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-frown-open"></i><span class="fa-span">fas fa-frown-open</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-gas-pump"></i><span class="fa-span">fas fa-gas-pump</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-ghost"></i><span class="fa-span">fas fa-ghost</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-glass-martini"></i><span class="fa-span">fas fa-glass-martini</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-globe"></i><span class="fa-span">fas fa-globe</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-globe-europe"></i><span class="fa-span">fas fa-globe-europe</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-greater-than"></i><span class="fa-span">fas fa-greater-than</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-grin-alt"></i><span class="fa-span">fas fa-grin-alt</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-grin-squint"></i><span class="fa-span">fas fa-grin-squint</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-grin-tongue"></i><span class="fa-span">fas fa-grin-tongue</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-grip-horizontal"></i><span class="fa-span">fas fa-grip-horizontal</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-guitar"></i><span class="fa-span">fas fa-guitar</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-hamsa"></i><span class="fa-span">fas fa-hamsa</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-hand-holding-usd"></i><span class="fa-span">fas fa-hand-holding-usd</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-hand-paper"></i><span class="fa-span">fas fa-hand-paper</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-hand-point-right"></i><span class="fa-span">fas fa-hand-point-right</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-hand-scissors"></i><span class="fa-span">fas fa-hand-scissors</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-hands-helping"></i><span class="fa-span">fas fa-hands-helping</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-handshake-slash"></i><span class="fa-span">fas fa-handshake-slash</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-hat-cowboy"></i><span class="fa-span">fas fa-hat-cowboy</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-head-side-cough"></i><span class="fa-span">fas fa-head-side-cough</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-heading"></i><span class="fa-span">fas fa-heading</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-heart"></i><span class="fa-span">fas fa-heart</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-highlighter"></i><span class="fa-span">fas fa-highlighter</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-hockey-puck"></i><span class="fa-span">fas fa-hockey-puck</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-horse-head"></i><span class="fa-span">fas fa-horse-head</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-hospital-user"></i><span class="fa-span">fas fa-hospital-user</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-hourglass"></i><span class="fa-span">fas fa-hourglass</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-house-damage"></i><span class="fa-span">fas fa-house-damage</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-ice-cream"></i><span class="fa-span">fas fa-ice-cream</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-id-card"></i><span class="fa-span">fas fa-id-card</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-images"></i><span class="fa-span">fas fa-images</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-infinity"></i><span class="fa-span">fas fa-infinity</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-jedi"></i><span class="fa-span">fas fa-jedi</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-key"></i><span class="fa-span">fas fa-key</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-kiss-beam"></i><span class="fa-span">fas fa-kiss-beam</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-language"></i><span class="fa-span">fas fa-language</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-laptop-medical"></i><span class="fa-span">fas fa-laptop-medical</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-laugh-wink"></i><span class="fa-span">fas fa-laugh-wink</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-less-than"></i><span class="fa-span">fas fa-less-than</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-life-ring"></i><span class="fa-span">fas fa-life-ring</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-list"></i><span class="fa-span">fas fa-list</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-location-arrow"></i><span class="fa-span">fas fa-location-arrow</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-long-arrow-alt-left"></i><span class="fa-span">fas fa-long-arrow-alt-left</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-luggagEkka"></i><span class="fa-span">fas fa-luggagEkka</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-magnet"></i><span class="fa-span">fas fa-magnet</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-map-marked"></i><span class="fa-span">fas fa-map-marked</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-map-pin"></i><span class="fa-span">fas fa-map-pin</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-mars-double"></i><span class="fa-span">fas fa-mars-double</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-mask"></i><span class="fa-span">fas fa-mask</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-meh-blank"></i><span class="fa-span">fas fa-meh-blank</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-mercury"></i><span class="fa-span">fas fa-mercury</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-microphone-alt"></i><span class="fa-span">fas fa-microphone-alt</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-minus"></i><span class="fa-span">fas fa-minus</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-mobile"></i><span class="fa-span">fas fa-mobile</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-money-bill-wave"></i><span class="fa-span">fas fa-money-bill-wave</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-monument"></i><span class="fa-span">fas fa-monument</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-motorcycle"></i><span class="fa-span">fas fa-motorcycle</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-mug-hot"></i><span class="fa-span">fas fa-mug-hot</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-newspaper"></i><span class="fa-span">fas fa-newspaper</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-object-ungroup"></i><span class="fa-span">fas fa-object-ungroup</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-outdent"></i><span class="fa-span">fas fa-outdent</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-palette"></i><span class="fa-span">fas fa-palette</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-parachute-box"></i><span class="fa-span">fas fa-parachute-box</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-pastafarianism"></i><span class="fa-span">fas fa-pastafarianism</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-paw"></i><span class="fa-span">fas fa-paw</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-pen-fancy"></i><span class="fa-span">fas fa-pen-fancy</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-pencil-ruler"></i><span class="fa-span">fas fa-pencil-ruler</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-percent"></i><span class="fa-span">fas fa-percent</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-phone-alt"></i><span class="fa-span">fas fa-phone-alt</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-phone-volume"></i><span class="fa-span">fas fa-phone-volume</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-pizza-slice"></i><span class="fa-span">fas fa-pizza-slice</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-plane-departure"></i><span class="fa-span">fas fa-plane-departure</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-plug"></i><span class="fa-span">fas fa-plug</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-podcast"></i><span class="fa-span">fas fa-podcast</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-poo-storm"></i><span class="fa-span">fas fa-poo-storm</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-power-off"></i><span class="fa-span">fas fa-power-off</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-prescription-bottle"></i><span class="fa-span">fas fa-prescription-bottle</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-project-diagram"></i><span class="fa-span">fas fa-project-diagram</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-qrcode"></i><span class="fa-span">fas fa-qrcode</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-quote-left"></i><span class="fa-span">fas fa-quote-left</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-radiation-alt"></i><span class="fa-span">fas fa-radiation-alt</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-record-vinyl"></i><span class="fa-span">fas fa-record-vinyl</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-registered"></i><span class="fa-span">fas fa-registered</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-republican"></i><span class="fa-span">fas fa-republican</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-ring"></i><span class="fa-span">fas fa-ring</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-route"></i><span class="fa-span">fas fa-route</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-ruler"></i><span class="fa-span">fas fa-ruler</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-running"></i><span class="fa-span">fas fa-running</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-satellite"></i><span class="fa-span">fas fa-satellite</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-screwdriver"></i><span class="fa-span">fas fa-screwdriver</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-search-dollar"></i><span class="fa-span">fas fa-search-dollar</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-seedling"></i><span class="fa-span">fas fa-seedling</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-share-alt"></i><span class="fa-span">fas fa-share-alt</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-shield-alt"></i><span class="fa-span">fas fa-shield-alt</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-shoe-prints"></i><span class="fa-span">fas fa-shoe-prints</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-shower"></i><span class="fa-span">fas fa-shower</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-sign-language"></i><span class="fa-span">fas fa-sign-language</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-sim-card"></i><span class="fa-span">fas fa-sim-card</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-skiing"></i><span class="fa-span">fas fa-skiing</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-slash"></i><span class="fa-span">fas fa-slash</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-smile-beam"></i><span class="fa-span">fas fa-smile-beam</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-smoking-ban"></i><span class="fa-span">fas fa-smoking-ban</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-snowman"></i><span class="fa-span">fas fa-snowman</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-solar-panel"></i><span class="fa-span">fas fa-solar-panel</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-sort-alpha-up"></i><span class="fa-span">fas fa-sort-alpha-up</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-sort-amount-up"></i><span class="fa-span">fas fa-sort-amount-up</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-sort-numeric-down-alt"></i><span class="fa-span">fas fa-sort-numeric-down-alt</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-spa"></i><span class="fa-span">fas fa-spa</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-spinner"></i><span class="fa-span">fas fa-spinner</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-square-full"></i><span class="fa-span">fas fa-square-full</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-star-and-crescent"></i><span class="fa-span">fas fa-star-and-crescent</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-star-of-life"></i><span class="fa-span">fas fa-star-of-life</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-sticky-note"></i><span class="fa-span">fas fa-sticky-note</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-stopwatch-20"></i><span class="fa-span">fas fa-stopwatch-20</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-store-slash"></i><span class="fa-span">fas fa-store-slash</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-stroopwafel"></i><span class="fa-span">fas fa-stroopwafel</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-suitcase-rolling"></i><span class="fa-span">fas fa-suitcase-rolling</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-swatchbook"></i><span class="fa-span">fas fa-swatchbook</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-sync"></i><span class="fa-span">fas fa-sync</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-table-tennis"></i><span class="fa-span">fas fa-table-tennis</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-tachometer-alt"></i><span class="fa-span">fas fa-tachometer-alt</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-tasks"></i><span class="fa-span">fas fa-tasks</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-temperature-high"></i><span class="fa-span">fas fa-temperature-high</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-text-height"></i><span class="fa-span">fas fa-text-height</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-th-list"></i><span class="fa-span">fas fa-th-list</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-thermometer-full"></i><span class="fa-span">fas fa-thermometer-full</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-thumbs-down"></i><span class="fa-span">fas fa-thumbs-down</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-times"></i><span class="fa-span">fas fa-times</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-tired"></i><span class="fa-span">fas fa-tired</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-toilet-paper"></i><span class="fa-span">fas fa-toilet-paper</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-tooth"></i><span class="fa-span">fas fa-tooth</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-trademark"></i><span class="fa-span">fas fa-trademark</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-tram"></i><span class="fa-span">fas fa-tram</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-trash-alt"></i><span class="fa-span">fas fa-trash-alt</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-trophy"></i><span class="fa-span">fas fa-trophy</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-truck-moving"></i><span class="fa-span">fas fa-truck-moving</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-tv"></i><span class="fa-span">fas fa-tv</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-undo"></i><span class="fa-span">fas fa-undo</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-unlink"></i><span class="fa-span">fas fa-unlink</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-user"></i><span class="fa-span">fas fa-user</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-user-check"></i><span class="fa-span">fas fa-user-check</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-user-edit"></i><span class="fa-span">fas fa-user-edit</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-user-lock"></i><span class="fa-span">fas fa-user-lock</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-user-nurse"></i><span class="fa-span">fas fa-user-nurse</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-user-slash"></i><span class="fa-span">fas fa-user-slash</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-users"></i><span class="fa-span">fas fa-users</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-utensils"></i><span class="fa-span">fas fa-utensils</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-venus-mars"></i><span class="fa-span">fas fa-venus-mars</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-vials"></i><span class="fa-span">fas fa-vials</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-virus"></i><span class="fa-span">fas fa-virus</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-volleyball-ball"></i><span class="fa-span">fas fa-volleyball-ball</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-volume-up"></i><span class="fa-span">fas fa-volume-up</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-wallet"></i><span class="fa-span">fas fa-wallet</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-weight"></i><span class="fa-span">fas fa-weight</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-wind"></i><span class="fa-span">fas fa-wind</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-window-restore"></i><span class="fa-span">fas fa-window-restore</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-won-sign"></i><span class="fa-span">fas fa-won-sign</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-yin-yang"></i><span class="fa-span">fas fa-yin-yang</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-align-justify"></i><span class="fa-span">fas fa-align-justify</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-angle-double-left"></i><span class="fa-span">fas fa-angle-double-left</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-ankh"></i><span class="fa-span">fas fa-ankh</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-arrow-circle-down"></i><span class="fa-span">fas fa-arrow-circle-down</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-arrows-alt"></i><span class="fa-span">fas fa-arrows-alt</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-audio-description"></i><span class="fa-span">fas fa-audio-description</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-bacterium"></i><span class="fa-span">fas fa-bacterium</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-bars"></i><span class="fa-span">fas fa-bars</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-battery-three-quarters"></i><span class="fa-span">fas fa-battery-three-quarters</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-biking"></i><span class="fa-span">fas fa-biking</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-bold"></i><span class="fa-span">fas fa-bold</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-book-open"></i><span class="fa-span">fas fa-book-open</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-box-open"></i><span class="fa-span">fas fa-box-open</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-broadcast-tower"></i><span class="fa-span">fas fa-broadcast-tower</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-bus"></i><span class="fa-span">fas fa-bus</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-calendar-minus"></i><span class="fa-span">fas fa-calendar-minus</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-cannabis"></i><span class="fa-span">fas fa-cannabis</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-caret-down"></i><span class="fa-span">fas fa-caret-down</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-carrot"></i><span class="fa-span">fas fa-carrot</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-chalkboard-teacher"></i><span class="fa-span">fas fa-chalkboard-teacher</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-check-double"></i><span class="fa-span">fas fa-check-double</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-chess-pawn"></i><span class="fa-span">fas fa-chess-pawn</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-chevron-left"></i><span class="fa-span">fas fa-chevron-left</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-clinic-medical"></i><span class="fa-span">fas fa-clinic-medical</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-cloud-download-alt"></i><span class="fa-span">fas fa-cloud-download-alt</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-cloud-upload-alt"></i><span class="fa-span">fas fa-cloud-upload-alt</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-columns"></i><span class="fa-span">fas fa-columns</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-comments-dollar"></i><span class="fa-span">fas fa-comments-dollar</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-cookie-bite"></i><span class="fa-span">fas fa-cookie-bite</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-crosshairs"></i><span class="fa-span">fas fa-crosshairs</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-deaf"></i><span class="fa-span">fas fa-deaf</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-dice-five"></i><span class="fa-span">fas fa-dice-five</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-disease"></i><span class="fa-span">fas fa-disease</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-donate"></i><span class="fa-span">fas fa-donate</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-draw-polygon"></i><span class="fa-span">fas fa-draw-polygon</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-edit"></i><span class="fa-span">fas fa-edit</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-envelope-square"></i><span class="fa-span">fas fa-envelope-square</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-exclamation-triangle"></i><span class="fa-span">fas fa-exclamation-triangle</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-eye-slash"></i><span class="fa-span">fas fa-eye-slash</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-female"></i><span class="fa-span">fas fa-female</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-file-csv"></i><span class="fa-span">fas fa-file-csv</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-file-medical"></i><span class="fa-span">fas fa-file-medical</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-file-word"></i><span class="fa-span">fas fa-file-word</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-fire-extinguisher"></i><span class="fa-span">fas fa-fire-extinguisher</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-flushed"></i><span class="fa-span">fas fa-flushed</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-frog"></i><span class="fa-span">fas fa-frog</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-gem"></i><span class="fa-span">fas fa-gem</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-glass-whiskey"></i><span class="fa-span">fas fa-glass-whiskey</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-gopuram"></i><span class="fa-span">fas fa-gopuram</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-grin-beam-sweat"></i><span class="fa-span">fas fa-grin-beam-sweat</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-grin-tongue-wink"></i><span class="fa-span">fas fa-grin-tongue-wink</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-hamburger"></i><span class="fa-span">fas fa-hamburger</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-hand-lizard"></i><span class="fa-span">fas fa-hand-lizard</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-hand-pointer"></i><span class="fa-span">fas fa-hand-pointer</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-handshake"></i><span class="fa-span">fas fa-handshake</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-hat-wizard"></i><span class="fa-span">fas fa-hat-wizard</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-headphones-alt"></i><span class="fa-span">fas fa-headphones-alt</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-hippo"></i><span class="fa-span">fas fa-hippo</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-hospital-alt"></i><span class="fa-span">fas fa-hospital-alt</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-hourglass-half"></i><span class="fa-span">fas fa-hourglass-half</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-icons"></i><span class="fa-span">fas fa-icons</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-indent"></i><span class="fa-span">fas fa-indent</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-journal-whills"></i><span class="fa-span">fas fa-journal-whills</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-kiwi-bird"></i><span class="fa-span">fas fa-kiwi-bird</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-laugh-beam"></i><span class="fa-span">fas fa-laugh-beam</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-level-down-alt"></i><span class="fa-span">fas fa-level-down-alt</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-list-ol"></i><span class="fa-span">fas fa-list-ol</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-long-arrow-alt-up"></i><span class="fa-span">fas fa-long-arrow-alt-up</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-male"></i><span class="fa-span">fas fa-male</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-marker"></i><span class="fa-span">fas fa-marker</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-medkit"></i><span class="fa-span">fas fa-medkit</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-microchip"></i><span class="fa-span">fas fa-microchip</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-minus-square"></i><span class="fa-span">fas fa-minus-square</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-money-check"></i><span class="fa-span">fas fa-money-check</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-mouse"></i><span class="fa-span">fas fa-mouse</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-notes-medical"></i><span class="fa-span">fas fa-notes-medical</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-paint-brush"></i><span class="fa-span">fas fa-paint-brush</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-parking"></i><span class="fa-span">fas fa-parking</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-pen"></i><span class="fa-span">fas fa-pen</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-people-carry"></i><span class="fa-span">fas fa-people-carry</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-phone-square"></i><span class="fa-span">fas fa-phone-square</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-plane"></i><span class="fa-span">fas fa-plane</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-plus-circle"></i><span class="fa-span">fas fa-plus-circle</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-portrait"></i><span class="fa-span">fas fa-portrait</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-print"></i><span class="fa-span">fas fa-print</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-question-circle"></i><span class="fa-span">fas fa-question-circle</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-random"></i><span class="fa-span">fas fa-random</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-reply"></i><span class="fa-span">fas fa-reply</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-robot"></i><span class="fa-span">fas fa-robot</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-ruler-horizontal"></i><span class="fa-span">fas fa-ruler-horizontal</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-save"></i><span class="fa-span">fas fa-save</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-search-minus"></i><span class="fa-span">fas fa-search-minus</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-share-square"></i><span class="fa-span">fas fa-share-square</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-shopping-basket"></i><span class="fa-span">fas fa-shopping-basket</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-signal"></i><span class="fa-span">fas fa-signal</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-skull"></i><span class="fa-span">fas fa-skull</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-smog"></i><span class="fa-span">fas fa-smog</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-soap"></i><span class="fa-span">fas fa-soap</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-sort-amount-down"></i><span class="fa-span">fas fa-sort-amount-down</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-sort-numeric-up-alt"></i><span class="fa-span">fas fa-sort-numeric-up-alt</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-spray-can"></i><span class="fa-span">fas fa-spray-can</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-star-half-alt"></i><span class="fa-span">fas fa-star-half-alt</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-stop-circle"></i><span class="fa-span">fas fa-stop-circle</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-street-view"></i><span class="fa-span">fas fa-street-view</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-superscript"></i><span class="fa-span">fas fa-superscript</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-syringe"></i><span class="fa-span">fas fa-syringe</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-tags"></i><span class="fa-span">fas fa-tags</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-tenge"></i><span class="fa-span">fas fa-tenge</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-thermometer"></i><span class="fa-span">fas fa-thermometer</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-thumbtack"></i><span class="fa-span">fas fa-thumbtack</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-toggle-on"></i><span class="fa-span">fas fa-toggle-on</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-torii-gate"></i><span class="fa-span">fas fa-torii-gate</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-transgender-alt"></i><span class="fa-span">fas fa-transgender-alt</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-truck-loading"></i><span class="fa-span">fas fa-truck-loading</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-umbrella-beach"></i><span class="fa-span">fas fa-umbrella-beach</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-unlock-alt"></i><span class="fa-span">fas fa-unlock-alt</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-user-clock"></i><span class="fa-span">fas fa-user-clock</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-user-minus"></i><span class="fa-span">fas fa-user-minus</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-user-tie"></i><span class="fa-span">fas fa-user-tie</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-venus"></i><span class="fa-span">fas fa-venus</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-video-slash"></i><span class="fa-span">fas fa-video-slash</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-volume-mute"></i><span class="fa-span">fas fa-volume-mute</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-water"></i><span class="fa-span">fas fa-water</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-window-maximize"></i><span class="fa-span">fas fa-window-maximize</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-x-ray"></i><span class="fa-span">fas fa-x-ray</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-ambulance"></i><span class="fa-span">fas fa-ambulance</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-arrow-alt-circle-down"></i><span class="fa-span">fas fa-arrow-alt-circle-down</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-asterisk"></i><span class="fa-span">fas fa-asterisk</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-balance-scale-right"></i><span class="fa-span">fas fa-balance-scale-right</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-bell-slash"></i><span class="fa-span">fas fa-bell-slash</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-bong"></i><span class="fa-span">fas fa-bong</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-brain"></i><span class="fa-span">fas fa-brain</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-calendar"></i><span class="fa-span">fas fa-calendar</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-car-battery"></i><span class="fa-span">fas fa-car-battery</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-cat"></i><span class="fa-span">fas fa-cat</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-chess-bishop"></i><span class="fa-span">fas fa-chess-bishop</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-church"></i><span class="fa-span">fas fa-church</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-cloud-rain"></i><span class="fa-span">fas fa-cloud-rain</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-comment-dots"></i><span class="fa-span">fas fa-comment-dots</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-credit-card"></i><span class="fa-span">fas fa-credit-card</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-diagnoses"></i><span class="fa-span">fas fa-diagnoses</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-dog"></i><span class="fa-span">fas fa-dog</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-dumbbell"></i><span class="fa-span">fas fa-dumbbell</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-euro-sign"></i><span class="fa-span">fas fa-euro-sign</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-faucet"></i><span class="fa-span">fas fa-faucet</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-file-image"></i><span class="fa-span">fas fa-file-image</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-filter"></i><span class="fa-span">fas fa-filter</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-folder-plus"></i><span class="fa-span">fas fa-folder-plus</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-gifts"></i><span class="fa-span">fas fa-gifts</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-grimace"></i><span class="fa-span">fas fa-grimace</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-grip-lines-vertical"></i><span class="fa-span">fas fa-grip-lines-vertical</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-hand-point-down"></i><span class="fa-span">fas fa-hand-point-down</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-hard-hat"></i><span class="fa-span">fas fa-hard-hat</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-heartbeat"></i><span class="fa-span">fas fa-heartbeat</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-hotdog"></i><span class="fa-span">fas fa-hotdog</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-igloo"></i><span class="fa-span">fas fa-igloo</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-khanda"></i><span class="fa-span">fas fa-khanda</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-leaf"></i><span class="fa-span">fas fa-leaf</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-lock-open"></i><span class="fa-span">fas fa-lock-open</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-map-marker"></i><span class="fa-span">fas fa-map-marker</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-memory"></i><span class="fa-span">fas fa-memory</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-money-bill"></i><span class="fa-span">fas fa-money-bill</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-network-wired"></i><span class="fa-span">fas fa-network-wired</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-paper-plane"></i><span class="fa-span">fas fa-paper-plane</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-pen-square"></i><span class="fa-span">fas fa-pen-square</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-piggy-bank"></i><span class="fa-span">fas fa-piggy-bank</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-poll-h"></i><span class="fa-span">fas fa-poll-h</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-pump-soap"></i><span class="fa-span">fas fa-pump-soap</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-redo"></i><span class="fa-span">fas fa-redo</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-rss-square"></i><span class="fa-span">fas fa-rss-square</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-sd-card"></i><span class="fa-span">fas fa-sd-card</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-ship"></i><span class="fa-span">fas fa-ship</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-sitemap"></i><span class="fa-span">fas fa-sitemap</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-snowboarding"></i><span class="fa-span">fas fa-snowboarding</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-sort-down"></i><span class="fa-span">fas fa-sort-down</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-stamp"></i><span class="fa-span">fas fa-stamp</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-store-alt"></i><span class="fa-span">fas fa-store-alt</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-swimming-pool"></i><span class="fa-span">fas fa-swimming-pool</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-teeth"></i><span class="fa-span">fas fa-teeth</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-thermometer-quarter"></i><span class="fa-span">fas fa-thermometer-quarter</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-toolbox"></i><span class="fa-span">fas fa-toolbox</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-trash-restore-alt"></i><span class="fa-span">fas fa-trash-restore-alt</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-universal-access"></i><span class="fa-span">fas fa-universal-access</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-user-graduate"></i><span class="fa-span">fas fa-user-graduate</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-users-slash"></i><span class="fa-span">fas fa-users-slash</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-viruses"></i><span class="fa-span">fas fa-viruses</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-wheelchair"></i><span class="fa-span">fas fa-wheelchair</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-address-card"></i><span class="fa-span">fas fa-address-card</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-arrow-down"></i><span class="fa-span">fas fa-arrow-down</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-battery-empty"></i><span class="fa-span">fas fa-battery-empty</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-border-none"></i><span class="fa-span">fas fa-border-none</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-camera"></i><span class="fa-span">fas fa-camera</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-chart-line"></i><span class="fa-span">fas fa-chart-line</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-clock"></i><span class="fa-span">fas fa-clock</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-compress-alt"></i><span class="fa-span">fas fa-compress-alt</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-dice-three"></i><span class="fa-span">fas fa-dice-three</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-ellipsis-v"></i><span class="fa-span">fas fa-ellipsis-v</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-file-archive"></i><span class="fa-span">fas fa-file-archive</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-flag"></i><span class="fa-span">fas fa-flag</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-globe-americas"></i><span class="fa-span">fas fa-globe-americas</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-hand-holding-heart"></i><span class="fa-span">fas fa-hand-holding-heart</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-head-side-mask"></i><span class="fa-span">fas fa-head-side-mask</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-hryvnia"></i><span class="fa-span">fas fa-hryvnia</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-laptop-code"></i><span class="fa-span">fas fa-laptop-code</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-lungs-virus"></i><span class="fa-span">fas fa-lungs-virus</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-microphone-slash"></i><span class="fa-span">fas fa-microphone-slash</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-om"></i><span class="fa-span">fas fa-om</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-person-booth"></i><span class="fa-span">fas fa-person-booth</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-praying-hands"></i><span class="fa-span">fas fa-praying-hands</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-retweet"></i><span class="fa-span">fas fa-retweet</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-shapes"></i><span class="fa-span">fas fa-shapes</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-sliders-h"></i><span class="fa-span">fas fa-sliders-h</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-spell-check"></i><span class="fa-span">fas fa-spell-check</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-subway"></i><span class="fa-span">fas fa-subway</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-th"></i><span class="fa-span">fas fa-th</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-trailer"></i><span class="fa-span">fas fa-trailer</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-user-alt-slash"></i><span class="fa-span">fas fa-user-alt-slash</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-vest-patches"></i><span class="fa-span">fas fa-vest-patches</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-wine-glass"></i><span class="fa-span">fas fa-wine-glass</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-backspace"></i><span class="fa-span">fas fa-backspace</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-building"></i><span class="fa-span">fas fa-building</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-chevron-circle-left"></i><span class="fa-span">fas fa-chevron-circle-left</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-cube"></i><span class="fa-span">fas fa-cube</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-external-link-alt"></i><span class="fa-span">fas fa-external-link-alt</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-futbol"></i><span class="fa-span">fas fa-futbol</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-hand-spock"></i><span class="fa-span">fas fa-hand-spock</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-info-circle"></i><span class="fa-span">fas fa-info-circle</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-mars-stroke-h"></i><span class="fa-span">fas fa-mars-stroke-h</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-pause"></i><span class="fa-span">fas fa-pause</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-quran"></i><span class="fa-span">fas fa-quran</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-sign"></i><span class="fa-span">fas fa-sign</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-step-forward"></i><span class="fa-span">fas fa-step-forward</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-tint"></i><span class="fa-span">fas fa-tint</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-user-secret"></i><span class="fa-span">fas fa-user-secret</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-angle-left"></i><span class="fa-span">fas fa-angle-left</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-caret-square-left"></i><span class="fa-span">fas fa-caret-square-left</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-dove"></i><span class="fa-span">fas fa-dove</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-grin-stars"></i><span class="fa-span">fas fa-grin-stars</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-link"></i><span class="fa-span">fas fa-link</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-play"></i><span class="fa-span">fas fa-play</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-sort-alpha-down"></i><span class="fa-span">fas fa-sort-alpha-down</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-tshirt"></i><span class="fa-span">fas fa-tshirt</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-blender"></i><span class="fa-span">fas fa-blender</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-file-prescription"></i><span class="fa-span">fas fa-file-prescription</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-mortar-pestle"></i><span class="fa-span">fas fa-mortar-pestle</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-tablet-alt"></i><span class="fa-span">fas fa-tablet-alt</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-coffee"></i><span class="fa-span">fas fa-coffee</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-sad-cry"></i><span class="fa-span">fas fa-sad-cry</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-home"></i><span class="fa-span">fas fa-home</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-vr-cardboard"></i><span class="fa-span">fas fa-vr-cardboard</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fas fa-grin-beam-sweat"></i><span class="fa-span">fas fa-grin-beam-sweat</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-accusoft"></i><span class="fa-span">fab fa-accusoft</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-affiliatetheme"></i><span class="fa-span">fab fa-affiliatetheme</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-amazon"></i><span class="fa-span">fab fa-amazon</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-angellist"></i><span class="fa-span">fab fa-angellist</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-app-store-ios"></i><span class="fa-span">fab fa-app-store-ios</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-artstation"></i><span class="fa-span">fab fa-artstation</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-autoprefixer"></i><span class="fa-span">fab fa-autoprefixer</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-bandcamp"></i><span class="fa-span">fab fa-bandcamp</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-bimobject"></i><span class="fa-span">fab fa-bimobject</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-black-tie"></i><span class="fa-span">fab fa-black-tie</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-bluetooth"></i><span class="fa-span">fab fa-bluetooth</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-buffer"></i><span class="fa-span">fab fa-buffer</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-canadian-maple-leaf"></i><span class="fa-span">fab fa-canadian-maple-leaf</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-cc-diners-club"></i><span class="fa-span">fab fa-cc-diners-club</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-cc-paypal"></i><span class="fa-span">fab fa-cc-paypal</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-centos"></i><span class="fa-span">fab fa-centos</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-cloudscale"></i><span class="fa-span">fab fa-cloudscale</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-codiepie"></i><span class="fa-span">fab fa-codiepie</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-cotton-bureau"></i><span class="fa-span">fab fa-cotton-bureau</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-creative-commons-nc"></i><span class="fa-span">fab fa-creative-commons-nc</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-creative-commons-pd"></i><span class="fa-span">fab fa-creative-commons-pd</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-critical-role"></i><span class="fa-span">fab fa-critical-role</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-d-and-d"></i><span class="fa-span">fab fa-d-and-d</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-deezer"></i><span class="fa-span">fab fa-deezer</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-dev"></i><span class="fa-span">fab fa-dev</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-digg"></i><span class="fa-span">fab fa-digg</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-dochub"></i><span class="fa-span">fab fa-dochub</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-dribbble-square"></i><span class="fa-span">fab fa-dribbble-square</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-earlybirds"></i><span class="fa-span">fab fa-earlybirds</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-elementor"></i><span class="fa-span">fab fa-elementor</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-envira"></i><span class="fa-span">fab fa-envira</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-evernote"></i><span class="fa-span">fab fa-evernote</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-facebook-messenger"></i><span class="fa-span">fab fa-facebook-messenger</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-fedora"></i><span class="fa-span">fab fa-fedora</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-first-order"></i><span class="fa-span">fab fa-first-order</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-flipboard"></i><span class="fa-span">fab fa-flipboard</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-font-awesome-flag"></i><span class="fa-span">fab fa-font-awesome-flag</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-fort-awesome-alt"></i><span class="fa-span">fab fa-fort-awesome-alt</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-freebsd"></i><span class="fa-span">fab fa-freebsd</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-get-pocket"></i><span class="fa-span">fab fa-get-pocket</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-git-alt"></i><span class="fa-span">fab fa-git-alt</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-github-square"></i><span class="fa-span">fab fa-github-square</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-glide"></i><span class="fa-span">fab fa-glide</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-goodreads-g"></i><span class="fa-span">fab fa-goodreads-g</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-google-play"></i><span class="fa-span">fab fa-google-play</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-google-wallet"></i><span class="fa-span">fab fa-google-wallet</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-grunt"></i><span class="fa-span">fab fa-grunt</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-hacker-news-square"></i><span class="fa-span">fab fa-hacker-news-square</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-hive"></i><span class="fa-span">fab fa-hive</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-houzz"></i><span class="fa-span">fab fa-houzz</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-imdb"></i><span class="fa-span">fab fa-imdb</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-instalod"></i><span class="fa-span">fab fa-instalod</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-ioxhost"></i><span class="fa-span">fab fa-ioxhost</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-java"></i><span class="fa-span">fab fa-java</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-joget"></i><span class="fa-span">fab fa-joget</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-jsfiddle"></i><span class="fa-span">fab fa-jsfiddle</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-kickstarter"></i><span class="fa-span">fab fa-kickstarter</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-lastfm"></i><span class="fa-span">fab fa-lastfm</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-line"></i><span class="fa-span">fab fa-line</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-linux"></i><span class="fa-span">fab fa-linux</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-mandalorian"></i><span class="fa-span">fab fa-mandalorian</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-mdb"></i><span class="fa-span">fab fa-mdb</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-medrt"></i><span class="fa-span">fab fa-medrt</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-microblog"></i><span class="fa-span">fab fa-microblog</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-mixer"></i><span class="fa-span">fab fa-mixer</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-napster"></i><span class="fa-span">fab fa-napster</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-node-js"></i><span class="fa-span">fab fa-node-js</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-octopus-deploy"></i><span class="fa-span">fab fa-octopus-deploy</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-opencart"></i><span class="fa-span">fab fa-opencart</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-orcid"></i><span class="fa-span">fab fa-orcid</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-palfed"></i><span class="fa-span">fab fa-palfed</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-perbyte"></i><span class="fa-span">fab fa-perbyte</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-phoenix-squadron"></i><span class="fa-span">fab fa-phoenix-squadron</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-pied-piper-hat"></i><span class="fa-span">fab fa-pied-piper-hat</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-pinterest-p"></i><span class="fa-span">fab fa-pinterest-p</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-pushed"></i><span class="fa-span">fab fa-pushed</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-quora"></i><span class="fa-span">fab fa-quora</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-react"></i><span class="fa-span">fab fa-react</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-red-river"></i><span class="fa-span">fab fa-red-river</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-redhat"></i><span class="fa-span">fab fa-redhat</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-resolving"></i><span class="fa-span">fab fa-resolving</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-rust"></i><span class="fa-span">fab fa-rust</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-schlix"></i><span class="fa-span">fab fa-schlix</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-sellsy"></i><span class="fa-span">fab fa-sellsy</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-shopware"></i><span class="fa-span">fab fa-shopware</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-sketch"></i><span class="fa-span">fab fa-sketch</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-slack-hash"></i><span class="fa-span">fab fa-slack-hash</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-snapchat-square"></i><span class="fa-span">fab fa-snapchat-square</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-speaker-deck"></i><span class="fa-span">fab fa-speaker-deck</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-stack-overflow"></i><span class="fa-span">fab fa-stack-overflow</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-steam-square"></i><span class="fa-span">fab fa-steam-square</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-stripe"></i><span class="fa-span">fab fa-stripe</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-stumbleupon-circle"></i><span class="fa-span">fab fa-stumbleupon-circle</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-swift"></i><span class="fa-span">fab fa-swift</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-telegram-plane"></i><span class="fa-span">fab fa-telegram-plane</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-themeisle"></i><span class="fa-span">fab fa-themeisle</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-trello"></i><span class="fa-span">fab fa-trello</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-twitter"></i><span class="fa-span">fab fa-twitter</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-ubuntu"></i><span class="fa-span">fab fa-ubuntu</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-uniregistry"></i><span class="fa-span">fab fa-uniregistry</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-ups"></i><span class="fa-span">fab fa-ups</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-vaadin"></i><span class="fa-span">fab fa-vaadin</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-viber"></i><span class="fa-span">fab fa-viber</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-vine"></i><span class="fa-span">fab fa-vine</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-watchman-monitoring"></i><span class="fa-span">fab fa-watchman-monitoring</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-weixin"></i><span class="fa-span">fab fa-weixin</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-wikipedia-w"></i><span class="fa-span">fab fa-wikipedia-w</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-wodu"></i><span class="fa-span">fab fa-wodu</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-wpbeginner"></i><span class="fa-span">fab fa-wpbeginner</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-xbox"></i><span class="fa-span">fab fa-xbox</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-yahoo"></i><span class="fa-span">fab fa-yahoo</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-yarn"></i><span class="fa-span">fab fa-yarn</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-youtube-square"></i><span class="fa-span">fab fa-youtube-square</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-adn"></i><span class="fa-span">fab fa-adn</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-amilia"></i><span class="fa-span">fab fa-amilia</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-apple"></i><span class="fa-span">fab fa-apple</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-aviato"></i><span class="fa-span">fab fa-aviato</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-bitcoin"></i><span class="fa-span">fab fa-bitcoin</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-bootstrap"></i><span class="fa-span">fab fa-bootstrap</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-cc-amex"></i><span class="fa-span">fab fa-cc-amex</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-cc-visa"></i><span class="fa-span">fab fa-cc-visa</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-cloudversify"></i><span class="fa-span">fab fa-cloudversify</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-creative-commons"></i><span class="fa-span">fab fa-creative-commons</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-css3-alt"></i><span class="fa-span">fab fa-css3-alt</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-deploydog"></i><span class="fa-span">fab fa-deploydog</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-discord"></i><span class="fa-span">fab fa-discord</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-drupal"></i><span class="fa-span">fab fa-drupal</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-ember"></i><span class="fa-span">fab fa-ember</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-facebook"></i><span class="fa-span">fab fa-facebook</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-firefox"></i><span class="fa-span">fab fa-firefox</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-font-awesome"></i><span class="fa-span">fab fa-font-awesome</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-foursquare"></i><span class="fa-span">fab fa-foursquare</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-gg-circle"></i><span class="fa-span">fab fa-gg-circle</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-gitlab"></i><span class="fa-span">fab fa-gitlab</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-google-drive"></i><span class="fa-span">fab fa-google-drive</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-grav"></i><span class="fa-span">fab fa-grav</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-hips"></i><span class="fa-span">fab fa-hips</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-hubspot"></i><span class="fa-span">fab fa-hubspot</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-internet-explorer"></i><span class="fa-span">fab fa-internet-explorer</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-jenkins"></i><span class="fa-span">fab fa-jenkins</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-keybase"></i><span class="fa-span">fab fa-keybase</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-leanpub"></i><span class="fa-span">fab fa-leanpub</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-magento"></i><span class="fa-span">fab fa-magento</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-medium"></i><span class="fa-span">fab fa-medium</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-mix"></i><span class="fa-span">fab fa-mix</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-nimblr"></i><span class="fa-span">fab fa-nimblr</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-odnoklassniki-square"></i><span class="fa-span">fab fa-odnoklassniki-square</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-page4"></i><span class="fa-span">fab fa-page4</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-phabricator"></i><span class="fa-span">fab fa-phabricator</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-pied-piper-square"></i><span class="fa-span">fab fa-pied-piper-square</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-qq"></i><span class="fa-span">fab fa-qq</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-readme"></i><span class="fa-span">fab fa-readme</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-replyd"></i><span class="fa-span">fab fa-replyd</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-salesforce"></i><span class="fa-span">fab fa-salesforce</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-shirtsinbulk"></i><span class="fa-span">fab fa-shirtsinbulk</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-skype"></i><span class="fa-span">fab fa-skype</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-sourcetree"></i><span class="fa-span">fab fa-sourcetree</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-staylinked"></i><span class="fa-span">fab fa-staylinked</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-studiovinari"></i><span class="fa-span">fab fa-studiovinari</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-teamspeak"></i><span class="fa-span">fab fa-teamspeak</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-tiktok"></i><span class="fa-span">fab fa-tiktok</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-typo3"></i><span class="fa-span">fab fa-typo3</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-unsplash"></i><span class="fa-span">fab fa-unsplash</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-viadeo"></i><span class="fa-span">fab fa-viadeo</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-vnv"></i><span class="fa-span">fab fa-vnv</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-whatsapp-square"></i><span class="fa-span">fab fa-whatsapp-square</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-wordpress"></i><span class="fa-span">fab fa-wordpress</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-xing-square"></i><span class="fa-span">fab fa-xing-square</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-yoast"></i><span class="fa-span">fab fa-yoast</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-algolia"></i><span class="fa-span">fab fa-algolia</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-atlassian"></i><span class="fa-span">fab fa-atlassian</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-blogger"></i><span class="fa-span">fab fa-blogger</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-cc-jcb"></i><span class="fa-span">fab fa-cc-jcb</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-connectdevelop"></i><span class="fa-span">fab fa-connectdevelop</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-dhl"></i><span class="fa-span">fab fa-dhl</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-edge"></i><span class="fa-span">fab fa-edge</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-fantasy-flight-games"></i><span class="fa-span">fab fa-fantasy-flight-games</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-fonticons-fi"></i><span class="fa-span">fab fa-fonticons-fi</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-github"></i><span class="fa-span">fab fa-github</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-google-plus-g"></i><span class="fa-span">fab fa-google-plus-g</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-hornbill"></i><span class="fa-span">fab fa-hornbill</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-itunes"></i><span class="fa-span">fab fa-itunes</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-korvue"></i><span class="fa-span">fab fa-korvue</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-mastodon"></i><span class="fa-span">fab fa-mastodon</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-modx"></i><span class="fa-span">fab fa-modx</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-opera"></i><span class="fa-span">fab fa-opera</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-pied-piper"></i><span class="fa-span">fab fa-pied-piper</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-raspberry-pi"></i><span class="fa-span">fab fa-raspberry-pi</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-rocketchat"></i><span class="fa-span">fab fa-rocketchat</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-sistrix"></i><span class="fa-span">fab fa-sistrix</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-squarespace"></i><span class="fa-span">fab fa-squarespace</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-supple"></i><span class="fa-span">fab fa-supple</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-tumblr-square"></i><span class="fa-span">fab fa-tumblr-square</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-usps"></i><span class="fa-span">fab fa-usps</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-weebly"></i><span class="fa-span">fab fa-weebly</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-wpforms"></i><span class="fa-span">fab fa-wpforms</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-500px"></i><span class="fa-span">fab fa-500px</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-behance"></i><span class="fa-span">fab fa-behance</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-chromecast"></i><span class="fa-span">fab fa-chromecast</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-dailymotion"></i><span class="fa-span">fab fa-dailymotion</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-ethereum"></i><span class="fa-span">fab fa-ethereum</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-galactic-republic"></i><span class="fa-span">fab fa-galactic-republic</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-gulp"></i><span class="fa-span">fab fa-gulp</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-js"></i><span class="fa-span">fab fa-js</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-megaport"></i><span class="fa-span">fab fa-megaport</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-paypal"></i><span class="fa-span">fab fa-paypal</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-reddit-alien"></i><span class="fa-span">fab fa-reddit-alien</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-snapchat"></i><span class="fa-span">fab fa-snapchat</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-the-red-yeti"></i><span class="fa-span">fab fa-the-red-yeti</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-vimeo-square"></i><span class="fa-span">fab fa-vimeo-square</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-yandex"></i><span class="fa-span">fab fa-yandex</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-buy-n-large"></i><span class="fa-span">fab fa-buy-n-large</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-draft2digital"></i><span class="fa-span">fab fa-draft2digital</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-gofore"></i><span class="fa-span">fab fa-gofore</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-linkedin-in"></i><span class="fa-span">fab fa-linkedin-in</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-playstation"></i><span class="fa-span">fab fa-playstation</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-sticker-mule"></i><span class="fa-span">fab fa-sticker-mule</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-wix"></i><span class="fa-span">fab fa-wix</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-instagram"></i><span class="fa-span">fab fa-instagram</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-searchengin"></i><span class="fa-span">fab fa-searchengin</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-angular"></i><span class="fa-span">fab fa-angular</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-ns8"></i><span class="fa-span">fab fa-ns8</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-firstdraft"></i><span class="fa-span">fab fa-firstdraft</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-umbraco"></i><span class="fa-span">fab fa-umbraco</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon fab fa-accusoft"></i><span class="fa-span">fab fa-accusoft</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon far fa-address-book"></i><span class="fa-span">far fa-address-book</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon far fa-bell-slash"></i><span class="fa-span">far fa-bell-slash</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon far fa-calendar-alt"></i><span class="fa-span">far fa-calendar-alt</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon far fa-calendar-times"></i><span class="fa-span">far fa-calendar-times</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon far fa-caret-square-up"></i><span class="fa-span">far fa-caret-square-up</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon far fa-circle"></i><span class="fa-span">far fa-circle</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon far fa-closed-captioning"></i><span class="fa-span">far fa-closed-captioning</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon far fa-comments"></i><span class="fa-span">far fa-comments</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon far fa-credit-card"></i><span class="fa-span">far fa-credit-card</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon far fa-envelope"></i><span class="fa-span">far fa-envelope</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon far fa-file"></i><span class="fa-span">far fa-file</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon far fa-file-code"></i><span class="fa-span">far fa-file-code</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon far fa-file-powerpoint"></i><span class="fa-span">far fa-file-powerpoint</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon far fa-flushed"></i><span class="fa-span">far fa-flushed</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon far fa-frown-open"></i><span class="fa-span">far fa-frown-open</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon far fa-grin"></i><span class="fa-span">far fa-grin</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon far fa-grin-hearts"></i><span class="fa-span">far fa-grin-hearts</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon far fa-grin-tears"></i><span class="fa-span">far fa-grin-tears</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon far fa-grin-wink"></i><span class="fa-span">far fa-grin-wink</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon far fa-hand-point-down"></i><span class="fa-span">far fa-hand-point-down</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon far fa-hand-pointer"></i><span class="fa-span">far fa-hand-pointer</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon far fa-handshake"></i><span class="fa-span">far fa-handshake</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon far fa-hourglass"></i><span class="fa-span">far fa-hourglass</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon far fa-images"></i><span class="fa-span">far fa-images</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon far fa-kiss-wink-heart"></i><span class="fa-span">far fa-kiss-wink-heart</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon far fa-laugh-wink"></i><span class="fa-span">far fa-laugh-wink</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon far fa-list-alt"></i><span class="fa-span">far fa-list-alt</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon far fa-meh-rolling-eyes"></i><span class="fa-span">far fa-meh-rolling-eyes</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon far fa-newspaper"></i><span class="fa-span">far fa-newspaper</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon far fa-pause-circle"></i><span class="fa-span">far fa-pause-circle</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon far fa-registered"></i><span class="fa-span">far fa-registered</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon far fa-share-square"></i><span class="fa-span">far fa-share-square</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon far fa-snowflake"></i><span class="fa-span">far fa-snowflake</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon far fa-sticky-note"></i><span class="fa-span">far fa-sticky-note</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon far fa-thumbs-down"></i><span class="fa-span">far fa-thumbs-down</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon far fa-trash-alt"></i><span class="fa-span">far fa-trash-alt</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon far fa-window-maximize"></i><span class="fa-span">far fa-window-maximize</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon far fa-angry"></i><span class="fa-span">far fa-angry</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon far fa-building"></i><span class="fa-span">far fa-building</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon far fa-caret-square-left"></i><span class="fa-span">far fa-caret-square-left</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon far fa-clock"></i><span class="fa-span">far fa-clock</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon far fa-copy"></i><span class="fa-span">far fa-copy</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon far fa-eye"></i><span class="fa-span">far fa-eye</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon far fa-file-image"></i><span class="fa-span">far fa-file-image</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon far fa-folder-open"></i><span class="fa-span">far fa-folder-open</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon far fa-grin-beam"></i><span class="fa-span">far fa-grin-beam</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon far fa-grin-tongue-squint"></i><span class="fa-span">far fa-grin-tongue-squint</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon far fa-hand-point-right"></i><span class="fa-span">far fa-hand-point-right</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon far fa-heart"></i><span class="fa-span">far fa-heart</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon far fa-kiss"></i><span class="fa-span">far fa-kiss</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon far fa-life-ring"></i><span class="fa-span">far fa-life-ring</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon far fa-money-bill-alt"></i><span class="fa-span">far fa-money-bill-alt</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon far fa-plus-square"></i><span class="fa-span">far fa-plus-square</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon far fa-smile-beam"></i><span class="fa-span">far fa-smile-beam</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon far fa-sun"></i><span class="fa-span">far fa-sun</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon far fa-user-circle"></i><span class="fa-span">far fa-user-circle</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon far fa-arrow-alt-circle-up"></i><span class="fa-span">far fa-arrow-alt-circle-up</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon far fa-check-circle"></i><span class="fa-span">far fa-check-circle</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon far fa-dot-circle"></i><span class="fa-span">far fa-dot-circle</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon far fa-file-word"></i><span class="fa-span">far fa-file-word</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon far fa-grin-squint-tears"></i><span class="fa-span">far fa-grin-squint-tears</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon far fa-hand-scissors"></i><span class="fa-span">far fa-hand-scissors</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon far fa-laugh-beam"></i><span class="fa-span">far fa-laugh-beam</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon far fa-object-ungroup"></i><span class="fa-span">far fa-object-ungroup</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon far fa-star"></i><span class="fa-span">far fa-star</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon far fa-window-restore"></i><span class="fa-span">far fa-window-restore</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon far fa-comment-alt"></i><span class="fa-span">far fa-comment-alt</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon far fa-gem"></i><span class="fa-span">far fa-gem</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon far fa-id-card"></i><span class="fa-span">far fa-id-card</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon far fa-sad-tear"></i><span class="fa-span">far fa-sad-tear</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon far fa-calendar-minus"></i><span class="fa-span">far fa-calendar-minus</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon far fa-hand-paper"></i><span class="fa-span">far fa-hand-paper</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon far fa-times-circle"></i><span class="fa-span">far fa-times-circle</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon far fa-meh"></i><span class="fa-span">far fa-meh</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon far fa-file-archive"></i><span class="fa-span">far fa-file-archive</span></div>
										<div class="col-sm-6 col-md-4 col-lg-3"><i class="fa-icon far fa-address-book"></i><span class="fa-span">far fa-address-book</span></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div> 

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
	<script src="assets/plugins/simplebar/simplebar.min.js"></script>
	<script src="assets/plugins/jquery-zoom/jquery.zoom.min.js"></script>
	<script src="assets/plugins/slick/slick.min.js"></script>
 
	<!-- Option Switcher -->
	<script src="assets/plugins/options-sidebar/optionswitcher.js"></script>
  
	<!-- Ekka Custom -->
	<script src="assets/js/ekka.js"></script>
</body>

<!-- Mirrored from loopinfosol.in/themeforest/ekka-html-v33/ekka-admin/font-awsome-icons.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 02 Dec 2022 06:49:14 GMT -->
</html>