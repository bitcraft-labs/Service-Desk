<?PHP
require_once("./modules/authentication/config.php");

if(!$authenticator->CheckLogin())
{
    $authenticator->RedirectToURL("login.php");
    exit;
}

if(isset($_POST['submitted']))
{
   if($authenticator->ChangePassword())
   {
        $authenticator->RedirectToURL("changed-pass.html");
   }
}

?>
<!DOCTYPE html>
<html>
<?php
$pagetitle = "Register"; 
include_once 'modules/config.inc.php';
include_once 'modules/authentication/auth-head.php';
?>
<body class="hold-transition skin-blue">

<div class="container">

<div class="page-header" style="text-align:center">
    <p style="padding-top:15px;"><?php echo "<img src='$logo' width='100' />"?></p>
    <h1><?php echo $formatted_coname; ?><br /><small>Change Password</small></h1>
</div>

<!-- Simple Login - START -->
<div id='fg_membersite'>
<form id='changepwd' class="col-md-12" action='<?php echo $authenticator->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
<fieldset>
    <input type='hidden' name='submitted' id='submitted' value='1'/>
    <div><span class='error'><?php echo $authenticator->GetErrorMessage(); ?></span></div>
    <div class="form-group">
        <div class='pwdwidgetdiv' id='oldpwddiv' ></div>

        <input type='password' name='oldpwd' id="oldpwd" class="form-control input-lg" placeholder="Old Password" />

        <span id='changepwd_oldpwd_errorloc' class='error'></span>
    </div>
    <div class="form-group">
        <div class='pwdwidgetdiv' id='newpwddiv' ></div>

        <input type='password' name='newpwd' id="newpwd" class="form-control input-lg" placeholder="New Password" />

        <span id='changepwd_newpwd_errorloc' class='error'></span>
    </div>
    <div class="form-group">
        <button name='Submit' type='submit' class="btn btn-primary btn-lg btn-block">Change Password</button>
        <span><a href="javascript:;" data-toggle="modal" data-target="#help">Need help?</a></span>
        <span class="pull-right"><a href="./">Nevermind. Go back.</a></span>
    </div>
<fieldset>
</form>
<script type='text/javascript'>
// <![CDATA[
    var pwdwidget = new PasswordWidget('oldpwddiv','oldpwd');
    pwdwidget.enableGenerate = false;
    pwdwidget.enableShowStrength=false;
    pwdwidget.enableShowStrengthStr =false;
    pwdwidget.MakePWDWidget();
    
    var pwdwidget = new PasswordWidget('newpwddiv','newpwd');
    pwdwidget.MakePWDWidget();
    
    
    var frmvalidator  = new Validator("changepwd");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();

    frmvalidator.addValidation("oldpwd","req","Please provide your old password");
    
    frmvalidator.addValidation("newpwd","req","Please provide your new password");

// ]]>
</script>
</div>
<!-- Simple Login - END -->

<!-- Help Modal -->
<div id="help" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Need help?</h4>
      </div>
      <div class="modal-body">
        <p>Enter your old password and a new password. Changes will take effect immediately.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

</div>

</body>
</html>