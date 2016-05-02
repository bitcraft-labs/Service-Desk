<?php
 // ini_set('display_errors', 1);
$rootdir =  $_SERVER['DOCUMENT_ROOT'];
include_once "$rootdir/modules/mainhead.php";

$q = intval($_GET['q']);
$k = intval($_GET['k']);
$k2 = intval($_GET['k2']);

if ($q && !$k && !$k2) {
  //echo '<option value="Choose a Category" disabled selected>Choose a Category</option>';
  echo $dali->getRecordCategories($q, $k);
} else if ($k) {
  //echo '<option value="Choose a Sub-Category" disabled selected>Choose a Sub-Category</option>';
  echo $dali->getRecordSubCategories($q, $k);
} if ($k2) {
  echo $dali->maybeBuildingList($k2);
}
?>
