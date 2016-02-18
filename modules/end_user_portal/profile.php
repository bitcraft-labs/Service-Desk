<?php 
	$person = $_SESSION['user_id'];
	/*
	$exists = $dal->checkPersonExists('1');
	if (!$exists) {
		echo "DOESN'T EXIST!!!";
		exit;
	}
	*/
	$personinfo = $dal->getPersonInfo($person);
	foreach ($personinfo as $prow) {}
 ?>
<div class="content-wrapper">
	<div class="ssp-title">
		<div class="container">
	      <h3><!--<i class="fa fa-laptop fa-2x pull-left"></i> -->Self-Service Portal <small>(Profile)<br>
	  <!-- ADD NEW DESC -->Live long and prosper</small></h3>
	    </div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<!-- Content Header (Page header) -->
				<h2><?= $authenticator->UserFullName() ?></h2>
				<h4><?= $dal->getVerbatimUserAccessLevel() ?></h4>

				<!-- Main content -->
					<p><a href="change-pass.php">Change Password</a></p><br>
				</div>
			  	<!--<?php //echo "<h2>$prow->name<br /><small>$prow->user_type</small></h2>"; ?> -->
			  	<!-- <h2>Jo Shmo<br /><small>Student</small></h2> -->
			  	<div class="col-md-8">
				    <form id='register' action='' method='post' accept-charset='UTF-8'>
					<fieldset class="end-user-padding">
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
				</div>
			  </div>
		 </div>
	</div>
</div>