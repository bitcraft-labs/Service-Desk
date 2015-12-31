<!-- Customer Info -->
<?php
	$dal = new DAL();
	$person = $_GET['id'];
	/*
	$exists = $dal->checkPersonExists('1');
	if (!$exists) {
		echo "DOESN'T EXIST!!!";
		exit;
	}
	*/
	$personinfo = $dal->getPersonInfo($person);
	$sysinfo = $dal->getPersonMachines($person);
	$checkups = $dal->getPersonCheckups($person);
	foreach ($personinfo as $prow) {}
?>
<div class="col-md-12">
	<div class="box box-solid box-primary">
	  <div class="box-header with-border">
	    <h3 class="box-title"><i class="fa fa-user"> </i> Customer Information</h3>
	    <div class="box-tools pull-right">
	      
	      <!-- <span class="label label-default">Student</span> -->
	    </div><!-- /.box-tools -->
	  </div><!-- /.box-header -->
	  <div class="box-body">
	  <div class="col-md-12">
	  	<?php echo "<h2>$prow->name<br /><small>$prow->user_type</small></h2>"; ?>
	  	<!-- <h2>Jo Shmo<br /><small>Student</small></h2> -->
	    <form id='register' action='' method='post' accept-charset='UTF-8'>
		<fieldset>
		    <input type='hidden' name='submitted' id='submitted' value='1'/>
		    <?php echo "<div><span class='error'></span></div>";?>

		    <!-- email -->
            <div class="form-group">
              <label>FSU Email:</label>
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="fa fa-envelope"></i>
                </div>
                <input type="text" class="form-control" value="<?php echo $prow->email; ?>" data-inputmask='"mask": "__@__.__"' data-mask>
              </div><!-- /.input group -->
            </div><!-- /.form group -->
		    <!-- phone -->
            <div class="form-group">
              <label>Primary Phone:</label>
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="fa fa-phone"></i>
                </div>
                <input type="text" class="form-control" value="<?php echo $prow->phone; ?>" data-inputmask='"mask": "(999) 999-9999"' data-mask>
              </div><!-- /.input group -->
            </div><!-- /.form group -->
		    <!-- banner id -->
            <div class="form-group">
              <label>Banner ID:</label>
              <div class="input-group">
                <div class="input-group-addon">
                  <i>@</i>
                </div>
                <input type="text" class="form-control" value="<?php echo $prow->banner_id; ?>" data-inputmask='"mask": "@12345678"' data-mask>
              </div><!-- /.input group -->
            </div><!-- /.form group -->
		    <div class="form-group">
		        <button type="submit" class="btn btn-primary btn-block">Update</button>
		    </div>
		</fieldset>
		</form>
	  </div><!-- /col -->
	  </div><!-- /.box-body 
	  <div class="box-footer">
	    <button type="button" class="btn btn-primary">Update</button>
	  </div> box-footer -->
	</div><!-- /.box -->
</div>

<!-- Other Info -->
<!-- Systems -->
<div class="col-md-6">
	<div class="box box-primary">
	  <div class="box-header with-border">
	    <h3 class="box-title"><i class="fa fa-desktop"> </i> System Information</h3>
	    <div class="box-tools pull-right">
	      
	      <!--<span class="label label-primary">Student</span>-->
	    </div><!-- /.box-tools -->
	  </div><!-- /.box-header -->
	  <div class="box-body">
	    <table id="systems" class="table table-bordered table-striped">
    		<thead>
    			<?php $tabhead = "
    			<tr>
    				<td>#</td>
    				<td>Make</td>
    				<td>Model</td>
    				<td>Serial</td>
    				<td>Warranty Status</td>
    				<td>Purchaser</td>
    				<td>OS</td>
    				<td>Lastest Checkup</td>
    			</tr>"; echo $tabhead; ?>
    		</thead>
    		<tbody>
			<?php 
				$count = 0;
				foreach ($sysinfo as $sys) {
				$count = $count + 1;
				echo "<tr>
					<td>$count</td>
				    <td>$sys->mfr</td>
				    <td>$sys->model</td>
				    <td>$sys->serial</td>
				    <td>$sys->warr_status</td>
				    <td>$sys->purchaser</td>
				    <td>#NA</td>
				    <td>#NA</td>
				  </tr>";
				} ?>
    		</tbody>
    		<tfoot>
    			<?php echo $tabhead; ?>
    		</tfoot>
		</table>
	  </div><!-- /.box-body -->
	  <div class="box-footer">
	    <button type="button" class="btn btn-primary">Add New System</button>
	  </div><!-- box-footer -->
	</div><!-- /.box -->
</div><!-- /systems -->
<!-- Visits -->
<div class="col-md-6">
	<div class="box box-primary">
	  <div class="box-header with-border">
	    <h3 class="box-title"><i class="fa fa-stethoscope"> </i> Checkups</h3>
	    <div class="box-tools pull-right">
	      
	      <!--<span class="label label-primary">Student</span>-->
	    </div><!-- /.box-tools -->
	  </div><!-- /.box-header -->
	  <div class="box-body">
	    <table id="checkups" class="table table-bordered table-striped">
    		<thead>
    			<?php $tabhead = "
    			<tr>
    				<td>#</td>
    				<td>System</td>
    				<td>Issue Description</td>
    				<td>Assigned To</td>
    				<td>Notes</td>
    				<td>Checkin Date</td>
    				<td>Pickup Date</td>
    			</tr>"; echo $tabhead; ?>
    		</thead>
    		<tbody>
    		<?php
    		/*
    		if ($checkups) {
    		//$count = 0;
    		foreach($checkups as $checkup) {
    			//$count = $count + 1;
    			echo "<tr>
    				<td>$count</td>
    				<td>#NA</td>
    				<td>$checkup->why</td>
    				<td>$checkup->assigned_to</td>
    				<td>View Notes</td>
    				<td>#NA</td>
    				<td>#NA</td>
    			</tr>"
    		}}*/?>
    			<!--
    			<tr>
    				<td>1</td>
    				<td>Apple rMBP</td>
    				<td>Connect to Internet</td>
    				<td>helpdesktech</td>
    				<td>View Notes</td>
    				<td>9/4/2015</td>
    				<td>9/5/2015</td>
    			</tr>
    			<tr>
    				<td>2</td>
    				<td>Apple rMBP</td>
    				<td>Potential Virus</td>
    				<td>helpdesktech</td>
    				<td>View Notes</td>
    				<td>11/7/2015</td>
    				<td>11/11/2015</td>
    			</tr>
    			<tr>
    				<td>3</td>
    				<td>Apple rMBP</td>
    				<td>Graphics Glitchy</td>
    				<td>The Mac Guy</td>
    				<td>View Notes</td>
    				<td>11/30/2015</td>
    				<td>Waiting for Pickup</td>
    			</tr>
    			-->
    		</tbody>
    		<tfoot>
    			<?php echo $tabhead; ?>
    		</tfoot>
		</table>
	  </div><!-- /.box-body -->
	  <div class="box-footer">
	    <button type="button" class="btn btn-primary">Add New Visit</button>
	  </div><!-- box-footer -->
	</div><!-- /.box -->
</div><!-- /systems -->