<?php /* Smarty version 2.6.18, created on 2014-12-11 15:49:16
         compiled from Login.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "LoginHeader.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div id="loginWrapper">
<div id="loginTop"><a href="index.php"><img src="<?php  $logo_login=fetch_logo(1); echo $logo_login; ?>"></a></div>
<div id="loginBody">
	<div class="loginForm">
		<div class="poweredBy">Powered by coreBOS</div>
		<form action="index.php" method="post" name="DetailView" id="form">
			<input type="hidden" name="module" value="Users" />
			<input type="hidden" name="action" value="Authenticate" />
			<input type="hidden" name="return_module" value="Users" />
			<input type="hidden" name="return_action" value="Login" />
			<table border="0">
					<tr>
					<td valign="middle"><img src="themes/login/images/user.png"></td><td  valign="middle"><input type="text" name="user_name" tabindex="1"></td>
					<td rowspan="2" align="center" valign="middle"><input type="submit" id="submitButton" value="" tabindex="3"></td>
					</tr>
					<tr><td  valign="middle"><img src="themes/login/images/password.png"></td><td  valign="middle"><input type="password" name="user_password" tabindex="2"></td></tr>
			</table>
				<?php if ($this->_tpl_vars['LOGIN_ERROR'] != ''): ?>
				<div class="errorMessage">
					<?php echo $this->_tpl_vars['LOGIN_ERROR']; ?>

				</div>
				<?php endif; ?>
		</form>
	</div>
	<div class="importantLinks">
	<a href='copyright.html' target='_blank'><?php echo $this->_tpl_vars['APP']['LNK_READ_LICENSE']; ?>
</a>
	|
	<a href='http://corebos.org/page/privacy-policy' target='_blank'><?php echo $this->_tpl_vars['APP']['LNK_PRIVACY_POLICY']; ?>
</a>
	|
	&copy; 2004- <?php  echo date('Y');  ?>
	</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "LoginFooter.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>