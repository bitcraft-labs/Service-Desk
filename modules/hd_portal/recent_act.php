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
        <thead>
          <?php $thead = "
          <tr>
            <td>SR#</td>
            <td>Requester</td>
            <td>Status</td>
            <td>Updated By</td>
            <td>Last Updated</td>
          </tr>"; echo $thead;?>
        </thead>
        <tbody>
          <tr class="clickableRow" data-href="ServiceRecord.php?sr=1">
            <td>1</td>
            <td>Allen Perry</td>
            <td>In Progress</td>
            <td>Joshua Nasiatka</td>
            <td>12/2/2015</td>
          </tr>
          <tr class="clickableRow" data-href="ServiceRecord.php?sr=2">
            <td>2</td>
            <td>Jacob Lee</td>
            <td>In Progress</td>
            <td>Wade Wilson</td>
            <td>2/12/2016</td>
          </tr>
          <tr class="clickableRow" data-href="ServiceRecord.php?sr=3">
            <td>3</td>
            <td>Eugene Duffy</td>
            <td>In Progress</td>
            <td>Mac Admin</td>
            <td>2/30/2016</td>
          </tr>
        </tbody>
        <tfoot>
          <?= $thead ?>
        </tfoot>
      </table>
      </div>
    </div>
  </div>
