<div class="content-wrapper">
	<div class="ssp-title hd">
      <h3>
				<?php
				$staff_id = $_GET['id'];
				if ($staff_id == "all") {
					$now = getdate();
					$now = array($now[mday],$now[mon],$now[year]);
					echo "<i class='fa fa-users fa-2x pull-left'> </i>Help desk Staff<br><small>Looking to see how your fellow co-workers are doing?</small>";
				}
				else
					echo "<i class='fa fa-user fa-2x pull-left'> </i>View Staff Member<br><small>Looking to see how your fellow co-worker is doing?</small>";
				?>
			</h3>
  </div>
	<section class="content">
		<div class="row">
			<div class="col-xs-12">
			  <?php //Show all customer records ?>
			  <?php if ($staff_id == "all") {
			  	include_once 'modules/staff/staff_list.php';
    		  }
    		  //show individual service record
    		  elseif (isset($staff_id) && is_numeric($staff_id)) {
    		  	include_once 'modules/staff/staff_info.php';
    		  	?>

    		  	<?php
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
