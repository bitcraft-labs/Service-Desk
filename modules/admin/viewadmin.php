    <!-- welcome -->
    <?php if(($myACL->hasPermission('access_admin')) || ($myACL->hasPermission('manage_users')) || ($myACL->hasPermission('manage_templates'))) {
      $admCurPage = $_GET['page'];
      $admSubPage = $_GET['subpage'];
      if ((!isset($admCurPage) || ($admCurPage == "cpanel")) && (!isset($admSubPage))) {
        include_once 'modules/admin/cpanel.php';
      }
      else if (($admCurPage == "cpanel") && ($admSubPage == "customize"))
        include_once 'modules/admin/customize.php';
      else if (($admCurPage == "cpanel") && ($admSubPage == "backup_restore"))
        include_once 'modules/admin/backup_restore.php';
      else if (($admCurPage == "cpanel") && ($admSubPage == "devops"))
        include_once 'modules/admin/devoptions.php';
      else if ($admCurPage == "users")
        include_once 'modules/admin/viewusers.php';
      else if ($admCurPage == "groups")
        include_once 'modules/admin/viewgroups.php';
      else if ($admCurPage == "updates")
        echo "<p>Appliance Update Page</p>";
      else if ($admCurPage == "support")
        echo "<p>Application resources for developers and server administrators</p>";
    }
    ?>
