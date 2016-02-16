<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Main content -->
	<section class="head-area">
		<h2><i class="fa fa-exclamation-triangle"></i>&nbsp; &nbsp;Admin Area&nbsp; &nbsp;<i class="fa fa-exclamation-triangle"></i><br><small>Authorized Users Only</small></h2>

		<!-- nav pill navigation -->
		<ul class="nav nav-pills" id="admin_tabs">
		 <?php if($myACL->hasPermission('access_admin')) {
		 	echo '<li class="active"><a href="#site" data-toggle="tab">Site Settings</a></li>';
		 	}?>
		  <?php if($myACL->hasPermission('manage_users')) {
		  	if(!($myACL->hasPermission('access_admin'))) $makeactive = " class='active'";
		  	echo "<li $makeactive><a href='#access_users' data-toggle='tab'>Users</a></li>"; 
		  	echo '<li><a href="#access_groups" data-toggle="tab">Groups</a></li>';
		  	}?>
		  <?php if($myACL->hasPermission('manage_templates')) {
		  	if(!($myACL->hasPermission('access_admin')) && (!($myACL->hasPermission('manage_users')))) $act_temp = " class='active'";
		  	echo "<li$act_temp><a href='#sr_types' data-toggle='tab'>Service Record Types</a></li>";
		  	echo '<li><a href="#sr_security" data-toggle="tab">Service Record Security</a></li>';
		  	}?>
		</ul>
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
