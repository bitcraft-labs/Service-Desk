<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <div class="ssp-title hd">
      <h3><i class="fa fa-files-o fa-2x pull-left"> </i>Knowledgebase<br><small>Experiencing a problem? These should solve it.</small></h3>
  </div>
  <?php if($_GET['page'] == 'knowledgebase' && !isset($_GET['kb'])) { ?>
	<!-- Main content -->
	<section class="content">
	<div class="row">
		<div class="col-md-12">
      <table id="kb_list" class="table table-bordered table-striped">
        <thead>
          <?php $thead = "
          <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Category</th>
            <th>Platform</th>
            <th>Views</th>
            <th>Publish Date</th>
          </tr>"; echo $thead; ?>
        </thead>
        <tbody>
          <?= $dali->buildKnowledgeBase(); ?>        
        </tbody>
        <tfoot>
          <?= $thead ?>
        </tfoot>
      </table>
	</section><!-- /.content -->
  <?php } else if ($_GET['page'] == 'knowledgebase' && isset($_GET['kb'])) { ?>
    <?php $info = $dali->buildKnowledgeBasePage($_GET['kb']); ?>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-solid box-purple">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-magic"></i>  Reading <?= $info['title'] ?></h3>
            </div>
            <section class="content">
              <div class="box-body">
                  <h3><?= $info['title']; ?></h3>
                  <h5>From: <?= $info['category']; ?>
                    <span class="mailbox-read-time pull-right">Last Updated - <?= $info['last_updated']; ?></span></h5>
                </div>
                <!-- /.mailbox-controls -->
                <div class="mailbox-read-message">
                  <p><?= $info['content']; ?></p>
                </div>
                <!-- /.mailbox-read-message -->
              
              <!-- /.box-body -->
              <div class="box-footer">
                <div class="pull-right">
                <h4>Written By - <?= $info['author']['username']; ?></h4>
                <small>Published - <?= $info['date']; ?></small>
                </div>
              </div>
              <!-- /.box-footer -->
            </div>
          </div>
          </div>
          <!-- /.col -->
        </section>
  <?php } ?>
</div><!-- /.content-wrapper -->

