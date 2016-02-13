<?php
if(isset($_POST['config_submitted'])) {
  $db_host = $_POST['db_host'];
  $db_user = $_POST['db_user'];
  $db_pass = $_POST['db_pass'];
  $db_name = $_POST['db_name'];
  $db_prefix = $_POST['db_prefix'];
  $skin = $_POST['skin'];
  $sysemail = $_POST['sysemail'];
  $coname = $_POST['company_name'];
  $formedconame = $_POST['formatted_company_name'];

  if ($_POST) {
      $f = fopen('custom/config.php', 'w') or die("can't open file");
      $contents = '<?php
/*
Project:    Bitcraft Service Desk (An Open Source ITSM Web App)
Lead Devs:  Joshua Nasiatka, Allen Perry, Eugene Duffy
For:        Software Engineering
Dev Date:   Spring 2016
Status:     Staging; Idea Testing; Development

Thank you for using Bitcraft Service Desk, we appreciate you trusting us with your ITSM needs

This is a generated file from system settings. Modifying this file can harm the integrity of the
application.
*/

/* --- MySQL Settings --- */
$conf["sql"]["host"]	= "'.$db_host.'";
$conf["sql"]["user"]	= "'.$db_user.'";
$conf["sql"]["pass"]	= "'.$db_pass.'";
$conf["sql"]["name"]	= "'.$db_name.'";
$conf["sql"]["prefix"]	= "'.$db_prefix.'";

/* --- Security Settings --- */
$conf["security"]["restrict_ips"] 		= false;
$conf["security"]["allowed_networks"]	= array();

/* --- Theme Design Options --- */
$conf["customize"]["skin"]					  = "'.$skin.'";
$conf["customize"]["darkmode"]			  = "dark";
$conf["customize"]["sysemail"]			  = "'.$sysemail.'";
$conf["customize"]["main_logo"]			  = "bcl_logo.png";
$conf["customize"]["login_size"]			= "medium";
$conf["customize"]["main_logo_small"]	= "fsu_logo.png";
$conf["customize"]["main_logo_top"]		= "fsu_logo_top_light.png";

/* --- Site Settings --- */
$conf["site"]["company_name"] 			     = "'.$coname.'";
$conf["site"]["formatted_company_name"]	 = "'.$formedconame.'";
;?>';
    fwrite($f, $contents);
    fclose($f);
    echo "<p>Config file generated successfully</p>";
  } else {
    echo "<p>You probably shouldn't be directly referencing this file.</p>";
  }
}
?>
