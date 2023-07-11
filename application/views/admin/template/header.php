<!DOCTYPE html>
<html lang="en">


<!-- alert.html  21 Nov 2019 03:51:00 GMT -->

<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
	<title>Aprtel - Admin Dashboard</title>
	<!-- General CSS Files -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/admin/assets/css/app.min.css">
	<!-- Template CSS -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/admin/assets/css/style.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/admin/assets/css/components.css">
	<!-- Custom style CSS -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/admin/assets/css/custom.css">
	<link rel='shortcut icon' type='image/x-icon' href='<?php echo base_url();?>assets/img/Aprtel.png' />
</head>

<body>
	<div class="loader"></div>
	<div id="app">
		<div class="main-wrapper main-wrapper-1">
			<div class="navbar-bg"></div>
			<nav class="navbar navbar-expand-lg main-navbar sticky">
				<div class="form-inline mr-auto">
					<ul class="navbar-nav mr-3">
						<li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
									collapse-btn"> <i data-feather="align-justify"></i></a></li>
						<li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
								<i data-feather="maximize"></i>
							</a></li>
						<li>
							<form class="form-inline mr-auto">
								<div class="search-element">
									<input class="form-control" type="search" placeholder="Search" aria-label="Search"
										data-width="200">
									<button class="btn" type="submit">
										<i class="fas fa-search"></i>
									</button>
								</div>
							</form>
						</li>
					</ul>
				</div>
				<ul class="navbar-nav navbar-right">
					<li class="dropdown"><a href="#" data-toggle="dropdown"
							class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image" src=""
								class="user-img-radious-style"> <span class="d-sm-none d-lg-inline-block"></span></a>
						<div class="dropdown-menu dropdown-menu-right pullDown">
							<div class="dropdown-title">Hello Team Aprtl</div>
							<a href="<?php echo base_url();?>Auth/logout" class="dropdown-item has-icon text-danger"> <i class="fas fa-sign-out-alt"></i>
								Logout
							</a>
						</div>
					</li>
				</ul>
			</nav>
			<div class="main-sidebar sidebar-style-2">
				<aside id="sidebar-wrapper">
					<div class="sidebar-brand">

						<a href="<?php echo base_url();?>admin"> <img alt="image"
								src="<?php echo base_url();?>assets/images/Black.png" class="header-logo" />
							<!-- <span class="logo-name">Aprtel</span> -->
						</a>
					</div>
					<ul class="sidebar-menu">
						<li class="menu-header">Main</li>
						<li class="dropdown">
							<a href="#" class="menu-toggle nav-link has-dropdown"><i
									data-feather="command"></i><span>Profile Management</span></a>
							<ul class="dropdown-menu">
								<li><a class="nav-link" href="<?php echo base_url();?>profile">Profile</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="menu-toggle nav-link has-dropdown"><i
									data-feather="command"></i><span>Service Management</span></a>
							<ul class="dropdown-menu">
								<li><a class="nav-link" href="<?php echo base_url();?>service">Service</a></li>
								<li><a class="nav-link" href="<?php echo base_url();?>project">Projects</a>
								</li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="menu-toggle nav-link has-dropdown"><i
									data-feather="mail"></i><span>Manage Blogs</span></a>
							<ul class="dropdown-menu">
								<li><a class="nav-link" href="<?php echo base_url();?>blog">Blogs</a>
								</li>
							</ul>
						</li>
					</ul>
				</aside>
			</div>
