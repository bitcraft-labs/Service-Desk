<!DOCTYPE html>
<!--
Project:    Honey Badger (PHB) - Working Title
Lead Devs:  Joshua Nasiatka & Allen Perry
For:        Software Engineering
Dev Date:   Spring 2016
Status:     Staging; Idea Testing; Development
-->
<html>
<?php 
include_once 'modules/config.inc.php';
require_once('modules/config-func.php');
require_once("./modules/authentication/config.php");

if(!$authenticator->CheckLogin())
{
    $authenticator->RedirectToURL("login.php");
    exit;
}
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $title; ?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    <?php echo "<link rel='stylesheet' href='dist/css/skins/skin-$skin.min.css'>"; ?>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
    <?php echo "<body class='hold-transition skin-$skin sidebar-mini'>"; ?>
    <div class="wrapper">
		<?php 
		// build the user interface
		include_once 'modules/header.php';
		include_once 'modules/left_sidebar.php';
		?>

		<div class="content-wrapper">
			

			<section class="content-header">
				<h1><?php
				$cus_id = $_GET['id'];
				if ($cus_id == "all") {
					$now = getdate();
					$now = array($now[mday],$now[mon],$now[year]);
					echo "Customer Relation Central <small>As of $now[1]-$now[0]-$now[2]</small>";
				}
				elseif (isset($cus_id) && is_numeric($cus_id))
					echo "View Customer";
				elseif (isset($cus_id) && $cus_id == 'new')
					echo "Add New Customer Record";
				else
					echo "Welcome to Customer Relation Central";
				?></h1>
				<ol class="breadcrumb">
				    <li><a href="?page=dashboard"><i class="fa fa-dashboard"></i> Top</a></li>
				    <li class="active">Customer Records</li>
				</ol>
			</section>

			<section class="content">
				<div class="row">
					<div class="col-xs-12">
					  <?php //Show all customer records ?>
					  <?php if ($cus_id == "all") {
					  	include_once 'modules/customer_record/customer_list.php';
		    		  } 
		    		  //show individual service record
		    		  elseif (isset($cus_id) && is_numeric($cus_id)) {
		    		  	include_once 'modules/customer_record/customer_info.php';
		    		  	?>
		    		  	
		    		  	<?php
		    		  } elseif (isset($cus_id) && ($cus_id == "new")) {
		    		  	echo "<p>Add new customer page</p>";
		    		  } else {
		    		  	//show welcome page
		    		  	echo "<p>You have reached this page in error</p>";
		    		  	echo "<p>Please return to the <a href='./'>Dashboard</a> or <a href='?id=all'>Search for a Customer</a></p>";
		    		  	echo "<script type='text/javascript'>window.location.href = './';</script>";
		    		  }
		    		  ?>

				    </div>
			    </div>
			</section><!-- /.content -->
		</div><!-- /.content-wrapper -->
		<?php
		include_once 'modules/footer.php'; 
		include_once 'modules/control_sidebar.php'; ?>
    </div><!-- ./wrapper -->

    <!-- REQUIRED JS SCRIPTS -->
	<!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- DataTables -->
    <script src="plugins/datatables/jquery.dataTables.js"></script>
    <script src="plugins/datatables/dataTables.bootstrap.js"></script>
    <!-- SlimScroll -->
    <script src="plugins/slimScroll/jquery.slimscroll.js"></script>
    <!-- FastClick -->
    <script src="plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js"></script>
    <!-- InputMask -->
    <script src="plugins/input-mask/jquery.inputmask.js"></script>
    <script src="plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
    <script src="plugins/input-mask/jquery.inputmask.extensions.js"></script>
    <!-- page script -->
    <script>
      $(function () {
        $('#records').DataTable({
          "paging": true,
          "lengthChange": true,
          "searching": true,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });

        $('#systems').DataTable({
          "paging": true,
          "lengthChange": true,
          "searching": true,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });

        $('#checkups').DataTable({
          "paging": true,
          "lengthChange": true,
          "searching": true,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
    </script>
    <!-- Optionally, you can add Slimscroll and FastClick plugins.
         Both of these plugins are recommended to enhance the
         user experience. Slimscroll is required when using the
         fixed layout. -->
    <?php
    include_once 'modules/modals.php'; ?>
  </body>
</html>
