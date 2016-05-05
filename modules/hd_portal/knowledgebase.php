<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <div class="ssp-title hd">
      <h3><i class="fa fa-files-o fa-2x pull-left"> </i>Knowledgebase<br><small>Experiencing a problem? These should solve it.</small></h3>
  </div>

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
</div><!-- /.content-wrapper -->
