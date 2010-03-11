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

/*    Ajout de Projet   */
if(isset($_GET['add']))
{

	if(isset($_POST['nom_proj']))
	{
	$nom_proj = mysql_real_escape_string(strtolower(trim($_POST['nom_proj'])), $mysql);
	$query = "INSERT INTO projects (`id_chef` , `nom_proj` , `user1`) VALUES ('$row[0]' ,'$nom_proj', '$row[1]')";
	$result = mysql_query($query, $mysql);
	if ($result)
	{
	$smarty->assign('fail','Projet Ajouter');
	$smarty->assign('info',$row);
	$smarty->display('ajout_proj.tpl');	
	}
	else
	{
	$smarty->assign('fail','Projet existant');
	$smarty->assign('info',$row);
	$smarty->display('ajout_proj.tpl');	
	}
	}
	else
	{
	$smarty->assign('fail','');
	$smarty->assign('info',$row);
	$smarty->display('ajout_proj.tpl');	
	}
}

/*    modif de Projet   */
if(isset($_GET['update']))
{
	$mres = mysql_query("SELECT `nom_proj` FROM `projects` WHERE `id_chef` = '$row[0]' ");
	$mrow = mysql_fetch_array($mres,MYSQL_NUM);
	
	if($mrow)
	{
		$nom_proj = mysql_real_escape_string(strtolower(trim($_POST['nom_proj'])), $mysql);
		$mres2 = mysql_query("SELECT `id_proj` FROM `projects` WHERE `nom_proj` LIKE '$nom_proj' ");
		$mrow2 = mysql_fetch_array($mres2,MYSQL_NUM);
		$user2 = mysql_real_escape_string(strtolower(trim($_POST['user2'])), $mysql);
		$user3 = mysql_real_escape_string(strtolower(trim($_POST['user3'])), $mysql);
		$user4 = mysql_real_escape_string(strtolower(trim($_POST['user4'])), $mysql);
		$user5 = mysql_real_escape_string(strtolower(trim($_POST['user5'])), $mysql);
		if ($_POST['nom_proj'] && $_POST['user2'] && $_POST['user3'] && $_POST['user4'] && $_POST['user5'])
		{
			$query = "UPDATE `techweb`.`projects` SET `user2` = '$user2',`user3` = '$user3',`user4` = '$user4',`user5` = '$user5' WHERE `projects`.`id_proj` = '$mrow2[0]'";
			$result = mysql_query($query, $mysql) or die(mysql_error());
			$smarty->assign('fail','Modification prise en compte');
			$smarty->assign('info',$row);
			$smarty->assign('projets',$mrow);
			$smarty->display('modif_proj.tpl');	
		}
	}
	else
	{
		if (!$mrow)
			$mrow[0] = "aucun.";
		$smarty->assign('fail','Veuillez remplir toutes les cases');
		$smarty->assign('info',$row);
		$smarty->assign('projets',$mrow);
		$smarty->display('modif_proj.tpl');	
	}
}

/*    sup de Projet   */
if(isset($_GET['delete']))
{
$dres = mysql_query("SELECT * FROM `projects` WHERE `id_chef` = '$row[0]' ");
$drow = mysql_fetch_array($dres,MYSQL_NUM);
$dres2 = mysql_query("SELECT * FROM `users` WHERE `id` = '$row[0]' ");
$drow2 = mysql_fetch_array($mres,MYSQL_NUM);
$nom_proj = $drow[2];
$id_chef = $drow[1];
$id_user = $drow2[0];
	if($_POST['nom_proj'])
		{
		$password = mysql_real_escape_string(strtolower(trim($_POST['pass'])), $mysql);
		$delete = mysql_real_escape_string(strtolower(trim($_POST['nom_proj'])), $mysql);
		if (strcmp($delete,$nom_proj) == 0)
			{
				$query = "SELECT login FROM users WHERE login = '$login' and password = md5('$password')";
				$result = mysql_query($query, $mysql);
				$sup = mysql_fetch_array($result,MYSQL_NUM);
				if ($sup)
				{
					$query2 = "DELETE FROM `techweb`.`projects` WHERE `projects`.`id_chef` = '$row[0]'";
					$result2 = mysql_query($query2, $mysql) or die(mysql_error());
					$smarty->assign('fail','Modification prise en compte');
					$smarty->assign('info',$row);
					$smarty->assign('projets',$drow);
					$smarty->display('del_proj.tpl');	
				}
				else
				{
					$smarty->assign('fail','Password error.');
					$smarty->assign('info',$row);
					$smarty->assign('projets',$drow);
					$smarty->display('del_proj.tpl');	
				}
			}
		else
			{
				$smarty->assign('fail','Projet inexistant.');
				$smarty->assign('info',$row);
				$smarty->assign('projets',$drow);
				$smarty->display('del_proj.tpl');	
			}
		}
	else
	{
	if(!$drow)
	$drow[0] = "aucun.";
	$smarty->assign('fail','Modification prise en compte');
	$smarty->assign('info',$row);
	$smarty->assign('projets',$drow);
	$smarty->display('del_proj.tpl');
	}
}

/*    consult de Projet   */
if(isset($_GET['show']))
{

}