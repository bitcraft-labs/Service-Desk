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
  if(isset($_GET['sr']) && is_numeric($_GET['sr']) ) {
  	if(!$dali->doesSRExist($_GET['sr'])) {
  		header("location: /");
  		exit;
  	}
  }
?>
<link rel="stylesheet" href="dist/css/form.css">
<?php
    include_once 'modules/head.php';
    echo "<body class='hold-transition skin-$skin sidebar-mini'>
    <div class='wrapper'>";
		// build the user interface
		include_once 'modules/header.php';
		include_once 'modules/left_sidebar.php';
		?>

		<div class="content-wrapper">
      		<div class="ssp-title hd">
	          <h3>
	            <?php
	            $sr = $_GET['sr'];
				if ($sr == "all") {
					$now = getdate();
					$now = array($now[mday],$now[mon],$now[year]);
					echo "<i class='fa fa-table fa-2x pull-left'> </i>All Service Records<br><small>As of $now[1]-$now[0]-$now[2]</small>";
				} elseif (isset($sr) && is_numeric($sr)) {
	              echo "<i class='fa fa-pencil-square-o fa-2x pull-left'> </i>Service Record: $sr<br><small>Yes, every thing you do is neccessary to be written down</small>";
	            } elseif (isset($sr) && $sr == 'new'){
	              echo "<i class='fa fa-pencil-square-o fa-2x pull-left'> </i>Add New Service Record<br><small>Don't forget any valuable information</small>";
	            } elseif ($_GET['page'] == "configure") {
	              echo "<i class='fa fa-cog fa-2x pull-left'> </i>Service Desk Configuration<br><small>Configure all da things!</small>";
	            }
	    				else
	    					echo "Welcome to Service Record Central";
	            ?>
	    	  </h3>
      		</div>

			<section class="content">
				<div class="row">
					<div class="col-xs-12">
					  <?php //Show all service records ?>
					  <?php if ($sr == "all") { ?>
					    	<table id="records" class="table table-bordered table-striped">
                  <thead>
    			    			<tr>
    			    				<?php $tabhead = '
    				    				<th>SR#</td>
    				    				<th class="mobile-table">Category</td>
    				    				<th>Status</td>
    				    				<th>Ticket Title</td>
    				    				<th class="mobile-table">Assigned Admin</td>
    				    				<th class="mobile-table">Date Submitted</td>
    				    				<th>Date Last Updated</td>';
    			    				 echo $tabhead; ?>
    			    			</tr>
    			    		</thead>
    			    		<tbody>
    			    			<?= $dali->buildSRTable(); ?>
    			    		</tbody>
    			    		<tfoot>
    			    			<tr>
    			    				<?= $tabhead; ?>
    			    			</tr>
    			    		</tfoot>
				    		</table>
		    		  <?php }
		    		  //show individual service record
		    		  else if (isset($sr) && is_numeric($sr)) {
		    		  	$info = $dali->buildSRTicketViewHd($sr);
		    		  	?>


		    		  	<?php
		    		  } elseif (isset($sr) && ($sr == "new")) {
			                $type = $_GET['type'];
			                if (isset($type) && ($type == '1')){
			                  include_once 'modules/service_record/templates/computer_repair.php';
			                } else {
			                  include_once 'modules/service_record/templates/sr_new.php';
			                }
			              } elseif ($_GET['page'] == "configure") {
			                echo "the configuration page will be here";
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
	<!-- jQuery -->
    <script src="bower/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="bower/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- DataTables -->
    <script src="bower/AdminLTE/plugins/datatables/jquery.dataTables.js"></script>
    <script src="bower/AdminLTE/plugins/datatables/dataTables.bootstrap.js"></script>
    <!-- SlimScroll -->
    <script src="bower/AdminLTE/plugins/slimScroll/jquery.slimscroll.js"></script>
    <!-- FastClick -->
    <script src="bower/AdminLTE/plugins/fastclick/fastclick.min.js"></script>
    <!-- Select2 -->
    <script src="bower/AdminLTE/plugins/select2/select2.min.js"></script>
    <!-- AdminLTE App -->
    <script src="bower/AdminLTE/dist/js/app.min.js"></script>

    <script src="dist/js/form.js"></script>

    <!-- page script -->
    <?php
    if($_GET['sr'] == 'new') {
   		echo '<script src="dist/js/generate_sr.js"></script>';
   	}
   	?>
    <script>
      $(function () {
        $(".repair").hide();
        document.getElementsByClassName('select2').style;
        $(".incident").hide();
        $('#records').DataTable({
          "paging": true,
          "lengthChange": true,
          "searching": true,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });

      $(function() {
        $("#sr_type").select2();
        $(".sr_cat1").select2();
        $(".sr_cat2").select2();
        $("#sr_subcat").select2();
        $(".building").select2();
        $(".user-list").select2();
        $(".machine").select2();
        $(".request-type").select2();
      });
     $('#sdesk ul').toggle(200);$('#sdesk').addClass("active");
     $(".clickableRow").on("click",function() {
	      if (this.parentNode.parentNode.getAttribute("id") === "downloads") {
	        window.open($(this).attr("data-href"),"_blank");
	      } else {
	        document.location = $(this).attr("data-href");
	      }
	    });
     jQuery(document).ready(function($) {
      	$("#incident_building").css("display", "none");
      	$("#machine_display").css("display", "none");
      	var height = $("#user_contact").css("height");
      	var regex = /px/;
      	var check = regex.exec(height);
      	if(check) var h = height.substring(0, check.index);
      	$("#specific_info").css("height", h - 20 + "px");
      	$("#sdesk li").hover(function () {
	      $(this).addClass("active");
	    }, function () {
	      $(this).removeClass("active");
	    });
	    $("#ddesk li").hover(function () {
	      $(this).addClass("active");
	    }, function () {
	      $(this).removeClass("active");
	    });
      });
    </script>
    <?php
    include_once 'modules/modals.php'; ?>
  </body>
</html>
