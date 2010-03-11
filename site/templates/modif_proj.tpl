{include file="header.tpl"}
<br clear="all" />
<div id="main_wrapper" class="">
{include file="left_menu.tpl"}
<div id="profil_content" class="">
	<div id="profil_style" class="">
	
	<h1>Modification de Projet</h1>
	<fieldset>
	<form action="projets.php?update=1" method="post">
	<p style="margin:10px;"><p>login chef de groupe : {$info.1}</p></p>
	<p style="margin:10px;"><p>Mes Projets : {$projets.0} {$projets.1} {$projets.2} {$projets.3} {$projets.4}</p></p>
	<p>Projets a modifier : <td><input id="nom_proj" type="text" name="nom_proj" /></td></p>
	<p>Ajout d'utilisateur numero 2 : <td><input id="user2" type="text" name="user2" /></td>
	<p>Ajout d'utilisateur numero 3 : <td><input id="user3" type="text" name="user3" /></td>
	<p>Ajout d'utilisateur numero 4 : <td><input id="user4" type="text" name="user4" /></td>
	<p>Ajout d'utilisateur numero 5 : <td><input id="user5" type="text" name="user5" /></td>
	<fieldset class="buttons">
	<input style="margin-right:50%" type="submit" value="Valider" />
	</fieldset><br />
	<p>{$fail}</p>
	</form>
	</fieldset>
	</div>
</div>
</div>
{include file="footer.tpl"}