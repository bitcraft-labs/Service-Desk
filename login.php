<?php
require_once("./modules/authentication/config.php");

if(isset($_POST['submitted']))
{
   if($authenticator->Login())
   {
        $authenticator->RedirectToURL("index.php");
   }
}
?>
<!DOCTYPE html>
<html>
<?php
$pagetitle = "Login"; 
include_once './modules/config.inc.php';
include_once './modules/authentication/auth-head.php';
?>
<body class="hold-transition skin-blue">

<div class="container">

<div class="page-header" style="text-align:center">
    <?php echo $loginHeader; ?>
</div>

<!-- Simple Login - START -->
<div id='fg_membersite'>
<form id='login' class="col-md-12" action='<?php echo $authenticator->GetSelfScript(); ?>' name="login_form" method='post' accept-charset='UTF-8'>
<fieldset>
    <input type='hidden' name='submitted' id='submitted' value='1'/>
    <div class="form-group">
        <input type='text' name='username' class="form-control input-lg" id='username' value='<?php echo $authenticator->SafeDisplay('username') ?>' placeholder="Username" />
        <!-- <input type="text" name='username' class="form-control input-lg" placeholder="Username" /> -->
        <span id='login_username_errorloc' class='error'></span>
    </div>
    <div class="form-group">
        <input type="password" name="password" class="form-control input-lg" placeholder="Password" />
        <span id='login_password_errorloc' class='error'></span>
    </div>
    <div class="form-group">
        <button name='Submit' type='submit' class="btn btn-primary btn-lg btn-block">Sign In</button>
        <span><a href="javascript:;" data-toggle="modal" data-target="#help">Need help?</a></span>
        <span class="pull-right"><a href="reset-pass.php">Forgot Password?</a></span>
    </div>
<fieldset>
</form>
<script type='text/javascript'>
// <![CDATA[

    var frmvalidator = new Validator("login");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();
    frmvalidator.addValidation("username","req","Please provide your username");
    frmvalidator.addValidation("password","req","Please provide the password");

// ]]>
</script>
</div>
<!-- Simple Login - END -->

<!-- Help Modal -->
<div id="help" class="modal fade modal-primary" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
	 <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Info</h4>
      </div>
      <div class="modal-body">
        <h3><?php echo $coname." ".$app_name?></h3>
        <p>Need an account? Locked out? Click the according button, otherwise, sign in with your username and password.</p>
      </div>
      <div class="modal-footer">
        <a href="newuser.php"><button type="button" class="btn btn-default">Create Account</button></a>
        <a href="reset-pass.php"><button type="button" class="btn btn-default">Forgot Password</button></a>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

</div>

</body>
</html>
