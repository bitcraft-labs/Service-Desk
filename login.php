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
    <form id='login' class="col-md-12" action='<?php echo $authenticator->GetSelfScript(); ?>' name="login_form" method='post' accept-charset='UTF-8'>
      <input type='hidden' name='submitted' id='submitted' value='1'/>
      <div class="form-group has-feedback">
          <input type='text' name='username' class="form-control" id='username' value="<?php echo $_COOKIE['remember_me']; ?>" placeholder="Username" /><?php //echo $authenticator->SafeDisplay('username') ?>
          <!-- <input type="text" name='username' class="form-control input-lg" placeholder="Username" /> -->
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          <span id='login_username_errorloc' class='error'></span>
      </div>
      <div class="form-group has-feedback">
          <input type="password" name="password" class="form-control" placeholder="Password" />
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
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
          <button name="Submit" type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div><!-- /.col -->
      </div><!--
      <div class="form-group">
          <label class="checkbox pull-left">
          <input type="checkbox" name="remember_me" value="1" />
          Remember me
          </label>
      </div>-->
      <div class="form-group">
          <!--<button name='Submit' type='submit' class="btn btn-primary btn-lg btn-block">Sign In</button>-->
          <!--<span><a href="javascript:;" data-toggle="modal" data-target="#help">Need help?</a></span>-->
          <span class="pull-left"><a href="reset-pass.php">Forgot Password?</a></span>
      </div>
    </form>
  </div>
    <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="plugins/iCheck/icheck.min.js"></script>
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
