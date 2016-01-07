<div class="row">
	<div class="col-md-8">
		<?php $adminsub = 'Access Control List'; 
 			  $adminhsub = '<small>'.$adminsub.'</small>';
		?>
		<div class="box">
			<div class="box-header">
			  <h3 class="box-title"><?= $adminsub ?></h3>
			</div><!-- /.box-header -->
			<div class="box-body table-responsive">
				<table id="adm_acl" class="table table-hover">
					<thead>
					<?php $tabhead="
						<tr>
							<td>#</td>
							<td>First Name</td>
							<td>Last Name</td>
							<td>Primary Email</td>
							<td>User Group</td>
							<td>Modify</td>
						</tr>"; echo $tabhead; ?>
					</thead>
					<tbody>
						<?php
						require_once('modules/config-func.php');
						$dal = new DAL();
						$ulist = $dal->getStaffUserInfo();
						if ($ulist) {
							foreach($ulist as $row) {
							    echo "<tr class='clickableRow' data-href='?page=admin&action=ViewACL&for=$row->id&do=ViewUser'>
								<td>$row->id</td>
								<td>$row->fname</td>
								<td>$row->lname</td>
								<td>$row->email</td>
								<td>$row->type</td>
								<td>Options</td>
								</tr>";
						  	}
						}
						?>
						<!--
						<tr>
							<td><a href="?id=1">1</a></td>
							<td>Jo Shmo</td>
							<td>@01234567</td>
							<td>Student</td>
							<td>555.555.5555</td>
							<td>jshmo1@student.fitchburgstate.edu</td>
							<td>12/3/2015</td>
						</tr>
						-->
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
		</div>
	</div>
</div>