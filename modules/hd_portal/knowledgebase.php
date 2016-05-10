<?php
if (isset($_POST['submitKB'])) {
  $dali->submitKB($_POST['article-title'], $_POST['article-content'], $_POST['article-category'], $_POST['article-platform']);
  $newKB = $dali->getKB($_POST['article-title'], 'title');
  header("Location: ?page=knowledgebase&kb=$newKB");
  exit;
}
?>
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
      <button class="btn btn-custom" data-toggle="modal" data-target="#newKB">New KB</button>
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

<!-- NEW KB MODAL -->
<div id="newKB" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Generate New KB Article</h4>
      </div>
      <div class="modal-body">
        <p>Let's make our job easier and teach the end-users how to fix their own issues.</p>
        <form class="form" action="" method="post">
          <div class="form-group">
						<label for="article-title">Article Title</label>
						<input type="text" class="form-control input-md" id="article-title" name="article-title" placeholder="Insert Fancy Title Here">
					</div>
          <div class="form-group">
						<label for="article-content">Article Content</label>
						<textarea class="form-control" style="resize:none" rows="8" id="article-content" name="article-content" placeholder="e.g. Describe how to resolve the issue"></textarea>
					</div>
          <div class="form-group">
            <label for="article-category">Category</label>
            <select class="form-control input-md" name="article-category">
              <option value="" selected disabled>Select a Category</option>
              <option value="Web Development">Web Development</option>
              <option value="Software">Software</option>
              <option value="Login Issues">Login Issues</option>
              <option value="Online Service">Online Service</option>
            </select>
          </div>
          <div class="form-group">
            <label for="article-platform">Platform</label>
            <select class="form-control input-md" name="article-platform">
              <option value="" selected disabled>Select a Platform</option>
              <option value="Everything">Everything</option>
              <option value="Mac OS X">Mac OS X</option>
              <option value="Windows">Windows</option>
              <option value="Linux">Linux</option>
            </select>
          </div>
          <button type="submit" class="btn btn-custom btn-md btn-block" name="submitKB">Save</button>
        </form>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-custom" data-dismiss="modal">Close</button>
      </div> -->
    </div>

  </div>
</div>
