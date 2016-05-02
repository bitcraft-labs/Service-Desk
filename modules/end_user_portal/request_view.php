<?php $info = $dali->buildSRView($_GET['sr'], $_SESSION['userID']); ?>
<div class="content-wrapper">
	<div class="ssp-title">
		<div class="container">
	      <h3><!--<i class="fa fa-laptop fa-2x pull-left"></i> -->Self-Service Portal<br>
			   <small>Service Request #<?= $_GET['sr'] . ' &mdash; ' . $info['problem'] ?></small></h3>
	  <!-- Add icons and change buttons and layout -->
	    </div>
	</div>
	<div class="container">
		<div class="row">
			<!-- Comment section, title, description, building, room-number, last-updates, who assigned to it, history; -->
			<!-- Checkup Record -->
			<div class="col-md-12">
				<div class="box box-solid box-purple">
				  <div class="box-header with-border">
				   <?= $info['title'] ?> #<?= $_GET['sr']; ?>
				    <div class="box-tools pull-right">
				      <!--<span class="label label-success">Student</span>-->
				    </div><!-- /.box-tools -->
				  </div><!-- /.box-header -->
				  <div class="box-body">
			      <div class="col-md-8"> <!-- Problem -->
			        <p><strong>Problem:</strong> <?= $info['problem']; ?></p>
			        <p><strong>Additional Details:</strong></p>
			        <textarea style="padding: 10px; border-radius: 5px; resize: none;" class="form-control" name="addl_details" id="" cols="111" rows="4" disabled><?= $info['description']; ?></textarea>
			      </div> <!-- /Problem -->

			      <?= $info['side']; ?>
						<div class="col-md-8">
							<!-- Notes -->
							<h4><strong>Notes:</strong></h4>
							<p id="notes_section"><?= $dali->getNotes($_GET['sr']); ?></p>
						</div>
			      <div class="col-md-4"> <!-- Submission Notes -->
			        <p>Assigned to: <?= $info['assigned_admin']; ?><br /> <!-- Added to array later -->
			          Submitted by: <?= $info['submitted_by']; ?><br />
			          Submitted: <?= $info['submitted_when']; ?></p>
			        <p><?= $dali->getQRCode(); ?> Scan to mobile</p>
							<p>Last Updated: <?= $info['last_updated']; ?></p>
			        <!--<p><img src='https://chart.googleapis.com/chart?cht=qr&chl=http%3A%2F%2Fhelpdesk.bitcraftlabs.net%2FServiceRecord.php%3Fsr%3Dnew%26type%3D1&chs=180x180&choe=UTF-8&chld=L|2' width="120" alt="qr" /> Scan to mobile</p>-->
			      </div> <!-- /Submission notes -->
				  </div><!-- /.box-body -->
					<div class="box-footer">
						<!-- Implement way to add another comment -->
						<div class="col-md-12" id="new_note_container">
							<form action="" method="post">
								<!-- <div class="form-control"> -->
									<label for="subject">Subject</label>
									<input type="text" name="subject" class="form-control input-md" placeholder="Subject" value="RE: <?= $info['problem'] ?>"><br>
									<?php
									if ($info['assigned_admin'] == "Unassigned")
							      $to = $dali->getUserID($info['submitted_by']);
							    else
							      $to = $dali->getUserID($info['assigned_admin']);?>
									<input type="hidden" name="recipient" value="<?= $to ?>">
									<textarea id="note_editor" name="note_editor"></textarea><br>
									<button type="submit" name="submit_note" class="btn btn-custom">Add Note</button>
								<!-- </div> -->
							</form>
						</div>
						<button style="margin: 10px;" type="button" class="btn btn-custom" onclick="add_note()" id="note_btn">Add note</button>
					</div><!-- box-footer -->
				</div><!-- /.box -->
			</div><!-- /checkup -->


			</div> <!-- /footer -->
			</div>
		</div>
	</div>
</div>
