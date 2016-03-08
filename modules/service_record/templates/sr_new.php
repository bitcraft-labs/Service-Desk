
<div class="row">
   <div class="col-md-6 col-md-offset-3">
      <form method="post">
          <div class="form-group foptions">
              <label class="control-label requiredField" for="sr_type">
                  Type of Service Record
                  <span class="asteriskField">*</span>
              </label>
              <select class="recordTypeList form-control" id="sr_type" name="sr_type">
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
              <select class="recordCategoryList form-control" id="sr_cat" name="sr_cat">
                <?= $dali->getRecordCateogries('2'); ?>
              </select>
            </div>
            <div class="col-md-6">
              <label class="control-label requiredField" for="category">
                Sub-Category
                <span class="asteriskField">*</span>
              </label>
              <select class="recordCategoryList form-control" id="sr_subcat" name="sr_subcat">
                <?= $dali->getRecordSubCateogries('2','6'); ?>
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
