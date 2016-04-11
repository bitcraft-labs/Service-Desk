<h3 class="less-space">Manage User Group: (<?= $myACL->getUsername($_GET['for']); ?>)</h3>
<form action=<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?> method="post">
  <table class="acList">
    <tr>
      <th>&nbsp;</th>
      <th>Member</th>
      <th>Not Member</th>
    </tr>
    <?php
    $roleACL = new ACL($_GET['for']);
    $roles = $roleACL->getAllRoles('full');
      foreach ($roles as $k => $v)
      {
          echo "<tr><td><label>" . $v['Name'] . "</label></td>";
          echo "<td><input type=\"radio\" name=\"role_" . $v['ID'] . "\" id=\"role_" . $v['ID'] . "_1\" value=\"1\"";
          if ($roleACL->userHasRole($v['ID'])) { echo " checked=\"checked\""; }
          echo " /></td>";
          echo "<td><input type=\"radio\" name=\"role_" . $v['ID'] . "\" id=\"role_" . $v['ID'] . "_0\" value=\"0\"";
          if (!$roleACL->userHasRole($v['ID'])) { echo " checked=\"checked\""; }
          echo " /></td>";
          echo "</tr>";
      }
    ?>
  </table>
  <input type="hidden" name="action" value="saveRoles" />
  <input type="hidden" name="userID" value="<?= $_GET['for']; ?>" />
  <br>
  <div class="btn-group" role="group">
    <button id="submit" name="Submit" class="btn btn-primary">Apply Group Membership</button>
    <a id="cancel" name="Cancel" class="btn btn-danger" onclick="window.location='?action=ViewAdmin#access_users'">Cancel</a>
  </div>
</form>

<h3>Manage User Permissions: (<?= $myACL->getUsername($_GET['for']); ?>)</h3>
<form action=<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?> method="post">
  <table class="acList">
    <tr>
      <th></th>
      <th></th>
    </tr>
    <?php
    $userACL = new ACL($_GET['for']);
    $rPerms = $userACL->perms;
    $aPerms = $userACL->getAllPerms('full');
    foreach ($aPerms as $k => $v) {
      echo "<tr><td>" . $v['Name'] . "</td>";
      echo "<td><select name=\"perm_" . $v['ID'] . "\">";
      echo "<option value=\"1\"";
      if ($userACL->hasPermission($v['Key']) && $rPerms[$v['Key']]['inheritted'] != true) { echo " selected=\"selected\""; }
      echo ">Allow</option>";
      echo "<option value=\"0\"";
      if ($rPerms[$v['Key']]['value'] === false && $rPerms[$v['Key']]['inheritted'] != true) { echo " selected=\"selected\""; }
      echo ">Deny</option>";
      echo "<option value=\"x\"";
      if ($rPerms[$v['Key']]['inheritted'] == true || !array_key_exists($v['Key'],$rPerms)) {
        echo " selected=\"selected\"";
        if ($rPerms[$v['Key']]['value'] === true ) {
          $iVal = '(Allow)';
        } else {
          $iVal = '(Deny)';
        }
      }
      echo ">Inherit $iVal</option>";
      echo "</select></td></tr>";
    }
  ?>
  </table>
  <input type="hidden" name="action" value="savePerms" />
  <input type="hidden" name="userID" value="<?= $_GET['for']; ?>" />
  <br>
  <div class="btn-group" role="group">
    <button id="submit" name="Submit" class="btn btn-primary">Apply Permission Override</button>
    <a id="cancel" name="Cancel" class="btn btn-danger" onclick="window.location='?action=ViewAdmin#access_users'">Cancel</a>
  </div>
</form>
