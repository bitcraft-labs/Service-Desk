<!DOCTYPE html>
<!--
Project:    Bitcraft Service Desk (Working Title)
Lead Devs:  Joshua Nasiatka, Allen Perry, Eugene Duffy
For:        Software Engineering
Dev Date:   Spring 2016
Status:     Staging; Idea Testing; Development
-->
<html>
  	<?php
    include_once 'modules/head.php'; ?>
    <?php echo "<body class='hold-transition skin-$skin sidebar-mini'>"; ?>
    <div class="wrapper">
		<?php
		// build the user interface
		include_once 'modules/header.php';
		include_once 'modules/left_sidebar.php'; ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    	<section class="content-header">
    		<h1>WebMail</h1>
    		<ol class="breadcrumb">
    		    <li><a href="?page=dashboard"><i class="fa fa-dashboard"></i> Top</a></li>
    		    <li class="active">WebMail</li>
    		</ol>
    	</section>

    	<!-- Main content -->
    	<section class="content">
        <p>I need some content</p>
    	</section><!-- /.content -->
    </div><!-- /.content-wrapper -->

		<?php
    include_once 'modules/footer.php';
		include_once 'modules/control_sidebar.php';
    ?>
    </div><!-- ./wrapper -->

    <!-- REQUIRED JS SCRIPTS -->
    <!-- jQuery 2.1.4 -->
    <script src="/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="/bootstrap/js/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/dist/js/app.min.js"></script>

  </body>
</html>
