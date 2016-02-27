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
  $personinfo = $dali->getPersonInfo($whoami);
  foreach ($personinfo as $prow) {}
  $joindate = strtotime( $prow['creation_date'] );
  $cdate = date( 'F d, Y', $joindate );
?>
<html>
  	<?php
    $page_title = 'Profile';
    include_once 'modules/head.php'; ?>
    <?php echo "<body class='hold-transition skin-$skin sidebar-mini'>"; ?>
    <div class="wrapper">
    <?php
    // build the user interface
    include_once 'modules/header.php';
    include_once 'modules/left_sidebar.php';
    include_once 'modules/profile/profile-ui.php';
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
    <script src="/bower/AdminLTE/dist/js/app.min.js"></script>

  </body>
</html>
