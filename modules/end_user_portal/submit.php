<!-- Full Width Column -->
<div class="content-wrapper">
  <div class="ssp-title">
    <div class="container">
      <h3><!--<i class="fa fa-laptop fa-2x pull-left"></i> -->Self-Service Portal<br><small>The IT Help Desk is here for you. Let us know how we can help!</small></h3>
    </div>
  </div>
  <!-- Tabs options for displaying submit options -->
  <div class="container container-reg">
    <div class="row">
       <div class="col-md-12">
          <!-- tabs right -->
          <div class="tabbable tabs-left">
              <ul class="nav nav-tabs m-width">
                <?= $dali->buildCategorySections(); ?>
              </ul>
              <div class="tab-content ssp-options">
                <?= $dali->buildSubCategorySections(); ?>
              </div>
          </div>
          <!-- /tabs -->
      </div>
    </div><!-- /row -->
  </div>
  <!-- Accordion for mobile view -->
  <?php include_once 'submit-mobile.php'; ?>
</div><!-- /.content-wrapper -->
<?php include_once 'modals.php'; ?>
