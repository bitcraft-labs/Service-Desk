<?php $info = $dali->buildSRView($_GET['sr']); ?>
<div class="content-wrapper">
	<div class="ssp-title">
		<div class="container">
	      <h3><!--<i class="fa fa-laptop fa-2x pull-left"></i> -->Self-Service Portal <small>( <?= $_GET['sr']; ?>)<br>
	  <!-- ADD NEW DESC -->DA DA DA DA DAAAAAAAAAAA </small></h3>
	    </div>
	</div>
	<div class="container">
		<div class="row">
			<!-- Comment section, title, description, building, room-number, last-updates, who assigned to it, history; --> 
			<!-- Checkup Record -->
			<div class="col-md-12">
				<div class="box box-solid box-primary box-custom-rq">
				  <div class="box-header with-border">
				    <h3 class="box-title"><i class="fa fa-stethoscope"> </i> System Checkup Report</h3>
				    <div class="box-tools pull-right">

				      <!--<span class="label label-success">Student</span>-->
				    </div><!-- /.box-tools -->
				  </div><!-- /.box-header -->
				  <div class="box-body">
			      <div class="col-md-8"> <!-- Problem -->
			        <p><strong>Problem:</strong> <?= $info['title'];?></p>
			        <p><strong>Additional Details:</strong></p>
			        <textarea style="padding: 10px; border-radius: 5px; resize: none;" class="form-control" name="addl_details" id="" cols="111" rows="4" disabled><?= $info['description']; ?></textarea>
			      </div> <!-- /Problem -->

			    	<div class="col-md-4">
			      	<h4><i class="fa fa-desktop"> </i> <strong>System Information:</strong></h4>
			      	<div class="box-body">
			  	    <p>
			          <strong>Model:</strong> Apple Macbook Pro (2011) 13"<br />
			          <strong>Serial:</strong> CXNUA137XW92<br />
			          <strong>Warranty:</strong> Apple Care Expired</br />
			          <strong>Password:</strong> P@ssw0rd!<br />
			          <strong>Bitlocker:</strong> N/A</p>
			  	  </div><!-- /.box-body -->
			      </div>
			      <div class="col-md-8"> <!-- Notes -->
			        <h4><strong>Notes:</strong></h4>
			        <p>Record Submitted -- <em>Rose Tyler (01/07/2016 12:29pm)</em><br />
			          "Student needs to purchase part -> http://amzn.to/XyZ134" -- <em>Clara Oswald (01/07/2016 02:37pm)</em><br />
			          "Emailed student link to part" -- <em>Clara Oswald (01/07/2016 02:42pm)</em><br />
			          Changed Status to "Waiting on Part" -- <em>Clara Oswald (01/07/2016 02:43pm)</em><br />
			          "Received Part" -- <em>Rose Tyler (01/09/2016 09:12am)</em><br />
			          "Replaced Screen" -- <em>Amelia Pond (01/09/2016 06:17pm)</em><br />
			          "Called student for pickup" -- <em>Amelia Pond (01/09/2016 06:21pm)</em><br />
			          Changed Status to "Waiting for Pickup" -- <em>Amelia Pond (01/09/2016 06:23pm)</em><br />
			          Emailed Student the Status -- <em>System (01/09/2016 6:23pm)</em></p>
			      </div>
			      <div class="col-md-4"> <!-- Submission Notes -->
			        <p>Assigned to: Student HD Tech Group<br /> <!-- Added to array later -->
			          Submitted by: <?= $info['submitted_by']; ?><br />
			          Submitted: <?= $info['submitted_when']; ?></p>
			        <p><?= $dal->getQRCode(); ?> Scan to mobile</p>
			        <!--<p><img src='https://chart.googleapis.com/chart?cht=qr&chl=http%3A%2F%2Fhelpdesk.bitcraftlabs.net%2FServiceRecord.php%3Fsr%3Dnew%26type%3D1&chs=180x180&choe=UTF-8&chld=L|2' width="120" alt="qr" /> Scan to mobile</p>-->
			      </div> <!-- /Submission notes -->

				  </div><!-- /.box-body -->
				  <!-- <div class="box-footer">
				    <button type="button" class="btn btn-success">Add Note</button>
				  </div> --><!-- box-footer -->
				  <hr>
 					<button style="margin: 10px;" type="button" class="btn btn-custom" onclick="">Add note</button>
				</div><!-- /.box -->
			</div><!-- /checkup -->

			<div class="col-md-12"> <!-- footer -->
			  <div class="col-md-8">
			    <button type="button" class="btn btn-custom"><i href="fa fa-floppy-o pull-left">Save</i></button> <button type="button" class="btn btn-custom"><i href="fa fa-floppy-o pull-left">Print</i></button><br />Record Saved.
			  </div>
			  <div class="col-md-4">
			    <p>Last Updated: 01/9/2016 06:23pm</p>
			  </div>
			</div> <!-- /footer -->
			</div>
		</div>
	</div>
</div>