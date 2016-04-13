<?php 
  /*
    Process POST submit
  */
    $modal_success = '<div id="modal_success">';
    $modal_success_prompt = "<div class='alert alert-custom alert-dismissable' id='modal_success_prompt'>";
    $modal_success_prompt .= "<button type='button' class='close' data-dismiss='alert'>x</button>";
    $modal_success_prompt .= "<i class='fa fa-star-o'></i> Thank you for your submission!" . '</div></div>';
    $modal_success .= $modal_success_prompt;
    if(isset($_POST['submit'])) {
      $modal_title = $_POST['incident-title'];
      $modal_building = $_POST['incident-building'] ? $_POST['incident-building'] : NULL;
      $modal_room_number = $_POST['incident-room-number'] ? $_POST['incident-room-number'] : NULL;
      $modal_description = $_POST['incident-description'];
      $modal_phone = $_POST['incident-phone'];
      $dali->submitModalForm($modal_title, $modal_building, $modal_room_number, $modal_description, $modal_phone); 
    }

 ?>

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
          <?php if(isset($_POST['submit'])) { echo $modal_success; } ?>
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
