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
$page_title = 'End User Portal';
include_once 'modules/config.inc.php';
include_once 'modules/config-func.php';
require_once("./modules/authentication/config.php");

if(!$authenticator->CheckLogin())
{
    $authenticator->RedirectToURL("login.php");
    exit;
}
$dal = new DAL(); 
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?=$title ?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="/bower/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/bower/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="/bower/Ionicons/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="/bower/AdminLTE/plugins/datatables/dataTables.bootstrap.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/bower/AdminLTE/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    <?php echo "<link rel='stylesheet' href='/bower/AdminLTE/dist/css/skins/skin-$skin.min.css'>"; ?>
    <link rel="stylesheet" href="/dist/css/moreTabs.css">
    <link rel="stylesheet" href="/dist/css/sspTitle.css">
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
    <script src="/bower/jquery/dist/jquery.min.js"></script>
    <!-- jQuery UI -->
    <script src="/bower/AdminLTE/plugins/jQueryUI/jquery-ui.min.js"></script>
    <!-- Bootstrap -->
    <script src="/bower/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- SlimScroll -->
    <script src="/bower/AdminLTE/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="/bower/AdminLTE/plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->

    <script src="/bower/AdminLTE/dist/js/app.min.js"></script>
    <!-- DataTables -->
    <script src="/bower/AdminLTE/plugins/datatables/jquery.dataTables.js"></script>
    <script src="/bower/AdminLTE/plugins/datatables/dataTables.bootstrap.js"></script>
    <script>
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
          animate : {
            easing : "linear",
            duration : 500
          }
        });
      });
      $('.table > tbody > tr').on('click', function (event) {
        document.location = $(this).attr('data-href');
      })
    </script>
  </body>
</html>
