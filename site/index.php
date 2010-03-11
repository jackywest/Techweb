<?php
session_start();
require 'smarty/libs/Smarty.class.php';
require 'include/sql.php';

$smarty = new Smarty;

if (isset($_GET['logout']))
	$_SESSION['login'] = '';
if($_POST['login'] and $_POST['password'])
{
	$mysql = sql_co();
	$login = mysql_real_escape_string($_POST['login'], $mysql);
	$password = mysql_real_escape_string($_POST['password'], $mysql);
	$query = "SELECT login FROM users WHERE login = '$login' and password = md5('$password')";
	$result = mysql_query($query, $mysql) or die(mysql_error());
	mysql_close($mysql);
	if(mysql_num_rows($result) == 0)
	{
		$smarty->assign('error','Wrong login or password !');
	  	$smarty->display('login.tpl');
	}
	else{
		$_SESSION['login'] = $login;
		$smarty->display('home.tpl');
	}
}
else if (isset($_POST['login']) or isset($_POST['password']))
{
	$smarty->assign('error','Missing login or password !');
	$smarty->display('login.tpl');
}
else if (!$_SESSION['login'])
	$smarty->display('login.tpl');
else
	$smarty->display('home.tpl');
	
?>