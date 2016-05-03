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
        document.getElementById("sr_cat").innerHTML = "";
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
                  document.getElementById("sr_subcat").innerHTML = xmlhttp.responseText;
                else {
                  if (str3)
                    document.getElementById("sr_bldg").innerHTML = xmlhttp.responseText;
                  else
                    document.getElementById("sr_cat").innerHTML = xmlhttp.responseText;
                }
            }
        };
        if (str2 && !str3) {
            xmlhttp.open("GET","sr_test2.php?q="+str+"&k="+str2,true);
        } else if (str3) {
          xmlhttp.open("GET","sr_test2.php?q="+str+"&k2="+str3,true);
        } else {
          xmlhttp.open("GET","sr_test2.php?q="+str,true);
        }
        xmlhttp.send();
    }
}
</script>
<link rel="stylesheet" href="/bower/bootstrap/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="/dist/css/app.css">
</head>
<body>
	<div class="content-wrapper">
    <section class="content">
      <div class="row">
         <div class="col-md-6 col-md-offset-3">
            <form action="" method="post">
                <div class="form-group foptions">
                    <label class="control-label requiredField" for="sr_type">
                        Type of Service Record
                        <span class="asteriskField">*</span>
                    </label>
                    <select class="recordTypeList form-control" onchange="queryGenerator(this.value)" id="sr_type" name="sr_type">
                      <?= $dali->getRecordTypes(); ?>
                    </select>
                    <span class="help-block" id="hint_sr_type">
                        Select type of service record
                    </span>
                </div>
                <div class="form-group row">
                  <div class="col-md-6">
                    <label class="control-label requiredField" for="category">
                      Category
                      <span class="asteriskField">*</span>
                    </label>
                    <select class="recordCategoryList form-control" onchange="queryGenerator(this.value)" id="sr_cat" name="sr_cat">
                      <!-- <?php //$dali->getRecordCateogries('2'); ?> -->
                    </select>
                  </div>
                  <div class="col-md-6">
                    <label class="control-label requiredField" for="category">
                      Sub-Category
                      <span class="asteriskField">*</span>
                    </label>
                    <select class="recordCategoryList form-control" onchange="queryGenerator(this.value)" id="sr_subcat" name="sr_subcat">
                      <!-- <?php //$dali->getRecordSubCateogries('2','6'); ?> -->
                    </select>
                  </div>
                </div>
                <div class="form-group ">
                    <label class="control-label requiredField" for="user">
                        User
                        <span class="asteriskField">
                            *
                        </span>
                    </label>
                    <select class="user-list form-control" id="user" name="user">
                      <?php
                      $option_html = '<option selected disabled>Select the Requesting User</option>';
                      $personinfo = $dali->getPersonInfo('all');
                      if ($personinfo) {
                        foreach($personinfo as $row) {
                            $option_html .= '<option value"'.$row['id'].'">'.$row['fname'].' '.$row['lname'].'</option>';
                        }
                      }
                      echo $option_html;
                      ?>
                    </select>
                    <span class="help-block" id="hint_user">
                        Select User
                    </span>
                </div>
                <div class="form-group ">
                    <label class="control-label requiredField" for="building">
                        Building
                        <span class="asteriskField">
                            *
                        </span>
                    </label>
                    <select name="incident-building" class="building form-control input-md" id="incident-building" >
        							<?php
        								$option_html = '<option selected disabled>Choose the pertaining building</option>';
        								$buildings = $dali->getBuildingsRow('all');
        								if($buildings) {
        								 	foreach($buildings as $result) {
        								 		$option_html .= '<option value="'.$result[0].'">'.$result[1].'</option>';
        								 	}
        							  }
        								echo $option_html;
        							?>
        						</select>
                    <span class="help-block" id="hint_building">
                        Select bulding from dropdown
                    </span>
                </div>
                <div class="form-group ">
                    <label class="control-label requiredField" for="machine">
                        Machine
                        <span class="asteriskField">
                            *
                        </span>
                    </label>
                    <select class="machine select form-control" id="machine" name="machine">
                        <option selected disabled>Select a device</option>
                        <option value="Add New">
                            Add New
                        </option>
                    </select>
                    <span class="help-block" id="hint_machine">
                        Select user machine or add new
                    </span>
                </div>
                <div class="form-group">
                    <div>
                        <button class="btn btn-success " name="submit" type="submit">
                            Submit
                        </button>
                    </div>
                </div>
            </form>
         </div>
      </div>
    </section>
  </div>

<!-- <form action="" method="post">
  <div class="form-group">
    <select name="recType" onchange="queryGenerator(this.value)">
      <?php //$dali->getRecordTypes(); ?>
    </select>
  </div>
  <span id="txtHint"><b>Generated record template will be here...</b></span>
</form> -->

</body>
</html>
