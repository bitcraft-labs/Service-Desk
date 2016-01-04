<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<section class="content-header">
		<h1>Dashboard</h1>
		<p>User Type: <?php echo $_SESSION['user_type']; ?></p>
			<ol class="breadcrumb">
		    <li><a href="?page=dashboard"><i class="fa fa-dashboard"></i> Top</a></li>
		    <li class="active">Dashboard</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">
	<!--<div class="container-fluid">-->
	<div class="row">
		<div class="col-md-6 col-xs-12">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-aqua">
              <div class="widget-user-image">
                <img class="img-circle" src="dist/img/avatar5.png" alt="User Avatar">
              </div><!-- /.widget-user-image -->
              <h3 class="widget-user-username"><?= $authenticator->UserFullName() ?></h3>
              <h5 class="widget-user-desc">Lead Developer</h5>
            </div>
            <div class="box-footer no-padding">
              <ul class="nav nav-stacked">
                <li><a href="#">Assigned Service Records <span class="pull-right badge bg-blue">31</span></a></li>
                <li><a href="#">Emails <span class="pull-right badge bg-aqua">5</span></a></li>
                <li><a href="#">Completed Service Records <span class="pull-right badge bg-green">12</span></a></li>
              </ul>
            </div>
          </div><!-- /.widget-user -->
        </div><!-- /.col -->
		<div class="col-md-6 col-xs-12">
			<div class="info-box">
	        <span class="info-box-icon bg-yellow"><i class="fa fa-envelope-o"></i></span>
	        <div class="info-box-content">
	          <span class="info-box-text">Messages</span>
	          <span class="info-box-number">5</span>
	        </div><!-- /.info-box-content -->
          </div><!-- /.info-box -->
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-files-o"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Assigned Tickets</span>
              <span class="info-box-number">31</span>
            </div><!-- /.info-box-content -->
          </div><!-- /.info-box -->
		</div>	
	</div>
	<div class="row">
		<div class="col-md-6 col-xs-12">
			<div class="box">
				<div class="box-header">
				  <h3 class="box-title">Recent Activity</h3>
				</div><!-- /.box-header -->
				<div class="box-body">

					<table id="recent_activity" class="table table-bordered table-striped">
						<thead>
						<?php $tabhead="
							<tr>
								<td>#</td>
								<td>First Name</td>
								<td>Last Name</td>
								<td>User Group</td>
								<td>Active SR #</td>
								<td>Last Online</td>
							</tr>"; echo $tabhead; ?>
						</thead>
						<tbody>
							<?php /*
							$dal = new DAL();
							$personinfo = $dal->getPersonInfo('all');
							if ($personinfo) {
								foreach($personinfo as $row) {
							    echo "<tr>
								    	<td><a href='?id=$row->user_id'>$row->user_id</a></td>
								    	<td>$row->name</td>
								    	<td>@$row->banner_id</td>
								    	<td>$row->user_type</td>
								    	<td>$row->phone</td>
								    	<td>$row->email</td>
								    	<td>12/1/2015</td>
								    	</tr>";
							  	}
							} */
							?>
							<!--
							<tr>
								<td><a href="?id=1">1</a></td>
								<td>Jo Shmo</td>
								<td>@01234567</td>
								<td>Student</td>
								<td>555.555.5555</td>
								<td>jshmo1@student.fitchburgstate.edu</td>
								<td>12/3/2015</td>
							</tr>
							-->
						</tbody>
						<tfoot>
							<?php echo $tabhead; ?>
						</tfoot>
					</table>
				</div>
			</div>
		</div>
		<div class="col-md-6 col-xs-12">
			<div class="box">
				<div class="box-header">
				  <h3 class="box-title">Active Staff Users</h3>
				</div><!-- /.box-header -->
				<div class="box-body">
					<table id="active_staff" class="table table-bordered table-striped">
						<thead>
						<?php $tabhead="
							<tr>
								<td>#</td>
								<td>First Name</td>
								<td>Last Name</td>
								<td>User Group</td>
								<td>Active SR #</td>
								<td>Last Online</td>
							</tr>"; echo $tabhead; ?>
						</thead>
						<tbody>
							<?php /*
							$dal = new DAL();
							$personinfo = $dal->getPersonInfo('all');
							if ($personinfo) {
								foreach($personinfo as $row) {
							    echo "<tr>
								    	<td><a href='?id=$row->user_id'>$row->user_id</a></td>
								    	<td>$row->name</td>
								    	<td>@$row->banner_id</td>
								    	<td>$row->user_type</td>
								    	<td>$row->phone</td>
								    	<td>$row->email</td>
								    	<td>12/1/2015</td>
								    	</tr>";
							  	}
							} */
							?>
							<!--
							<tr>
								<td><a href="?id=1">1</a></td>
								<td>Jo Shmo</td>
								<td>@01234567</td>
								<td>Student</td>
								<td>555.555.5555</td>
								<td>jshmo1@student.fitchburgstate.edu</td>
								<td>12/3/2015</td>
							</tr>
							-->
						</tbody>
						<tfoot>
							<?php echo $tabhead; ?>
						</tfoot>
					</table>
				</div>
			</div>
		</div>
	</div>
	</section><!-- /.content -->
</div><!-- /.content-wrapper -->

