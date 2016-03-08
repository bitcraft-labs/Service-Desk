<?php 
	/*	
		Process POST submit
	*/
	$modal_success = '<div id="modal_success">';
    $modal_success_prompt = "<div class='alert alert-custom alert-dismissable' id='modal_success_prompt'>";
    $modal_success_prompt .= "<button type='button' class='close' data-dismiss='alert'>x</button>";
    $modal_success_prompt .= "<i class='fa fa-star-o'></i> Thank you for your submission!" . '</div></div>';
    $modal_success .= $modal_success_prompt;

 ?>

<div class="container container-mobile">
  <div class="row">
    <div class="col-md-12">
      <?php if(isset($_POST['submit']))  { echo $modal_success; } ?>
      <div id="accordion">
      <?= $dali->buildMobileCategoryAccordion(); ?>
      </div>
    </div>
  </div>
</div>
