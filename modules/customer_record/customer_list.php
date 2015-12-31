<div class="box">
	<div class="box-header">
	  <h3 class="box-title">All Customers</h3>
	</div><!-- /.box-header -->
	<div class="box-body">
		<table id="records" class="table table-bordered table-striped">
			<thead>
				<tr>
					<td>#</td>
					<td>Name</td>
					<td>Banner ID</td>
					<td>Type</td>
					<td>Primary Phone</td>
					<td>Email</td>
					<td>Lastest Visit</td>
				</tr>
			</thead>
			<tbody>
				<?php
				$dal = new DAL();
				$personinfo = $dal->getPersonInfo('all');
				if ($personinfo) {
					foreach($personinfo as $row) {
				    echo "<tr>
					    	<td><a href='?id=$row->user_id'>$row->user_id</a></td>
					    	<td>$row->name</td>
					    	<td>@$row->banner_id</td>
					    	<td>$row->user_type</td>
					    	<td>$row->phone</td>
					    	<td>$row->email</td>
					    	<td>12/1/2015</td>
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
				<tr>
					<td>#</td>
					<td>Name</td>
					<td>Banner ID</td>
					<td>Type</td>
					<td>Primary Phone</td>
					<td>Email</td>
					<td>Lastest Visit</td>
				</tr>
			</tfoot>
		</table>
	</div>
</div>