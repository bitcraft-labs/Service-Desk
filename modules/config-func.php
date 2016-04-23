<?php
$rootdir =  $_SERVER['DOCUMENT_ROOT'];
// Include DAL
require_once "$rootdir/modules/DAL.php";
require_once "$rootdir/modules/DALi.php";
// Database
define ( 'DB_HOST',     $conf['sql']['host']);
define ( 'DB_USER',     $conf['sql']['user']);
define ( 'DB_PASSWORD', $conf['sql']['pass']);
define ( 'DB_DB',       $conf['sql']['name']);

?>
