<?PHP
require_once("./modules/authentication/config.php");
$authenticator->LogOut();
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
	<META http-equiv="refresh" content="3;URL=./">
	<title>Logged Out</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="apple-touch-icon" sizes="57x57" href="/dist/img/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/dist/img/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/dist/img/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/dist/img/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/dist/img/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/dist/img/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/dist/img/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/dist/img/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/dist/img/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/dist/img/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/dist/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/dist/img/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/dist/img/favicon-16x16.png">
    <link rel="manifest" href="/dist/img/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/dist/img/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
	<link rel="stylesheet" type="text/css" href="dist/css/authpage.css" />
</head>
<body>

<h1>You have logged out</h1>
<p>
<a href='login.php'>Login Again</a>
</p>

</body>
</html>
