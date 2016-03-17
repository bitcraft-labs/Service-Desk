<!-- TEMPORARY READ COMMENTS FILE -->
<?php $info = $dali->buildCommentDisplay($_GET['mb']); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <div class="container">
  <section class="content-header">
    <h1>WebMail (<?= $_GET['mb']; ?>)</h1>
    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Top</a></li>
        <li class="active">Mailbox</li>
    </ol>
  </section>
  <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-custom">
            <div class="box-header with-border">
              <h3 class="box-title">Read Mail</h3>
              <div class="box-tools pull-right">
                <a href="#" class="btn btn-box-tool" data-toggle="tooltip" title="Previous"><i class="fa fa-chevron-left"></i></a>
                <a href="#" class="btn btn-box-tool" data-toggle="tooltip" title="Next"><i class="fa fa-chevron-right"></i></a>
              </div>
            </div>
            <section class="content">
              <!-- /.box-header -->
              <div class="box-body no-padding">
                <div class="mailbox-read-info">
                  <h3><?= $info['subject']; ?></h3>
                  <h5>From: <?= $info['email']; ?>
                    <span class="mailbox-read-time pull-right"><?= $info['when']; ?></span></h5>
                </div>
                <!-- /.mailbox-read-info -->
                <div class="mailbox-controls with-border text-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="Delete">
                      <i class="fa fa-trash-o"></i></button>
                    <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="Reply">
                      <i class="fa fa-reply"></i></button>
                    <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="Forward">
                      <i class="fa fa-share"></i></button>
                  </div>
                  <!-- /.btn-group -->
                  <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" title="Print">
                    <i class="fa fa-print"></i></button>
                </div>
                <!-- /.mailbox-controls -->
                <div class="mailbox-read-message">
                  <p><?= $info['message']; ?></p>
                </div>
                <!-- /.mailbox-read-message -->
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <div class="pull-right">
                  <button type="button" class="btn btn-default"><i class="fa fa-reply"></i> Reply</button>
                  <button type="button" class="btn btn-default"><i class="fa fa-share"></i> Forward</button>
                </div>
                <button type="button" class="btn btn-default"><i class="fa fa-trash-o"></i> Delete</button>
                <button type="button" class="btn btn-default"><i class="fa fa-print"></i> Print</button>
              </div>
              <!-- /.box-footer -->
            </div>
            <!-- /. box -->
          </div>
          <!-- /.col -->
        </section>
      </div>
    </div>

