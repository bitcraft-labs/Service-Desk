<div class="row">
	<div <?php if (!isset($_GET['do'])) echo 'class="col-md-12"'; else echo 'class="col-md-8"'; ?> >
		<?php $adminsub = 'Manage User Permission Groups';
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
						    echo "<tr class='clickableRow $highlight' data-href='?action=ViewAdmin&for=$row[0]&do=EditUser#access_users' $highlight>
									<td>$row[0]</td>
									<td>$row[1]</td>
									<td><a href='?action=ViewAdmin&for=$row[0]&do=EditGroup#access_groups'><img src='$icon_dir/group-edit-icon.png' height='24' /></a> ";?>
									<!--
									<form action=<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?> method="post">
								        <input type="hidden" name="action" value="deleteRole" />
								        <input type="hidden" name="roleID" value="<?= $_GET['for']; ?>" />
								    	<input type=image src='<?= "$icon_dir/group-delete-icon.png" ?>' height='24' />
								    </form>
								    -->
						<?php }?>
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
  			<h3 class="box-title">Group Permissions</h3>
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
