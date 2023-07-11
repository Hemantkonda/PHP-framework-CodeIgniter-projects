<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

	<title>Aprtel</title>

	<!-- Fav Icon -->
	<link rel="icon" href="<?php echo base_url();?>assets/images/Fevicon.png" type="image/x-icon">

	<!-- Google Fonts -->
	<link
		href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
		rel="stylesheet">

	<!-- Stylesheets -->
	<link href="<?php echo base_url();?>assets/css/font-awesome-all.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/css/flaticon.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/css/owl.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/css/jquery.fancybox.min.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/css/animate.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/css/color.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/css/elpath.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/css/jquery-ui.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/css/responsive.css" rel="stylesheet">

</head>


<!-- page wrapper -->

<body>

	<div class="boxed_wrapper">


		<!-- preloader -->
		<div class="loader-wrap">
			<div class="preloader">
				<div class="preloader-close">x</div>
				<div id="handle-preloader" class="handle-preloader">
					<div class="animation-preloader">
						<div class="spinner">
							<div class="spinner-1"></div>
						</div>
						<img src="<?php echo base_url();?>assets/images/Black.png" alt="" width="200px">

					</div>
				</div>
			</div>
		</div>
		<!-- preloader end -->


		<!--Search Popup-->
		<div id="search-popup" class="search-popup">
			<div class="popup-inner">
				<div class="upper-box clearfix">
					<figure class="logo-box pull-left"><a href="#"><img
								src="<?php echo base_url();?>assets/images/logo.png" alt=""></a>
					</figure>
					<div class="close-search pull-right"><span class="far fa-times"></span></div>
				</div>
				<div class="overlay-layer"></div>
				<div class="auto-container">
					<div class="search-form">
						<form method="post" action="#">
							<div class="form-group">
								<fieldset>
									<input type="search" class="form-control" name="search-input" value=""
										placeholder="Type your keyword and hit" required>
									<button type="submit"><i class="far fa-search"></i></button>
								</fieldset>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>


		<!-- main header -->
		<header class="main-header">
			<!-- header-top -->
			<div class="header-top">
				<div class="top-inner">
					<div class="left-column">
						<ul class="info clearfix">
							<!-- <li><i class="icon-1"></i>Sun-Thu  08:00AM-05:00PM</li> -->
							<li><i class="icon-3"></i><a
									href="mailto:<?php echo $profile->email; ?>"><?php echo $profile->email; ?></a></li>
							<li><i class="icon-4"></i><a href="tel:<?php echo $profile->phone; ?>">+91
									<?php echo $profile->phone; ?></a></li>
						</ul>
					</div>
					<div class="right-column">
						<ul class="social-links clearfix">
							<li>
								<p>Follow Us:</p>
							</li>
							<li><a href="<?php echo $profile->fb; ?>" target="_blank"><i
										class="fab fa-facebook-f"></i></a></li>
							<li><a href="<?php echo $profile->twitter; ?>" target="_blank"><i
										class="fab fa-twitter"></i></a></li>
							<li><a href="<?php echo $profile->insta; ?>" target="_blank"><i
										class="fab fa-instagram"></i></a></li>
							<!-- <li><a href="#" target="_blank"><i class="fab fa-pinterest-p"></i></a></li> -->
						</ul>
					</div>
				</div>
			</div>
			<!-- header-lower -->
			<div class="header-lower">
				<div class="outer-box">
					<div class="menu-area clearfix">
						<div class="logo-box">
							<figure class="logo"><a href="<?php echo base_url();?>home"><img
										src="<?php echo base_url();?>uploads/<?php echo $profile->logo;?>" alt=""></a>
							</figure>
						</div>
						<!--Mobile Navigation Toggler-->
						<div class="mobile-nav-toggler">
							<i class="icon-bar"></i>
							<i class="icon-bar"></i>
							<i class="icon-bar"></i>
						</div>
						<nav class="main-menu navbar-expand-md navbar-light">
							<div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
								<ul class="navigation clearfix">
									<li class="dropdown"><a class="<?php echo $active_page=='about'?'current':''?>"
											href="<?php echo base_url();?>about">about us</a>
										<!-- <ul>
											<li><a href="#">01</a></li>
											<li><a href="#">02</a></li>
											<li><a href="#">03</a></li>
										</ul> -->
									</li>
									<li class="dropdown"><a class="<?php echo $active_page=='services'?'current':''?>"
											href="<?php echo base_url();?>services">our proficiency</a>
										<!-- <ul>
                                            <li><a href="service.html">Services 1</a></li>
                                            <li><a href="service-2.html">Services 2</a></li>
                                            <li><a href="service-3.html">Services 3</a></li>
                                            <li><a href="single_service.html">Air Conditioning</a></li>
                                            <li><a href="#">Heating Service</a></li>
                                            <li><a href="#">Power Outlets</a></li>
                                            <li><a href="indoor-lighting.html">Indoor Lighting</a></li>
                                            <li><a href="#">Security System</a></li>
                                            <li><a href="electrical-panels.html">Electrical Panels</a></li>
                                        </ul> -->
									</li>
									<li class="dropdown"><a class="<?php echo $active_page=='projects'?'current':''?>"
											href="<?php echo base_url();?>projects">our projects</a>
									</li>
									<!-- <li class="dropdown"><a href="#">Shop</a>
                                        <ul>
                                            <li><a href="shop.html">Our Shop</a></li>
                                            <li><a href="shop-details.html">Shop Details</a></li>
                                            <li><a href="cart.html">Cart Page</a></li>
                                            <li><a href="checkout.html">Checkout</a></li>
                                        </ul>
                                    </li>  -->
									<li class="dropdown"><a class="<?php echo $active_page=='blogs'?'current':''?>"
											href="<?php echo base_url();?>blogs">tech-tales & blogs</a>
										<!-- <ul>
                                            <li><a href="blog.html">Blog Grid</a></li>
                                            <li><a href="blog-2.html">Blog Standard</a></li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                        </ul> -->
									</li>
									<!-- <li><a href="contact.html">Contact</a></li>  -->
								</ul>
							</div>
						</nav>
					</div>
					<div class="nav-right">
						<div class="support-box">
							<h6><i class="icon-4"></i>Call: <a href="tel:9871598009">+91 9871598009</a></h6>
						</div>
						<div class="btn-box">
							<a href="<?php echo base_url();?>contact" class="theme-btn btn-one">contact us</a>
						</div>
					</div>
				</div>
			</div>

			<!--sticky Header-->
			<div class="sticky-header">
				<div class="outer-box">
					<div class="menu-area clearfix">
						<div class="logo-box">
							<figure class="logo"><a href="<?php echo base_url();?>home"><img
										src="<?php echo base_url();?>assets/images/Black.png" alt=""></a>
							</figure>
						</div>
						<nav class="main-menu clearfix">
							<!--Keep This Empty / Menu will come through Javascript-->
						</nav>
					</div>
					<div class="nav-right">
						<div class="support-box">
							<h6><i class="icon-4"></i>Call: <a href="tel:9871598009">+91 9871598009</a></h6>
						</div>
						<div class="search-box-outer search-toggler">
							<i class="icon-5"></i>
						</div>
						<div class="btn-box">
							<a href="<?php echo base_url();?>contact" class="theme-btn btn-one black">contact us</a>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- main-header end -->

		<!-- Mobile Menu  -->
		<div class="mobile-menu">
			<div class="menu-backdrop"></div>
			<div class="close-btn"><i class="fas fa-times"></i></div>

			<nav class="menu-box">
				<div class="nav-logo"><a href="#"><img src="<?php echo base_url();?>assets/images/White.png" alt=""
							title="" width="150px"></a></div>
				<div class="menu-outer">
					<!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
				</div>
				<div class="contact-info">
					<h4>Contact Info</h4>
					<ul>
						<li>Flat No-443, South Delhi Apartment, Plot No-8, Sector 4 Dwarka, New Delhi,
							South West Delhi, Delhi, 110078</li>
						<li><a href="tel:9871598009">+91 9871598009</a></li>
						<li><a href="mailto:Sells@arptel.com">Sells@arptel.com</a></li>
					</ul>
				</div>
				<div class="social-links">
					<ul class="clearfix">
						<li><a href="#"><span class="fab fa-twitter"></span></a></li>
						<li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
						<li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
						<li><a href="#"><span class="fab fa-instagram"></span></a></li>
						<li><a href="#"><span class="fab fa-youtube"></span></a></li>
					</ul>
				</div>
			</nav>
		</div><!-- End Mobile Menu -->
