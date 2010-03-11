<?php
session_start();
require 'smarty/libs/Smarty.class.php';

$smarty = new Smarty;

$smarty->assign('title','Hello World');
$smarty->assign('hello','Hello world this is a test with smarty');
$smarty->assign('menu_content','This is the menu');
if($_GET['logout'] == 1)
  session_destroy();
if ($_SESSION['login'])
{
	$smarty->display('header.tpl');
	$smarty->display('left_menu.tpl');
}
else
	$smarty->display('login.tpl');
?>