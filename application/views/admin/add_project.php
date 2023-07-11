<div class="main-content" style="min-height: 548px;">
	<section class="section">
		<div class="section-body">
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<form method="post" action="<?php echo base_url();?>admin/project_added" class="needs-validation"
						enctype="multipart/form-data">
						<div class="card-header">
							<h4>Add Project</h4>
						</div>
						<div class="card-body">
							<input type="text" name="proid" id="proid"
								value='<?= isset($project->id) ? $project->id : ''?>' hidden>
							<div class="form-group row mb-4"><label
									class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Project Title</label>
								<div class="col-sm-12 col-md-7"><input type="text" name="title" class="form-control"
										value='<?= isset($project->title) ? $project->title : ''?>'>
								</div>
							</div>
							<div class="form-group row mb-4"><label
									class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Description</label>
								<div class="col-sm-12 col-md-7"><input type="text" name="description"
										value="<?= isset($project->address) ? $project->address :''?>"
										class="form-control"></div>
							</div>

						</div>
						<div class="form-group row mb-4"><label
								class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Project Image</label>
							<div class="col-sm-12 col-md-6">
								<div id="image-preview" class="image-preview"><label for="image-upload"
										id="image-label">Choose File</label><input type="file" name="image" 
										id="image-upload"></div>
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
