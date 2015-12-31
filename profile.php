<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<ol class="breadcrumb">
	    <li><a href="?page=dashboard"><i class="fa fa-dashboard"></i> Top</a></li>
	    <li class="active">Profile</li>
	</ol>

	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>Profile</h1>
		<h3><?= $authenticator->UserFullName() ?></h3>
	</section>

	<!-- Main content -->
	<section class="content">
		<!-- Your Page Content Here -->
		<p>Full Name: <?= $authenticator->UserFullName() ?><br />
		Username: <?php echo $_SESSION['usr_0bade6db4c']; ?><br />
		Primary Email: <?= $authenticator->UserEmail()  ?></p>
		<p><a href="change-pass.php">Change Password</a></p>
	</section><!-- /.content -->
</div><!-- /.content-wrapper -->