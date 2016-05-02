<?php
if ($myACL->hasPermission('manage_users') != true) {
	echo "UNAUTHORIZED!";
} else {
	include_once 'modules/admin/modals.php';
?>
<div class="row">
	<div <?php if (!isset($_GET['do'])) echo 'class="col-md-12"'; else echo 'class="col-md-8"'; ?> >
		<?php $adminsub = 'Manage User Security Groups';
 			  $adminhsub = '<small>'.$adminsub.'</small>';
		?>
			  <h2 class="skew-up-smidge"><?= $adminsub ?></h3>
				<?php
				mysql_connect($conf['sql']['host'],$conf['sql']['user'],$conf['sql']['pass']);
				mysql_select_db($conf['sql']['name']);
				$list = mysql_query("SELECT * FROM roles");
				?>
				<table id="adm_acl" class="table table-striped table-hover">
					<thead>
					<?php $tabhead="
						<tr>
							<td>#</td>
							<td>Group Name</td>
							<td>Modify</td>
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
						    echo "<tr class='clickableRow $highlight' data-href='?page=groups&action=ViewAdmin&for=$row[0]&do=EditGroup' $highlight>
									<td>$row[0]</td>
									<td>$row[1]</td>
									<td><a href='?page=groups&action=ViewAdmin&for=$row[0]&do=EditGroup'><img src='$icon_dir/group-edit-icon.png' height='24' /></a> ";?>

									<!-- <form action=<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?> method="post" style="display:inline-block">
										<input type="hidden" name="action" value="deleteRole" />
										<input type="hidden" name="roleID" value="<?= $row[0]; ?>" />
										<input type=image src='<?= "$icon_dir/group-delete-icon.png" ?>' height='24' />
									</form> -->
						<?php }?>
					</tbody>
					<tfoot>
						<?php echo $tabhead; ?>
					</tfoot>
				</table>
				<!-- Button trigger modal -->
				<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addSecGroup">
				  Add Security Group
				</button>
	</div>
	<div class="col-md-4" <?php if(!isset($_GET['do'])) echo "style='display: none;'"; ?> >
		<div class="box box-solid box-purple">
  		<div class="box-header">
  			<h3 class="box-title"><i class="fa fa-users"></i> Group Permissions</h3>
  		</div><!-- /.box-header -->
  		<div class="box-body">
  			<?php
  			if (!$_GET['for']) echo "<p>No group selected</p>";
  			if (!($_GET['do'] == 'EditGroup')) echo "<p>Action currently unavailable</p>";
  			if ($_GET['do'] == 'EditGroup') include_once 'modules/admin/actions/mod-group.php'; ?>
  		</div>
  	</div>
  </div>
</div>
<?php } ?>
