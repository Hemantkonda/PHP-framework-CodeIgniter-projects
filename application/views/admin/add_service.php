<div class="main-content" style="min-height: 548px;">
	<section class="section">
		<div class="section-body">
			<div class="row mt-sm-4">
				<div class="col-lg-12 col-md-12">
					<form method="post" action="<?php echo base_url();?>Admin/service_added"
						enctype="multipart/form-data" class="needs-validation">
						<div class="card-header">
							<h4>Edit Profile</h4>
						</div>
						<div class="card-body">
							<div class="row">
								<input type="text" name="proid" id="proid"
									value='<?= isset($service->id) ? $service->id : ''?>' hidden>
							</div>
							<div class="row">
                                                          <!-- If Tag Having Content It Can Read From DB -->
								<div class="form-group col-md-6 col-12">
									<label>Service No.</label>
									<input type="text" class="form-control" name="sr_no"
										value="<?= isset($service->sr_no) ? $service->sr_no : ''?>">
									<div class="invalid-feedback">
										Please fill in the email
									</div>
								</div>
								<div class="form-group col-md-6 col-12">
									<label>Title</label>
									<input type="text" class="form-control" name="title"
										value="<?= isset($service->title) ? $service->title : ''?>">
								</div>
								<div class="form-group col-md-12 col-12">
									<label>Description</label>
									<input type="text" class="form-control" name="description"
										value="<?= isset($service->description) ? $service->description : ''?>">
									<div class="invalid-feedback">
										Please fill in the Address
									</div>
								</div>
								<div class="form-group row mb-4"><label
										class="col-form-label text-md-right col-12 col-md-4 col-lg-4">Service
										Image</label>
									<div class="col-sm-12 col-md-6">
										<div id="image-preview" class="image-preview"><label for="image-upload"
												id="image-label">Choose File</label><input type="file" name="image"
												id="image-upload"></div>
									</div>
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
