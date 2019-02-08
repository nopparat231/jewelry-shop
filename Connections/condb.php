<?php
error_reporting( error_reporting() & ~E_NOTICE );
$hostname_condb = "fdb26.runhosting.com";
$database_condb = "2959038_chata";
$username_condb = "2959038_chata";
$password_condb = "Password23.";

$condb = mysql_connect($hostname_condb, $username_condb, $password_condb) or trigger_error(mysql_error(),E_USER_ERROR); 
mysql_query("SET NAMES UTF8");

?>