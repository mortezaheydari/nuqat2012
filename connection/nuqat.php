<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
/* $hostname_nuqat = "morteza-pc";
$database_nuqat = "nuqat2012";
$username_nuqat = "shahin";
$password_nuqat = "admin";
$nuqat = mysql_pconnect($hostname_nuqat, $username_nuqat, $password_nuqat) or trigger_error(mysql_error(),E_USER_ERROR); 
*/
$hostname_nuqat = "shahinnuqat.db.8967694.hostedresource.com";
$database_nuqat = "shahinnuqat";
$username_nuqat = "shahinnuqat";
$password_nuqat = "Shahin@123";
$nuqat = mysql_pconnect($hostname_nuqat, $username_nuqat, $password_nuqat) or trigger_error(mysql_error(),E_USER_ERROR);
?>