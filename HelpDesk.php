<!DOCTYPE html>
<!--
Project:    Bitcraft Service Desk (An Open Source ITSM Web App)
Lead Devs:  Joshua Nasiatka, Allen Perry, Eugene Duffy
For:        Software Engineering
Dev Date:   Spring 2016
Status:     Staging; Idea Testing; Development
-->
<?php
  include("modules/mainhead.php");
  if ($myACL->hasPermission('hd_portal') != true) {
    header("location: /");
    exit;
  }
?>
<html>
  	<?php
    include_once 'modules/head.php'; ?>
    <?php echo "<body class='hold-transition skin-$skin sidebar-mini'>"; ?>
    <div class="wrapper">
		<?php
		// build the user interface
		include_once 'modules/header.php';
		include_once 'modules/left_sidebar.php';
		include_once 'modules/page_handling.php';
		include_once 'modules/footer.php';
		include_once 'modules/control_sidebar.php';?>
    </div>

<!-- REQUIRED JS SCRIPTS -->
<!-- jQuery -->
<script src="bower/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="bower/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="bower/AdminLTE/dist/js/app.min.js"></script>
<!-- DataTables -->
<script src="bower/AdminLTE/plugins/datatables/jquery.dataTables.js"></script>
<script src="bower/AdminLTE/plugins/datatables/dataTables.bootstrap.js"></script>
<!-- SlimScroll -->
<script src="bower/AdminLTE/plugins/slimScroll/jquery.slimscroll.js"></script>
<!-- FastClick -->
<script src="bower/AdminLTE/plugins/fastclick/fastclick.min.js"></script>
<!-- InputMask -->
<script src="bower/AdminLTE/plugins/input-mask/jquery.inputmask.js"></script>
<script src="bower/AdminLTE/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="bower/AdminLTE/plugins/input-mask/jquery.inputmask.extensions.js"></script>

<!-- page script -->
<script>
  $(function () {
    $('#active_staff').DataTable({
      "paging": false,
      "lengthChange": true,
      "searching": false,
      "ordering": false,
      "info": true,
      "autoWidth": false
    });
  });

  $(function () {
    $('#recent_activity').DataTable({
      "paging": false,
      "lengthChange": false,
      "searching": false,
      "ordering": false,
      "info": true,
      "autoWidth": false
    });
  });

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

  $(function () {
    $('#downloads').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });

  $(function () {
    $('#kb_list').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });

  $(function () {
    $('#downloads2').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });

  jQuery(document).ready(function($) {
    $(".clickableRow").on("click",function() {
      if (this.parentNode.parentNode.getAttribute("id") === "downloads") {
        window.open($(this).attr("data-href"),"_blank");
      } else {
        document.location = $(this).attr("data-href");
      }
    });
  });

  $('ul#sdesk').toggle(200);
</script>

    <!-- Optionally, you can add Slimscroll and FastClick plugins.
         Both of these plugins are recommended to enhance the
         user experience. Slimscroll is required when using the
         fixed layout. -->
    <?php
    include_once 'modules/modals.php'; ?>
  </body>
</html>
