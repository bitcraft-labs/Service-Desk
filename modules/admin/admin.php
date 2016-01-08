<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<section class="content-header">
		<h1>Admin Panel <?= $adminsub ?></h1>
		<ol class="breadcrumb">
		    <li><a href="?page=dashboard"><i class="fa fa-dashboard"></i> Top</a></li>
		    <li class="active">Admin</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">
	<!--<div class="container-fluid">-->
	<?php
	$action = $_GET['action'];
	if (($action == '') || ($action == 'ViewSiteSettings')) {
		include_once 'modules/admin/viewsite.php';
	} elseif ($action == 'ViewACL') {
		include_once 'modules/admin/viewacl.php';
	}
	?>
	</section><!-- /.content -->
</div><!-- /.content-wrapper -->