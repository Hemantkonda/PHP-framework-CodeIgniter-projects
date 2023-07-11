<div class="main-content" style="min-height: 548px;">
	<section class="section">
		<div class="section-body">
			<div class="row mt-sm-4">
				<div class="col-lg-12 col-md-12">
					<form method="post" action="<?php echo base_url();?>admin/add_profile" enctype="multipart/form-data" class="needs-validation">
						<div class="card-header">
							<h4>Edit Profile</h4>
						</div>
						<div class="card-body">
							<div class="row">
								<input type="text" name="proid" id="proid"
									value='<?= isset($profile->id) ? $profile->id :'';?>' hidden>
							</div>
							<div class="row">
								<div class="form-group col-md-6 col-12">
									<label>Email</label>
									<input type="email" class="form-control" name="email"
										value="<?= isset($profile->email) ? $profile->email : '';?>">
									<div class="invalid-feedback">
										Please fill in the email
									</div>
								</div>
								<div class="form-group col-md-6 col-12">
									<label>Phone</label>
									<input type="tel" class="form-control" name="phone"
										value="<?= isset($profile->phone) ? $profile->phone : '';?>">
								</div>
                                <div class="form-group col-md-12 col-12">
									<label>Address</label>
									<input type="text" class="form-control" name="address"
									value="<?= isset($profile->address) ? $profile->address : '';?>">
									<div class="invalid-feedback">
										Please fill in the Address
									</div>
								</div>
								<div class="form-group col-md-4 col-12">
									<label>Instagram</label>
									<input type="text" class="form-control" name="insta" placeholder="Instagram Link"
										value="<?= isset($profile->insta) ? $profile->insta : '';?>">
								</div>
								<div class="form-group col-md-4 col-12">
									<label>Facebook</label>
									<input type="text" class="form-control" name="fb" placeholder="Facebook Link"
										value="<?= isset($profile->fb) ? $profile->fb : '';?>">
								</div>
								<div class="form-group col-md-4 col-12">
									<label>Twitter</label>
									<input type="text" class="form-control" name="twitter" placeholder="Twitter Link"
										value="<?= isset($profile->twitter) ? $profile->twitter : '';?>">
								</div>
								<div class="form-group col-md-6 col-12">
									<label>Change Logo</label>
									<input type="file" class="form-control" name="logo">
								</div>
								<div class="form-group col-md-6 col-12">
									<label>Footer Logo</label>
									<input type="file" class="form-control" name="footer_logo">
								</div>
							</div>
						</div>
						<div class="card-footer text-right">
							<button class="btn btn-primary">Save Changes</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
</div>


