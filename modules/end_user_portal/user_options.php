<li class="dropdown">
  <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
    <i class="fa fa-user"> </i> <span class="signed-in-as">Signed in as <?= $_SESSION['username']; ?></span>
  </a>
  <ul class="dropdown-menu">
    <li><a href="?page=Profile">Profile</a></li>
    <?php
    if ($myACL->hasPermission('hd_portal')) {
      echo "<li><a href='HelpDesk.php'>Help Desk Portal</a></li>";
    }
    ?>
    <li class="divider"></li>
    <li><a href="/login.php?logout=1">Logout</a></li>
  </ul>
</li>
