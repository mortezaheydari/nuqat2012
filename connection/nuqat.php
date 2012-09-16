<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_nuqat = "morteza-pc";
$database_nuqat = "nuqat2012";
$username_nuqat = "shahin";
$password_nuqat = "admin";
$nuqat = mysql_pconnect($hostname_nuqat, $username_nuqat, $password_nuqat) or trigger_error(mysql_error(),E_USER_ERROR); 
?>