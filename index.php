<!DOCTYPE html>
<!--
Project:    Bitcraft Service Desk (An Open Source ITSM Web App)
Lead Devs:  Joshua Nasiatka, Allen Perry, Eugene Duffy
For:        Software Engineering
Dev Date:   Spring 2016
Status:     Staging; Idea Testing; Development
-->

<html>
<!-- head.php contains the stylesheets -->
<?php 
include_once 'modules/head.php'; ?>
<body>
<?php
  if ($_SESSION['user_type'] == 3) {
  	echo "If page is stuck, click <a href='EndUserPortal.php'>here</a> to continue.";
    echo "<script type='text/javascript'>
      window.location.replace('EndUserPortal.php');
      </script>";
    exit;
  } else {
  	echo "If page is stuck, click <a href='HelpDesk.php'>here</a> to continue.";
  	echo "<script type='text/javascript'>
      window.location.replace('HelpDesk.php');
      </script>";
    exit;
  }
?>
</body>
</html>
