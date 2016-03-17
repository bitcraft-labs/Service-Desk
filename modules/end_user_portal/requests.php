<?php 
	$row_number = 1;
 ?>
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
			    <div class="box-body box-custom">
			    	<table id="records" class="table table-bordered table-striped table-hover">
			    		<thead>
			    			<tr>
			    				<?php $tabhead = '
				    				<th>SR#</th>
				    				<th class="mobile-table">Category</th>
				    				<th>Status</th>
				    				<th>Ticket Title</th>
				    				<th class="mobile-table">Assigned Admin</th>
				    				<th class="mobile-table">Date Submitted</th>
				    				<th>Date Last Updated</th>';
			    				 echo $tabhead; ?>
			    			</tr>
			    		</thead>
			    		<tbody>
			    			<?= $dali->buildRequestsTable($_SESSION['username']); ?>
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