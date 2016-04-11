<?php
/**
  * @NOTE Probably decommisioning the page_handler as we moved
	* 			each page to its own file rather than using $_GET['page']
	* 			and referencing the allowed_pages() array.
	*/
if (isset($_GET['page'])) {
	$requested_page = $_GET['page'];
	$allowed_sector = $allowed_pages;
	if (!in_array($requested_page, $allowed_sector)) {
		include_once '404.php';
	} else {
		if (file_exists('modules/hd_portal/'.$requested_page.'.php')) {
			include_once 'modules/hd_portal/'.$requested_page.'.php';
		} else {
			include_once '404.php';
		}
	}
} else {
	include_once 'dashboard.php';
} ?>
