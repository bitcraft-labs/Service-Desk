<?php
  if ($_SESSION['user_type'] == 3) {
    echo "<script type='text/javascript'>
      window.location.replace('EndUserPortal.php');
      </script>";
    exit;
  }
?>
