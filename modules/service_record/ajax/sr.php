<?php
// ini_set('display_errors', 1);
$rootdir =  $_SERVER['DOCUMENT_ROOT'];
include_once "$rootdir/modules/mainhead.php";
?>

<html>
<head>
<script>
function queryGenerator(str, str2, str3) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                if (str2 && !str3)
                  document.getElementById("sr_subcat_space").innerHTML = xmlhttp.responseText;
                else {
                  if (str3)
                    document.getElementById("sr_bldg_space").innerHTML = xmlhttp.responseText;
                  else
                    document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
                }
            }
        };
        if (str2 && !str3) {
            xmlhttp.open("GET","sr_test.php?q="+str+"&k="+str2,true);
        } else if (str3) {
          xmlhttp.open("GET","sr_test.php?q="+str+"&k2="+str3,true);
        } else {
          xmlhttp.open("GET","sr_test.php?q="+str,true);
        }
        xmlhttp.send();
    }
}
</script>
</head>
<body>

<form action="" method="post">
  <select name="recType" onchange="queryGenerator(this.value)">
    <?= $dali->getRecordTypes(); ?>
  </select>
  <span id="txtHint"><b>Generated record template will be here...</b></span>
</form>

</body>
</html>
