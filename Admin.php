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
  if (!($myACL->hasPermission('access_admin')) && !($myACL->hasPermission('manage_templates')) && !($myACL->hasPermission('manage_users'))) {
    header("location: /");
    exit;
  }
  include_once 'modules/admin/head.php';
?>
<?php
if (isset($_POST['action'])) {
  switch($_POST['action']) {
    case 'saveRoles':
      $redir = "?action=ViewAdmin&for=" . $_POST['userID'] . "&do=ChangeAccess#access_users";
      foreach ($_POST as $k => $v) {
        if (substr($k,0,5) == "role_") {
          $roleID = str_replace("role_","",$k);
          if ($v == '0' || $v == 'x') {
            $strSQL = sprintf("DELETE FROM `user_roles` WHERE `userID` = %u AND `roleID` = %u",$_POST['userID'],$roleID);
          } else {
            $strSQL = sprintf("REPLACE INTO `user_roles` SET `userID` = %u, `roleID` = %u, `addDate` = '%s'",$_POST['userID'],$roleID,date ("Y-m-d H:i:s"));
          }
          mysql_query($strSQL);
        }
      }

    break;
    case 'savePerms':
      $redir = "?action=ViewAdmin&for=" . $_POST['userID'] . "&do=ChangeAccess#access_users";
      foreach ($_POST as $k => $v) {
        if (substr($k,0,5) == "perm_") {
          $permID = str_replace("perm_","",$k);
          if ($v == 'x') {
            $strSQL = sprintf("DELETE FROM `user_perms` WHERE `userID` = %u AND `permID` = %u",$_POST['userID'],$permID);
          } else {
            $strSQL = sprintf("REPLACE INTO `user_perms` SET `userID` = %u, `permID` = %u, `value` = %u, `addDate` = '%s'",$_POST['userID'],$permID,$v,date ("Y-m-d H:i:s"));
          }
          mysql_query($strSQL);
        }
      }
    break;
    case 'saveRoleInfo':
      $redir = "?action=ViewAdmin&for=" . $_POST['roleID'] . "&do=EditGroup#access_groups";
      $strSQL = sprintf("REPLACE INTO `roles` SET `ID` = %u, `roleName` = '%s'",$_POST['roleID'],$_POST['roleName']);
      mysql_query($strSQL);
      if (mysql_affected_rows() > 1)
      {
        $roleID = $_POST['roleID'];
      } else {
        $roleID = mysql_insert_id();
      }
      foreach ($_POST as $k => $v)
      {
        if (substr($k,0,5) == "perm_")
        {
          $permID = str_replace("perm_","",$k);
          if ($v == 'X')
          {
            $strSQL = sprintf("DELETE FROM `role_perms` WHERE `roleID` = %u AND `permID` = %u",$roleID,$permID);
            mysql_query($strSQL);
            continue;
          }
          $strSQL = sprintf("REPLACE INTO `role_perms` SET `roleID` = %u, `permID` = %u, `value` = %u, `addDate` = '%s'",$roleID,$permID,$v,date ("Y-m-d H:i:s"));
          mysql_query($strSQL);
        }
      }
    break;
    case 'deleteRole':
      $redir = "?action=ViewAdmin#access_groups";
      $strSQL = sprintf("DELETE FROM `roles` WHERE `ID` = %u LIMIT 1",$_POST['roleID']);
      mysql_query($strSQL);
      $strSQL = sprintf("DELETE FROM `user_roles` WHERE `roleID` = %u",$_POST['roleID']);
      mysql_query($strSQL);
      $strSQL = sprintf("DELETE FROM `role_perms` WHERE `roleID` = %u",$_POST['roleID']);
      mysql_query($strSQL);
    break;
  }
  header("location: Admin.php" . $redir);
}
?>
    <?php echo "<body class='hold-transition skin-$skin sidebar-mini'>"; ?>
    <div class="wrapper">
		<?php
		// build the user interface
		include_once 'modules/header.php';
		include_once 'modules/left_sidebar.php';
        include_once 'modules/admin/functions.php';
        include_once 'modules/admin/admin.php';
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
<!-- DataTables -->
<script src="/bower/AdminLTE/plugins/datatables/jquery.dataTables.js"></script>
<script src="/bower/AdminLTE/plugins/datatables/dataTables.bootstrap.js"></script>
<!-- SlimScroll -->
<script src="/bower/AdminLTE/plugins/slimScroll/jquery.slimscroll.js"></script>
<!-- FastClick -->
<script src="/bower/AdminLTE/plugins/fastclick/fastclick.min.js"></script>
<!-- InputMask -->
<script src="/bower/AdminLTE/plugins/input-mask/jquery.inputmask.js"></script>
<script src="/bower/AdminLTE/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="/bower/AdminLTE/plugins/input-mask/jquery.inputmask.extensions.js"></script>

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

  $(document).ready(function(){
    //Manage hash in URL to open the right pill
    var hash = window.location.hash;
    // If a hash is provided
    if(hash && hash.length>0)
    {
        // Manage Pill titles
        $('ul.nav-pills li a').each(function( index ) {
            if($(this).attr('href')==hash)
                $(this).parent('li').addClass('active');
            else
                $(this).parent('li').removeClass('active');
        });
        // Manage Tab content
        var hash = hash.substring(1); // Remove the #
        $('div.tab-content div').each(function( index ) {
            if($(this).attr('id')==hash)
                $(this).addClass('active');
            else
                $(this).removeClass('active');
        });
    }
  });
  </script>
  </body>
</html>
