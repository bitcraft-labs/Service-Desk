<h3>Change Access</h3>

<form class="form-horizontal" action="<?=$authenticator->ChangeAccessGroup; ?>" method="POST">

  <!-- Select Basic -->
  <div class="form-group">
    <div class="col-md-8">
      <label class="control-label" for="access-type">Select Access Type</label>
      <?php
      //db connection
      mysql_connect($conf['sql']['host'],$conf['sql']['user'],$conf['sql']['pass']);
      mysql_select_db($conf['sql']['name']);

      //query
      $selected_user = $_GET['for'];
      $groups=mysql_query("SELECT * FROM user_group");
      $access=mysql_query("SELECT users.type as type
                            FROM users
                            INNER JOIN user_group ON user_group.id=users.type
                            WHERE users.id='$selected_user'");
      $curr=mysql_fetch_array($access);
      if(mysql_num_rows($groups)){
      $select= '<select name="access_level" id="access_level">';
      $select .= '<option disabled>Select Access</option>';
      while($rs=mysql_fetch_array($groups)){
            $select.='<option value="'.$rs['id'].'"';
            if ($rs['id'] == $curr['type'])
              $select.='selected>'.$rs['type'].'</option>';
            else
              $select.='>'.$rs['type'].'</option>';
        }
      }
      $select.='</select>';
      echo $select;
      ?>
      <!--</select>-->
    </div>
  </div>

  <!-- Button -->
  <div class="form-group">
    <label class="col-md-8 control-label" for="submit"></label>
    <div class="col-md-8">
      <button id="submit_acl" name="submit_acl" class="btn btn-primary">Update</button>
    </div>
  </div>
</form>
