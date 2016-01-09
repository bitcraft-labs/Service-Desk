<h3>Change Access</h3>
<form class="form-horizontal">

  <!-- Select Basic -->
  <div class="form-group">
    <label class="col-md-4 control-label" for="access-type">Select Access Type</label>
    <div class="col-md-4">
      <select id="access-type" name="access-type" class="form-control">
        <option value="" disabled>Select Access Type</option>
        <?php $types = $dal->getAccessTypes();
        $curr = $dal->getUserAccessLevel("$_GET['for']");
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
        ?>
      </select>
    </div>
  </div>

  <!-- Button -->
  <div class="form-group">
    <label class="col-md-4 control-label" for="submit"></label>
    <div class="col-md-4">
      <button id="submit" name="submit" class="btn btn-primary">Update</button>
    </div>
  </div>
</form>
