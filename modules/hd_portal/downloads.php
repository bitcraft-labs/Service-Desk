<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <div class="ssp-title hd">
      <h3><i class="fa fa-download fa-2x pull-left"> </i>User Downloads<br><small>Available software downloads</small></h3>
  </div>

	<!-- Main content -->
	<section class="content">
	<div class="row">
		<div class="col-md-12">
      <table id="downloads" class="table table-bordered table-striped">
        <thead>
          <?php $thead = "
          <tr>
            <td>Name</td>
            <td>Developer</td>
            <td>Version</td>
            <td>Category</td>
            <td>Type</td>
            <td>Status</td>
          </tr>"; echo $thead; ?>
        </thead>
        <tbody>
          <tr class='clickableRow' data-href='https://www.google.com/chrome/browser/desktop/index.html'>
            <td>Google Chrome</td>
            <td>Google, Inc.</td>
            <td>65.80.22</td>
            <td>Web Browser</td>
            <td>Install</td>
            <td>Available</td>
          </a></tr>
        </tbody>
        <tfoot>
          <?= $thead ?>
        </tfoot>
      </table>
	</section><!-- /.content -->
</div><!-- /.content-wrapper -->
