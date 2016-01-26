<!DOCTYPE html>
<!--
Project:    Bitcraft Service Desk (Working Title)
Lead Devs:  Joshua Nasiatka, Allen Perry, Eugene Duffy
For:        Software Engineering
Dev Date:   Spring 2016
Status:     Staging; Idea Testing; Development
-->
<html>
  	<?php
    include_once 'modules/admin/head.php'; ?>
    <?php echo "<body class='hold-transition skin-red sidebar-mini'>"; ?>
    <div class="wrapper">
		<?php
		// build the user interface
		include_once 'modules/header.php';
		include_once 'modules/left_sidebar.php';

    if ($_SESSION['user_type'] != 1) {
      include_once '404.php';
    } else {
      include_once 'modules/admin/functions.php';
      include_once 'modules/config-func.php';
      $dal = new DAL();
      include_once 'modules/admin/admin.php';
    }
		include_once 'modules/footer.php';
		include_once 'modules/control_sidebar.php';
    ?>
    </div><!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->
<!-- jQuery 2.1.4 -->
<script src="/plugins/jQuery/jQuery-2.1.4.min.js"></script>
<!-- Bootstrap 3.3.5 -->
<script src="/bootstrap/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="/dist/js/app.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.js"></script>
<!-- SlimScroll -->
<script src="plugins/slimScroll/jquery.slimscroll.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.min.js"></script>
<!-- InputMask -->
<script src="plugins/input-mask/jquery.inputmask.js"></script>
<script src="plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="plugins/input-mask/jquery.inputmask.extensions.js"></script>

<!-- page script -->
<script>
  $(function () {
    $('#adm_acl').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });

  jQuery(document).ready(function($) {
    $(".clickableRow").click(function() {
        window.document.location = $(this).data("href");
    });
  });
</script>

    <!-- Optionally, you can add Slimscroll and FastClick plugins.
         Both of these plugins are recommended to enhance the
         user experience. Slimscroll is required when using the
         fixed layout. -->
    <?php
    //include_once 'modules/admin/modals.php'; ?>
  </body>
</html>
