<?PHP
require_once("./modules/authentication/config.php");

$success = false;
if($authenticator->ResetPassword())
{
    $success=true;
}

?>
<!DOCTYPE html>
<html>
<head>
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
      <title>Reset Password</title>
      <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
      <link rel="stylesheet" type="text/css" href="dist/css/authpage.css" />
</head>
<body>
<div>
<?php
if($success){
?>
<h1>Password is Reset Successfully</h1>
Your new password is sent to your email address.
<?php
}else{
?>
<h1>Error</h1>
<span class='error'><?php echo $authenticator->GetErrorMessage(); ?></span>
<?php
}
?>
</div>

</body>
</html>
