<!-- FILL-OUT MODAL -->
<div class="modal fade" id="incidentModal">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title" id=""><i class="fa fa-envelope"></i> Describe your issue for us: </h4>
			</div><!-- modal-header -->
			<div class="modal-body">
			<form action="" ></form>
				<form method="" action="" class="form" role="form">
					<div class="form-group">
						<label for="incident-title">Title</label>
						<input type="text" class="form-control input-md" id="incident-title" name="incident-title" placeholder="">
					</div>
					<div class="form-group">
						<label for="incident-building">Building</label>
						<select name="incident-building" class="form-control input-md" id="incident-building" >
							<?php  
								$option_html = '<option selected disabled>Choose your building</option>';
								foreach($dal->getAllBuildings() as $results) {
									$option_html .= '<option value="'.$results[0].'">'.$results[1].'</option>';
								}
								echo $option_html;
							?>
						</select>
					</div>
					<div class="form-group">
						<label for="incident-room-number">Room Number</label>
						<input type="text" name="incident-room-number" class="form-control input-md" id="incident-room-number" placeholder="">
					</div>
					<div class="form-group">
						<label for="incident-description">Description</label>
						<textarea rows="8" name="incident-description" class="form-control input-md" id="incident-description" style="resize: none;"></textarea>
					</div>
					<button type="submit" class="btn btn-lg btn-success">Send!</button>
				</form>
				<hr>
			</div><!-- modal-body -->
		</div><!-- modal-content -->
	</div><!-- modal-dialog -->
</div><!-- modal -->
