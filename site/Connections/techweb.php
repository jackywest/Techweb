<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_techweb = "";
$database_techweb = "techweb";
$username_techweb = "root";
$password_techweb = "";
$techweb = mysql_pconnect($hostname_techweb, $username_techweb, $password_techweb) or trigger_error(mysql_error(),E_USER_ERROR); 
?>