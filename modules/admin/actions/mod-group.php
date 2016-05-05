<h3>Manage Security Group: (<?= $myACL->getRoleNameFromID($_GET['for']); ?>)</h3>
<form action=<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?> method="post">
  <label for="roleName">Name: </label><input type="text" name="roleName" id="roleName" value="<?= $myACL->getRoleNameFromID($_GET['for']); ?>" />
  <table class="acList">
    <tr>
      <th></th>
      <th>Allow</th>
      <th>Deny</th>
      <th>Ignore</th>
    </tr>
    <?php
    $rPerms = $myACL->getRolePerms($_GET['for']);
    $aPerms = $myACL->getAllPerms('full');
    foreach ($aPerms as $k => $v) {
      echo "<tr><td><label>" . $v['Name'] . "</label></td>";
      echo "<td><input type=\"radio\" name=\"perm_" . $v['ID'] . "\" id=\"perm_" . $v['ID'] . "_1\" value=\"1\"";
      if ($rPerms[$v['Key']]['value'] === true && $_GET['for'] != '') { echo " checked=\"checked\""; }
      echo " /></td>";
      echo "<td><input type=\"radio\" name=\"perm_" . $v['ID'] . "\" id=\"perm_" . $v['ID'] . "_0\" value=\"0\"";
      if ($rPerms[$v['Key']]['value'] != true && $_GET['for'] != '') { echo " checked=\"checked\""; }
      echo " /></td>";
      echo "<td><input type=\"radio\" name=\"perm_" . $v['ID'] . "\" id=\"perm_" . $v['ID'] . "_X\" value=\"X\"";
      if ($_GET['for'] == '' || !array_key_exists($v['Key'],$rPerms)) { echo " checked=\"checked\""; }
      echo " /></td>";
      echo "</tr>";
    }
    ?>
    </table>
    <input type="hidden" name="action" value="saveRoleInfo" />
    <input type="hidden" name="roleID" value="<?= $_GET['for']; ?>" />
    <br>
    <div class="btn-group" role="group">
      <button id="submit" name="Submit" class="btn btn-primary">Apply</button>
      <!-- <button id="cancel" name="Cancel" class="btn btn-warning" onclick="window.location='?page=groups'">Cancel</button> -->
    </div>
</form>
<!-- <form action=<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?> method="post" style="display:inline-block">
  <input type="hidden" name="action" value="deleteRole" />
  <input type="hidden" name="roleID" value="<?= $_GET['for']; ?>" />
  <button id="delete" name="Delete" class="btn btn-danger">Delete</button>
</form> -->
