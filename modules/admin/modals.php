<?php
if ($_POST['submitted_new_user']) {
	$dali->addUser();
	header("Location: ?page=users");
} elseif ($_POST['submitted_new_secgrp']) {
	$dali->addSecGroup();
	header("Location: ?page=groups");
}
?>
<div id="addUser" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Create New User</h4>
      </div>
      <div class="modal-body">
        <form id="addnewuser" action="" method="post">
	        <p>Let's add that new staff member to this thing.</p>
            <input type='hidden' name='submitted_new_user' id='submitted_new_user' value='1'/>
            <div class="form-group">
            	<div class="form-group row">
            		<div class="col-md-6">
									<input type='text' name='fname' class="form-control" id='fname' placeholder="First Name" required />
								</div>
								<div class="col-md-6">
									<input type='text' name='lname' class="form-control" id='lname' placeholder="Last Name" required />
								</div>
							</div>
							<div class="form-group">
								<input type='text' name='username' class="form-control" id='username' placeholder="Username" required />
							</div>
							<div class="form-group">
								<input type='text' name='email' class="form-control" id='email' placeholder="Email Address" required />
							</div>
							<div class="form-group">
								<input type='text' name='phone' class="form-control" id='phone' placeholder="Phone Number" />
							</div>
							<div class="form-group">
								<input type='text' name='banner_id' class="form-control" id='banner_id' placeholder="Banner ID (no '@')" required />
							</div>
							<div class="form-group">
								<table class="acList">
								    <tr>
										<th>&nbsp;</th>
										<th>Member</th>
										<th>Not Member</th>
								    </tr>
								    <?php
								    $roleACL = new ACL();
								    $roles = $roleACL->getAllRoles('full');
										foreach ($roles as $k => $v) {
											echo "<tr><td><label>" . $v['Name'] . "</label></td>";
											echo "<td><input type=\"radio\" name=\"role_" . $v['ID'] . "\" id=\"role_" . $v['ID'] . "_1\" value=\"1\"";
											echo " /></td>";
											echo "<td><input type=\"radio\" name=\"role_" . $v['ID'] . "\" id=\"role_" . $v['ID'] . "_0\" value=\"0\"";
											echo " checked=\"checked\"";
											echo " /></td>";
											echo "</tr>";
										}
								    ?>
								</table>
							</div>
            </div>
            <div class="form-group">
                <button name='Submit' type='submit' class="btn btn-primary btn-md btn-block">Add New User</button>
            </div>
        </form>
        </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div id="addSecGroup" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Create New Security Group</h4>
      </div>
      <div class="modal-body">
        <form id="addnewsecgroup" action="" method="post">
	        <p>Let's build that new security group.</p>
            <input type='hidden' name='submitted_new_secgrp' id='submitted_new_secgrp' value='1'/>
            <div class="form-group">
								<input type='text' name='gname' class="form-control" id='gname' placeholder="Security Group Name" required />
						</div>
						<div class="form-group">
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
						</div>
            <div class="form-group">
                <button name='Submit' type='submit' class="btn btn-primary btn-md btn-block">Add New Security Group</button>
            </div>
        </form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
