<?php
if ($_GET['do'] == "DeleteUser") {
  echo "Deleting User #".$_GET['for']."\r\n";
  $dali->deleteUser($_GET['for']);
  header("Location: ?action=ViewAdmin#access_users");
}
?>
