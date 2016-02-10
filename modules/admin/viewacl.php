<?php
    if(isset($_POST['submit_acl'])) {
		  $admin->updateAccess($_GET['for'],$_POST['access_level']);
    }
?>
<div class="row">
	<div class="col-md-8">
		<?php $adminsub = 'Access Control List';
 			  $adminhsub = '<small>'.$adminsub.'</small>';
		?>
		<div class="box">
			<div class="box-header">
			  <h3 class="box-title"><?= $adminsub ?></h3>
			</div><!-- /.box-header -->
			<div class="box-body">
				<?php
				mysql_connect($conf['sql']['host'],$conf['sql']['user'],$conf['sql']['pass']);
				mysql_select_db($conf['sql']['name']);
				$list = mysql_query("SELECT users.id as id,
				                        user_group.type as type,
				                        users.fname as fname,
				                        users.lname as lname,
				                        users.email as email
				                        FROM users
				                        INNER JOIN user_group ON user_group.id=users.type
				                        WHERE users.type='1' OR users.type='2'");
				?>
				<table id="adm_acl" class="table table-striped table-hover">
					<thead>
					<?php $tabhead="
						<tr>
							<td>#</td>
							<td>First Name</td>
							<td>Last Name</td>
							<td>Primary Email</td>
							<td>User Group</td>
							<td>Actions</td>
						</tr>"; echo $tabhead; ?>
					</thead>
					<tbody>
						<?php
						$highlight = '';
						while($row=mysql_fetch_array($list)){
							if ($_GET['for'] == $row[0]) {
								$highlight = 'row-selected';
							} else {
								$highlight = false;
							}
						    echo "<tr class='clickableRow $highlight' data-href='?action=ViewAdmin&for=$row[0]&do=EditUser#access_users' $highlight>
									<td>$row[0]</td>
									<td>$row[2]</td>
									<td>$row[3]</td>
									<td>$row[4]</td>
									<td>$row[1]</td>
									<td><img src='$icon_dir/user-edit-icon.png' height='24' /> <a href='?action=ViewAdmin&for=$row[0]&do=ChangeAccess#access_users'><img src='$icon_dir/group-key-icon.png' height='24' /></a>  <a href='?action=ViewACL&for=$row[0]&do=DeleteUser'><img src='$icon_dir/user-delete-icon.png' height='24' /></a></td>
									</tr>";
						}?>
					</tbody>
					<tfoot>
						<?php echo $tabhead; ?>
					</tfoot>
				</table>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="box">
  		<div class="box-header">
  			<h3 class="box-title">User Settings</h3>
  		</div><!-- /.box-header -->
  		<div class="box-body">
  			<?php if ($_GET['do'] == 'ChangeAccess') include_once 'modules/admin/actions/change-access.php'; ?>
  		</div>
  	</div>
  </div>
</div>
