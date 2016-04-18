<?php
if (!($myACL->hasPermission('access_admin'))) :
	echo "Unauthorized access!";
else :
include_once 'modules/admin/actions/updateConfig.php'; ?>
<h2 class="skew-up-smidge">Customize</h2>
<div class="row">
	<div class="col-md-12">
		<form class="form-horizontal" action='' method="post">
			<input type='hidden' name='config_submitted' id='submitted' value='1'/>
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

			<!-- Textarea -->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="site_url">Site Address (URL)</label>
			  <div class="col-md-4">
			    <input id="site_url" name="site_url" type="text" placeholder="http://helpdesk.example.com" value="<?= htmlspecialchars($conf['site']['url']) ?>" class='form-control input-md'>
			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="sysemail">Security Notifications Email</label>
			  <div class="col-md-4">
			  <?php echo "<input id='sysemail' name='sysemail' type='text' placeholder='security@example.com' class='form-control input-md' value='".$conf['customize']['sysemail']."' required=''>";?>
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

			<!-- Dark Mode -->
			<div class="form-group">
				<label class="col-md-4 control-label" for="darkmode">Dark Mode</label>
				<div class="col-md-4">
					<select id="darkmode" class="form-control" name="darkmode">
						<option disabled selected> Darkmode? </option>
						<option value="dark" <?php if ('dark' == $conf['customize']['darkmode']) echo "selected"?>> Dark </option>
						<option value="light" <?php if ('light' == $conf['customize']['darkmode']) echo "selected"?>> Light </option>
					</select>
				</div>
			</div>

			<!-- Select Basic -->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="auth_size">Login Logo Size</label>
			  <div class="col-md-4">
			    <select id="auth_size" name="auth_size" class="form-control">
			      <option value="" disabled  <?php if (!$conf['customize']['login_size']) echo 'selected';?>>Select Skin</option>
						<option value="small" <?php if ('small' == $conf['customize']['login_size']) echo 'selected';?>>Small (100px)</option>
						<option value="medium" <?php if ('medium' == $conf['customize']['login_size']) echo 'selected';?>>Medium (250px)</option>
						<option value="large" <?php if ('large' == $conf['customize']['login_size']) echo 'selected';?>>Large (400px)</option>
			    </select>
			  </div>
			</div>

			<!-- Main Logo Picker -->
			<div class="form-group">
				<label class="col-md-4 control-label" for="main_logo">Main Logo Picker</label>
				<div class="col-md-4">
					<select id="main_logo_picker" class="image-picker show-html" name="main_logo">
						<option disabled selected> Pick an Image </option>
						<option data-img-src="custom/img/bcl_logo.png" value="bcl_logo.png" <?php if ('bcl_logo.png' == $conf['customize']['main_logo']) echo "selected"?>> Main Logo </option>
						<option data-img-src="custom/img/logo.png" value="logo.png" <?php if ('logo.png' == $conf['customize']['main_logo']) echo "selected"?>> Dark Logo </option>
					</select>
				</div>
			</div>

			<!-- Small Main Logo Picker -->
			<div class="form-group">
				<label class="col-md-4 control-label" for="main_logo_small">Small Logo Picker</label>
				<div class="col-md-4">
					<select id="main_logo_small_picker" class="image-picker show-html" name="main_logo_small">
						<option disabled selected> Pick an Image </option>
						<option data-img-src="custom/img/bcl_logo_small.png" value="bcl_logo_small.png" <?php if ('bcl_logo_small.png' == $conf['customize']['main_logo_small']) echo "selected"?>> Main Logo Small</option>
					</select>
				</div>
			</div>

			<!-- Top Bar Logo Picker -->
			<div class="form-group">
				<label class="col-md-4 control-label" for="top_bar">Top Bar Logo Picker</label>
				<div class="col-md-4">
					<select id="top_bar_picker" class="image-picker show-html" name="top_bar">
						<option disabled selected> Pick an Image </option>
						<option data-img-src="custom/img/bcl_logo_top_light3.png" value="bcl_logo_top_light3.png" <?php if ('bcl_logo_top_light3.png' == $conf['customize']['main_logo_top']) echo "selected"?>> Main Logo Small</option>
					</select>
				</div>
			</div>

			<!-- File Button -->
			<!-- <div class="form-group">
			  <label class="col-md-4 control-label" for="main_logo">Upload Main Logo</label>
			  <div class="col-md-4">
					<?php //if (file_exists("custom/img/".$conf['customize']['main_logo']))
						//echo "<img src='/custom/img/".$conf['customize']['main_logo']."' height='50'>";
					?>
			    <input id="main_logo" name="main_logo" class="input-file" type="file" value="/custom/img/bcl_logo.png">
			  </div>
			</div> -->

			<!-- File Button -->
			<!-- <div class="form-group">
			  <label class="col-md-4 control-label" for="main_logo_top">Upload Top Bar Logo</label>
			  <div class="col-md-4">
					<?php //if (file_exists("custom/img/".$conf['customize']['main_logo_top']))
						//echo "<img src='/custom/img/".$conf['customize']['main_logo_top']."' height='50'>";
					?>
			    <input id="main_logo_top" name="main_logo_top" class="input-file" type="file" value="/custom/img/bcl_logo_top_light3.png">
			  </div>
			</div> -->

			<!-- Button -->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="submit"></label>
			  <div class="col-md-4">
			    <button id="submit" name="submit" class="btn btn-custom">Update</button>
			  </div>
			</div>
		</form>
	</div>
</div>
<?php endif; ?>
