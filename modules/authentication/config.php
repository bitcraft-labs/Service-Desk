<?PHP
$rootdir = $_SERVER['DOCUMENT_ROOT'];
require_once("$rootdir/modules/authentication/authenticator.php");
require_once("$rootdir/modules/config.inc.php");

$authenticator = new Authenticator();

//Provide your site name here
$authenticator->SetWebsiteName($conf['site']['company_name']);

//Provide the email address where you want to get notifications
$authenticator->SetAdminEmail($conf['customize']['sysemail']);

//Provide your database login details here:
//hostname, user name, password, database name and table name
//note that the script will create the table (for example, fgusers in this case)
//by itself on submitting register.php for the first time
$authenticator->InitDB(/*hostname*/  $conf['sql']['host'], //$db_hostname,
					  /*username*/   $conf['sql']['user'], //$db_username,
					  /*password*/   $conf['sql']['pass'], //$db_password,
					  /*database*/   $conf['sql']['name'], //$db_name,
					  /*table name*/ 'users');

//For better security. Get a random string from this link: http://tinyurl.com/randstr
// and put it here
$authenticator->SetRandomKey('DUu0Ar90MlTS2jw');

?>
