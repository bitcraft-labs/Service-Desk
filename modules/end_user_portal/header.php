<header class="main-header">
	<nav class="navbar navbar-static-top">
	  <div class="container">
	    <div class="navbar-header">
	      <a href="EndUserPortal.php" class="navbar-brand"><?php echo "$formatted_logo_top"?></a>
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
	        <i class="fa fa-bars"></i>
	      </button>
	    </div>
	    <!-- Collect the nav links, forms, and other content for toggling --> <!-- EndUserPortal.php?page=sr -->
	    <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
	      <ul class="nav navbar-nav">
	        <li <?php if (($_GET['page']) == '' && (!$_GET['sr'])) echo 'class="active"'; ?> ><a href="EndUserPortal.php">Home <span class="sr-only">Home</span></a></li>
	        <li <?php if (($_GET['page'] == "ViewRequests") || (($_GET['page'] == "ViewRequests") && ($_GET['sr']))) echo 'class="active"';?> ><a href="?page=ViewRequests">Requests <span class="sr-only">Requests</span></a></li>
	        <li <?php if ($_GET['page'] == 'Profile') echo 'class="active"'; ?> ><a href="?page=Profile">Profile <span class="sr-only">Profiles</span></a></li>
	        <li <?php if ($_GET['page'] == 'Mailbox') echo 'class="active"'; ?> ><a href="?page=Mailbox">Mailbox <span class="sr-only">Mailbox</span></a></li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	    <!-- Navbar Right Menu -->
	      <div class="navbar-custom-menu">
	        <ul class="nav navbar-nav">
	          <!-- Messages: style can be found in dropdown.less-->
	          <li class="dropdown messages-menu">
	            <!-- Menu toggle button -->
	            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
	              <i class="fa fa-envelope-o"></i>
	              <span class="label label-success">4</span>
	            </a>
	            <ul class="dropdown-menu">
	              <li class="header">You have 4 messages</li>
	              <li>
	                <!-- inner menu: contains the messages -->
	                <ul class="menu">
	                  <li><!-- start message -->
	                    <a href="#">
	                      <div class="pull-left">
	                        <!-- User Image -->
	                        <!-- Does not exist - Eugene -->
	                        <!-- <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image"> -->
	                      	<i class="text-aqua fa fa-envelope-o "></i>
	                      </div>
	                      <!-- Message title and timestamp -->
	                      <h4>
	                        Support Team
	                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
	                      </h4>
	                      <!-- The message -->
	                      <p>Why not buy a new awesome theme?</p>
	                    </a>
	                  </li><!-- end message -->
	                </ul><!-- /.menu -->
	              </li>
	              <li class="footer"><a href="#">See All Messages</a></li>
	            </ul>
	          </li><!-- /.messages-menu -->

	          <!-- Notifications Menu -->
	          <li class="dropdown notifications-menu">
	            <!-- Menu toggle button -->
	            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
	              <i class="fa fa-bell-o"></i>
	              <span class="label label-warning">10</span>
	            </a>
	            <ul class="dropdown-menu">
	              <li class="header">You have 10 notifications</li>
	              <li>
	                <!-- Inner Menu: contains the notifications -->
	                <ul class="menu">
	                  <li><!-- start notification -->
	                    <a href="#">
	                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
	                    </a>
	                  </li><!-- end notification -->
	                </ul>
	              </li>
	              <li class="footer"><a href="#">View all</a></li>
	            </ul>
	          </li>
	          <!-- User Account Menu -->
	          <?php include_once 'modules/end_user_portal/user_options.php'; ?>
	        </ul>
	      </div><!-- /.navbar-custom-menu -->
	  </div><!-- /.container-fluid -->
	</nav>
</header>
