<?= $this->extend('layouts/custommain'); ?>

	<?= $this->section('content'); ?>

		<!-- Page -->
		<div class="bg-primary-transparent error-bg">
			<div class="page">
			
				<!-- Main-error-wrapper -->
				<div class="main-error-wrapper page page-h">
					<img src="<?php echo base_url('assets/img/media/404.png'); ?>" class="error-page" alt="error">
					<h2>Oopps. The page you were looking for doesn't exist.</h2>
					<h6>You may have mistyped the address or the page may have moved.</h6><a class="btn btn-outline-danger" href="<?php echo base_url('pages/index'); ?>">Back to Home</a>
				</div>
				<!-- /Main-error-wrapper -->
				
			</div>
		</div>
		<!-- End Page -->

	<?= $this->endSection('content'); ?>