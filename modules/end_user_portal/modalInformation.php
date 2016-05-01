<?php
	$rootdir =  $_SERVER['DOCUMENT_ROOT'];
	include_once "$rootdir/modules/mainhead.php";
	
	$modal_title = $_POST['title'];
	$add_info = $dali->getAdditionalInfo($modal_title)[0][0];
	echo $add_info;
 ?>
