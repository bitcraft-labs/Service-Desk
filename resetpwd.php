<?PHP
require_once("./modules/authentication/config.php");

$success = false;
if($authenticator->ResetPassword())
{
    $success=true;
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
      <title>Reset Password</title>
      <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
      <link rel="stylesheet" type="text/css" href="/dist/css/authpage.css" />
      <link rel="STYLESHEET" type="text/css" href="/dist/css/authpage.css" />
      <script type='text/javascript' src="/modules/authentication/gen_validatorv31.js"></script>
</head>
<body>
<div id='fg_membersite_content'>
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
