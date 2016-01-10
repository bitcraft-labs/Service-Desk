<?PHP
require_once("./modules/authentication/authenticator.php");
require_once("./modules/config.inc.php");

$authenticator = new Authenticator();

//Provide your site name here
$authenticator->SetWebsiteName('bitcraftlabs.net');

//Provide the email address where you want to get notifications
$authenticator->SetAdminEmail('joshuanasiatka@gmail.com');

//Provide your database login details here:
//hostname, user name, password, database name and table name
//note that the script will create the table (for example, fgusers in this case)
//by itself on submitting register.php for the first time
$authenticator->InitDB(/*hostname*/   $db_hostname,
					  /*username*/   $db_username,
					  /*password*/   $db_password,
					  /*database*/   $db_name,
					  /*table name*/ 'staff');
//$fgmembersite->InitDB(/*hostname'localhost',
                      /*username'bcl_admin',
                      /*password'X2z7cMG4Tnphnavr',
                      /*database name'bcl_tronic_auth',
                      /*table name 'auth'); */

//For better security. Get a random string from this link: http://tinyurl.com/randstr
// and put it here
$authenticator->SetRandomKey('DUu0Ar90MlTS2jw');

?>
