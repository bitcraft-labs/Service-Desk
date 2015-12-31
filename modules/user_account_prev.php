<!-- User Account Menu -->
<li class="dropdown user user-menu">
  <!-- Menu Toggle Button -->
  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
    <!-- The user image in the navbar-->
    <img src="dist/img/avatar5.png" class="user-image" alt="User Image">
    <!-- hidden-xs hides the username on small devices so only the image appears. -->
    <span class="hidden-xs"><?= $authenticator->UserFullName() ?></span>
  </a>
  <ul class="dropdown-menu">
    <!-- The user image in the menu -->
    <li class="user-header">
      <img src="dist/img/avatar5.png" class="img-circle" alt="User Image">
      <p>
        <!-- Add User Title Column in Database -->
        <?= $authenticator->UserFullName() ?><!-- - Lead Developer -->
        <!-- Add 'member since' column in database -->
        <small>Member since Nov. 2015</small>
      </p>
    </li>
    <!-- Menu Body
    <li class="user-body">
      <div class="col-xs-4 text-center">
        <a href="#">Following</a>
      </div>
      <div class="col-xs-4 text-center">
        <a href="#">Recent</a>
      </div>
      <div class="col-xs-4 text-center">
        <a href="#">Inbox</a>
      </div>
    </li>-->
    <!-- Menu Footer-->
    <li class="user-footer">
      <div class="pull-left">
        <a href="/?page=profile" class="btn btn-default btn-flat">Profile</a>
      </div>
      <div class="pull-right">
        <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
      </div>
    </li>
  </ul>
</li>