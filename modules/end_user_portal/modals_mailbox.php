<!-- Mailbox Modal -->
<div class="modal fade" id="mailboxModal">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title"><i class="fa fa-envelope"></i> Message </h4>
			</div><!-- modal-header -->
			<div class="modal-body">
				<div id="error-container"></div>
				<form id="mailbox-form" data-ad="1" method="POST" action="<?= $authenticator->GetSelfScript(); ?>" class="form" role="form">
					<div class="form-group">
						<label for="mailbox_email">Send To:</label>
						<input class="form-control input-md" type="email" id="mailbox_email" name="mailbox_email">
					</div> 
					<div class="form-group">
						<label for="mailbox_subject">Subject:</label>
						<input class="form-control input-md" type="text" id="mailbox_subject" name="mailbox_subject">
					</div>
					<div class="form-group">
						<label for="mailbox_message">Comment:</label>
						<textarea class="form-control input-md" name="mailbox_message" id="mailbox_message" rows="8" style="resize:none"></textarea>
					</div>
					<button name="submit" onClick="" type="submit" class="btn btn-lg btn-custom">Send!</button>
				</form>	
			</div><!-- modal-body -->
		</div><!-- modal-content -->
	</div><!-- modal-dialog -->
</div><!-- modal -->