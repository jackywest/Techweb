<?php /* Smarty version 2.6.26, created on 2010-03-01 01:48:56
         compiled from profile.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<br clear="all" />
<div id="main_wrapper" class="">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "left_menu.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="profil_content" class="">
	<div id="profil_style" class="">
	
	<h1>PROFILE</h1>
	<fieldset>
	<form action="profile.php?succes=1" method="post">
	<p style="margin:10px;"><p>login : <?php echo $this->_tpl_vars['info']['1']; ?>
 <br /> nom : <?php echo $this->_tpl_vars['info']['3']; ?>
 <br /> prenom : <?php echo $this->_tpl_vars['info'][4]; ?>
</p></p>
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
	<p><?php echo $this->_tpl_vars['fail']; ?>
</p>
	<fieldset class="buttons">
	<input type="submit" value="Valider" />
	</fieldset>
	</form>
	</fieldset>
	</div>
</div>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>