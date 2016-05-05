<!-- TEMPORARY READ COMMENTS FILE -->
<?php
  $info = $dali->buildCommentDisplay($_GET['mb']);
  if(isset($_POST['submitted'])) {
     $dali->sendComment($_SESSION['userID'], $_POST['editor1'], $info['fromId'], $info['sr_num'], $_POST['subject']);
  }
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<div class="ssp-title">
    <div class="container">
      <h3>Self-Service Portal <small>(Mailbox)</small><br><small>
      Reading Message # <?= $_GET['mb'] ?></small></h3>
    </div>
  </div>
  <div class="container">
  
  <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-custom">
            <div class="box-header with-border">
              <h3 class="box-title">Read Mail</h3>
              <div class="box-tools pull-right">
                <a href="?page='Mailbox&mb=<?= $_GET['mb']; ?>'" class="btn btn-box-tool" data-toggle="tooltip" title="Previous"><i class="fa fa-chevron-left"></i></a>
                <a href="?page='Mailbox&mb=<?= $_GET['mb']; ?>'" class="btn btn-box-tool" data-toggle="tooltip" title="Next"><i class="fa fa-chevron-right"></i></a>
              </div>
            </div>

            <section class="content">
              <!-- /.box-header --><div id="print_div">
              <div class="box-body no-padding">
                <div class="mailbox-read-info">

                  <h3><?= $info['subject']; ?></h3>
                  <h5>From: <?= $info['email']; ?>
                    <span class="mailbox-read-time pull-right"><?= $info['when']; ?></span></h5>
                </div>
                <!-- /.mailbox-read-info -->
                <div class="mailbox-controls with-border text-center">
                  <div class="btn-group">
                    <span data-toggle="modal" data-target="#mailboxModal">
                      <button type="button" onClick="mailBox_functions();" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="Reply">
                      <i class="fa fa-reply"></i></button>
                    </span>
                  </div>
                  <!-- /.btn-group -->
                  <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" title="Print" onClick="printing_functions();">
                    <i class="fa fa-print"></i></button>
                </div>
                <!-- /.mailbox-controls -->
                <div class="mailbox-read-message">
                  <p><?= $info['message']; ?></p>
                </div>
                <!-- /.mailbox-read-message -->
              </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <div class="pull-right">
                <button onClick="mailBox_functions();" data-target='#mailboxModal' type="button" class="btn btn-default"><i class="fa fa-reply"></i> Reply</button>
                </div>
                <button onClick="printing_functions();" type="button" class="btn btn-default"><i class="fa fa-print"></i> Print</button>
              </div>
              <!-- /.box-footer -->
            </div>

            <div data-show="0" id="text_edit" class="skew-down">
              <div class="col-lg-12">
                  <!-- Submit comment -->
                  <form id="mailbox-form" method="POST" action="" class="form" role="form">
                    <div class="form-group">
                      <input type="hidden" name="subject" value="RE: <?= $info['subject'] ?>">
                      <textarea id="editor1" name="editor1"></textarea>
                    </div>
                      <button name="submitted" onClick="" type="submit" class="btn btn-lg btn-custom">Send!</button>
                  </form>
              </div>
            </div>

          </div>
          <!-- /.col -->
        </section>
      </div>
    </div>
