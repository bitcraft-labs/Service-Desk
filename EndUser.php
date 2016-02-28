<!DOCTYPE html>
<!--
Project:    Bitcraft Service Desk (An Open Source ITSM Web App)
Lead Devs:  Joshua Nasiatka, Allen Perry, Eugene Duffy
For:        Software Engineering
Dev Date:   Spring 2016
Status:     Staging; Idea Testing; Development
-->
<?php
  include("modules/mainhead.php");
  if ($myACL->hasPermission('hd_portal') != true) {
    header("location: /");
    exit;
  }
?>
<html>
  	<?php
    include_once 'modules/head.php'; ?>
    <?php echo "<body class='hold-transition skin-$skin sidebar-mini'>"; ?>
    <div class="wrapper">
		<?php
		// build the user interface
		include_once 'modules/header.php';
		include_once 'modules/left_sidebar.php';
		?>

		<div class="content-wrapper">
      <div class="ssp-title hd">
          <h3>
            <?php
    				$eu_id = $_GET['id'];
    				if (!$eu_id || ($eu_id == "all")) {
    					$now = getdate();
    					$now = array($now[mday],$now[mon],$now[year]);
    					echo "<i class='fa fa-users fa-2x pull-left'> </i>End User Records<br><small>As of $now[1]-$now[0]-$now[2]</small>";
    				}
    				elseif (isset($eu_id) && is_numeric($eu_id)) {
            	$personinfo = $dali->getPersonInfo($eu_id);
            	foreach ($personinfo as $prow) {}
              echo "<i class='fa fa-user fa-2x pull-left'> </i>View End User Record<br><small>For: ".$prow['fname']." ".$prow['lname']."</small>";
            }
    				elseif (isset($eu_id) && $eu_id == 'new')
              echo "<i class='fa fa-user fa-2x pull-left'> </i>Add New End User Record<br><small>Yay, new person!</small>";
    				else
    					echo "Welcome to End User Relation Central";
    				?>
    			</h3>
      </div>

			<section class="content">
				<div class="row">
					<div class="col-xs-12">
					  <?php //Show all end user records ?>
					  <?php if (!$eu_id || ($eu_id == "all")) {
					  	include_once 'modules/enduser_record/enduser_list.php';
		    		  }
		    		  //show individual service record
		    		  elseif (isset($eu_id) && is_numeric($eu_id)) {
		    		  	include_once 'modules/enduser_record/enduser_info.php';
		    		  	?>

		    		  	<?php
		    		  } elseif (isset($eu_id) && ($eu_id == "new")) {
		    		  	echo "<p>Add new End User page</p>";
		    		  } else {
		    		  	//show welcome page
		    		  	echo "<p>You have reached this page in error</p>";
		    		  	echo "<p>Please return to the <a href='./'>Dashboard</a> or <a href='?id=all'>Search for a End User</a></p>";
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
	<!-- jQuery -->
    <script src="/bower/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="/bower/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- DataTables -->
    <script src="/bower/AdminLTE/plugins/datatables/jquery.dataTables.js"></script>
    <script src="/bower/AdminLTE/plugins/datatables/dataTables.bootstrap.js"></script>
    <!-- SlimScroll -->
    <script src="/bower/AdminLTE/plugins/slimScroll/jquery.slimscroll.js"></script>
    <!-- FastClick -->
    <script src="/bower/AdminLTE/plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/bower/AdminLTE/dist/js/app.min.js"></script>
    <!-- InputMask -->
    <script src="/bower/AdminLTE/plugins/input-mask/jquery.inputmask.js"></script>
    <script src="/bower/AdminLTE/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
    <script src="/bower/AdminLTE/plugins/input-mask/jquery.inputmask.extensions.js"></script>
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
