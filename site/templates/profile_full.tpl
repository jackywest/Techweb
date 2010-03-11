{include file="header.tpl"}
<br clear="all" />
<div id="main_wrapper" class="">
{include file="left_menu.tpl"}
<div id="profil_content" class="">
	<div id="profil_style" class="">
	<h1>PROFILE</h1>
	<fieldset>
	<a href="profile.php?modif=1" class="control_menu">Modifier</a>
	<a href="profile.php?sup=1" class="control_menu">Supprimer</a>
	<form action="profile.php?search=1" method="post">
    <img name="Photo" src="" width="32" height="32" alt="" style="background-color: #999999" />
    <img src="../3_web_computing.jpg" width="450" height="350" />
    <p>Recherche de login <td><input id="search" type="text" name="search" /></td><fieldset class="buttons">
	<input style="margin-right:50%" type="submit" value="Valider" />
	</fieldset><br />
	<p style="margin:10px;"><p>Login : {$info.1} <br /> Nom : {$info.3} <br /> Prenom : {$info.4} <br />  Email : {$info.5} <br /> 
	Adresse : {$info2.2} <br /> Telephone : {$info2.3} <br /> Entreprise : {$info2.4} <br /> Ville : {$info2.5} <br /> Pays : {$info2.6} <br /></p></p>
	<p>{$fail}</p>
	</form>
	</fieldset>
	</div>
</div>
</div>
{include file="footer.tpl"}
