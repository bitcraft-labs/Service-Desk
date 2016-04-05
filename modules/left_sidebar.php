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
    <form action="<?=($_SERVER['PHP_SELF'])?>" method="get" class="sidebar-form">
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
      $url = substr($url, strrpos($url, '/') + 1); //preg_replace('/.php$/', '', basename($_SERVER['REQUEST_URI'])); ?>
      <?php
        $currpage = ucfirst(pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME));
        if ($currpage == "Admin") { ?>
          <li class="header">Admin Area</li>
          <li class="treeview">
            <li>
              <a href="#"><i class="fa fa-th"></i> User Management <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="Admin.php#access_users" data-toggle='tab'><i class="fa fa-users"></i> Users</a></li>
                <li><a href="Admin.php#access_groups" data-toggle='tab'><i class="fa fa-users"></i> Security Groups</a></li>
              </ul>
            </li>
            <li>
              <a href="#"><i class="fa fa-files-o"></i> Service Records <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="Admin.php#sr_types" data-toggle='tab'><i class="fa fa-file-text"></i> Record Templates</a></li>
                <li><a href="Admin.php#sr_security" data-toggle='tab'><i class="fa fa-lock"></i> Template Security</a></li>
                <li>
                  <a href="#"><i class="fa fa-files-o"></i> Special Fields <i class="fa fa-angle-left pull-right"></i></a>
                  <ul class="treeview-menu">
                    <li><a href="#" data-toggle='tab'><i class="fa fa-building"></i> Building</a></li>
                    <li><a href="#" data-toggle='tab'><i class="fa fa-plus"></i> Add New</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li>
              <a href="#"><i class="fa fa-cogs"></i> System Maintenance <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="#site" data-toggle='tab'><i class="fa fa-circle-o"></i> Site Configuration</a></li>
                <li><a href="#developer" data-toggle='tab'><i class="fa fa-circle-o"></i> Developer Options</a></li>
                <li><a href="#" data-toggle='tab'><i class="fa fa-envelope-o"></i> Email</a></li>
                <li><a href="#" data-toggle='tab'><i class="fa fa-circle-o"></i> Add-ons</a></li>
                <li><a href="#" data-toggle='tab'><i class="fa fa-circle-o"></i> Backup/Recovery</a></li>
                <li><a href="#" data-toggle='tab'><i class="fa fa-circle-o"></i> System Information</a></li>
              </ul>
            </li>
          </li>
          <li><a href="HelpDesk.php"><i class="fa fa-times"></i> Exit Admin</a></li>
        <?php } else {?>
      <li class="header">Main Menu</li>
      <li <?php if ((($url == '') || ($url == 'HelpDesk.php')) && (($_GET['page'] == '') || ($_GET['page'] == 'dashboard'))) echo "class='active'"; ?> ><a href="/HelpDesk.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
      <li <?php if ($url == 'Mailbox.php') echo "class='active'"; ?> ><a href="Mailbox.php"><i class="fa fa-envelope"></i> <span>Mailbox</span></a></li>
      <li class="header">Service Central</li>
      <li <?php if (($url == 'ServiceRecord.php') && ($_GET['sr'] == "new")) echo "class='active'"; ?> ><a href="ServiceRecord.php?sr=new"><i class="fa fa-plus"></i> <span>Add New Service Record</span></a></li>
      <li <?php if (($url == 'ServiceRecord.php') && ($_GET['sr'] != "new")) echo "class='active'"; ?> ><a href="ServiceRecord.php?sr=all"><i class="fa fa-files-o"></i> <span>View Service Records</span></a></li>
      <!--<li><a href="#"><i class="fa fa-file-text"></i> <span>Run Report</span></a></li>-->
      <li class="header">Members</li>
      <li <?php if (($url == 'Staff.php') && ($_GET['id'] == "all")) echo "class='active'"; ?> ><a href="Staff.php?id=all"><i class="fa fa-users"></i> <span>View Staff</span></a></li>
      <li <?php if (($url == 'EndUser.php') && ($_GET['id'] != "new")) echo "class='active'"; ?> ><a href="EndUser.php?id=all"><i class="fa fa-th-list"></i> <span>View End Users</span></a></li>
      <li class="header">Self-Service</li>
      <li <?php if ($url == 'EndUserPortal.php') echo "class='active'"; ?> ><a href="EndUserPortal.php"><i class="fa fa-exchange"></i> <span>End User Portal</span></a></li>
      <?php //if (($myACL->hasPermission('access_admin')) || ($myACL->hasPermission('manage_templates')) || ($myACL->hasPermission('manage_users'))) { ?>
      <!-- <li class="header">Admin</li> -->
      <!-- <li <?php //if (($url == 'Admin.php') && (($_GET['action'] == '') || ($_GET['action'] == 'ViewAdmin'))) echo "class='active'"; ?> ><a href="/Admin.php?action=ViewAdmin"><i class="fa fa-cogs"></i> <span>Admin Panel</span></a></li> -->
      <?php } ?>
    </ul><!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>
