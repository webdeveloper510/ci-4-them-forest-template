<?= $this->extend('layouts/main'); ?>

	<?= $this->section('styles'); ?>

		<!-- Internal Images-Comparsion css -->
		<link href="<?php echo base_url('assets/plugins/images-comparsion/twentytwenty.css'); ?>" rel="stylesheet" />

	<?= $this->endSection('styles'); ?>

				<?= $this->section('content'); ?>

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="my-auto">
							<div class="d-flex">
								<h4 class="content-title mb-0 my-auto">Apps</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Image-comparison</span>
							</div>
						</div>
						<div class="d-flex my-xl-auto right-content">
							<div class="pr-1 mb-xl-0">
								<button type="button" class="btn btn-info btn-icon ml-2"><i class="mdi mdi-filter-variant"></i></button>
							</div>
							<div class="pr-1 mb-xl-0">
								<button type="button" class="btn btn-danger btn-icon ml-2"><i class="mdi mdi-star"></i></button>
							</div>
							<div class="pr-1 mb-xl-0">
								<button type="button" class="btn btn-warning  btn-icon ml-2"><i class="mdi mdi-refresh"></i></button>
							</div>
							<div class="mb-xl-0">
								<div class="btn-group dropdown">
									<button type="button" class="btn btn-primary">14 Aug 2019</button>
									<button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" id="dropdownMenuDate" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<span class="sr-only">Toggle Dropdown</span>
									</button>
									<div class="dropdown-menu dropdown-menu-left" aria-labelledby="dropdownMenuDate" data-x-placement="bottom-end">
										<a class="dropdown-item" href="#">2015</a>
										<a class="dropdown-item" href="#">2016</a>
										<a class="dropdown-item" href="#">2017</a>
										<a class="dropdown-item" href="#">2018</a>
									</div>
								</div>
							</div>
						</div>
					</div><!-- breadcrumb -->

					<!-- Row -->
					<div class="row">
						<div class="col-sm-12 col-md-12 col-lg-12">
							<div class="card mg-b-20">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Horizontal Image Comparision
									</div>
									<p class="mg-b-20">Example of Redash Horizontal Image Comparision.</p>
									<div class="twentytwenty-container">
										<img src="<?php echo base_url('assets/img/photos/compare1.jpg'); ?>" alt="img" />
										<img src="<?php echo base_url('assets/img/photos/compare2.jpg'); ?>" alt="img" />
									</div>
								</div>
							</div>
							<!-- div -->

							<!-- div -->
							<div class="card">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Vertical Image Comparision
									</div>
									<p class="mg-b-20">Example of Redash Vertical Image Comparision.</p>
									<div class="twentytwenty-container" data-orientation="vertical">
										<img src="<?php echo base_url('assets/img/photos/compare1.jpg'); ?>" alt="img" />
										<img src="<?php echo base_url('assets/img/photos/compare2.jpg'); ?>" alt="img" />
									</div>
								</div>
							</div>
							<!-- div -->
						</div>
					</div>
					<!-- /Row -->

				<?= $this->endSection('content'); ?>

	<?= $this->section('scripts'); ?>

		<!--Internal  Datepicker js -->
		<script src="<?php echo base_url('assets/plugins/jquery-ui/ui/widgets/datepicker.js'); ?>"></script>

		<!-- Internal Select2 js-->
		<script src="<?php echo base_url('assets/plugins/select2/js/select2.min.js'); ?>"></script>

		<!--Internal  Images-Comparsion js -->
		<script src="<?php echo base_url('assets/plugins/images-comparsion/jquery.twentytwenty.js'); ?>"></script>
		<script src="<?php echo base_url('assets/plugins/images-comparsion/jquery.event.move.js'); ?>"></script>
		<script src="<?php echo base_url('assets/js/image-comparision.js'); ?>"></script>

	<?= $this->endSection('scripts'); ?>
