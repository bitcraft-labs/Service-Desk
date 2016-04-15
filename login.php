<?php
require_once("./modules/authentication/config.php");

if(isset($_POST['submit'])) {
  $error = '<div class="alert alert-danger alert-dismissable" id="error">';

   if($authenticator->Login()) {
      $authenticator->RedirectToURL("index.php");
   } 
   else {
    $error .= "<button type='button' class='close' data-dismiss='alert'>x</button>";
    $error .= $authenticator->getErrorMessage() . '</div>';
   }
}

$emailsent = false;
if(isset($_POST['submitted_pass']))
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
$pagetitle = "Login";
include_once './modules/config.inc.php';
include_once './modules/authentication/auth-head.php';

if ($conf['customize']['darkmode'] == 'dark') {
  $bodydark = 'dark';
  $darktext = 'darktext';
}

?>

<body class="hold-transition skin-blue <?=$bodydark?>">
  <div class="container <?=$darktext?>">
    <div class="page-header" style="text-align:center">
        <?php echo $loginHeader; ?>
    </div>
    <?= $error; ?>
    <div id="error-container"></div>
    <form id='login' role="form" class="col-md-12" action='<?php echo $authenticator->GetSelfScript(); ?>' name="login_form" method='post' accept-charset='UTF-8'>
      <input type='hidden' name='submitted' id='submitted' value='1'/>
      <div class="form-group has-feedback">
          <input type='text' name='username' class="form-control" id='username' value="<?php echo $_COOKIE['remember_me']; ?>" placeholder="Username" />
          <span class="glyphicon glyphicon-user form-control-feedback"></span>
          <span id='login_username_errorloc' class='error'></span>
      </div>
      <div class="form-group has-feedback">
          <input type="password" id="password" name="password" class="form-control" placeholder="Password" />
          <span id="show_pass_button" class="glyphicon glyphicon-eye-open form-control-feedback"></span>
          <span id='login_password_errorloc' class='error'></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label class="checkbox icheck">
              <input type="checkbox" name="remember_me" value="1" <?php if(isset($_COOKIE['remember_me'])) {
                                                                          echo 'checked';
                                                                        }
                                                                        else {
                                                                          echo '';
                                                                        }
                                                                        ?> /> Remember Me
            </label>
          </div>
        </div><!-- /.col -->
        <div class="col-xs-4">
          <button name="submit" type="submit" onclick="loginFormValidation();" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div><!-- /.col -->
      </div>
      <div class="form-group">
          <!--<span><a href="javascript:;" data-toggle="modal" data-target="#help">Need help?</a></span>-->
          <span><a href="javascript:;" data-toggle="modal" data-target="#forgot">Forgot Password?</a></span>
      </div>
      <p class="copyright <?=$darktext?>"><br />powered by <a href='http://itsm.bitcraftlabs.net' target="_blank"><?=$app_name?></a></p>
    </form>
  </div>

  <!-- Help Modal -->
  <div id="forgot" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Forgot Password?</h4>
        </div>
        <div class="modal-body">
          <form id='resetreq' class="col-md-12" action='<?php echo $authenticator->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
            <p>If you forgot your password, enter the email address associated with your account to reset it. A password reset link will be sent to that account.</p>
            <input type='hidden' name='submitted_pass' id='submitted_pass' value='1'/>
            <!-- Currently set for delete -->
            <!-- <div><span class='error'><?php //echo $authenticator->GetErrorMessage(); ?></span></div> -->
            <div class="form-group">
                <input type='text' name='email' class="form-control input-lg" id='email' value='<?php echo $authenticator->SafeDisplay('email') ?>' placeholder="Email Address" />
                <span id='resetreq_email_errorloc' class='error'></span>
            </div>
            <div class="form-group">
                <button name='Submit' type='submit' class="btn btn-primary btn-lg btn-block">Reset Password</button>
            </div>
        </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>

    
    <!-- jQuery -->
    <script src="bower/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="bower/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="bower/AdminLTE/plugins/iCheck/icheck.min.js"></script>
    <script src="dist/js/loginValidation.js"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
  </body>
</html>
