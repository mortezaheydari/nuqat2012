<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_Nuqat = "morteza-pc";
$database_Nuqat = "nuqat2012";
$username_Nuqat = "shahin";
$password_Nuqat = "admin";
$Nuqat = mysql_pconnect($hostname_Nuqat, $username_Nuqat, $password_Nuqat) or trigger_error(mysql_error(),E_USER_ERROR); 
?>