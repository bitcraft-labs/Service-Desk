<?PHP
require_once("./modules/authentication/config.php");

$authenticator->LogOut();
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
	<META http-equiv="refresh" content="5;URL=./">
	<title>Logged Out</title>
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
	<link rel="stylesheet" type="text/css" href="//bitcraftlabs.net/assets/css/style.css" />
	<script type='text/javascript' src='modules/authentication/gen_validatorv31.js'></script>
</head>
<body>

<h1>You have logged out</h1>
<p>
<a href='login.php'>Login Again</a>
</p>

</body>
</html>