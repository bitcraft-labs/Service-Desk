<!-- FILL-OUT MODAL -->
<div class="modal fade" id="incidentModal">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title"><i class="fa fa-envelope"></i> Describe your issue for us: </h4>
			</div><!-- modal-header -->
			<div class="modal-body">
				<div id="error-container"></div>
				<form id="modal-form" data-ad="1" method="POST" action="<?= $authenticator->GetSelfScript(); ?>" class="form" role="form">
					<div class="form-group">
						<label for="incident-title">Title</label>
						<input type="text" class="form-control input-md" id="incident-title" name="incident-title" disabled>
					</div>
					<div class="form-group">
						<label for="incident-phone">Phone Number</label>
						<input type="text" class="form-control input-md" id="incident-phone" name="incident-phone" value="<?= $dali->getPhoneNumber($_SESSION['userID']); ?>">
					</div>
					<div class="form-group">
						<label id="incident-building-label" for="incident-building">Building</label>
						<select name="incident-building" class="form-control input-md" id="incident-building" >
							<?php
								$option_html = "<option selected disabled>Choose your building</option>\r\n";
								$buildings = $dali->getBuildingsRow('all');
								if($buildings) {
								 	foreach($buildings as $result) {
								 		$option_html .= "\t\t\t\t\t\t\t<option value='".$result[0]."'>".$result[1]."</option>\r\n";
								 	}
							  }
								echo $option_html;
							?>
						</select>
					</div>
					<div class="form-group">
						<label id="incident-room-number-label" for="incident-room-number">Room Number</label>
						<input type="text" name="incident-room-number" class="form-control input-md" id="incident-room-number" placeholder="">
					</div>
					<div class="form-group">
						<label for="incident-description">Description</label>
						<textarea rows="8" name="incident-description" class="form-control input-md" id="incident-description" style="resize: none;"></textarea>
					</div>
					<button name="submit" onclick="modalFormValidation();" type="submit" class="btn btn-lg btn-custom">Send!</button>
				</form>	
			</div><!-- modal-body -->
		</div><!-- modal-content -->
	</div><!-- modal-dialog -->
</div><!-- modal -->
