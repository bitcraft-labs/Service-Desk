<!-- Main Header -->
<header class="main-header">
  <!-- Logo -->
  <a href="./" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><?php echo "<img src='$logo_dark' width='25' />"?></span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><?php echo "$formatted_logo_top"?></span>
  </a>

  <!-- Header Navbar -->
  <nav class="navbar navbar-static-top" role="navigation">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>
    <!-- <ul class="nav navbar-nav">
      <li><a href="#">ServiceDesk Pro Management Appliance</a></li>
    </ul> -->
    <!-- Navbar Right Menu -->
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
      <?php include_once 'modules/information_bar.php'; ?>
        <!-- Control Sidebar Toggle Button -->
        <!-- Uncomment to enable / comment to disable
        <li>
          <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
        </li>
        -->
      </ul>
    </div>
  </nav>
</header>
