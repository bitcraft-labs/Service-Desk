<ul class="nav nav-tabs" id="interest_tabs">
    <!--top level tabs-->
  <li><a href="#site" data-toggle="tab">Site Settings</a></li>
  <li><a href="#access" data-toggle="tab">Access Control</a></li>
  <li><a href="#service_record" data-toggle="tab">Service Record</a></li>
</ul>

<!--top level tab content-->
<div class="tab-content">
    <!--site tab menu-->
    <div id="site" class="tab-pane">
        <ul class="nav nav-tabs" id="all_tabs">
            <li><a href="#site_database" data-toggle="tab">Database</a></li>
            <li><a href="#site_custom" data-toggle="tab">Customization</a></li>
        </ul>
    </div>

    <!--access tab menu-->
    <div id="access" class="tab-pane">
        <ul class="nav nav-tabs" id="brands_tabs">
            <li><a href="#access_users" data-toggle="tab">Users</a></li>
            <li><a href="#access_groups" data-toggle="tab">Groups</a></li>
            <li><a href="#access_perms" data-toggle="tab">Permissions</a></li>
        </ul>
    </div>

    <!--sr tab menu-->
    <div id="service_record" class="tab-pane">
        <ul class="nav nav-tabs" id="media_tabs">
            <li><a href="#service_record_types" data-toggle="tab">Request Types</a></li>
            <li><a href="#service_record_security" data-toggle="tab">Request Security</a></li>
        </ul>
    </div>
 </div>

    <!--site tab content-->
    <div class="tab-content">
        <div id="site_database" class="tab-pane">
            <p>The site database stuff shall be here</p>
        </div>
        <div id="site_custom" class="tab-pane">
            <p>The site customization stuff shall be here</p>
        </div>
    </div>

    <!--access tab content-->
    <div class="tab-content">
        <div id="access_users" class="tab-pane">
            <!--<p>The user list shall be here</p>-->
            <?php include_once 'modules/admin/viewacl.php'; ?>
        </div>
        <div id="access_groups" class="tab-pane">
            <p>The user permission groups shall be here</p>
        </div>
        <div id="access_perms" class="tab-pane">
            <p>The user permissions shall be here</p>
        </div>
    </div>

    <!--sr tab content-->
    <div class="tab-content">
      <div id="service_record_types" class="tab-pane">
          <p>The request types (templates, categories, descriptions, etc.) shall be here</p>
      </div>
      <div id="service_record_security" class="tab-pane">
          <p>The request security options (which users can see certain request types) shall be here</p>
      </div>
    </div>
