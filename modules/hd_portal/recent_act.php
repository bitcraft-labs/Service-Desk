<!--Recent Activity table
TODO: Include database data into the tables

--->
<div class="col-md-6 col-xs-12">
  <div class="box box-solid box-purple">
    <div class="box-header">
      <h3 class="box-title">Recent Activity</h3>
    </div><!-- /.box-header -->
    <div class="box-body">
      <table id="recent_activity" class="table table-bordered table-striped">
        <?= $dali->buildSRTicketHdDashboard('all'); ?>
      </table>
      </div>
    </div>
  </div>
