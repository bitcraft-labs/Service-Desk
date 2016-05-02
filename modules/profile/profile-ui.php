<?php
if(isset($_POST['submitted-acnt'])) {
  $returnStatus = "<br>This feature isn't available yet";
}
if(isset($_POST['submitted'])) {
   if($authenticator->ChangePassword()) {
	    $passStatus = "<br>Password Changed Successfully!";
   } else {
	   $passStatus = "<br>Error changing password!";
   }
}
?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <div class="ssp-title hd">
        <h3><i class='fa fa-user fa-2x pull-left'> </i>Profile Options<br><small>If you change your password, don't forget it</small></h3>
      </div>
        <!-- Main content -->
        <div class="container">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <i class="fa fa-user"></i>

                    <h3 class="box-title">Edit Profile</h3>
                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-4 col-sm-12 member-info">
                            <!-- Content Header (Page header) -->
                            <!-- Main content -->
                            <img src="dist/img/avatar5.png" class="img-circle" alt="User Image">
                            <h2><?= $authenticator->UserFullName() ?></h2>
                            <h4><?= "Member Since: ".$cdate ?></h4>
                            <p><a href="javascript:;" data-toggle="modal" data-target="#changepass">Change Password</a>
                                <?=$passStatus?>
                            </p>
                            <br>
                        </div>
                        <div class="col-md-8 col-sm-12 profile-form">
                            <form id='register' action='' method='post' accept-charset='UTF-8'>
                                <fieldset class="end-user-padding">
                                    <input type='hidden' name='submitted-acnt' id='submitted' value='1' />
                                    <?php echo "<div><span class='error'></span></div>";?>
                                        <!-- email -->
                                        <div class="form-group">
                                            <label>Primary Email:</label>
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-envelope"></i>
                                                </div>
                                                <input type="text" class="form-control" value="<?php echo $prow['email']; ?>" data-inputmask='"mask": "__@__.__"' data-mask>
                                            </div>
                                            <!-- /.input group -->
                                        </div>
                                        <!-- /.form group -->
                                        <!-- phone -->
                                        <div class="form-group">
                                            <label>Primary Phone:</label>
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-phone"></i>
                                                </div>
                                                <input type="text" class="form-control" value="<?php echo $prow['phone']; ?>" data-inputmask='"mask": "(999) 999-9999"' data-mask>
                                            </div>
                                            <!-- /.input group -->
                                        </div>
                                        <!-- /.form group -->
                                        <!-- banner id -->
                                        <div class="form-group">
                                            <label>Banner ID:</label>
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i>@</i>
                                                </div>
                                                <input type="text" class="form-control" value="<?php echo $prow['banner_id']; ?>" data-inputmask='"mask": "@12345678"' data-mask disabled>
                                            </div>
                                            <!-- /.input group -->
                                        </div>
                                        <!-- /.form group -->
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-custom btn-block">Update</button>
                                            <?= $returnStatus ?>
                                        </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <!-- Help Modal -->
    <div id="changepass" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Change Password</h4>
                </div>
                <div class="modal-body">
                    <form id='changepwd' class="col-md-12" action='<?php echo $authenticator->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
                        <fieldset>
                            <p>Need to change your password? No problem.</p>
                            <input type='hidden' name='submitted' id='submitted' value='1' />
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
                                <button name='Submit' type='submit' class="btn btn-custom btn-md btn-block">Change Password</button>
                            </div>
                            <fieldset>
                    </form>
                </div>
                <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
                </div>
            </div>
        </div>
    </div>
