<?php
session_start();
require 'smarty/libs/Smarty.class.php';
require 'include/sql.php';

$smarty = new Smarty;
if (isset($_GET['logout']))
	$_SESSION['login'] = '';
$mysql = sql_co();
$login = strtolower(trim($_SESSION['login']));
$res = mysql_query("SELECT * FROM `users` WHERE `login` LIKE '$login'");
$row = mysql_fetch_array($res,MYSQL_NUM);
$res2 = mysql_query("SELECT * FROM `users_profile` WHERE `login` LIKE '$login'");
$row2 = mysql_fetch_array($res2,MYSQL_NUM);