<?php /* Smarty version 2.6.20, created on 2010-06-13 15:04:42
         compiled from ../../../GUI/identity.asp */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', '../../../GUI/identity.asp', 2, false),array('modifier', 'escape', '../../../GUI/identity.asp', 43, false),)), $this); ?>
<?php ob_start(); ?>
<a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
my-account.php"><?php echo smartyTranslate(array('s' => 'My account'), $this);?>
</a>
<span class="navigation-pipe"><?php echo $this->_tpl_vars['navigationPipe']; ?>
</span>
<?php echo smartyTranslate(array('s' => 'Your personal information'), $this);?>
<?php $this->_smarty_vars['capture']['path'] = ob_get_contents(); ob_end_clean(); ?>




<?php ob_start(); ?><?php echo smartyTranslate(array('s' => 'My account'), $this);?>
<?php $this->_smarty_vars['capture']['path'] = ob_get_contents(); ob_end_clean(); ?>
<!-- #include file="inc-global/init.php" -->

<!-- #include file="css/style.css" -->
<!-- #include file="css/global.css" -->

<!-- #include file="js/jquery.search.js" -->
<!-- #include file="js/init.js" -->
<!-- #include file="inc-global/header.html" -->



<div class="p-20">

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['GUI_THEME_PATH'])."/inc-global/base_dir_js.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<!-- #include file="inc-global/breadcrumb.html" -->
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['GUI_THEME_PATH'])."/inc-global/breadcrumb.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	
	
	<div class="account-left">
		<div class="spacer"></div>
		<!-- #include file="inc-global/account-nav.html" -->
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['GUI_THEME_PATH'])."/inc-global/account-nav.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	</div>
	<div class="account-right">
		<div class="account-content-inner">
					<h2><?php echo smartyTranslate(array('s' => 'Your personal information'), $this);?>
</h2>
			
					<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['GUI_THEME_PATH'])."/inc-global/errors.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 
					
					<?php if ($this->_tpl_vars['confirmation']): ?>
					<p class="success">
					<?php echo smartyTranslate(array('s' => 'Your personal information has been successfully updated.'), $this);?>
 
					<?php if ($this->_tpl_vars['pwd_changed']): ?><br /><?php echo smartyTranslate(array('s' => 'Your password has been sent to your e-mail:'), $this);?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['email'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
<?php endif; ?></p>
					<?php else: ?>
					<h3><?php echo smartyTranslate(array('s' => 'Do not hesitate to update your personal information if it has
					changed.'), $this);?>
</h3>
					<p class="required"><sup>*</sup><?php echo smartyTranslate(array('s' => 'Required field'), $this);?>
</p>
					<form action="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
identity.php" method="post" class="form-label">
					<p class="radio"><span><?php echo smartyTranslate(array('s' => 'Gender'), $this);?>
</span> 	</p>
					<p>	
						<label	for="id_gender1"><?php echo smartyTranslate(array('s' => 'Mr.'), $this);?>
</label>
						
						<input type="radio"
						id="id_gender1" name="id_gender" value="1" <?php if ($_POST['id_gender'] == 1 || ! $_POST['id_gender']): ?>checked="checked" <?php endif; ?> />
					</p>
					<p>
						<label for="id_gender2"><?php echo smartyTranslate(array('s' => 'Ms.'), $this);?>
</label>
						 <input type="radio" id="id_gender2" name="id_gender" value="2" <?php if ($_POST['id_gender'] == 2): ?>checked="checked" <?php endif; ?> /> 
					</p>
					<p class="required text"><label for="firstname"><?php echo smartyTranslate(array('s' => 'First name'), $this);?>
<sup>*</sup></label>
					<input type="text" id="firstname" name="firstname"
						value="<?php echo $_POST['firstname']; ?>
" class="ipt" /></p>
					<p class="required text"><label for="lastname"><?php echo smartyTranslate(array('s' => 'Last name'), $this);?>
<sup>*</sup></label>
					<input type="text" name="lastname" id="lastname"
						value="<?php echo $_POST['lastname']; ?>
" class="ipt"  /></p>
					<p class="required text"><label for="email"><?php echo smartyTranslate(array('s' => 'E-mail'), $this);?>
<sup>*</sup></label>
					<input type="text" name="email" id="email" value="<?php echo $_POST['email']; ?>
" class="ipt"  />
					</p>
					<p class="required text"><label for="old_passwd"><?php echo smartyTranslate(array('s' => 'Current
					password'), $this);?>
<sup>*</sup></label> <input type="password" name="old_passwd"
						id="old_passwd" class="ipt"  /></p>
					<p class="password"><label for="passwd"><?php echo smartyTranslate(array('s' => 'Password'), $this);?>
</label> <input
						type="password" name="passwd" id="passwd" class="ipt"  /></p>
					<p class="password"><label for="confirmation"><?php echo smartyTranslate(array('s' => 'Confirmation'), $this);?>
</label>
					<input type="password" name="confirmation" id="confirmation" class="ipt"  /></p>
					<p class="select"><label><?php echo smartyTranslate(array('s' => 'Birthday'), $this);?>
</label> <select name="days" class="ipt" 
						id="days">
						<option value="">-</option>
						<?php $_from = $this->_tpl_vars['days']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
						<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['v'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" <?php if (( $this->_tpl_vars['sl_day'] == $this->_tpl_vars['v'] )): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['v'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
&nbsp;&nbsp;</option>
						<?php endforeach; endif; unset($_from); ?>
					</select>  
					
					<select	id="months" name="months"  class="ipt" >
						<option value="">-</option>
						<?php $_from = $this->_tpl_vars['months']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
?>
						<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['k'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" <?php if (( $this->_tpl_vars['sl_month'] == $this->_tpl_vars['k'] )): ?>selected="selected"<?php endif; ?>><?php echo smartyTranslate(array('s' => ($this->_tpl_vars['v'])), $this);?>
&nbsp;</option>
						<?php endforeach; endif; unset($_from); ?>
					</select> <select id="years" name="years" class="ipt" >
						<option value="">-</option>
						<?php $_from = $this->_tpl_vars['years']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
						<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['v'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" <?php if (( $this->_tpl_vars['sl_year'] == $this->_tpl_vars['v'] )): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['v'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
&nbsp;&nbsp;</option>
						<?php endforeach; endif; unset($_from); ?>
					</select></p>
					<p class="checkbox"><input type="checkbox" id="newsletter"
						name="newsletter" value="1" <?php if ($_POST['newsletter'] == 1): ?> checked="checked" <?php endif; ?> /> <label for="newsletter"><?php echo smartyTranslate(array('s' => 'Sign up for
					our newsletter'), $this);?>
</label></p>
					<p class="checkbox"><input type="checkbox" name="optin" id="optin"
						value="1" <?php if ($_POST['optin'] == 1): ?> checked="checked" <?php endif; ?> /> <label
						for="optin"><?php echo smartyTranslate(array('s' => 'Receive special offers from our partners'), $this);?>
</label></p>
					<p class="submit">
						<span class="btn"><span>
					<input type="submit" class="button" name="submitIdentity" value="<?php echo smartyTranslate(array('s' => 'Save'), $this);?>
" /></span>
						</span>
						<div class="clear"></div>	
					</p>
					</form>
					<p id="security_informations"><?php echo smartyTranslate(array('s' => '[Insert customer data privacy clause
					or law here, if applicable]'), $this);?>
</p>
					<?php endif; ?>
		</div>
	</div>
	
<div class="clear"></div>
<!-- end of p-20 -->
</div>
<!-- #include file="inc-global/footer.html" -->















