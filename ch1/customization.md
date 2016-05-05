# Customization Options
The installer and admin portal will be able to handle the customization options which include:
- Themes
- Database Configurations
- Logos
- System Emails
- etc.

This is what a sample configuration will look like:
```php
<?php
/*
Project:    Bitcraft Service Desk (An Open Source ITSM Web App)
Lead Devs:  Joshua Nasiatka, Allen Perry, Eugene Duffy
For:        Software Engineering
Dev Date:   Spring 2016
Status:     Still in [Alpha] Development

Thank you for using Bitcraft Service Desk, we appreciate you trusting us with your ITSM needs

This is a generated file from system settings. Modifying this file can harm the integrity of the
application.
*/
$conf = array (
  /* --- MySQL Settings --- */
  /**
   * @NOTE SQL settings can be manually edited here
   *       just change host, user, pass, name, etc. as needed
   */
  'sql' => array (
    'host'    => 'DB_HOSTNAME',
    'user'    => 'DB_USER',
    'pass'    => 'DB_PASS',
    'name'    => 'DB_NAME',
    'prefix'  => ''
  ),

  /* --- Security Settings --- */
  /**
   * @NOTE Not implemented yet, for future use
   */
  'security' => array (
    'restrict_ips'      => false,
    'allowed_networks'  => array()
  ),

  /* --- Theme Design Options --- */
  /**
   * @NOTE Please use the admin panel to modify these
   *       settings
   */
  'customize' => array (
		'skin'            => 'purple',
		'darkmode'        => 'dark',
		'sysemail'        => 'support@YOURDOMAIN.com',
		'main_logo'       => 'logo.png',
		'login_size'      => 'medium', //small, medium, or large
		'main_logo_small' => 'small_logo.png',
		'main_logo_top'   => 'top_logo.png',
  ),

  /* --- Site Settings --- */
  'site' => array (
		'company_name'            => 'Bitcraft Labs',
    /**
     * @var formatted_company_name is only used on the auth pages
     */
		'formatted_company_name'  => '<strong>ServiceDesk</strong> Pro',
    /**
     * @var url is the REQUEST_URI hardcorded for direct link references
     */
		'url'                     => 'http://helpdesk.YOURDOMAIN.net/',
		'maintenance_mode'        => 'on',
		'maintenance_msg'         => 'Please bear with us as this software is extremely alpha. Maintenance will be taking place always.',
		'maintenance_show'        => 'on'
  )
)
?>
```

As of right now, you will need to manually write this file (or copy and paste and make changes) as nothing will make this for you currently.

###Directory Structure
This is the file structure of the custom directory. This is the only directory that gets changed when using the application, all other app files remain unchanged (unless the app is updated) in order to remain integrous and clean.
```
/custom
---/img/
------/*.png
------/*.jpg
---/config.php
```
