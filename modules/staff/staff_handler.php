<div class="content-wrapper">
			

			<section class="content-header">
				<h1><?php
				$cus_id = $_GET['id'];
				if ($cus_id == "all") {
					$now = getdate();
					$now = array($now[mday],$now[mon],$now[year]);
					echo "All Staff";
				}
				else
					echo "View Staff Member";
				?></h1>
				<ol class="breadcrumb">
				    <li><a href="?page=dashboard"><i class="fa fa-dashboard"></i> Top</a></li>
				    <li class="active">Staff</li>
				</ol>
			</section>

			<section class="content">
				<div class="row">
					<div class="col-xs-12">
					  <?php //Show all customer records ?>
					  <?php if ($id == "all") {
					  	include_once 'modules/staff/staff_list.php';
		    		  } 
		    		  //show individual service record
		    		  elseif (isset($id) && is_numeric($id)) {
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