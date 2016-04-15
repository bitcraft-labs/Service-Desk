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
