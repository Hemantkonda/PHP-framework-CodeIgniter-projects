<html lang="en">
<!-- auth-login.html  21 Nov 2019 03:49:32 GMT -->

<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
	<title>Aprtel - Admin Dashboard</title>
	<!-- General CSS Files -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/admin/assets/css/app.min.css">
	<link rel="stylesheet"
		href="<?php echo base_url();?>assets/admin/assets/bundles/bootstrap-social/bootstrap-social.css">
	<!-- Template CSS -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/admin/assets/css/style.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/admin/assets/css/components.css">
	<!-- Custom style CSS -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/admin/assets/css/custom.css">
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>assets/img/Aprtel.png">
</head>

<body class="light light-sidebar theme-white">
	<div class="loader" style="display: none;"></div>
	<div id="app">
		<section class="section">
			<div class="container mt-5">
				<h2 class="text-center mb-4">Welcome To Aprtel!</h2>
				<div class="row">
					<div
						class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
						<div class="card card-primary">
							<div class="card-header">
								<h4>Login</h4>
							</div>
							<div class="danger mx-4">
								<?php echo $this->session->flashdata('error')?>
							</div>
							<div class="card-body">
								<form method="POST" action="<?php echo base_url();?>Auth/check_login"
									class="needs-validation">
									<div class="form-group">
										<label for="email">Email</label>
										<input id="email" type="email" class="form-control" name="user" tabindex="1"
											required="" autofocus="">
										<div class="invalid-feedback">
											<?php echo form_error('email');?>
										</div>
									</div>
									<div class="form-group">
										<div class="d-block">
											<label for="password" class="control-label">Password</label>
											<div class="float-right">
												<a href="#" class="text-small">
													Forgot Password?
												</a>
											</div>
										</div>
										<input id="password" type="password" class="form-control" name="password"
											tabindex="2" required="">
										<div class="invalid-feedback">
											<?php echo form_error('password');?>
										</div>
									</div>
									<div class="form-group">
										<button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
											Login
										</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
	<!-- General JS Scripts -->
	<script src="<?php echo base_url();?>assets/admin/assets/js/app.min.js"></script>
	<!-- JS Libraies -->
	<!-- Page Specific JS File -->
	<!-- Template JS File -->
	<script src="<?php echo base_url();?>assets/admin/assets/js/scripts.js"></script>
	<!-- Custom JS File -->
	<script src="<?php echo base_url();?>assets/admin/assets/js/custom.js"></script>
	<!-- Code injected by live-server -->
</body><!-- auth-login.html  21 Nov 2019 03:49:32 GMT -->

</html>
