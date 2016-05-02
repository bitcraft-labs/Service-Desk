<?php
    if(isset($_POST['submit_sr'])) {
      $building = $_POST['incident-building'] ? $_POST['incident-building'] : NULL;
      $room_number = $_POST['incident-room'] ? $_POST['incident-room'] : NULL;
      $dali->submitNewSR($_POST['sr_type'], $_POST['sr_cat'], $_POST['sr_subcat'], $_SESSION['userID'], $building, $room_number, NULL, $_POST['incident_phone'], $_POST['incident_description'], $_POST['incident_user']);
    }

 ?>
<div class="row">
   <div class="col-md-6 col-md-offset-3">
      <form action="" method="post">
          <div class="form-group foptions">
              <label class="control-label requiredField" for="sr_type">
                  Type of Service Record
                  <span class="asteriskField">*</span>
              </label>
              <select class="recordTypeList form-control" onChange="queryGenerator.init(this.value);" id="sr_type" name="sr_type">
                <?= $dali->getRecordTypes(); ?>
              </select>
              <span class="help-block" id="hint_sr_type">
                  Select type of service record
              </span>
          </div>
          <div class="form-group row">
            <div class="col-md-6">
              <label class="control-label requiredField" for="sr_cat">
                Category
                <span class="asteriskField">*</span>
              </label>
              <select class="recordCategoryList form-control" onChange="queryGenerator.init($('#sr_type option:selected').val(), this.value);" id="sr_cat" name="sr_cat">
                <option value="Choose a Category" disabled selected>Choose a Category</option>
              </select>
            </div>
            <div class="col-md-6">
              <label class="control-label requiredField" for="sr_subcat">
                Sub-Category
                <span class="asteriskField">*</span>
              <select class="recordCategoryList form-control" id="sr_subcat" onChange="queryGenerator.init($('#sr_type option:selected').val(), $('#sr_cat option:selected').val(), this.value);" name="sr_subcat">
                <option value="Choose a Sub-Category" disabled selected>Choose a Sub-Category</option>
              </select>
            </div>
          </div>
          <div class="form-group ">
              <label class="control-label requiredField" for="incident_user">
                  User
                  <span class="asteriskField">*</span>
              </label>
              <select class="user-list form-control" id="incident_user" name="incident_user">
                <?php
                $option_html = '<option selected disabled>Select the Requesting User</option>';
                $personinfo = $dali->getPersonInfo('all');
                if ($personinfo) {
                  foreach($personinfo as $row) {
                      $option_html .= '<option value="'.$row['id'].'">'.$row['fname'].' '.$row['lname'].'</option>';
                  }
                }
                echo $option_html;
                ?>
              </select>
              <span class="help-block" id="hint_user">
                  Select User
              </span>
          </div>
          <span id="incident_building">
              <div class="form-group ">
                <label class="control-label requiredField" for="building">
                    Building
                    <span class="asteriskField">
                        *
                    </span>
                </label>
               <select name="incident-building" class="building form-control input-md" id="incident-building" >
                 <option value="Choose a Building" disabled selected>Choose a Building</option>
               </select>
               <span class="help-block" id="hint_building">
                   Select bulding from dropdown
               </span>
                <label for="incident-room">Room<span class="asteriskField">
                        *
                    </span></label>
               <input name="incident-room" type="text" class="form-control input-md" placeholder="Room Number">
            </div>
          </span>
          <div id="machine_display" class="form-group ">
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
              <label class="control-label requiredField" for="incident_phone">
                  Phone Number
                  <span class="asteriskField">
                      *
                  </span>
              </label>
              <input type="text" class="form-control input-md" name="incident_phone" id="incident_phone">
          </div>
          <div class="form-group">
              <label class="control-label requiredField" for="incident_description">
                 Description
                  <span class="asteriskField">
                      *
                  </span>
              </label>
              <textarea style="resize: none;" rows="8" class="form-control input-md" name="incident_description" id="incident_description"></textarea>
          </div>
          <div class="form-group">
              <div>
                  <button class="btn btn-custom " name="submit_sr" type="submit">
                      Submit
                  </button>
              </div>
          </div>
      </form>
   </div>
</div>
