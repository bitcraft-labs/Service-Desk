<?php
 
/*
************************
Config File
************************
*/

/* --- SQL Database Info --- */

$db_hostname  = "localhost";
$db_username  = "bcl_admin";
$db_password  = "X2z7cMG4Tnphnavr";
$db_name      = "bcl_sd_data";		//main database
$db_prefix    = ""; //leave blank


/* --- Security Settings --- */

$restrict_ips = "no";


/* Insert the networks or ip addresses you wish to allow connection
   into the $allowed_networks array below. There is not a limit on how many networks
   or addresses that can be included in this array. This will currently only work for
   ipv4 addresses, ipv6 may be supported in a future release. If $restrict_ips is
   set to "no", this option is ignored.

   * will work:
   * xxx.xxx.xxx.xxx        (exact)
   * xxx.xxx.xxx.[yyy-zzz]  (range)
   * xxx.xxx.xxx.xxx/nn     (CIDR)
   *
   * will NOT work:
   * xxx.xxx.xxx.xx[yyy-zzz]  (range, partial octets not supported)
   * xxx.xxx.xxx.yyy - xxx.xxx.xxx.zzz (range, entire networks not supported).
   * xxx.xxx. (range, less than 4 octets not supported).

   example --> $allowed_networks = array("10.0.0.4","192.168.1.[11-20]","192.168.4.0/24","192.0.0.0/8");
*/

$allowed_networks = array();

/* --- Additional Settings --- */


/*
Apply one or more of the following classes to get the
desired effect
|----------------------------------------------------|
| SKINS      | blue                                  |
|            | black                                 |
|            | purple                                |
|            | yellow                                |
|            | red                                   |
|            | green                                 |
|----------------------------------------------------|
*/
$skin = 'green';

//email for sending data where applicable
$email = "fsuithelpdesk@gmail.com";

//---- Logo Locations -----
$main_logo = "fsu_logo.png";
//condensed sidebar and mobile
$main_logo_small = "fsu_logo.png";
//logo on top navigation bar
$main_logo_top = "fsu_logo_top_light.png";

//--marked for deletion--
//$formatted_logo_top = "<img src='$logo_top' width='155' />";

$company_name = "Fitchburg State";
$formatted_company_name = "<strong>FITCHBURG</strong> STATE<br />".
   "Technology Repair Database";

?>
