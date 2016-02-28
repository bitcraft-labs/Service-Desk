<!-- Computer Repair -->
<div class="col-md-12">
  <h1>Service Record #1307<br /><small>Request for Computer Repair (Hardware)</small></h1>
</div>
<!--
<div class="col-md-4">
  <p>Status: Waiting for Pickup<br />
    Last Updated: 1 minute ago<br />
    Assigned to: Student HD Tech Group</p>
</div>
-->

  <!-- Contact Information -->
  <div class="col-md-6">
  	<div class="box box-solid box-primary">
  	  <div class="box-header with-border">
  	    <h3 class="box-title"><i class="fa fa-user"> </i> Contact Information</h3>
  	    <div class="box-tools pull-right">

  	      <!-- <span class="label label-default">Student</span> -->
  	    </div><!-- /.box-tools -->
  	  </div><!-- /.box-header -->
  	  <div class="box-body">
  	  	<?php echo "<h2>Rory Williams <br /><small>Student</small></h2>"; ?>
  	  	<!-- <h2>Jo Shmo<br /><small>Student</small></h2> -->
  	    <form id='register' action='' method='post' accept-charset='UTF-8'>
    		<fieldset>
  		    <input type='hidden' name='submitted' id='submitted' value='1'/>
  		    <?php echo "<div><span class='error'></span></div>";?>
          <!-- banner id -->
              <div class="form-group">
                <label>Banner ID:</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i>@</i>
                  </div>
                  <input type="text" class="form-control" value="01324042" data-inputmask='"mask": "@12345678"' data-mask>
                </div><!-- /.input group -->
              </div><!-- /.form group -->
  		    <!-- email -->
              <div class="form-group">
                <!--<label>FSU Email:</label>-->
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-envelope"></i>
                  </div>
                  <input type="text" class="form-control" value="jshmo1@student.fitchburgstate.edu" data-inputmask='"mask": "__@__.__"' data-mask>
                </div><!-- /.input group -->
              </div><!-- /.form group -->
  		    <!-- phone -->
              <div class="form-group">
                <!--<label>Primary Phone:</label>-->
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-phone"></i>
                  </div>
                  <input type="text" class="form-control" value="(508) 353-3875" data-inputmask='"mask": "(999) 999-9999"' data-mask>
                </div><!-- /.input group -->
              </div><!-- /.form group -->
  		</fieldset>
  		</form>
    </div><!-- /.box-body -->
  	  <div class="box-footer">
  	    <a href="#">Edit</a>
  	  </div>
  	</div><!-- /.box -->
  </div>

  <!-- Systems -->
  <div class="col-md-6" style="height:inherit">
  	<div class="box box-solid box-primary">
  	  <div class="box-header with-border">
  	    <h3 class="box-title"><i class="fa fa-desktop"> </i> System Information</h3>
  	    <div class="box-tools pull-right">

  	      <!--<span class="label label-primary">Student</span>-->
  	    </div><!-- /.box-tools -->
  	  </div><!-- /.box-header -->
  	  <div class="box-body">
  	    <p>
          <strong>Model:</strong> Apple Macbook Pro (2011) 13"<br />
          <strong>Serial:</strong> CXNUA137XW92<br />
          <strong>Warranty:</strong> Apple Care Expired</br />
          <strong>Password:</strong> P@ssw0rd!<br />
          <strong>Bitlocker:</strong> N/A</p>
  	  </div><!-- /.box-body -->
  	  <div class="box-footer">
  	    <div class="col-md-6"><p><a href="#">Edit</a> <a href="#">+ Add</a></p></div>
        <div class="col-md-6"><p style="text-align:right"><a href="#">Generate Labels</a></p></div>
  	  </div><!-- box-footer -->
  	</div><!-- /.box -->
  </div><!-- /systems -->

<!-- Checkup Record -->
<div class="col-md-12">
	<div class="box box-solid box-primary">
	  <div class="box-header with-border">
	    <h3 class="box-title"><i class="fa fa-file-text"> </i> Checkup Record</h3>
	    <div class="box-tools pull-right">

	      <!--<span class="label label-primary">Student</span>-->
	    </div><!-- /.box-tools -->
	  </div><!-- /.box-header -->
	  <div class="box-body">
      <div class="col-md-8"> <!-- Problem -->
        <p><strong>Problem:</strong> Broken Screen</p>
        <p><strong>Additional Details:</strong></p>
          <input type="textarea" name="addl_details" style="width:100%;height:125px;" value="Accidently dropped it the other day. Fell off bed while watching Netflix." /></p>
      </div> <!-- /Problem -->
      <div class="col-md-4"> <!-- Submission Notes -->
        <p>Assigned to: Student HD Tech Group<br />
          Submitted by: Rose Tyler (Clerk)<br />
          Submitted: 01/07/2016 at 12:29pm</p>
        <p><?= $dal->getQRCode(); ?> Scan to mobile</p>
        <!--<p><img src='https://chart.googleapis.com/chart?cht=qr&chl=http%3A%2F%2Fhelpdesk.bitcraftlabs.net%2FServiceRecord.php%3Fsr%3Dnew%26type%3D1&chs=180x180&choe=UTF-8&chld=L|2' width="120" alt="qr" /> Scan to mobile</p>-->
      </div> <!-- /Submission notes -->
      <div class="col-md-12"> <!-- Notes -->
        <h4>Notes</h4>
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
	  </div><!-- /.box-body -->
	  <div class="box-footer">
	    <button type="button" class="btn btn-primary">Add Note</button>
	  </div><!-- box-footer -->
	</div><!-- /.box -->
</div><!-- /checkup -->

<div class="col-md-12"> <!-- footer -->
  <div class="col-md-8">
    <button type="button" class="btn btn-primary"><i href="fa fa-floppy-o pull-left">Save</i></button> <button type="button" class="btn btn-primary"><i href="fa fa-floppy-o pull-left">Print</i></button><br />Record Saved.
  </div>
  <div class="col-md-4">
    <p>Last Updated: 01/9/2016 06:23pm</p>
  </div>
</div> <!-- /footer -->
