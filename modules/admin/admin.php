<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Main content -->
	<section class="head-area">
		<h2><i class="fa fa-exclamation-triangle"></i>&nbsp; &nbsp;Admin Area&nbsp; &nbsp;<i class="fa fa-exclamation-triangle"></i><br><small>Authorized Users Only</small></h2>
	</section>
	<section class="content">
		<?php
		$admin = new ADMIN();
		$action = $_GET['action'];
		if (($action == '') || ($action == 'ViewAdmin')) {
			include_once 'modules/admin/viewadmin.php';
		}
		?>
	</section><!-- /.content -->
</div><!-- /.content-wrapper -->
