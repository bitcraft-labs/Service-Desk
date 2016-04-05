<?php
require_once 'modules/config.inc.php';
require_once 'modules/authentication/config.php';
require_once 'modules/config-func.php';
require_once 'modules/authentication/database.php';
require_once 'modules/authentication/class.acl.php';

$dal = new DAL();
$dali = new DALi($conf);
$myACL = new ACL();

//check if maintenance mode is on
$maintenance = false;
$maintenance_msg = "Maintenance will be taking place always because this is extremely alpha. Please plan accordingly.";
if ($maintenance_msg && !$maintenance)
  echo "<div class='maintenance_msg'>$maintenance_msg</div>";
elseif(($myACL->hasPermission('access_admin')) && $maintenance)
  echo "<div class='maintenance_msg'>Maintenance Mode is On and Active</div>";
$whereami = $_SERVER['REQUEST_URI'];

if($maintenance) {
  if(!$whereami == '/') {
    header("Location: /");
    exit;
  } elseif((!$myACL->hasPermission('access_admin')) && ($whereami != '/')) {
    include_once 'modules/admin/maintenance/mode.php';
    exit;
  }
}

//check if logged in
if(!$authenticator->CheckLogin()) {
    $authenticator->RedirectToURL("login.php");
    exit;
}

//who am i
$whoami = $_SESSION['userID'];
?>
