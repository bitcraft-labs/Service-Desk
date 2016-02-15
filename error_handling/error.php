<?php
	$status = $_SERVER['REDIRECT_STATUS'];
	$codes = array(
		401 => array('401', "User is denied due to invalid credentials"),
		403 => array('403', "Server has refused to fulfill your request"),
		404 => array('404', "That file does not exist on this server"),
		500 => array('500', 'The request was unsuccessful due to an unexpected condition encountered by the server'),
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
<?php include_once '../modules/config.inc.php';	?>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="/bower/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="/dist/css/error_styles.css">
	<?php echo "<link rel='stylesheet' href='/bower/AdminLTE/dist/css/skins/skin-$skin.min.css'>"; ?>
	<title><?php echo $title_page; ?></title>
</head>
<body>
	<div class="error-background">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 center">
					<h1 class="error-title"><?= $title_page ?></h1>
					<?php if($title_page == "404") { ?>
					<h1><?php echo "Not Found"; ?></h1>
					<?php } ?>
					<p>Unfortunatly, we're having trouble loading the page you are looking for. <br> Please wait a moment and try again or use the actions below.</p>
					<a href="index.php"><button class="btn btn-lg btn-info">Back to safety</button></a>
					<a href="javascript:history.go(-1)"><button class="btn btn-lg btn-info">Previous page</button></a>
				</div>
			</div>
		</div>
	</div>
	<div style="border-top: solid 1px #D2D6DE; padding: 20px;">
		<?php include_once '../modules/footer.php'; ?>
	</div>
	<script src="/bower/jquery/dist/jquery.min.js"></script>
	<script src="/bower/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
<!-- Unauthorized
Forbidden
Not Found
Internal Server Error -->
</html>

