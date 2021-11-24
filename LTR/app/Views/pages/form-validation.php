<?= $this->extend('layouts/main'); ?>

	<?= $this->section('styles'); ?>

		<!--- Internal Select2 css-->
		<link href="<?php echo base_url('assets/plugins/select2/css/select2.min.css'); ?>" rel="stylesheet">

	<?= $this->endSection('styles'); ?>

				<?= $this->section('content'); ?>

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="my-auto">
							<div class="d-flex">
								<h4 class="content-title mb-0 my-auto">Forms</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Form-Validation</span>
							</div>
						</div>
						<div class="d-flex my-xl-auto right-content">
							<div class="pr-1 mb-xl-0">
								<button type="button" class="btn btn-info btn-icon mr-2"><i class="mdi mdi-filter-variant"></i></button>
							</div>
							<div class="pr-1 mb-xl-0">
								<button type="button" class="btn btn-danger btn-icon mr-2"><i class="mdi mdi-star"></i></button>
							</div>
							<div class="pr-1 mb-xl-0">
								<button type="button" class="btn btn-warning  btn-icon mr-2"><i class="mdi mdi-refresh"></i></button>
							</div>
							<div class="mb-xl-0">
								<div class="btn-group dropdown">
									<button type="button" class="btn btn-primary">14 Aug 2019</button>
									<button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" id="dropdownMenuDate" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<span class="sr-only">Toggle Dropdown</span>
									</button>
									<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate" data-x-placement="bottom-end">
										<a class="dropdown-item" href="#">2015</a>
										<a class="dropdown-item" href="#">2016</a>
										<a class="dropdown-item" href="#">2017</a>
										<a class="dropdown-item" href="#">2018</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- breadcrumb -->

					<!-- row -->
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="card">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Email Validation
									</div>
									<p class="mg-b-20">It is Very Easy to Customize and it uses in your website apllication.</p>
									<form action="<?php echo base_url('pages/form-validation'); ?>" data-parsley-validate="">
										<div class="row">
											<div class="col-lg-9 col-md-8 form-group mg-b-0">
												<label class="form-label">Email: <span class="tx-danger">*</span></label>
												<input class="form-control" name="email" placeholder="Enter email" required="" type="email">
											</div>
											<div class="col-lg-3 col-md-4 mg-t-10 mg-sm-t-25">
												<button class="btn btn-main-primary pd-x-20" type="submit">Validate Email</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="col-lg-12 col-md-12">
							<div class="card">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Select2 Box Validation
									</div>
									<p class="mg-b-20">It is Very Easy to Customize and it uses in your website apllication.</p>
									<form action="<?php echo base_url('pages/form-validation'); ?>" id="selectForm" name="selectForm">
										<div class="row">
											<div class="parsley-select col-lg-9 col-md-8" id="slWrapper">
												<select class="form-control select2" data-parsley-class-handler="#slWrapper" data-parsley-errors-container="#slErrorContainer" data-placeholder="Choose one" required="">
													<option label="Choose one">
													</option>
													<option value="Firefox">
														Firefox
													</option>
													<option value="Chrome">
														Chrome
													</option>
													<option value="Safari">
														Safari
													</option>
													<option value="Opera">
														Opera
													</option>
													<option value="Internet Explorer">
														Internet Explorer
													</option>
												</select>
												<div id="slErrorContainer"></div>
											</div>
											<div class="col-lg-3 col-md-4 mg-t-10 mg-sm-t-0">
												<button class="btn btn-main-primary pd-x-20" type="submit" value="5">Validate Form</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="col-lg-12 col-md-12">
							<div class="card">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Required Input Validation
									</div>
									<p class="mg-b-20">It is Very Easy to Customize and it uses in your website apllication.</p>
									<form action="<?php echo base_url('pages/form-validation'); ?>" data-parsley-validate="">
										<div class="row row-sm">
											<div class="col-6">
												<div class="form-group mg-b-0">
													<label class="form-label">Firstname: <span class="tx-danger">*</span></label>
													<input class="form-control" name="firstname" placeholder="Enter firstname" required="" type="text">
												</div>
											</div>
											<div class="col-6">
												<div class="form-group">
													<label class="form-label">Lastname: <span class="tx-danger">*</span></label>
													<input class="form-control" name="lastname" placeholder="Enter lastname" required="" type="text">
												</div>
											</div>
											<div class="col-12"><button class="btn btn-main-primary pd-x-20 mg-t-10" type="submit">Validate Form</button></div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
					<!-- /row -->

					<!-- row -->
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="card">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Custom Checkbox/Radio Validation
									</div>
									<p class="mg-b-20">It is Very Easy to Customize and it uses in your website apllication.</p>
									<form action="<?php echo base_url('pages/form-validation'); ?>" data-parsley-validate="">
										<p class="mg-b-10">What is your favorite browser? <span class="tx-danger">*</span></p>
										<div class="parsley-checkbox" id="cbWrapper">
											<label class="ckbox mg-b-5"><input data-parsley-class-handler="#cbWrapper" data-parsley-errors-container="#cbErrorContainer" data-parsley-mincheck="2" name="browser[]" required="" type="checkbox" value="1"><span>Firefox</span></label>
											<label class="ckbox mg-b-5"><input name="browser[]" type="checkbox" value="2"><span>Chrome</span></label> <label class="ckbox mg-b-5"><input name="browser[]" type="checkbox" value="3"><span>Safari</span></label>
											<label class="ckbox"><input name="browser[]" type="checkbox" value="4"><span>Edge</span></label>
										</div>
										<div id="cbErrorContainer"></div>
										<div class="mg-t-20">
											<button class="btn btn-main-primary pd-x-20" type="submit" value="5">Validate Form</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
					<!-- /row -->

					<!-- row -->
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="card">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Custom Style Invalid Messages
									</div>
									<p class="mg-b-20">It is Very Easy to Customize and it uses in your website apllication.</p>
									<form action="<?php echo base_url('pages/form-validation'); ?>" class="parsley-style-1" id="selectForm2" name="selectForm2">
										<div class="">
											<div class="row mg-b-20">
												<div class="parsley-input col-md-6" id="fnWrapper">
													<label>Firstname: <span class="tx-danger">*</span></label>
													<input class="form-control" data-parsley-class-handler="#fnWrapper" name="firstname" placeholder="Enter firstname" required="" type="text">
												</div>
												<div class="parsley-input col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
													<label>Lastname: <span class="tx-danger">*</span></label>
													<input class="form-control" data-parsley-class-handler="#lnWrapper" name="lastname" placeholder="Enter lastname" required="" type="text">
												</div>
											</div>
										</div>
										<p class="mg-b-10">What is your favorite browser? <span class="tx-danger">*</span></p>
										<div class="parsley-checkbox wd-250 mg-b-0" id="cbWrapper2">
											<label class="ckbox mg-b-5">
												<input data-parsley-class-handler="#cbWrapper2" data-parsley-errors-container="#cbErrorContainer2" data-parsley-mincheck="2" name="browser[]" required="" type="checkbox" value="1">
												<span>Firefox</span>
											</label>
											<label class="ckbox mg-b-5"><input name="browser[]" type="checkbox" value="2"><span>Chrome</span></label>
											<label class="ckbox mg-b-5"><input name="browser[]" type="checkbox" value="3"><span>Safari</span></label>
											<label class="ckbox"><input name="browser[]" type="checkbox" value="4"><span>Edge</span></label>
										</div>
										<!-- parsley-checkbox -->
										<div class="wd-250" id="cbErrorContainer2"></div>
										<div class="parsley-select wd-250 mg-t-30" id="slWrapper2">
											<select class="form-control select2" data-parsley-class-handler="#slWrapper2" data-parsley-errors-container="#slErrorContainer2" data-placeholder="Choose one" required="">
												<option label="Choose one">
												</option>
												<option value="Firefox">
													Firefox
												</option>
												<option value="Chrome">
													Chrome
												</option>
												<option value="Safari">
													Safari
												</option>
												<option value="Opera">
													Opera
												</option>
												<option value="Internet Explorer">
													Internet Explorer
												</option>
											</select>
											<div id="slErrorContainer2"></div>
										</div>
										<div class="mg-t-30">
											<button class="btn btn-main-primary pd-x-20" type="submit">Validate Form</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
					<!-- row closed -->

				<?= $this->endSection('content'); ?>

		<?= $this->section('modal'); ?>

			<!-- modal -->
			<div id="modaldemo1" class="modal">
				<div class="modal-dialog wd-xl-400" role="document">
					<div class="modal-content">
						<div class="modal-body pd-20 pd-sm-40">
							<button type="button" class="close pos-absolute t-15 r-20 tx-26" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
							<h5 class="modal-title mg-b-5">Create New Account</h5>
							<p class="mg-b-20">Let's get you all setup so you can begin using our app.</p>
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Firstname">
							</div><!-- form-group -->
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Lastname">
							</div><!-- form-group -->
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Phone">
							</div><!-- form-group -->
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Email">
							</div><!-- form-group -->
							<div class="form-group mg-b-25">
								<label class="ckbox mg-b-5">
									<input type="checkbox">
									<span class="tx-13">I agree to <a href="">Terms</a> and <a href="">Privacy Policy</a></span>
								</label>
								<label class="ckbox">
									<input type="checkbox" checked>
									<span class="tx-13">Yes, I want to receive email from your newsletter.</span>
								</label>
							</div><!-- form-group -->
							<button class="btn btn-primary btn-block">Continue</button>
						</div><!-- modal-body -->
					</div><!-- modal-content -->
				</div><!-- modal-dialog -->
			</div><!-- modal -->

		<?= $this->endSection('modal'); ?>


	<?= $this->section('scripts'); ?>

		<!--Internal  Select2 js -->
		<script src="<?php echo base_url('assets/plugins/select2/js/select2.min.js'); ?>"></script>

		<!--Internal  Parsley.min js -->
		<script src="<?php echo base_url('assets/plugins/parsleyjs/parsley.min.js'); ?>"></script>

		<!--Internal  Perfect-scrollbar js -->
		<script src="<?php echo base_url('assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js'); ?>"></script>

		<!-- Internal Form-validation js -->
		<script src="<?php echo base_url('assets/js/form-validation.js'); ?>"></script>

	<?= $this->endSection('scripts'); ?>
