<!DOCTYPE html>
<!--
Project:    Tronic CRM (Working Title)
Lead Devs:  Joshua Nasiatka, Allen Perry, Eugene Duffy
For:        Software Engineering
Dev Date:   Spring 2016
Status:     Staging; Idea Testing; Development
-->
<html>
	<!-- head.php contains the stylesheets -->
  	<?php 
    include_once 'modules/head.php';
    require_once 'modules/config-func.php'; ?>
    <?php echo "<body class='hold-transition skin-$skin sidebar-mini'>"; ?>
    <div class="wrapper">
		<?php 
		// build the user interface
		include_once 'modules/header.php';
		include_once 'modules/left_sidebar.php';
		include_once 'modules/staff/staff_handler.php';
    //include_once 'modules/page_handling.php';
		include_once 'modules/footer.php'; 
		include_once 'modules/control_sidebar.php';?>
    </div><!-- ./wrapper -->

    <!-- REQUIRED JS SCRIPTS -->

    <!-- jQuery 2.1.4 -->
    <script src="/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="/bootstrap/js/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/dist/js/app.min.js"></script>

    <!-- Optionally, you can add Slimscroll and FastClick plugins.
         Both of these plugins are recommended to enhance the
         user experience. Slimscroll is required when using the
         fixed layout. -->
    <?php
    include_once 'modules/modals.php'; ?>
  </body>
</html>
