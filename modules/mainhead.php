<?php
include_once 'modules/config.inc.php';
require_once("./modules/authentication/config.php");
include_once 'modules/config-func.php';
include("modules/authentication/database.php"); 
include("modules/authentication/class.acl.php");

$dal = new DAL();
$myACL = new ACL();

//check if logged in
if(!$authenticator->CheckLogin())
{
    $authenticator->RedirectToURL("login.php");
    exit;
}
?>