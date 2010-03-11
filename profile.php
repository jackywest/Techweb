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

/*			Recherche			*/
if(isset($_POST['search']))
{

$search = mysql_real_escape_string(strtolower(trim($_POST['search'])), $mysql);
$sres = mysql_query("SELECT * FROM `users` WHERE `login` LIKE '$search'");
$srow = mysql_fetch_array($sres,MYSQL_NUM);
$sres2 = mysql_query("SELECT * FROM `users_profile` WHERE `login` LIKE '$search'");
$srow2 = mysql_fetch_array($sres2,MYSQL_NUM);
if ($srow2 == null && $srow != null)
	{
	$smarty->assign('fail','This user doesn\'t update his profile.');
	$smarty->assign('info',$row);
	$smarty->assign('info2',$row2);
	$smarty->display('profile_full.tpl');	
	}
if ($srow2 == null && $srow == null)
	{
	$smarty->assign('fail','This login doesn\'t exist.');
	$smarty->assign('info',$row);
	$smarty->assign('info2',$row2);
	$smarty->display('profile_full.tpl');	
	}
if ($srow2 != null && $srow != null)
	{
	$smarty->assign('fail','Match');
	$smarty->assign('info',$srow);
	$smarty->assign('info2',$srow2);
	$smarty->display('profile_full.tpl');	
	}
}

/*			Mise a jour du profile			*/
if(isset($_GET['succes']) || isset($_GET['modif']))
{

$adresse = mysql_real_escape_string(strtolower(trim($_POST['adresse'])), $mysql);
$telephone = mysql_real_escape_string(strtolower(trim($_POST['telephone'])), $mysql);
$entreprise = mysql_real_escape_string(strtolower(trim($_POST['entreprise'])), $mysql);
$ville = mysql_real_escape_string(strtolower(trim($_POST['ville'])), $mysql);
$pays = mysql_real_escape_string(strtolower(trim($_POST['pays'])), $mysql);
	if (($adresse && $telephone && $entreprise) != null)
	{
		if($_GET['succes'])
		{
			$query = "INSERT INTO users_profile (`id` ,`login` , `adresse` , `telephone` , `entreprise`, `ville`, `pays`) 
			VALUES ('$row[0]' , '$login', '$adresse', '$telephone', '$entreprise', '$ville', '$pays')";
			$result = mysql_query($query, $mysql) or die(mysql_error());
			$res2 = mysql_query("SELECT * FROM `users_profile` WHERE `login` LIKE '$login'");
			$row2 = mysql_fetch_array($res2,MYSQL_NUM);
			$smarty->assign('info',$row);
			$smarty->assign('info2',$row2);
			$smarty->display('profile_full.tpl');	
		}
		if($_GET['modif'])
		{
		$query = "UPDATE `techweb`.`users_profile` SET `adresse` = '$adresse',`telephone` = '$telephone',`entreprise` = '$entreprise',`ville` = '$ville',
		`pays` = '$pays' WHERE `users_profile`.`id` = '$row[0]'";
		$result = mysql_query($query, $mysql) or die(mysql_error());
		$res2 = mysql_query("SELECT * FROM `users_profile` WHERE `login` LIKE '$login'");
		$row2 = mysql_fetch_array($res2,MYSQL_NUM);
		$smarty->assign('fail','Done');
		$smarty->assign('info',$row);
		$smarty->assign('info2',$row2);
		$smarty->display('profile_full.tpl');	
		}
	}
	else
		{
		$smarty->assign('fail','Empty field.');
		$smarty->assign('info',$row);
		$smarty->display('profile_modif.tpl');	
		}
}

/*			Suppression			*/
if(($_GET['sup']) == 1)
{
	$smarty->assign('info',$row);
	$smarty->assign('info2',$row2);
	$smarty->display('profile_del.tpl');
}
if(($_GET['sup']) == 2)
{
	if($_POST['pass'] && $_POST['pass2'] && $_POST['pass'] == $_POST['pass2'])
	{
		$login = strtolower(trim($_SESSION['login']));
		$password = mysql_real_escape_string(strtolower(trim($_POST['pass'])), $mysql);
		$query = "SELECT login FROM users WHERE login = '$login' and password = md5('$password')";
		$query2 = "DELETE FROM `techweb`.`users` WHERE `users`.`id` = '$row[0]'";
		$query3 = "DELETE FROM `techweb`.`users_profile` WHERE `users_profile`.`id` = '$row[0]'";
		$result = mysql_query($query, $mysql) or die(mysql_error());
		$sup = mysql_fetch_array($result,MYSQL_NUM);
		if($sup)
		{
			$result2 = mysql_query($query2, $mysql) or die(mysql_error());
			$result2 = mysql_query($query3, $mysql) or die(mysql_error());
			$_SESSION['login'] = '';
			$smarty->display('login.tpl');	
		}
		else
		{
			$smarty->assign('fail','Sorry, an error occured.');
			$smarty->assign('info',$row);
			$smarty->assign('info2',$row2);
			$smarty->display('profile_del.tpl');	
		}
	}
	else
	{
		$smarty->assign('fail','Error wrong or missing Password !!!');
		$smarty->assign('info',$row);
		$smarty->assign('info2',$row2);
		$smarty->display('profile_del.tpl');	
	}
}

/*			Connection par default			*/
if(isset($_GET['default']))
{

if ($row2[0])
{
	if ($_SESSION['login'])
		{
		$smarty->assign('info',$row);
		$smarty->assign('info2',$row2);
		$smarty->display('profile_full.tpl');		
		}
	else
		$smarty->display('login.tpl');
}
else
{
	if ($_SESSION['login'])
	{
		$smarty->assign('info',$row);
		$smarty->display('profile.tpl');	
	}
	else
		$smarty->display('login.tpl');
}
}
?>