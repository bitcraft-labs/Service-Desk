<?php
require_once 'modules/config.inc.php';
require_once 'modules/authentication/config.php';
require_once 'modules/config-func.php';
require_once 'modules/authentication/database.php';
require_once 'modules/authentication/class.acl.php';

$dal = new DAL();
$dali = new DALi();
$myACL = new ACL();

//check if logged in
if(!$authenticator->CheckLogin()) {
    $authenticator->RedirectToURL("login.php");
    exit;
}

//who am i
$whoami = $_SESSION['userID'];
?>
