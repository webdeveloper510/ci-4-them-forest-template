<?= $this->extend('layouts/main'); ?>

	<?= $this->section('styles'); ?>

		<!-- Internal Morris Css-->
		<link href="<?php echo base_url('assets/plugins/morris.js/morris.css'); ?>" rel="stylesheet">

	<?= $this->endSection('styles'); ?>

				<?= $this->section('content'); ?>

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="my-auto">
							<div class="d-flex">
								<h4 class="content-title mb-0 my-auto">Charts</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Morris-charts</span>
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
					<div class="row row-sm">
						<div class="col-md-6">
							<div class="card mg-b-20">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Line Chart
									</div>
									<p class="mg-b-20">Basic Charts Of Valex template.</p>
									<div class="morris-wrapper-demo" id="morrisLine1"></div>
								</div>
							</div>
						</div><!-- col-6 -->
						<div class="col-md-6">
							<div class="card mg-b-20">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Line Chart
									</div>
									<p class="mg-b-20">Basic Charts Of Valex template.</p>
									<div class="morris-wrapper-demo" id="morrisLine2"></div>
								</div>
							</div>
						</div><!-- col-6 -->
					</div>
					<!-- /row -->

					<!-- row -->
					<div class="row row-sm">
						<div class="col-md-6">
							<div class="card mg-b-20">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Area Chart
									</div>
									<p class="mg-b-20">Basic Charts Of Valex template.</p>
									<div class="morris-wrapper-demo" id="morrisArea1"></div>
								</div>
							</div>
						</div><!-- col-6 -->
						<div class="col-md-6">
							<div class="card mg-b-20">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Area Chart
									</div>
									<p class="mg-b-20">Basic Charts Of Valex template.</p>
									<div class="morris-wrapper-demo" id="morrisArea2"></div>
								</div>
							</div>
						</div><!-- col-6 -->
					</div>

					<!-- row -->
					<div class="row row-sm">
						<div class="col-md-6">
							<div class="card mg-b-20">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Stacked Bar Chart
									</div>
									<p class="mg-b-20">Basic Charts Of Valex template.</p>
									<div class="morris-wrapper-demo" id="morrisBar3"></div>
								</div>
							</div>
						</div><!-- col-6 -->
						<div class="col-md-6">
							<div class="card mg-b-20">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Stacked Bar Chart
									</div>
									<p class="mg-b-20">Basic Charts Of Valex template.</p>
									<div class="morris-wrapper-demo" id="morrisBar4"></div>
								</div>
							</div>
						</div><!-- col-6 -->
					</div>
					<!-- /row -->

					<!-- row -->
					<div class="row row-sm">
						<div class="col-md-6">
							<div class="card mg-b-20">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Bar Chart
									</div>
									<p class="mg-b-20">Basic Charts Of Valex template.</p>
									<div class="morris-wrapper-demo" id="morrisBar1"></div>
								</div>
							</div>
						</div><!-- col-6 -->
						<div class="col-md-6">
							<div class="card mg-b-20">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Bar Chart
									</div>
									<p class="mg-b-20">Basic Charts Of Valex template.</p>
									<div class="morris-wrapper-demo" id="morrisBar2"></div>
								</div>
							</div>
						</div><!-- col-6 -->
					</div>
					<!-- /row -->

					<!-- row -->
					<div class="row row-sm">
						<div class="col-md-6">
							<div class="card mg-b-md-20">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Donut Chart
									</div>
									<p class="mg-b-20">Basic Charts Of Valex template.</p>
									<div class="morris-donut-wrapper-demo" id="morrisDonut1"></div>
								</div>
							</div>
						</div><!-- col-6 -->
						<div class="col-md-6">
							<div class="card">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Donut Chart
									</div>
									<p class="mg-b-20">Basic Charts Of Valex template.</p>
									<div class="morris-donut-wrapper-demo" id="morrisDonut2"></div>
								</div>
							</div>
						</div><!-- col-6 -->
					</div>
					<!-- /row -->

				<?= $this->endSection('content'); ?>

	<?= $this->section('scripts'); ?>

		<!--Internal  Datepicker js -->
		<script src="<?php echo base_url('assets/plugins/jquery-ui/ui/widgets/datepicker.js'); ?>"></script>

		<!-- Internal Select2 js-->
		<script src="<?php echo base_url('assets/plugins/select2/js/select2.min.js'); ?>"></script>

		<!--Internal  Morris js -->
		<script src="<?php echo base_url('assets/plugins/raphael/raphael.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/plugins/morris.js/morris.min.js'); ?>"></script>

		<!--Internal Chart Morris js -->
		<script src="<?php echo base_url('assets/js/chart.morris.js'); ?>"></script>

	<?= $this->endSection('scripts'); ?>