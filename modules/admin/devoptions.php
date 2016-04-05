<h1>Developer Options</h1>
<form action="<?= $authenticator->GetSelfScript(); ?>" method="post">
  <input type="text" name="submit_dev_mode" hidden></input>
  <div class="form-group">
    <label>Maintenance Mode</label>
    <input type="checkbox" name="dev_on" data-off-text="Off" data-on-text="On" data-size="mini" class="BSswitch" <?php if ($maintenance) echo "checked"; ?> ></input>
  </div>

  <div class="form-group">
    <label>Maintenance Alert</label>
    <input type="checkbox" name="dev_alert" data-off-text="Off" data-on-text="On" data-size="mini" class="BSswitch" <?php if ($maintenance_show) echo "checked"; ?> ></input>
  </div>

  <div class="form-group">
    <label>Maintenance Message</label><br>
    <textarea rows="5" cols="150" name="dev_msg" placeholder="Alert message"><?= $maint_setting[0][1] ?></textarea>
  </div>

  <button type="submit" class="btn btn-primary">Apply</button>
</form>
