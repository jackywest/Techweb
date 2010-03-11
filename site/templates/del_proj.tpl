{include file="header.tpl"}
<br clear="all" />
<div id="main_wrapper" class="">
{include file="left_menu.tpl"}
<div id="profil_content" class="">
	<div id="profil_style" class="">
	
	<h1>Suppression de Projet</h1>
	<fieldset>
	<form action="projets.php?delete=1" method="post">
	<p style="margin:10px;"><p>login chef de groupe : {$info.1}</p></p>
	<p style="margin:10px;"><p>Mes Projets : {$projets.2}</p></p>
	<p>Projets a modifier : <td><input id="nom_proj" type="text" name="nom_proj" /></td></p>
	<br />Pass : <td><input id="pass" type="password" name="pass" /></td>
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