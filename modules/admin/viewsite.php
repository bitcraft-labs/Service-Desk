<?php
if (!($myACL->hasPermission('access_admin'))) {
	echo "Unauthorized access!";
} else {
include_once 'modules/admin/actions/makeConfig.php'; ?>
<h2 class="skew-up-smidge">General Settings</h2>
<div class="row">
	<div class="col-md-12">
		<form class="form-horizontal" action='' method="post">
			<input type='hidden' name='config_submitted' id='submitted' value='1'/>
			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="db_host">Database Host</label>
			  <div class="col-md-4">
			  <?php echo "<input id='db_host' name='db_host' type='text' placeholder='db_host' class='form-control input-md' value='".$conf['sql']['host']."' required=''>";?>

			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="db_user">Database User</label>
			  <div class="col-md-4">
			  <?php echo "<input id='db_user' name='db_user' type='text' placeholder='db_user' class='form-control input-md' value='".$conf['sql']['user']."' required=''>";?>

			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="db_pass">Database Pass</label>
			  <div class="col-md-4">
			  <?php echo "<input id='db_pass' name='db_pass' type='text' placeholder='(blank)' class='form-control input-md' value='".$conf['sql']['pass']."'>";?>

			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="db_name">Database Name</label>
			  <div class="col-md-4">
			  <?php echo "<input id='db_name' name='db_name' type='text' placeholder='db_name' class='form-control input-md' value='".$conf['sql']['name']."' required=''>";?>

			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="company_name">Company Name</label>
			  <div class="col-md-4">
			  <?php echo "<input id='company_name' name='company_name' type='text' placeholder='Bitcraft Labs' value='".$conf['site']['company_name']."' class='form-control input-md'>";?>

			  </div>
			</div>

			<!-- Textarea -->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="formatted_company_name">HTML Formatted Co. Name</label>
			  <div class="col-md-4">
			    <textarea class="form-control" id="formatted_company_name" name="formatted_company_name"><?= htmlspecialchars($conf['site']['formatted_company_name']) ?></textarea>
			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="sysemail">Security Notifications Email</label>
			  <div class="col-md-4">
			  <?php echo "<input id='sysemail' name='sysemail' type='text' placeholder='security@domain.com' class='form-control input-md' value='".$conf['customize']['sysemail']."' required=''>";?>

			  </div>
			</div>

			<!-- Select Basic -->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="skin">Select Theme</label>
			  <div class="col-md-4">
			    <select id="skin" name="skin" class="form-control">
			      <option value="" disabled  <?php if (!$conf['customize']['skin']) echo 'selected';?>>Select Skin</option>
						<option value="purple" <?php if ('purple' == $conf['customize']['skin']) echo 'selected';?>>BCL Purple</option>
			      <option value="green" <?php if ('green' == $conf['customize']['skin']) echo 'selected';?>>green</option>
			      <option value="yellow" <?php if ('yellow' == $conf['customize']['skin']) echo 'selected';?>>yellow</option>
			      <option value="blue" <?php if ('blue' == $conf['customize']['skin']) echo 'selected';?>>blue</option>
			    </select>
			  </div>
			</div>

			<!-- File Button -->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="main_logo">Upload Main Logo</label>
			  <div class="col-md-4">
			    <input id="main_logo" name="main_logo" class="input-file" type="file">
			  </div>
			</div>

			<!-- File Button -->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="main_logo_top">Upload Top Bar Logo</label>
			  <div class="col-md-4">
			    <input id="main_logo_top" name="main_logo_top" class="input-file" type="file">
			  </div>
			</div>

			<!-- Button -->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="submit"></label>
			  <div class="col-md-4">
			    <button id="submit" name="submit" class="btn btn-primary">Update</button>
			  </div>
			</div>
		</form>
	</div>
</div>
<?php } ?>
