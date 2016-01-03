<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<section class="content-header">
		<h1>Dashboard</h1>
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
            <div class="widget-user-header bg-yellow">
              <div class="widget-user-image">
                <img class="img-circle" src="dist/img/avatar5.png" alt="User Avatar">
              </div><!-- /.widget-user-image -->
              <h3 class="widget-user-username"><?php $authenticator->UserFullName() ?></h3>
              <h5 class="widget-user-desc">Lead Developer</h5>
            </div>
            <div class="box-footer no-padding">
              <ul class="nav nav-stacked">
                <li><a href="#">Projects <span class="pull-right badge bg-blue">31</span></a></li>
                <li><a href="#">Tasks <span class="pull-right badge bg-aqua">5</span></a></li>
                <li><a href="#">Completed Projects <span class="pull-right badge bg-green">12</span></a></li>
                <li><a href="#">Followers <span class="pull-right badge bg-red">842</span></a></li>
              </ul>
            </div>
          </div><!-- /.widget-user -->
        </div><!-- /.col -->
		<div class="col-sm-6 col-xs-12">
			<div class="info-box">
	        <span class="info-box-icon bg-aqua"><i class="fa fa-envelope-o"></i></span>
	        <div class="info-box-content">
	          <span class="info-box-text">Messages</span>
	          <span class="info-box-number">1,410</span>
	        </div><!-- /.info-box-content -->
          </div><!-- /.info-box -->
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-files-o"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Assigned Tickets</span>
              <span class="info-box-number">8</span>
            </div><!-- /.info-box-content -->
          </div><!-- /.info-box -->
		</div>
		
	</div>
	</section><!-- /.content -->
</div><!-- /.content-wrapper -->