{include file="header.tpl"}
<br clear="all" />
<div id="main_wrapper" class="">
{include file="left_menu.tpl"}
<div id="profil_content" class="">
	<div id="profil_style" class="">
	
	<h1>PROFILE</h1>
	<fieldset>
	<form action="profile.php?succes=1" method="post">
	<p style="margin:10px;"><p>login : {$info.1} <br /> nom : {$info.3} <br /> prenom : {$info[4]}</p></p>
	<p>Adresse : <td><input id="adresse" type="text" name="adresse" /></td>
	<br />Telephone : <td><input id="telephone" type="text" name="telephone" /></td>
	<br />Entreprises : <td><input id="entreprise" type="text" name="entreprise" /></td>
	<br />Ville : <td><input id="ville" type="text" name="ville" /></td></p><br /></p>
	     <label for="pays">Dans quel pays habitez-vous ?</label><br />
       <select name="pays" id="pays">
           <optgroup label="Europe">
               <option value="france">France</option>
               <option value="espagne">Espagne</option>
               <option value="italie">Italie</option>
               <option value="royaume-uni">Royaume-Uni</option>
           </optgroup>
           <optgroup label="Amérique">
               <option value="canada">Canada</option>
               <option value="etats-unis">Etats-Unis</option>
           </optgroup>
           <optgroup label="Asie">
               <option value="chine">Chine</option>
               <option value="japon">Japon</option>
           </optgroup>
       </select>
	<p>{$fail}</p>
	<fieldset class="buttons">
	<input type="submit" value="Valider" />
	</fieldset>
	</form>
	</fieldset>
	</div>
</div>
</div>
{include file="footer.tpl"}
