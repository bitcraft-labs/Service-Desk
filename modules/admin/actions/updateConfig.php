<?php
if(isset($_POST['config_submitted'])) {
  $skin = $_POST['skin'];
  $darkmode = $_POST['darkmode'];
  $sysemail = $_POST['sysemail'];
  $coname = $_POST['company_name'];
  $formedconame = $_POST['formatted_company_name'];
  $site_url = $_POST['site_url'];
  $login_size = $_POST['auth_size'];
  $main_logo = $_POST['main_logo'];
  $main_logo_small = $_POST['main_logo_small'];
  $main_logo_top = $_POST['top_bar'];

  if ($_POST) {
    //open current config file and open a new temp file
    $original = 'custom/config.php';
    $new = 'custom/config.php.temp';
    $f = fopen($original, 'r') or die("can't open file");
    $d = fopen($new, 'w') or die("can't open file");
    //parse through the original config file
    while (!feof($f)) {
      //reference each line
      $line=fgets($f);
      //if in the line contains 'skin' replace with full line and variable contents
      if (strpos($line, "'skin'") !== false) {
          $line="\t\t'skin'            => '$skin',\r\n";
      } else if (strpos($line, 'darkmode') !== false) {
          $line="\t\t'darkmode'        => '$darkmode',\r\n";
      } else if (strpos($line, "'login_size'") !== false) {
          $line="\t\t'login_size'      => '$login_size',\r\n";
      } else if (strpos($line, "'sysemail'") !== false) {
          $line="\t\t'sysemail'        => '$sysemail',\r\n";
      } else if (strpos($line, "'company_name'") !== false) {
          $line="\t\t'company_name'            => '$coname',\r\n";
      } else if (strpos($line, "'formatted_company_name'") !== false) {
          $line="\t\t'formatted_company_name'  => '$formedconame',\r\n";
      } else if (strpos($line, "'url'") !== false) {
          $line="\t\t'url'                     => '$site_url',\r\n";
      } else if (strpos($line, "'main_logo'") !== false) {
          $line="\t\t'main_logo'       => '$main_logo',\r\n";
      } else if (strpos($line, "'main_logo_small'") !== false) {
          $line="\t\t'main_logo_small' => '$main_logo_small',\r\n";
      } else if (strpos($line, "'main_logo_top'") !== false) {
          $line="\t\t'main_logo_top'   => '$main_logo_top',\r\n";
      } //else if (strpos($line, '') !== false) {
      //     $line="\t\t\r\n";
      // }
      fwrite($d, $line);
    }
    //close those two files
    fclose($f);
    fclose($d);

    //kill old config and replace with new
    unlink($original);
    rename($new, $original);
    ?>
    <div class="alert alert-success alert-sm alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <i class="icon fa fa-check"></i> Config file updated successfully.
    </div>
    <?php
  }
} else {
    //echo "<p>You probably shouldn't be directly referencing this file.<br>I'd rather you not attempt to break the website, thank you!</p>";
}
?>
