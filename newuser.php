<?PHP
require_once("./modules/authentication/config.php");

if(isset($_POST['submitted']))
{
   if($authenticator->RegisterUser())
   {
        $authenticator->RedirectToURL("thank-you.html");
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
    <h1><?php echo $formatted_coname; ?><br /><small>Register for an Account</small></h1>
</div>

<!-- New User Registration Form Begin
     This is going to be taken out in the next release and replaced with a form in admin as this will be
     a closed registration type of deal -->
<div>
<form id='register' class="col-md-12" action='<?php echo $authenticator->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
<fieldset>
    <input type='hidden' name='submitted' id='submitted' value='1'/>
    <div><span class='error'><?php echo $authenticator->GetErrorMessage(); ?></span></div>
    <div class="form-group">
        <input name="fname" type="text" id='fname' class="form-control input-lg" value='<?php echo $authenticator->SafeDisplay('fname') ?>' placeholder="First Name">
        <span id='register_name_errorloc' class='error'></span>
    </div>
    <div class="form-group">
        <input name="lname" type="text" id='lname' class="form-control input-lg" value='<?php echo $authenticator->SafeDisplay('lname') ?>' placeholder="Last Name">
        <span id='register_name_errorloc' class='error'></span>
    </div>
    <div class="form-group">
        <!-- Potentially add email validation down the road -->
        <input name="email" type="text" id='email' class="form-control input-lg" value='<?php echo $authenticator->SafeDisplay('email') ?>' placeholder="Company Email Address">
        <span id='register_email_errorloc' class='error'></span>
    </div>
    <div class="form-group">
        <!-- Potentially add email validation down the road -->
        <input name="username" type="text" id='username' class="form-control input-lg" value='<?php echo $authenticator->SafeDisplay('username') ?>' placeholder="Desired Username">
        <span id='register_username_errorloc' class='error'></span>
    </div>
    <div class="form-group">
        <input name="password" type="password" id='password' class="form-control input-lg" placeholder="Password">
        <div id='register_password_errorloc' class='error' style='clear:both'></div>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-lg btn-block">Register</button>
        <span><a href="javascript:;" data-toggle="modal" data-target="#help">Need help?</a></span>
        <span class="pull-right"><a href="login.php">Have an account? Login</a></span>
    </div>
</fieldset>
</form>
<!-- New User Registration Form End -->

<script type='text/javascript'>
// <![CDATA[
    var pwdwidget = new PasswordWidget('thepwddiv','password');
    pwdwidget.MakePWDWidget();

    var frmvalidator  = new Validator("register");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();
    frmvalidator.addValidation("fname","req","Please provide your first name");

    frmvalidator.addValidation("lname","req","Please provide your last name");

    frmvalidator.addValidation("email","req","Please provide your email address");

    frmvalidator.addValidation("email","email","Please provide a valid email address");

    frmvalidator.addValidation("username","req","Please provide a username");

    frmvalidator.addValidation("password","req","Please provide a password");

// ]]>
</script>
</div>

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
        <p>A confirmation email will be sent to the address provided.</p>
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
