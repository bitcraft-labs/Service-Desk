<?php 
	$status = $_SERVER['REDIRECT_STATUS'];
	$codes = array(
		401 => array('401 Unauthorized', "User is denied due to invalid credentials"),
		403 => array('403 Forbidden', "Server has refused to fulfill your request"),
		404 => array('404 Not Found', "That file does not exist on this server"),
		500 => array('500 Internal Server Error', 'The request was unsuccessful due to an unexpected condition encountered by the server'),
	);
	$title_page = $codes[$status][0];
	$message = $codes[$status][1];
	if ($title == false || strlen($status) != 3) {
		$title = 'Unrecognized Status Code';
		$message = "The website returned an unrecognized status code";
	}
 ?>
<!DOCTYPE html>
<html lang="en">
<<<<<<< HEAD
<?php include_once '../modules/config.inc.php';	?>
=======
<?php include_once '../modules/config.inc.php'; ?>
>>>>>>> f782091b6e70c6689a6e3eb03b6c5384de65d1b1
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="/dist/css/error_styles.css">
<<<<<<< HEAD
	<?php echo "<link rel='stylesheet' href='/dist/css/skins/skin-$skin.min.css'>"; ?>
	<title><?php echo $title_page; ?></title>
</head>
<body>
	<div class="main-header container-fluid header-background">
		<a href="/"><p style="padding-top:15px; margin-left:-15px;"><?php echo "<img src='$main_logo_top' height='55'/>"?></p></a>
=======
	<title><?php echo $title_page; ?></title>
</head>
<body>
	<div class="container-fluid header-background">
		<p style="padding-top:15px; margin-left:-23px;"><?php echo "<img src='$logo' width='500' />"?></p>
>>>>>>> f782091b6e70c6689a6e3eb03b6c5384de65d1b1
		<div class="row">
		 	<h1><strong>Whoops!</strong></h1>
		 	<p class="lead"><?php echo $title_page ." - ". $message; ?></p>
		</div>
	</div>
	<div class="container">
<<<<<<< HEAD
	 	<p style="font-size: 1.6em; margin-left: -68px;" class="lead">This holy kitten saved the day!</p>
=======
	 	<p class="lead">This holy kitten saved the day!</p>
	 	<div class="text-center">
			<a href="login.php"><button class="error-btn btn btn-lg btn-success">Login</button></a>
			<a href="index.php"><button class="error-btn btn btn-lg btn-success">Back</button></a>
		</div>
>>>>>>> f782091b6e70c6689a6e3eb03b6c5384de65d1b1
	 	<?php if ($title_page == 404) { ?>
	 	<div class="text-center">
			<img class="error-img" style="margin-bottom: 15px; padding: 20px 0;" src="../dist/img/404-center" width="600" alt="404 Error Page Image">
		</div>
		<?php } ?>
<<<<<<< HEAD
		<div class="text-center">
			<a href="login.php"><button class="error-btn btn btn-lg btn-success">Login</button></a>
			<a href="/"><button class="error-btn btn btn-lg btn-success">Back to safety</button></a>
		</div>
	</div>
	<div style="border-top: solid 1px #D2D6DE; padding: 20px;">
		<?php include_once '../modules/footer.php'; ?>
=======
	</div>
	<div style="border-top: solid 1px #D2D6DE; padding: 20px;">
		<?php include_once '../modules/end_user_portal/footer.php'; ?>
>>>>>>> f782091b6e70c6689a6e3eb03b6c5384de65d1b1
	</div>
	<script src="/plugins/JQuery/jQuery-2.1.4.min.js"></script>
	<script src="/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>