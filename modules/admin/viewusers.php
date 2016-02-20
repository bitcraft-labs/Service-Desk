<?php
if ($myACL->hasPermission('manage_users') != true) {
	echo "UNAUTHORIZED!";
} else {
?>
<div class="row">
	<div <?php if (!isset($_GET['do'])) echo 'class="col-md-12"'; else echo 'class="col-md-8"'; ?> >
		<?php $adminsub = 'Access Control List';
 			  $adminhsub = '<small>'.$adminsub.'</small>';
		?>
		<div class="box">
			<div class="box-header">
			  <h3 class="box-title"><?= $adminsub ?></h3>
			</div><!-- /.box-header -->
			<div class="box-body">
				<?php $list = $dali->getHDUsers();?>
				<table id="adm_acl" class="table table-striped table-hover">
					<thead>
					<?php $tabhead="
						<tr>
							<td>#</td>
							<td>First Name</td>
							<td>Last Name</td>
							<td>Primary Email</td>
							<td>Actions</td>
						</tr>"; echo $tabhead; ?>
					</thead>
					<tbody>
						<?php
						$highlight = '';
						foreach ($list as $row) {
							if ($_GET['for'] == $row[0]) {
								$highlight = 'row-selected';
							} else {
								$highlight = false;
							}
						    echo "<tr class='clickableRow $highlight' data-href='?action=ViewAdmin&for=".$row['id']."&do=EditUser#access_users' $highlight>
									<td>".$row['id']."</td>
									<td>".$row['fname']."</td>
									<td>".$row['lname']."</td>
									<td>".$row['email']."</td>
									<td><a href='?action=ViewAdmin&for=$row[0]&do=EditUser#access_users'><img src='$icon_dir/user-edit-icon.png' height='24' /></a> <a href='?action=ViewAdmin&for=$row[0]&do=ChangeAccess#access_users'><img src='$icon_dir/group-key-icon.png' height='24' /></a>  <a href='?action=ViewAdmin&for=$row[0]&do=DeleteUser#access_users'><img src='$icon_dir/user-delete-icon.png' height='24' /></a></td>
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
	<div class="col-md-4" <?php if(!isset($_GET['do'])) echo "style='display: none;'"; ?> >
		<div class="box">
  		<div class="box-header">
  			<h3 class="box-title">User Settings</h3>
  		</div><!-- /.box-header -->
  		<div class="box-body">
  			<?php
  			if (!$_GET['for']) echo "<p>No user selected</p>";
  			if (!($_GET['do'] == 'ChangeAccess')) echo "<p>Action currently unavailable</p>";
  			if ($_GET['do'] == 'ChangeAccess') include_once 'modules/admin/actions/change-access.php'; ?>
  		</div>
  	</div>
  </div>
</div>
<?php } ?>
