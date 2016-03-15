<!--Active users
TODO: Implement database data
-->

<div class="col-md-6 col-xs-12">
  <div class="box box-solid box-purple">
    <div class="box-header">
      <h3 class="box-title">Active Staff Users</h3>
    </div><!-- /.box-header -->
    <div class="box-body">
      <table id="active_staff" class="table table-bordered table-striped">
        <thead>
        <?php $tabhead="
          <tr>
            <td>First Name</td>
            <td>Last Name</td>
            <td>User Group</td>
            <td>Last Seen</td>
          </tr>"; echo $tabhead; ?>
        </thead>
        <tbody>
          <tr>
            <td>Allen</td>
            <td>Perry</td>
            <td>Help Desk Technician</td>
            <td>5 minutes ago</td>
          </tr>
          <tr>
            <td>Eugene</td>
            <td>Duffy</td>
            <td>Help Desk Technician</td>
            <td>2 hours ago</td>
          </tr>
          <tr>
            <td>Joshua</td>
            <td>Nasiatka</td>
            <td>Help Desk Manager</td>
            <td>Yesterday</td>
          </tr>
        </tbody>
        <tfoot>
          <?php echo $tabhead; ?>
        </tfoot>
      </table>
    </div>
  </div>
