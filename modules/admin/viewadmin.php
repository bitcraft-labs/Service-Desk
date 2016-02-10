<!--top level tab content-->
<div class="tab-content">
    <!-- site settings -->
    <div id="site" class="tab-pane active">
        <br>
        <?php include_once 'modules/admin/viewsite.php'; ?>
    </div>

    <!-- user list/manage -->
    <div id="access_users" class="tab-pane">
        <br>
        <?php include_once 'modules/admin/viewacl.php'; ?>
    </div>

    <!-- user groups -->
    <div id="access_groups" class="tab-pane">
        user groups
    </div>

    <!-- sr list/templates -->
    <div id="sr_types" class="tab-pane">
        service record types/templates
    </div>

    <!-- sr security, who sees what templates -->
    <div id="sr_security" class="tab-pane">
        service record security
    </div>
</div>
