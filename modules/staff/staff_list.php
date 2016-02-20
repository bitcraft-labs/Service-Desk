<div class="box">
	<div class="box-header">
	  <h3 class="box-title">Directory Listing</h3>
	</div><!-- /.box-header -->
	<div class="box-body">
		<table id="staff_list" class="table table-bordered table-striped">
			<thead>
			<?php $tabhead="
				<tr>
					<td>#</td>
					<td>First Name</td>
					<td>Last Name</td>
					<td>Total Active SRs</td>
					<td>Last Updated SR</td>
					<td>Last Online</td>
				</tr>"; echo $tabhead; ?>
			</thead>
			<tbody>
				<?php
				$staffinfo = $dali->getHDUsers();
				if ($staffinfo) {
					foreach($staffinfo as $row) {
				    echo "<tr>
					    	<td><a href='?id=".$row['id']."'>".$row['id']."</a></td>
					    	<td>".$row['fname']."</td>
					    	<td>".$row['lname']."</td>
					    	<td>N/A</td>
					    	<td>N/A</td>
					    	<td>A few minutes ago</td>
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
