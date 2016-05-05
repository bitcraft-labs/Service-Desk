<?php
if (isset($_POST['submit_new_system'])) {
  $owner = $dali->getOwnerFromSR();
  $dali->addNewSystem($_POST['mfr'], $_POST['model'], $_POST['sn'], $_POST['warr_status'], $_POST['pass'], $_POST['encryption_key'], $owner, $_POST['purchaser']);
}
?>
<div id="newMachine" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
	 <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add New Machine</h4>
      </div>
      <form action="" method="post" class="form-horizontal">
        <div class="modal-body">
            <?= $dali->formBuilder('mfr') ?>
            <?= $dali->formBuilder('model') ?>
            <?= $dali->formBuilder('sn') ?>
            <?= $dali->formBuilder('warr_status') ?>
            <?= $dali->formBuilder('purchaser') ?>
            <?= $dali->formBuilder('password') ?>
            <?= $dali->formBuilder('encryption_key') ?>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-custom" name="submit_new_system">Add System</button>
        </div>
      </form>
    </div>
  </div>
</div>
