<!-- FILL-OUT MODAL -->
<div class="modal fade" id="incidentModal">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title" id=""><i class="fa fa-envelope"></i> Describe your Issue for Us: </h4>
			</div><!-- modal-header -->
			<div class="modal-body">
				<form class="form" role="form">
					<div class="form-group">
						<label for="incident-title">Title</label>
						<input type="text" class="form-control input-md" id="incident-title" name="incident-title" placeholder="">
					</div>
					<div class="form-group">
						<label for="incident-building">Building</label>
						<select name="incident-building" class="form-control input-md" id="incident-building" >
							<option selected disabled>Choose your building</option>
							<option value="1">Campus Police</option>
							<option value="2">Russell Towers</option>
							<option value="3">McKay Complex</option>
							<option value="4">Miller</option>
							<option value="5">Percival</option>
							<option value="6">Holmes Dining Commons</option>
							<option value="7">Thompson</option>
							<option value="8">Mara Commons</option>
							<option value="9">Edgerly</option>
							<option value="10">Condike Science</option>
						</select>
					</div>
					<div class="form-group">
						<label for="incident-room-number">Room Number</label>
						<input type="text" name="incident-room-number" class="form-control input-md" id="incident-room-number" placeholder="">
					</div>
					<div class="form-group">
						<label for="incident-description">Description</label>
						<textarea rows="8" name="incident-description" class="form-control input-md" id="incident-description"></textarea>
					</div>
					<button type="submit" class="btn btn-success">Send!</button>
				</form>
				<hr>
			</div><!-- modal-body -->
		</div><!-- modal-content -->
	</div><!-- modal-dialog -->
</div><!-- modal -->