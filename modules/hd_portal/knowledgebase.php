<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <div class="ssp-title hd">
      <h3><i class="fa fa-files-o fa-2x pull-left"> </i>Knowledgebase<br><small>Learn all da things!</small></h3>
  </div>

	<!-- Main content -->
	<section class="content">
	<div class="row">
		<div class="col-md-12">
      <table id="kb_list" class="table table-bordered table-striped">
        <thead>
          <?php $thead = "
          <tr>
            <td>ID</td>
            <td>Title</td>
            <td>Category</td>
            <td>Platform</td>
            <td>Views</td>
            <td>Publish Date</td>
          </tr>"; echo $thead; ?>
        </thead>
        <tbody>
          <tr class='clickableRow' data-href='?page=knowledgebase&kb=1'>
            <td>KB:00001</td>
            <td>Troubleshooting javascript</td>
            <td>Web Development</td>
            <td>Everything</td>
            <td>1</td>
            <td>2016-04-10</td>
          </tr>
          <tr class='clickableRow' data-href='?page=knowledgebase&kb=2'>
            <td>KB:00002</td>
            <td>Obtaining MS Office 2016 for Mac</td>
            <td>Software</td>
            <td>Mac OS X</td>
            <td>113</td>
            <td>2016-04-10</td>
          </tr>
          <tr class='clickableRow' data-href='?page=knowledgebase&kb=3'>
            <td>KB:00003</td>
            <td>Keychain Issues</td>
            <td>Login Issues</td>
            <td>Mac OS X</td>
            <td>217</td>
            <td>2016-04-10</td>
          </tr>
          <tr class='clickableRow' data-href='?page=knowledgebase&kb=4'>
            <td>KB:00004</td>
            <td>Projector won't turn on</td>
            <td>Instructional Technology</td>
            <td>N/A</td>
            <td>3</td>
            <td>2016-04-10</td>
          </tr>
          <tr class='clickableRow' data-href='?page=knowledgebase&kb=5'>
            <td>KB:00005</td>
            <td>iPhone not connecting to WiFi</td>
            <td>Wireless</td>
            <td>iOS</td>
            <td>13</td>
            <td>2016-04-10</td>
          </tr>
          <tr class='clickableRow' data-href='?page=knowledgebase&kb=6'>
            <td>KB:00006</td>
            <td>Setting up Device on University Network</td>
            <td>Networking</td>
            <td>Everything</td>
            <td>327</td>
            <td>2016-04-10</td>
          </tr>
        </tbody>
        <tfoot>
          <?= $thead ?>
        </tfoot>
      </table>
	</section><!-- /.content -->
</div><!-- /.content-wrapper -->
