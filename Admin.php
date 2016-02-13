<!DOCTYPE html>
<!--
Project:    Bitcraft Service Desk (An Open Source ITSM Web App)
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
<!-- jQuery -->
<script src="/bower/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="/bower/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="/bower/adminlte/dist/js/app.min.js"></script>
<!-- DataTables -->
<script src="/bower/adminlte/plugins/datatables/jquery.dataTables.js"></script>
<script src="/bower/adminlte/plugins/datatables/dataTables.bootstrap.js"></script>
<!-- SlimScroll -->
<script src="/bower/adminlte/plugins/slimScroll/jquery.slimscroll.js"></script>
<!-- FastClick -->
<script src="/bower/adminlte/plugins/fastclick/fastclick.min.js"></script>
<!-- InputMask -->
<script src="/bower/adminlte/plugins/input-mask/jquery.inputmask.js"></script>
<script src="/bower/adminlte/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="/bower/adminlte/plugins/input-mask/jquery.inputmask.extensions.js"></script>

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

  $('#admin_tabs').on('click', 'a[data-toggle="tab"]', function(e) {
      e.preventDefault();

      var $link = $(this);

      if (!$link.parent().hasClass('active')) {

        //remove active class from other tab-panes
        $('.tab-content:not(.' + $link.attr('href').replace('#','') + ') .tab-pane').removeClass('active');

        // click first submenu tab for active section
        $('a[href="' + $link.attr('href') + '_all"][data-toggle="tab"]').click();

        // activate tab-pane for active section
        $('.tab-content.' + $link.attr('href').replace('#','') + ' .tab-pane:first').addClass('active');
      }

    });
  	// Javascript to enable link to tab
  	var url = document.location.toString();
  	if (url.match('#')) {
  	    $('.nav-pills a[href=#'+url.split('#')[1]+']').tab('show') ;
  	}

  	// Change hash for page-reload
  	$('.nav-pills a').on('shown.bs.tab', function (e) {
  	    window.location.hash = e.target.hash;
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
