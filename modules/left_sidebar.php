<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
      <div class="pull-left image">
      <!-- User avatar storage -->
        <img src="dist/img/avatar5.png" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?= $authenticator->UserFullName() ?></p>
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
      <li <?php if (($url == '') || ($url == 'index.php')) echo "class='active'"; ?> ><a href="./"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
      <li class="header">Service Central</li>
      <li <?php if (($url == 'service-record.php') && ($_GET['sr'] == "new")) echo "class='active'"; ?> ><a href="service-record.php?sr=new"><i class="fa fa-plus"></i> <span>Add New Service Record</span></a></li>
      <li <?php if (($url == 'service-record.php') && ($_GET['sr'] != "new")) echo "class='active'"; ?> ><a href="service-record.php?sr=all"><i class="fa fa-list-alt"></i> <span>View Service Records</span></a></li>
      <li <?php if (($url == 'customer.php') && ($_GET['id'] != "new")) echo "class='active'"; ?> ><a href="customer.php?id=all"><i class="fa fa-list-alt"></i> <span>View Customers</span></a></li>
      <li><a href="#"><i class="fa fa-file-text"></i> <span>Run Report</span></a></li>

      <li class="header">Staff</li>
      <li <?php if (($url == 'staff.php') && ($_GET['id'] == "all")) echo "class='active'"; ?> ><a href="staff.php?id=all"><i class="fa fa-users"></i> <span>View Staff</span></a></li>
      <?php if ($_SESSION['user_type'] == 1) { ?>
      <li class="header">Admin</li>
      <li <?php if (($url == 'admin.php')) echo "class='active'"; ?> ><a href="/?page=admin&setting=system"><i class="fa fa-cogs"></i> <span>Site Settings</span></a></li>
      <li <?php if (($url == 'admin.php')) echo "class='active'"; ?> ><a href="/?page=admin&setting=access"><i class="fa fa-user"></i> <span>Access Control</span></a></li>
      <?php } ?>
    </ul><!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>