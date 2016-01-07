<div class="row">
	<div class="col-md-12">
		<?php $adminsub = 'Access Control List'; 
 			  $adminhsub = '<small>'.$adminsub.'</small>';
		?>
		<div class="box">
			<div class="box-header">
			  <h3 class="box-title">$adminsub</h3>
			</div><!-- /.box-header -->
			<div class="box-body">
				<table id="staff_list" class="table table-bordered table-striped">
					<thead>
					<?php $tabhead="
						<tr>
							<td>#</td>
							<td>First Name</td>
							<td>Last Name</td>
							<td>Primary Email</
							<td>User Group</td>
							<td>Modify</td>
						</tr>"; echo $tabhead; ?>
					</thead>
					<tbody>
						<?php
						$dal = new DAL();
						$userlist = $dal->getStaffUserInfo('all');
						if ($userlist) {
							foreach($userlist as $row) {
						    echo "<a href='?id=$row->id_user'><tr>
							    	<td>$row->id_user</td>
							    	<td>$row->fname</td>
							    	<td>$row->lname</td>
							    	<td>$row->email</td>
							    	<td>$row->type</td>
							    	<td>Options</td>
							    	</tr></a>";
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
</div>