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
  if ($myACL->hasPermission('eu_portal') != true) {
    header("location: /");
    exit;
  }
    
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?=$title ?></title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="apple-touch-icon" sizes="57x57" href="/dist/img/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/dist/img/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/dist/img/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/dist/img/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/dist/img/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/dist/img/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/dist/img/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/dist/img/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/dist/img/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/dist/img/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/dist/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/dist/img/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/dist/img/favicon-16x16.png">
    <link rel="manifest" href="/dist/img/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/dist/img/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="bower/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="bower/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="bower/Ionicons/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="bower/AdminLTE/plugins/datatables/dataTables.bootstrap.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="bower/AdminLTE/plugins/select2/select2.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="bower/AdminLTE/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    <?php echo "<link rel='stylesheet' href='bower/AdminLTE/dist/css/skins/skin-$skin.min.css'>"; ?>
    <link rel="stylesheet" href="dist/css/app.css">
    <link rel="stylesheet" href="dist/css/moreTabs.css">
    <link rel="stylesheet" href="dist/css/sspTitle.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
  <!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
  <?php echo "<body class='hold-transition skin-$skin layout-top-nav'>"; ?>
    <div class="wrapper">
      <?php
      include_once 'modules/end_user_portal/header.php';
      if (isset($_GET['page'])) {
        if (($_GET['page'] == 'Mailbox') && (!$_GET['mb'])) {
          include_once 'modules/end_user_portal/mailbox.php';
        } else if(($_GET['page'] == 'ViewRequests') && (!$_GET['sr'])) {
          include_once 'modules/end_user_portal/requests.php';
        } else if($_GET['page'] == 'Profile') {
          include_once 'modules/end_user_portal/profile.php';
        } else if (($_GET['page'] == "ViewRequests") && ($_GET['sr'])) {
          include_once 'modules/end_user_portal/request_view.php';
        } else if(($_GET['page'] == "Mailbox") && ($_GET['mb'])) {
          include_once 'modules/end_user_portal/read-comments.php';
        }
      } else {
          include_once 'modules/end_user_portal/submit.php';
      }
      include_once 'modules/end_user_portal/footer.php'; ?>

    </div><!-- ./wrapper -->

    <!-- jQuery -->
    <script src="bower/jquery/dist/jquery.min.js"></script>
    <!-- jQuery UI -->
    <script src="bower/AdminLTE/plugins/jQueryUI/jquery-ui.min.js"></script>
    <!-- Bootstrap -->
    <script src="bower/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="bower/AdminLTE/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="bower/AdminLTE/plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="bower/AdminLTE/dist/js/app.min.js"></script>
    <!-- DataTables -->
    <script src="bower/AdminLTE/plugins/datatables/jquery.dataTables.js"></script>
    <script src="bower/AdminLTE/plugins/datatables/dataTables.bootstrap.js"></script>
    <!-- Select2 -->
    <script src="bower/AdminLTE/plugins/select2/select2.min.js"></script>
    <!-- Modal Validation -->
    <script type="text/javascript" src="dist/js/modalValidation.js"></script>
    <script type="text/javascript" src="dist/js/populateModalInformation.js"></script>
    <script type="text/javascript" src="dist/js/ckeditor/ckeditor.js"></script>
    <script type="text/javascript" src="dist/js/mailbox_functions.js"></script>
    <script>
    <?php if(($_GET['page'] == "Mailbox") && ($_GET['mb'])) echo "CKEDITOR.replace('editor1');"; ?>
      $(function () {
        $('#records').DataTable({
          "paging": true,
          "lengthChange": true,
          "searching": true,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
      $(function() {
        $("#accordion").accordion({
          collapsible : true,
          heightStyle : "content",
          animate : {
            easing : "linear",
            duration : 500
          }
        });
      });
      /* Annoying menu fix */
      $(function () {
        var $anchor_menu_fix = $(".dropdown-toggle")[4];
        $anchor_menu_fix.style.display = "none";
      });
      $('.table > tbody > tr').on('click', function (event) {
        document.location = $(this).attr('data-href');
      });
      $('.tab_value').on('click', function (event) {
        var $modal_title = $(this).attr('data-title');
        $('#incident-title').val($modal_title);
        modalInformation.fillModal($modal_title);
      });
    </script>
  </body>
</html>
