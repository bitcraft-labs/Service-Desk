<?php
// ini_set('display_errors', 1);
$rootdir =  $_SERVER['DOCUMENT_ROOT'];
include_once "$rootdir/modules/mainhead.php";
?>

<html>
<head>

</head>
<body>

<form action="" method="post">
  <select name="recType" onchange="queryGenerator.init(this.value)">
    <?= $dali->getRecordTypes(); ?>
  </select>
  <span id="txtHint"><b>Generated record template will be here...</b></span>
</form>
<script src="/dist/js/generate_sr.js"></script>
</body>
</html>
