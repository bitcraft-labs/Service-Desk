<!DOCTYPE html>
<!--
Project:    Bitcraft Service Desk (An Open Source ITSM Web App)
Lead Devs:  Joshua Nasiatka, Allen Perry, Eugene Duffy
For:        Software Engineering
Dev Date:   Spring 2016
Status:     Staging; Idea Testing; Development
-->
<?php
  include("modules/mainhead.php");
  //redirect per certain permissions
  if (($myACL->hasPermission('hd_portal') != true) && ($myACL->hasPermission('eu_portal'))) {
    echo "If page is stuck, click <a href='EndUserPortal.php'>here</a> to continue.";
    header("location: ../EndUserPortal.php");
    exit;
  } else if ($myACL->hasPermission('hd_portal')) {
    echo "If page is stuck, click <a href='HelpDesk.php'>here</a> to continue.";
    header("location: ../HelpDesk.php");
    exit;
  } else {
    echo "You are not entitled to use this system. Please contact your administrator!";
    exit;
  }
?>
<html>
<?php 
include_once 'modules/head.php'; ?>
<body></body>
</html>
