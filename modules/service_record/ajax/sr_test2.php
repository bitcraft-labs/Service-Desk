<?php
// ini_set('display_errors', 1);
$rootdir =  $_SERVER['DOCUMENT_ROOT'];
include_once "$rootdir/modules/mainhead.php";

$q = intval($_GET['q']);
$k = intval($_GET['k']);
$k2 = intval($_GET['k2']);

if ($q && !$k && !$k2) {
  //echo "<select class='recordCategoryList form-control' id='sr_cat' name='sr_cat' onchange='queryGenerator($q, this.value)'>";
  echo $dali->getRecordCategories($q, $k);
  //echo '</select>';
  // echo '<span id="sr_subcat"></span>';
} elseif ($k) {
  //echo '<select class="recordCategoryList form-control" id="sr_subcat" name="sr_subcat" onchange="queryGenerator('.$q.', '.$k.', this.value)";>';
  echo $dali->getRecordSubCategories($q, $k);
  //echo '</select>';
  echo '<span id="sr_bldg"></span>';
} if ($k2) {
  echo $dali->maybeBuildingList($k2);
}
?>
