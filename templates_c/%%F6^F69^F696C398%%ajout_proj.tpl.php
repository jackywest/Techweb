<?php /* Smarty version 2.6.26, created on 2010-03-09 17:16:56
         compiled from ajout_proj.tpl */ ?>
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
	
	<h1>Ajout de Projet</h1>
	<fieldset>
	<form action="profile.php?add=1" method="post">
	<p style="margin:10px;"><p>login : <?php echo $this->_tpl_vars['info']['1']; ?>
</p></p>
	<p>Nom du Projet : <td><input id="nom_proj" type="text" name="nom_proj" /></td>
	<fieldset class="buttons">
	<input style="margin-right:50%" type="submit" value="Valider" />
	</fieldset><br />
	<p><?php echo $this->_tpl_vars['fail']; ?>
</p>
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