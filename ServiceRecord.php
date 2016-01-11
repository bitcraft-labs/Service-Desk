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
$page_title = 'Service Record';
include_once 'modules/config.inc.php';
require_once("./modules/authentication/config.php");

if(!$authenticator->CheckLogin())
{
    $authenticator->RedirectToURL("login.php");
    exit;
}
if ($_SESSION['user_type'] == 3) {
echo "<script type='text/javascript'>
  window.location.replace('EndUserPortal.php');
  </script>";
exit;
}
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= $title ?></title>
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
				$sr = $_GET['sr'];
				if ($sr == "all") {
					$now = getdate();
					$now = array($now[mday],$now[mon],$now[year]);
					echo "All Service Records <small>As of $now[1]-$now[0]-$now[2]</small>";
				}
				elseif (isset($sr) && is_numeric($sr))
					echo "Service Record: $sr";
				elseif (isset($sr) && $sr == 'new')
					echo "Add New Service Record";
				else
					echo "Welcome to Service Record Central";
				?></h1>
				<ol class="breadcrumb">
				    <li><a href="?page=dashboard"><i class="fa fa-dashboard"></i> Top</a></li>
				    <li class="active">Service Records</li>
				</ol>
			</section>

			<section class="content">
				<div class="row">
					<div class="col-xs-12">
					  <?php //Show all service records ?>
					  <?php if ($sr == "all") { ?>
					  <div class="box">
					    <div class="box-header">
					      <h3 class="box-title">Service Records</h3>
					    </div><!-- /.box-header -->
					    <div class="box-body">
					    	<table id="records" class="table table-bordered table-striped">
					    		<thead>
					    			<tr>
					    				<td>SR#</td>
					    				<td>Category</td>
					    				<td>Status</td>
					    				<td>Requester</td>
					    				<td>Assigned Admin</td>
					    				<td>User Type</td>
					    				<td>Manufacturer</td>
					    				<td>Model</td>
					    				<td>Date Checked In</td>
					    				<td>Date Last Updated</td>
					    			</tr>
					    		</thead>
					    		<tbody>
					    			<tr>
					    				<td><a href="?sr=1">1</a></td>
					    				<td>Hardware</td>
					    				<td>In Progress</td>
					    				<td>Joshua Nasiatka</td>
					    				<td>helpdesktech</td>
					    				<td>Staff</td>
					    				<td>Apple, Inc.</td>
					    				<td>Macbook Pro (Retina)</td>
					    				<td>12/1/2015</td>
					    				<td>12/2/2015</td>
					    			</tr>
					    			<tr>
					    				<td>2</td>
					    				<td>Software</td>
					    				<td>Waiting for Pickup</td>
					    				<td>Help Desk</td>
					    				<td>helpdesktech</td>
					    				<td>Staff</td>
					    				<td>Dell, Inc.</td>
					    				<td>Studio XPS 15</td>
					    				<td>11/30/2015</td>
					    				<td>12/2/2015</td>
					    			</tr>
					    			<tr>
					    				<td>3</td>
					    				<td>Software</td>
					    				<td>Completed</td>
					    				<td>Allen Perry</td>
					    				<td>The Mac Admin</td>
					    				<td>Student</td>
					    				<td>Apple, Inc.</td>
					    				<td>Macbook Pro</td>
					    				<td>12/1/2015</td>
					    				<td>12/2/2015</td>
					    			</tr>
					    		</tbody>
					    		<tfoot>
					    			<tr>
					    				<td>SR#</td>
					    				<td>Category</td>
					    				<td>Status</td>
					    				<td>Requester</td>
					    				<td>Assigned Admin</td>
					    				<td>User Type</td>
					    				<td>Manufacturer</td>
					    				<td>Model</td>
					    				<td>Date Checked In</td>
					    				<td>Date Last Updated</td>
					    			</tr>
					    		</tfoot>
				    		</table>
			    		</div>
		    		  </div>
		    		  <?php }
		    		  //show individual service record
		    		  elseif (isset($sr) && is_numeric($sr)) {
		    		  	echo "<p>Database table information is currently unavailable</p>";
		    		  	?>
		    		  	<p>The following form layout will need to be build:<br />
		    		  		SR# - Status
		    		  		Requesting User (name) - Type (student or faculty/staff)<br />
		    		  		Contact Phone:<br />
		    		  		Primary Email (pref. @student... or @fitchburgstate.edu):<br />
		    		  		Manufacturer (dropdown)<br />
		    		  		Model:<br />
		    		  		Serial Number: | Status: (Active/Out of Warranty); more warranty info<br />
		    		  		Who purchased laptop: <br />
		    		  		AC Adapter Included (dropdown)<br />
		    		  		Loaner Issue: Asset / charger yes/no<br />
		    		  		Password: (start off plaintext, move towards hash with preview)<br />
		    		  		Description (dropdown with general issues with option for other)<br />
		    		  		More details:<br />
		    		  		Do files need to be backed up? (dropdown)<br />
		    		  		Assigned admin<br />
		    		  		Checked in by &lt;assign to thou signed in&gt;<br />
		    		  		Pickup date<br />
		    		  		e-signature (drawing functionality)<br /></p>
		    		  	<p>Worksheet / Checklist<br />
		    		  		Dynamic note entries and checkboxes<br />
		    		  		Checklist for general tools with spots for detections => assign checkbox to the user who checked the box<br />
		    		  		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ccleaner, Mbam, etc.<br />
		    		  		add note button -> trigger modal => assign note to thou who submitted<br />

		    		  	</p>
		    		  	<?php
		    		  } elseif (isset($sr) && ($sr == "new")) {
		    		  	echo "<p>Add new service record page</p>";
		    		  	//echo $customerinfo->GetProfileReport('1');
		    		  } else {
		    		  	//show welcome page
		    		  	echo "<p>You have reached this page in error</p>";
		    		  	echo "<p>Please return to the <a href='./'>Dashboard</a> or <a href='?sr=all'>Search for a Record</a></p>";
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
