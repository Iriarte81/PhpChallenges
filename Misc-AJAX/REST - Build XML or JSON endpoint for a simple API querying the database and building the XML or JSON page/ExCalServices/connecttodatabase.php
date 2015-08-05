<?php
$requesturi = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$pos = strpos($requesturi, "explorecalifornia");

$hostname_excal = "database_host";
$database_excal = "database_name";
$username_excal = "database_user";
$password_excal = "database_password";

$excal = mysql_pconnect($hostname_excal, $username_excal, $password_excal) or trigger_error(mysql_error(),E_USER_ERROR); 
?>
