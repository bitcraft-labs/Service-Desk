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
                <a href="?page='Mailbox&mb=<?= $_GET['mb']; ?>'" class="btn btn-box-tool" data-toggle="tooltip" title="Previous"><i class="fa fa-chevron-left"></i></a>
                <a href="?page='Mailbox&mb=<?= $_GET['mb']; ?>'" class="btn btn-box-tool" data-toggle="tooltip" title="Next"><i class="fa fa-chevron-right"></i></a>
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
                    <span data-toggle="modal" data-target="#mailboxModal">
                      <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="Reply">
                      <i class="fa fa-reply"></i></button>
                    </span>
                  </div>
                  <!-- /.btn-group -->
                  <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" title="Print" onClick="window.print();">
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
                  <button data-toggle="modal" data-target='#mailboxModal' type="button" class="btn btn-default"><i class="fa fa-reply"></i> Reply</button>
                </div>
                <button onClick="window.print();" type="button" class="btn btn-default"><i class="fa fa-print"></i> Print</button>
              </div>
              <!-- /.box-footer -->
            </div>
            <!-- /. box --> 
            <div id="text_edit" class="container">
              <div class="col-lg-12">
                <!-- Text Options -->
                <div class="col-md-6">
                  <div class="btn-group">
                      <button name="mailbox_bold" id="mailbox_bold" onClick="mailboxHandler(this);"><i class="fa fa-bold"></i></button>
                      <button name="mailbox_italic" id="mailbox_italic" onClick="mailboxHandler(this);"><i class="fa fa-italic"></i></button>
                      <button name="mailbox_underline" id="mailbox_underline" onClick="mailboxHandler(this);"><i class="fa fa-underline"></i></button>
                      <select onChange="mailboxHandler(this);" name="font_sizing_mailbox" id="mailbox_fs">
                        <option value="" disabled>---Font Size---</option>
                        <option value="8">8 pts</option>
                        <option selected value="10">10 pts</option>
                        <option value="11">11 pts</option>
                        <option value="12">12 pts</option>
                        <option value="14">14 pts</option>
                        <option value="16">16 pts</option>
                      </select>
                      <button name="mailbox_link" id="mailbox_link"><i class="fa fa-link"></i></button>
                      <button name="mailbox_code" id="mailbox_code" onClick="mailboxHandler(this);"><i class="fa fa-code"></i></button>
                  </div> <!-- / btn-group -->
                </div> <!-- / col-md-6 -->
                  <!-- Submit comment -->
                  <form id="mailbox-form" method="POST" action="<?= $authenticator->GetSelfScript(); ?>" class="form" role="form">
                  <div class="form-group">
                      <div name="input_textarea" id="input_textarea" contenteditable></div>
                      </div>
                    <button name="submit" onClick="" type="submit" class="btn btn-lg btn-custom">Send!</button>
                  </form> 
              </div>
            </div>
          </div>
          <!-- /.col -->
        </section>
      </div>
    </div>
