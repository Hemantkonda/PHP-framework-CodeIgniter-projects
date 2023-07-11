<div class="main-content" style="min-height: 548px;">
	<section class="section">
		<div class="section-body">
			<div class="row">
				<div class="col-12">
					<div class="card d-flex">
						<div class="card-header">
							<h4>Edit Service</h4>
							<td><a href="<?php echo base_url();?>add_service" class="btn btn-primary mx-5">Add
									Service</a></td>

							<?php if($this->session->flashdata('success_msg')): ?>
							<div class="alert alert-success" style="width:50%; margin:auto;">
								<?php echo $this->session->flashdata('success_msg'); ?>
							</div>
							<?php endif; ?>
							<script>
								setTimeout(() => {
									$('.alert-success').fadeOut('fast');
								}, 5000);

							</script>
						</div>

					</div>
					<div class="card-body p-0">
						<div class="table-responsive">
							<table class="table table-striped">
								<tbody>
									<tr>
										<th>Service Image</th>
										<th>Service no.</th>
										<th>Service Title</th>
										<th>Description</th>
										<th>Action</th>
									</tr>
									<?php if((sizeof($service))>0) {foreach($service as $service){?>
									<tr>
										<td>
											<img alt="image"
												src="<?php echo base_url();?>uploads/<?php echo $service->image;?>"
												class="mt-5" data-original-title="image" width="150">
										</td>
										<td><?php echo $service->sr_no; ?></td>
										<td><?php echo $service->title; ?></td>
										<td>
											<div> <?php echo $service->description?> </div>
										</td>
										<td><a href="<?php echo base_url('Admin/add_service/'.$service->id);?>"
												class="btn btn-primary">Edit</a></td>
										<td><a href="<?php echo base_url('Admin/delete_service/'.$service->id);?>"
												class="btn btn-danger">Delete</a></td>
									</tr>
									<?php }}?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
