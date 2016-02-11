<div class="content-wrapper">
	<div class="ssp-title">
		<div class="container">
	      <h3><!--<i class="fa fa-laptop fa-2x pull-left"></i> -->Self-Service Portal <small>(Request List)<br>
	  <!-- ADD NEW DESC -->These are not the droids you are looking for...</small></h3>
	    </div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="box">
			    <div class="box-header">
			      <h3 class="box-title">Service Records</h3>
			    </div><!-- /.box-header -->
			    <div class="box-body">
			    	<table id="records" class="table table-bordered table-striped">
			    		<thead>
			    			<tr>
			    				<?php $tabhead = '
				    				<td>SR#</td>
				    				<td class="mobile-table">Category</td>
				    				<td>Status</td>
				    				<td>Ticket Title</td>
				    				<td class="mobile-table">Assigned Admin</td>
				    				<td class="mobile-table">Date Checked In</td>
				    				<td>Date Last Updated</td>';
			    				 echo $tabhead; ?>
			    			</tr>
			    		</thead>
			    		<tbody>
			    			<tr>
			    				<td><a href="?page=ViewRequests&sr=1">1</a></td>
			    				<td class="mobile-table">Hardware</td>
			    				<td>In Progress</td>
			    				<td>TT</td>
			    				<td class="mobile-table">helpdesktech</td>
			    				<td class="mobile-table">12/1/2015</td>
			    				<td>12/2/2015</td>
			    			</tr>
			    			<tr>
			    				<td><a href="?page=ViewRequests&sr=2">2</a></td>
			    				<td class="mobile-table">Software</td>
			    				<td>Waiting for Pickup</td>
			    				<td>TT</td>
			    				<td class="mobile-table">helpdesktech</td>
			    				<td class="mobile-table">11/30/2015</td>
			    				<td>12/2/2015</td>
			    			</tr>
			    			<tr>
			    				<td><a href="?page=ViewRequests&sr=3">3</a></td>
			    				<td class="mobile-table">Software</td>
			    				<td>Completed</td>
			    				<td>TT</td>
			    				<td class="mobile-table">The Mac Admin</td>
			    				<td class="mobile-table">12/1/2015</td>
			    				<td>12/2/2015</td>
			    			</tr>
			    		</tbody>
			    		<tfoot>
			    			<tr>
			    				<?= $tabhead; ?>
			    			</tr>
			    		</tfoot>
		    		</table>
	    		</div> <!-- end .box- -->
			</div>
		</div>
	</div>
</div>
</div>