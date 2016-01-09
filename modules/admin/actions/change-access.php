<h3>Change Access</h3>
<form class="form-horizontal">

  <!-- Select Basic -->
  <div class="form-group">
    <div class="col-md-8">
      <label class="control-label" for="access-type">Select Access Type</label>
      <?php
      $types = $dal->getAccessTypes();
      $selected_user = $_GET['for'];
      $curr = $dal->getUserAccessLevel($selected_user);
      $level_options = '';
      ?>
      <select id="access-type" name="access-type" class="form-control">
        <option disabled>Select Access Type</option>
        <?php
        foreach ($types as $row) {
          $level_options .= '';
          //$level_options .= "<option value=".$row['id'].">".$row['type']."</option>";
        }
        echo $level_options;
        /*
        if ($types) {
          foreach ($types as $row) {
            $option = "<option value='".$row['type']."' ";
            if ($row['type'] == $curr) {
              $option .= "selected>$row['type']</option>";
            } else {
              $option .= ">$row['type']</option>";
            }
            echo $option;
          }
        }
        */
        ?>
      </select>
    </div>
  </div>

  <!-- Button -->
  <div class="form-group">
    <label class="col-md-8 control-label" for="submit"></label>
    <div class="col-md-8">
      <button id="submit" name="submit" class="btn btn-primary">Update</button>
    </div>
  </div>
</form>
