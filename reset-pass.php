<?php
require_once("./modules/authentication/config.php");

$emailsent = false;
if(isset($_POST['submitted']))
{
   if($authenticator->EmailResetPasswordLink())
   {
        $authenticator->RedirectToURL("reset-pwd-link-sent.html");
        exit;
   }
}
?>
<!DOCTYPE html>
<html>
<?php
$pagetitle = "Reset Password"; 
include_once 'modules/config.inc.php';
include_once 'modules/authentication/auth-head.php';
?>
<body class="hold-transition skin-blue">

<div class="container">

<div class="page-header" style="text-align:center">
    <p style="padding-top:15px;"><?php echo "<img src='$logo' width='100' />"?></p>
    <h1><?php echo $formatted_coname; ?><br /><small>Reset Password</small></h1>
</div>

<!-- Simple Login - START -->
<div id='fg_membersite'>
<form id='resetreq' class="col-md-12" action='<?php echo $authenticator->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
<fieldset>
    <input type='hidden' name='submitted' id='submitted' value='1'/>
    <div><span class='error'><?php echo $authenticator->GetErrorMessage(); ?></span></div>
    <div class="form-group">
        <input type='text' name='email' class="form-control input-lg" id='email' value='<?php echo $authenticator->SafeDisplay('email') ?>' placeholder="FSU Email Address" />
        <span id='resetreq_email_errorloc' class='error'></span>
    </div>
    <div class="form-group">
        <button name='Submit' type='submit' class="btn btn-primary btn-lg btn-block">Reset Password</button>
        <span><a href="javascript:;" data-toggle="modal" data-target="#help">Need help?</a></span>
        <span class="pull-right"><a href="login.php">Login</a></span>
    </div>
<fieldset>
</form>
<script type='text/javascript'>
// <![CDATA[

    var frmvalidator  = new Validator("resetreq");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();
    frmvalidator.addValidation("email","req","Please provide the email address used to sign-up");
    frmvalidator.addValidation("email","email","Please provide the email address used to sign-up");

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
        <p>If you forgot your password, enter your FSU Email Address to reset it. A password reset link will be sent to that account.</p>
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