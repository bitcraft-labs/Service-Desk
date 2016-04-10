<?php
	$tabhead =     '<tr>
						<th>Mail Number</th>
						<th>Sent By</th>
						<th>Subject</th>
						<th>Time Sent</th>
					</tr>';
	$mailbox_controls = '<!-- Check all button -->
		                <div class="btn-group">
		                  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-reply"></i></button>
		                  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-share"></i></button>
		                </div>
		                <!-- /.btn-group -->
		                <button type="button" class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></button>
		                <div class="pull-right">
		                  <div class="btn-group">
		                    <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-left"></i></button>
		                    <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></button>';

 ?>
<!-- TEMPORARY MAILBOX FILE -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<div class="ssp-title">
		<div class="container">
			<h3>Self-Service Portal <small>(Mailbox)</small><br><small>This is where your request communication takes place</small></h3>	
		</div>
	</div>
	<div class="container">
	  <!-- Main content -->
	  <section class="content">
		  <div class="row">
		    <div class="col-md-12">
		          <div class="box box-primary box-custom">
		            <div class="box-header with-border">
		              <h3 class="box-title">Inbox</h3>
		              
		              <!-- /.box-tools -->
		            </div>
		            <!-- /.box-header -->
		            <div class="box-body no-padding">
		              <div class="mailbox-controls">
		             
		                  </div>
		                  <!-- /.btn-group -->
		                </div>
		                <!-- /.pull-right -->
		              </div>
		              <div id="mailbox-fix" class="table-responsive mailbox-messages">
		                <table id="records" class="table table-hover table-striped table-border">
		                <thead><?= $tabhead; ?></thead>
		                  <tbody>
		                  <?= $dali->buildMailbox($_SESSION['userID']); ?>
		                  </tbody>
		                  <tfoot> <?= $tabhead; ?></tfoot>
		                </table>
		                <!-- /.table -->
		              </div>
		              <!-- /.mail-box-messages -->
		            </div>
		            <!-- /.box-body -->
		        <div class="box-footer no-padding">
	              <div class="mailbox-controls">
	                
	              </div>
	                  <!-- /.btn-group -->
	           </div>
	                <!-- /.pull-right -->
	          </div>
	        </div>
	       </div>
	          <!-- /. box -->
	      </div>
	        <!-- /.col -->
	     </div>
	      <!-- /.row -->
	  </section>
	   <!-- /.content -->
	</div><!-- /.content-wrapper -->
</div>
