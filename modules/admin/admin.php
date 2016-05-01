<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<ol class="breadcrumb">
	    <li><a href="?page=cpanel"><i class="fa fa-cogs"></i> Settings</a></li>
			<?php
				if (!isset($_GET['subpage']) && ($_GET['page'] == 'cpanel')) {
					echo '<li>Control Panel</li>';
				} elseif (isset($_GET['subpage']) && ($_GET['page'] == 'cpanel')) {
					echo '<li><a href="?page=cpanel">Control Panel</a></li>';
					if ($_GET['subpage'] == "customize") {
						echo '<li class="active">Customize</li>';
					} else if ($_GET['subpage'] == "backup_restore") {
						echo '<li class="active">Backup / Restore</li>';
					} else if ($_GET['subpage'] == "devops") {
						echo '<li class="active">Developer Options</li>';
					} else if ($_GET['subpage'] == "backup_restore") {
						echo '<li class="active">Developer Options</li>';
					}
				} elseif ($_GET['page'] == 'users') {
					echo '<li class="active">Users</li>';
				} elseif ($_GET['page'] == 'groups') {
					echo '<li class="active">Security Groups</li>';
				} elseif ($_GET['page'] == 'updates') {
					echo '<li class="active">Appliance Updates</li>';
				} elseif ($_GET['page'] == 'support') {
					echo '<li class="active">Appliance Support</li>';
				}
			?>
	</ol>
	<!-- Main content -->
	<!-- <section class="head-area">
		<h2><i class="fa fa-exclamation-triangle"></i>&nbsp; &nbsp;Admin Area&nbsp; &nbsp;<i class="fa fa-exclamation-triangle"></i><br><small>Authorized Users Only</small></h2>
	</section> -->
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
