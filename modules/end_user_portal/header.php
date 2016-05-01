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
	          
				<li class="messages-menu"><a href="http://itsm-docs.bitcraftlabs.net" target="_blank"><i class="fa fa-question-circle"></i> <span class="signed-in-as">Help</span></a></li>
				<li class="messages-menu"><a href="EndUserPortal.php"><i class="fa fa-plus"></i> <span class="signed-in-as">New Ticket</span></ a></li>
	          <!-- User Account Menu -->
	          <?php 
	          	//include_once 'modules/end_user_portal/notification_area.php';
	          	include_once 'modules/end_user_portal/user_options.php'; ?>
	        </ul>
	      </div><!-- /.navbar-custom-menu -->
	  </div><!-- /.container-fluid -->
	</nav>
</header>
