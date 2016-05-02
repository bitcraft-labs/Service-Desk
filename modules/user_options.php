<li class="dropdown">
  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
    <i class="fa fa-user"> </i> <span class="signed-in-as">Signed in as <?= $_SESSION['username'] ?></span>
  </a>
  <ul class="dropdown-menu">
    <li><a href="/Profile.php">Profile</a></li>
    <?php
    	if($myACL->hasPermission("hd_portal") && basename(__FILE__) == 'EndUserPortal') {
    		echo '<li><a href="HelpDesk.php">Back to Dashboard</a></li>';
    	} else {
        echo '<li><a href="EndUserPortal.php">Self-Service Portal</a></li>';
      }
    ?>
    <li class="divider"></li>
    <li><a href="/logout.php">Logout</a></li>
  </ul>
</li>
