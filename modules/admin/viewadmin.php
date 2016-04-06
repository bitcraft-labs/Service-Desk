    <!-- welcome -->
    <?php if(($myACL->hasPermission('access_admin')) || ($myACL->hasPermission('manage_users')) || ($myACL->hasPermission('manage_templates'))) {
      $admCurPage = $_GET['page'];
      if (!isset($admCurPage) || ($admCurPage == "cpanel")) {
        echo "<h1>Control Panel</h1>"; // include_once 'modules/admin/cpanel.php';
        $admaction = $_GET['subpage'];
        if ($admaction == "devops") {
          include_once 'modules/admin/devoptions.php';
        }
      }
      else if ($admCurPage == "users")
        include_once 'modules/admin/viewusers.php';
      else if ($admCurPage == "roles")
        include_once 'modules/admin/viewgroups.php';
      else if ($admCurPage == "updates")
        echo "<p>Appliance Update Page</p>";
      else if ($admCurPage == "support")
        echo "<p>Application resources for developers and server administrators</p>";
    }
    ?>
