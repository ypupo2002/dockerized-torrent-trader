<?php
//MYSQL CONNECTION INFO, DONT PASS IT OUT!

//Access Security check
if (preg_match('/mysql.php/i',$_SERVER['PHP_SELF'])) {
	die;
}

//Change the settings below to match your MYSQL server connection settings
$mysql_host = $_ENV["db_hostname"];  //leave this as localhost if you are unsure
$mysql_user = $_ENV["db_username"];  //Username to connect
$mysql_pass = $_ENV["db_password"]; //Password to connect
$mysql_db   = $_ENV["db_database"];  //Database name
?>