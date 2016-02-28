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
      <?php if (($myACL->hasPermission('access_admin')) || ($myACL->hasPermission('manage_templates')) || ($myACL->hasPermission('manage_users'))) { ?>
      <li class="header">Admin</li>
      <li <?php if (($url == 'Admin.php') && (($_GET['action'] == '') || ($_GET['action'] == 'ViewAdmin'))) echo "class='active'"; ?> ><a href="/Admin.php?action=ViewAdmin"><i class="fa fa-cogs"></i> <span>Admin Panel</span></a></li>
      <?php } ?>
    </ul><!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>
