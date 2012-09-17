<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_nuqat = "morteza-pc";
$database_nuqat = "nuqat2012";
$username_nuqat = "shahin";
$password_nuqat = "admin";
$nuqat = mysql_pconnect($hostname_nuqat, $username_nuqat, $password_nuqat) or trigger_error(mysql_error(),E_USER_ERROR); 

/*$hostname_Nuqat = "shahinnuqat.db.8967694.hostedresource.com";
$database_Nuqat = "shahinnuqat";
$username_Nuqat = "shahinnuqat";
$password_Nuqat = "Shahin@123";
$Nuqat = mysql_pconnect($hostname_Nuqat, $username_Nuqat, $password_Nuqat) or trigger_error(mysql_error(),E_USER_ERROR);*/ 
?>