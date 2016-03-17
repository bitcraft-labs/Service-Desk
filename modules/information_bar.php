<li class="messages-menu"><a href="http://itsm-docs.bitcraftlabs.net" target="_blank"><i class="fa fa-question-circle"></i> Help</a></li>
<li class="messages-menu"><a href="ServiceRecord.php?sr=new"><i class="fa fa-plus"></i> New Ticket</a></li>
<?php if (($myACL->hasPermission('access_admin')) || ($myACL->hasPermission('manage_templates')) || ($myACL->hasPermission('manage_users'))) { ?>
<li class="messages-menu"><a href="Admin.php?action=ViewAdmin"><i class="fa fa-cogs"></i> Admin Panel</a></li>
<?php } ?>
<?php
// include_once 'messages_prev.php';
// include_once 'notifications_prev.php';
// include_once 'task_prev.php';
include_once 'user_options.php';
?>
