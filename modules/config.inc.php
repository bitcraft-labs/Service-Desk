<?php
/*
*****************************************************
CRM Main System Config File
Created by Joshua Nasiatka (http://bitcraftlabs.net)

Do not modify in risk of breaking application
*****************************************************
*/

/* ----------------------- FUNCTIONS ---------------------- */
//include_once 'modules/functions.php';

/* ------------------- SECURITY SETTINGS ------------------ */
$restrict_ips = "no";

$admin_pages = array( //do not modify this array
   'about',
   'admin',
   'dashboard',
   'profile',
   'service-record'
);

$allowed_pages = array( //do not modify this array
   'about',
   'dashboard',
   'profile',
   'service-record'
);

/* --------------------- CUSTOMIZATION --------------------- */
/* ---------- PRESETS ---------- */
$skin = "purple";

$tcrmimg = 'dist/img';
$logo = "$tcrmimg/tronic-logo.png";
//$logo_dark = '$tcrmimg/tronic-logo-small.png';
$logo_top = "$tcrmimg/tronic-logo-top.png";
$formatted_logo_top = "<img src='$logo_top' width='155' />";
//$formatted_logo_top = "<strong>TRONIC</strong> CRM";
$coname = "Tronic CRM";

$formatted_coname = "";
//$formatted_coname = "<strong>Tronic</strong> CRM<br />".
//	"A CloudDesk Solution";

$loginHeader = "<p style='padding-top:15px;'><img src='$logo' width='320' /></p>";
$loginHeader .= "<h1><small>Login</small></h1>";

/* --- CUSTOM FILE HANDLING --- */
if (file_exists('custom/config.php')) {
	include_once 'custom/config.php';
	$custom = 'custom';
	$cusimg = 'custom/img';

	if ($company_name) {
		$coname = $company_name;
	}

	if ($formatted_company_name) {
		$formatted_coname = $formatted_company_name;
	}

	if ($main_logo) {
		if (file_exists("$cusimg/$main_logo")) {
			$logo = "$cusimg/$main_logo";             //main logo
			$loginHeader = "<p style='padding-top:15px;'><img src='$logo' width='100' /></p>";
		    $loginHeader .= "<h1>$formatted_coname<br /><small>Login</small></h1>";
		}
	}

	if ($main_logo_small) {
		$logo_dark = "$cusimg/$main_logo_small";  //sidebar and mobile logo
	}

	if ($main_logo_top) {
		$logo_top = "$cusimg/$main_logo_top";     //logo on top navigation bar
		$formatted_logo_top = "<img src='$logo_top' width='155' />";
	}
}

/* ------------- APP NAME, VERSION NUMBER, ETC. ------------ */
$app_name = "Technology Repair Database";
$app_version = "0.0.1";

/* Sets the title in the header. This is what the page will be named by default when you
   make a "favorite" or "bookmark" in your browser. Change as you see fit. */

$title = "$coname $app_name";

/* ------------------- DEVELOPER SETTINGS ------------------ */
$debugger = true;

?>