<!doctype html>
<html lang="en" dir="ltr">
	<head>

		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
		<meta name="Author" content="Spruko Technologies Private Limited">
		<meta name="Keywords" content="dashboard, admin, bootstrap admin template, codeigniter, php, php framework, codeigniter 4, php mvc, php codeigniter, best php framework, codeigniter admin, codeigniter dashboard, admin panel template, bootstrap 4 admin template, bootstrap dashboard template"/>

        <?= $this->include('layouts/layoutsections/horizontal-menu/boxed-styles'); ?>

	</head>

    <body class="main-body">

        <!-- Loader -->
        <div id="global-loader">
            <img src="<?php echo base_url('assets/img/loader.svg'); ?>" class="loader-img" alt="Loader">
        </div>
        <!-- /Loader -->

        <!-- Page -->
        <div class="page">

            <?= $this->include('layouts/layoutsections/horizontal-menu/centerlogo-header'); ?>

            <?= $this->include('layouts/layoutsections/horizontal-menu/horizontal-main'); ?>

            <!-- main-content opened -->
			<div class="main-content horizontal-content">

                <!-- container opened -->
				<div class="container">

                    <?= $this->renderSection('content'); ?>

                </div>
				<!-- Container closed -->

			</div>
			<!-- main-content closed -->

            <?= $this->include('layouts/sidebar-right'); ?>

            <?= $this->renderSection('modal'); ?>

            <?= $this->include('layouts/footer'); ?>

        </div>
		<!-- End Page -->

            <?= $this->include('layouts/layoutsections/horizontal-menu/scripts'); ?>

    </body>
</html>