{include file="header.tpl"}
<br clear="all" />
<div id="main_wrapper" class="">
{include file="left_menu.tpl"}
<div id="profil_content" class="">
	<div id="profil_style" class="">
	<h1>SUPPRESSION DU PROFILE</h1>
	<fieldset>
	<a href="profile.php?modif=1" class="control_menu">Modifier</a>
	<a href="profile.php?sup=1" class="control_menu">Supprimer</a>
	<form action="profile.php?search=1" method="post">
    <img name="Photo" src="" width="32" height="32" alt="" style="background-color: #999999" />
	<p>Recherche de login <td><input id="search" type="text" name="search" /></td><fieldset class="buttons">
	<input style="margin-right:50%" type="submit" value="Valider" /></fieldset>
	</form>
	<form action="profile.php?sup=2" method="post">
	<p style="margin:10px;"><p>Login : {$info.1} </p> Pass : <td><input id="pass" type="password" name="pass" /></td>
	<br />Pass again : <td><input id="pass2" type="password" name="pass2" /></td><fieldset class="buttons">
	<input style="margin-right:50%" type="submit" value="Valider" /></fieldset>
	<p>{$fail}</p>
	</form>
	</fieldset>
	</div>
	</div>
	</div>
{include file="footer.tpl"}
