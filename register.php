<?php
require 'include/sql.php';
     
$mysql = sql_co();
$name = mysql_real_escape_string(strtolower(trim($_GET['name'])), $mysql);
$firstname = mysql_real_escape_string(strtolower(trim($_GET['firstname'])), $mysql);
$login = mysql_real_escape_string(strtolower(trim($_GET['login'])), $mysql);
$password = md5($_GET['password']);
$email = mysql_real_escape_string(strtolower(trim($_GET['email'])), $mysql);
if (!$_GET['password'])
  {
    $query = "SELECT login FROM users WHERE login = '$login'";
    $result = mysql_query($query, $mysql) or die(mysql_error());
    if (mysql_affected_rows($mysql) != 0)
      {
	echo "not available";
      }
    else
      {
	echo "available";
      }
    
    
  }
else
  {
    $query = "INSERT INTO users (`name`,`firstname`,`login`, `password`, `mail`) VALUES ('$name', '$firstname', '$login', '$password', '$email')";
    $result = mysql_query($query, $mysql) or die(mysql_error());
    if (mysql_affected_rows($mysql) == 1)
      {
	echo 'Success! You can now connect using your login and password :-)';
      }
    else
      {
	echo 'Ahhh! Sorry an error has occured. Please try again or give up.';
      }
  }   
?>