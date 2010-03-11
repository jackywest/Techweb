<?php /* Smarty version 2.6.26, created on 2010-02-24 21:00:42
         compiled from login.tpl */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
	<head lang="en" xmlns="http://www.w3.org/1999/xhtml">
		<title>Techweb Project Managment</title>
		<link rel="stylesheet" type="text/css" media="screen" href="css/default.css" />
		
		
		<link type="text/css" href="js/jquery-ui-1.7.2.custom/css/custom-theme/jquery-ui-1.7.2.custom.css" rel="stylesheet" />
		<script type="text/javascript" src="js/jquery-ui-1.7.2.custom/js/jquery-1.3.2.min.js"></script>
		<script type="text/javascript" src="js/jquery-ui-1.7.2.custom/js/jquery-ui-1.7.2.custom.min.js"></script>
		<script type="text/javascript" src="js/login.js"></script>	
	</head>
<body>
<h1 class="login_top_margin">TPM v.01</h1>
<center><img alt="tpm_logo" src="images/logo3.png"  /></center>
<form action="index.php" method="post">
<fieldset class="detail">
<legend>Login</legend>
<table>
	<tr>
		<th>User</th>
		<td><input type="text" value="" name="login"  /></td>
	</tr>
	<tr>
		<th>Password</th>
		<td><input type="password" value="" name="password"  />
	</tr>
	<tr>
		<th></th>
		<td>Password forgotten ?</td>
	</tr>
	<tr>
		<td colspan="2" class="login_error"><?php echo $this->_tpl_vars['error']; ?>
</td>
	</tr>
</table>
</fieldset>
<fieldset class="buttons">
<input type="submit" value="Valider" />
</fieldset>
</form>
<form action="register.php" method="post" style="margin-top: -10px;">
<fieldset class="detail">
<legend><a class="btn-slide" href="javascript:;">Register</a></legend>
<div id="reg_detail">
<table>
	<tr>	<th>Login:</th>
		<td><input id="login" type="text" name="login" value="" /></td>
		<td><div id="login_valid" class="login_error valid"></div></td>
	</tr>
	<tr>
		<th>Password:</th>
		<td><input id="pass" type="password" name="password" value="" /></td>
		</tr>
	<tr>
		<th>Confirm password:</th>
		<td><input id="pass2" type="password" name="password2" value="" /></td>
		<td><div id="pass_valid" class="login_error valid"></div></td>
	</tr>
	<tr>
	  <th>Name:</th>
	  <td><input id="name" type="text" name="name" /></td>
	</tr>
	<tr>
	  <th>Firstname:</th>
	  <td><input id="firstname" type="text" name="firstname" value="" /></td>
	</tr>
	<tr>
	  <th>Email: </th>
	  <td><input id="check_mail" type="text" name="mail" value="" /></td>
	  <td><div id="error_mail" class="login_error valid"></div></td>
	</tr>
</table>
<fieldset class="buttons">
<input id="register" type="button" value="Valider" />
</fieldset>
</div>
<div id="dialog_box"></div>
</fieldset>
</form>
</body>
</html>