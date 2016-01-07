<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<section class="content-header">
		<h1>Admin Panel</h1>
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
	if (($action == '') || ($action == 'ViewSystemSettings')) {
		include 'modules/admin/viewsys.php';
	} elseif ($action == 'ViewACL') {
		include 'modules/admin/viewacl.php'
	} ?>
	</section><!-- /.content -->
</div><!-- /.content-wrapper -->