<!DOCTYPE html>
<html>
<?php
$pagetitle = "Request Access"; 
include_once 'modules/config.inc.php';
include_once 'modules/authentication/auth-head.php';
?>
<body class="hold-transition skin-blue">

<div class="container">

<div class="page-header" style="text-align:center">
    <p style="padding-top:15px;"><?php echo "<img src='$logo' width='100' />"?></p>
    <h1><?php echo $formatted_coname; ?><br /><small>Register for an Account</small></h1>
</div>

<!-- Simple Login - START -->
<form id="form" class="col-md-12" action="" method="post">
    <div class="form-group">
        <input name="name" type="text" class="form-control input-lg" placeholder="First and Last Name">
    </div>
    <div class="form-group">
        <!-- Potentially add email validation down the road -->
        <input name="emailaddr" type="text" class="form-control input-lg" placeholder="FSU Email Address">
    </div>
    <div class="form-group">
        <input name="regid" type="text" class="form-control input-lg" placeholder="Registration ID">
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-lg btn-block" formmethod="post" value="register">Register</button>
        <span><a href="javascript:;" data-toggle="modal" data-target="#help">Need help?</a></span>
        <span class="pull-right"><a href="login.php">Have an account? Login</a></span>
    </div>
</form>

<!-- Send email (hidden, php) -->
<?php
/*
if(isset($_POST['register'])){
    $to      = 'jnasiatk@student.fitchburgstate.edu';
    $subject = 'Request Access: Honey Badger';
    $name = $_POST['name'];
    $emailaddr = $_POST['emailaddr'];
    $request_code = $_POST['regid'];
    $message = "Hello,\r\nI'd like to request access to Honey Badger.\r\n\r\nName: $name\r\nEmail: $emailaddr\r\n\r\nThank you!";
    $headers = 'From: system@fitchburgcsclub.net';
    if ($request_code == "HB2016!@") {
        mail($to, $subject, $message, $headers);
        //popup
    }
}
*/
?>

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
        <p>Not sure what the Registration ID is? You probably haven't attended training yet.</p>
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