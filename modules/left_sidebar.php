<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
      <div class="pull-left image">
      <!-- User avatar storage -->
        <a href="Profile.php"><img src="dist/img/avatar5.png" class="img-circle" alt="User Image"></a>
      </div>
      <div class="pull-left info">
        <p><a href="Profile.php"><?= $authenticator->UserFullName() ?></a></p>
        <!-- Status -->
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <!-- search form (Optional) -->
    <form action="ServiceRecord.php" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="sr" class="form-control" placeholder="SR Lookup...">
        <span class="input-group-btn">
          <button type="submit" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
        </span>
      </div>
    </form>
    <!-- /.search form -->

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu">
      <?php $url = $_SERVER['PHP_SELF'];
      $url = substr($url, strrpos($url, '/') + 1); ?>
      <?php
        $currpage = ucfirst(pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME));
      ?>
      <li <?php if ((($url == '') || ($url == 'HelpDesk.php')) && (($_GET['page'] == '') || ($_GET['page'] == 'dashboard'))) echo "class='active'"; ?> ><a href="/HelpDesk.php"><i class="fa fa-home"></i> <span>Home</span></a></li>
      <li class="treeview">
        <li id="sdesk">
          <a href="#"><i class="fa fa-file-text"></i> Service Desk <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
            <li <?php if (($url == 'ServiceRecord.php') && ($_GET['sr']) || ($_GET['page'] == "tickets")) echo "class='active super_active'"; ?> ><a href="ServiceRecord.php?page=tickets&sr=all"><i class="fa fa-ticket"></i> Tickets</a></li>
            <!-- <li <?php if (($url == 'HelpDesk.php') && ($_GET['page'] == "downloads")) echo "class='active super_active'"; ?> ><a href="HelpDesk.php?page=downloads"><i class="fa fa-download"></i> User Downloads</a></li> -->
            <li <?php if (($url == 'HelpDesk.php') && ($_GET['page'] == "knowledgebase")) echo "class='active super_active'"; ?> ><a href="HelpDesk.php?page=knowledgebase"><i class="fa fa-files-o"></i> Knowledgebase</a></li>
            <!-- <li <?php if (($url == 'HelpDesk.php') && ($_GET['page'] == "announcements")) echo "class='active super_active'"; ?> ><a href="HelpDesk.php?page=announcements"><i class="fa fa-bell"></i> Announcements</a></li> -->
            <li <?php if (($url == 'ServiceRecord.php') && ($_GET['page'] == "configure")) echo "class='active super_active'"; ?> ><a href="ServiceRecord.php?page=configure"><i class="fa fa-cog"></i> Configuration</a></li>
          </ul>
        </li>
      </li>
        <?php if (($myACL->hasPermission('access_admin')) || ($myACL->hasPermission('manage_templates')) || ($myACL->hasPermission('manage_users'))) { ?>
        <li id="ddesk">
          <a href="#"><i class="fa fa-cogs"></i> Settings <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu" id="adesk">
            <?php if ($myACL->hasPermission('access_admin') || ($myACL->hasPermission('manage_templates'))) { ?>
            <li <?php if (($url == 'Admin.php') && ($_GET['page'] == "cpanel")) echo "class='active super_active'"; ?> ><a href="Admin.php?page=cpanel"><i class="fa fa-cog"></i> <span>Control Panel</span></a></li>
            <?php } if ($myACL->hasPermission('manage_users')) { ?>
            <li <?php if (($url == 'Admin.php') && ($_GET['page'] == "users")) echo "class='active super_active'"; ?> ><a href="Admin.php?page=users"><i class="fa fa-user"></i> <span>Users</span></a></li>
            <li <?php if (($url == 'Admin.php') && ($_GET['page'] == "groups")) echo "class='active super_active'"; ?> ><a href="Admin.php?page=groups"><i class="fa fa-users"></i> <span>Security Groups</span></a></li>
            <?php } if ($myACL->hasPermission('access_admin')) { ?>
            <li <?php if (($url == 'Admin.php') && ($_GET['page'] == "updates")) echo "class='active super_active'"; ?> ><a href="Admin.php?page=updates"><i class="fa fa-wrench"></i> <span>Appliance Updates</span></a></li>
            <li <?php if (($url == 'Admin.php') && ($_GET['page'] == "support")) echo "class='active super_active'"; ?> ><a href="Admin.php?page=support"><i class="fa fa-question-circle"></i> <span>Support</span></a></li>
            <?php } ?>
          </ul>
        <li>
        <?php } ?>
        <li <?php if ($url == 'EndUserPortal.php') echo "class='active'"; ?> ><a href="EndUserPortal.php"><i class="fa fa-exchange"></i> <span>Self-Service Portal</span></a></li>
      </li>
    </ul><!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>
