<?php
	$person = $_SESSION['userID'];
	/*
	$exists = $dal->checkPersonExists('1');
	if (!$exists) {
		echo "DOESN'T EXIST!!!";
		exit;
	}
	*/
	$personinfo = $dali->getPersonInfo($person);
	foreach ($personinfo as $prow) {}
	$joindate = strtotime( $prow['creation_date'] );
	$cdate = date( 'F d, Y', $joindate );

	if(isset($_POST['submitted_pass'])) {
	   if($authenticator->ChangePassword()) {
		    $passStatus = "<br>Password Changed Successfully!";
	   } else {
		   $passStatus = "<br>Error changing password!";
	   }
	}
 ?>
<div class="content-wrapper">
	<div class="ssp-title">
		<div class="container">
	      <h3><!--<i class="fa fa-laptop fa-2x pull-left"></i> -->Self-Service Portal <small>(Profile)<br>
			  Feel free to change your contact information so we can better serve you.</small></h3>
	    </div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<!-- Content Header (Page header) -->
				<h2><?= $authenticator->UserFullName() ?></h2>
				<h4><?= "Member Since: ".$cdate ?></h4>
				<p><a href="javascript:;" data-toggle="modal" data-target="#changepass">Change Password</a>
						<?=$passStatus?>
				</p><br>
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
			              <label>Primary Email:</label>
			              <div class="input-group">
			                <div class="input-group-addon">
			                  <i class="fa fa-envelope"></i>
			                </div>
			                <input type="text" class="form-control" value="<?php echo $prow['email']; ?>" data-inputmask='"mask": "__@__.__"' data-mask>
			              </div><!-- /.input group -->
			            </div><!-- /.form group -->
					    <!-- phone -->
			            <div class="form-group">
			              <label>Primary Phone:</label>
			              <div class="input-group">
			                <div class="input-group-addon">
			                  <i class="fa fa-phone"></i>
			                </div>
			                <input type="text" class="form-control" value="<?php echo $prow['phone']; ?>" data-inputmask='"mask": "(999) 999-9999"' data-mask>
			              </div><!-- /.input group -->
			            </div><!-- /.form group -->
					    <!-- banner id -->
			            <div class="form-group">
			              <label>Banner ID:</label>
			              <div class="input-group">
			                <div class="input-group-addon">
			                  <i>@</i>
			                </div>
			                <input type="text" class="form-control" value="<?php echo $prow['banner_id']; ?>" data-inputmask='"mask": "@12345678"' data-mask>
			              </div><!-- /.input group -->
			            </div><!-- /.form group -->
			            <div class="form-group">
			       		 <button type="submit" class="btn btn-custom btn-block">Update</button>
			    		</div>
					</fieldset>
					</form>
				</div>
			  </div>
		 </div>
	</div>
</div>

<!-- Change Password Modal -->
<div id="changepass" class="modal fade" role="dialog">
		<div class="modal-dialog">

				<!-- Modal content-->
				<div class="modal-content">
						<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title">Change Password</h4>
						</div>
						<div class="modal-body">
								<form id='changepwd' class="col-md-12" action='' method='post' accept-charset='UTF-8'>
										<fieldset>
												<p>Need to change your password? No problem.</p>
												<div><span class='error'><?php echo $authenticator->GetErrorMessage(); ?></span></div>
												<div class="form-group">
														<div class='pwdwidgetdiv' id='oldpwddiv'></div>

														<input type='password' name='oldpwd' id="oldpwd" class="form-control input-md" placeholder="Old Password" />

														<span id='changepwd_oldpwd_errorloc' class='error'></span>
												</div>
												<div class="form-group">
														<div class='pwdwidgetdiv' id='newpwddiv'></div>

														<input type='password' name='newpwd' id="newpwd" class="form-control input-md" placeholder="New Password" />

														<span id='changepwd_newpwd_errorloc' class='error'></span>
												</div>
												<div class="form-group">
														<button name='submitted_pass' type='submit' class="btn btn-custom btn-md btn-block">Change Password</button>
												</div>
												<fieldset>
								</form>
						</div>
						<div class="modal-footer">
								<!-- <button type="button" class="btn btn-custom" data-dismiss="modal">Close</button> -->
						</div>
				</div>
		</div>
</div>
