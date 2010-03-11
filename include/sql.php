<?php
     
     function sql_co()
{
     	$mysql = mysql_connect('localhost', 'root', '');
	mysql_select_db('techweb', $mysql);
	return $mysql;
}
?>