{include file="header.tpl"}
<br clear="all" />
<div id="main_wrapper" class="">
{include file="left_menu.tpl"}
<div id="profil_content" class="">
	<div id="profil_style" class="">
	
	<h1>Ajout de Projet</h1>
	<fieldset>
	<form action="projets.php?add=1" method="post">
	<p style="margin:10px;"><p>login : {$info.1}</p></p>
	<p>Nom du Projet : <td><input id="nom_proj" type="text" name="nom_proj" /></td>
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
