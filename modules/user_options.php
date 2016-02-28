<li class="dropdown">
  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
    <i class="fa fa-user"> </i> <span class="signed-in-as">Signed in as <?= $_SESSION['username'] ?></span>
  </a>
  <ul class="dropdown-menu">
    <li><a href="/Profile.php"><i class="fa fa-user"> </i>Profile</a></li>
    <li class="divider"></li>
    <li><a href="/logout.php"><i class="fa fa-sign-out"> </i>Log out</a></li>
  </ul>
</li>
