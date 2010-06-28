<?php /* Smarty version 2.6.20, created on 2010-06-13 15:04:38
         compiled from ../../../GUI/address.asp */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', '../../../GUI/address.asp', 2, false),array('modifier', 'escape', '../../../GUI/address.asp', 40, false),array('modifier', 'intval', '../../../GUI/address.asp', 118, false),)), $this); ?>
<?php ob_start(); ?>
<a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
my-account.php"><?php echo smartyTranslate(array('s' => 'Your addresses'), $this);?>
</a>
<span class="navigation-pipe"><?php echo $this->_tpl_vars['navigationPipe']; ?>
</span>
<?php echo smartyTranslate(array('s' => 'My addresses'), $this);?>
<?php $this->_smarty_vars['capture']['path'] = ob_get_contents(); ob_end_clean(); ?>


<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['GUI_THEME_PATH'])."/inc-private/address_js.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

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
					<h2><?php echo smartyTranslate(array('s' => 'Your addresses'), $this);?>
</h2>
					
					<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['GUI_THEME_PATH'])."/inc-global/errors.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					
					<h3><?php if (isset ( $this->_tpl_vars['id_address'] )): ?><?php echo smartyTranslate(array('s' => 'Modify the address'), $this);?>
 <?php if (isset ( $_POST['alias'] )): ?>"<?php echo $_POST['alias']; ?>
"<?php elseif ($this->_tpl_vars['address']->alias): ?>"<?php echo ((is_array($_tmp=$this->_tpl_vars['address']->alias)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
"<?php endif; ?><?php else: ?><?php echo smartyTranslate(array('s' => 'To add a new address, please fill out the form below.'), $this);?>
<?php endif; ?></h3>
					
					
					<form action="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
address.php" method="post" class="form-label">
					
					<h3><?php if (isset ( $this->_tpl_vars['id_address'] )): ?><?php echo smartyTranslate(array('s' => 'Your address'), $this);?>
<?php else: ?><?php echo smartyTranslate(array('s' => 'New address'), $this);?>
<?php endif; ?></h3>
					<input type="hidden" name="token" value="<?php echo $this->_tpl_vars['token']; ?>
" /> 
					
					<p class="text">					
					<label for="company"><?php echo smartyTranslate(array('s' => 'Company'), $this);?>
</label> 
					<input type="text" id="company" name="company" class="ipt" 
					value="<?php if (isset ( $_POST['company'] )): ?><?php echo $_POST['company']; ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['address']->company)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
<?php endif; ?>" />
					</p>
					<p class="required text">
					<label for="firstname"><?php echo smartyTranslate(array('s' => 'First name'), $this);?>
</label>
					<input type="text" name="firstname" id="firstname" class="ipt" 
					value="<?php if (isset ( $_POST['firstname'] )): ?><?php echo $_POST['firstname']; ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['address']->firstname)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
<?php endif; ?>" />
					<sup>*</sup></p>
					<p class="required text">
					<label for="lastname"><?php echo smartyTranslate(array('s' => 'Last name'), $this);?>
</label>
					<input type="text" id="lastname" name="lastname" class="ipt" 
						value="<?php if (isset ( $_POST['lastname'] )): ?><?php echo $_POST['lastname']; ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['address']->lastname)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
<?php endif; ?>" />
					<sup>*</sup></p>
					<p class="required text">
					<label for="address1"><?php echo smartyTranslate(array('s' => 'Address'), $this);?>
</label> 
					<input	type="text" id="address1" name="address1" class="ipt" 
					value="<?php if (isset ( $_POST['address1'] )): ?><?php echo $_POST['address1']; ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['address']->address1)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
<?php endif; ?>" />
					<sup>*</sup></p>
					<p class="required text">
					<label for="address2"><?php echo smartyTranslate(array('s' => 'Address (2)'), $this);?>
</label>
					<input type="text" id="address2" name="address2" class="ipt" 
					value="<?php if (isset ( $_POST['address2'] )): ?><?php echo $_POST['address2']; ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['address']->address2)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
<?php endif; ?>" />
					</p>
					<p class="required text">
					<label for="postcode"><?php echo smartyTranslate(array('s' => 'Postal code / Zip code'), $this);?>
</label>
					<input type="text" id="postcode" name="postcode" class="ipt" 
					value="<?php if (isset ( $_POST['postcode'] )): ?><?php echo $_POST['postcode']; ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['address']->postcode)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
<?php endif; ?>" />
					<sup>*</sup></p>
					<p class="required text">
					<label for="city"><?php echo smartyTranslate(array('s' => 'City'), $this);?>
</label>
					<input type="text" name="city" id="city" class="ipt" 
					value="<?php if (isset ( $_POST['city'] )): ?><?php echo $_POST['city']; ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['address']->city)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
<?php endif; ?>"
					maxlength="64" /> <sup>*</sup></p>
					<p class="required select">
					<label for="id_country"><?php echo smartyTranslate(array('s' => 'Country'), $this);?>
</label>
					<select id="id_country" name="id_country" class="ipt" >
						<?php echo $this->_tpl_vars['countries_list']; ?>

					</select> <sup>*</sup></p>
					<p class="required id_state select">
					<label for="id_state"><?php echo smartyTranslate(array('s' => 'State'), $this);?>
</label>
					<select name="id_state" id="id_state" class="ipt" >
						<option value="">-</option>
					</select> <sup>*</sup></p>
					<p class="textarea">
					<label for="other"><?php echo smartyTranslate(array('s' => 'Additional information'), $this);?>
</label>
					<textarea id="other" name="other"  class="ipt" 
					cols="26" rows="3"><?php if (isset ( $_POST['other'] )): ?><?php echo $_POST['other']; ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['address']->other)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
<?php endif; ?></textarea>
					</p>
					<p class="text">
					<label for="phone"><?php echo smartyTranslate(array('s' => 'Home phone'), $this);?>
</label>
					<input	type="text" id="phone" name="phone" class="ipt" 
					value="<?php if (isset ( $_POST['phone'] )): ?><?php echo $_POST['phone']; ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['address']->phone)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
<?php endif; ?>" />
					</p>
					<p class="text">
					<label for="phone_mobile"><?php echo smartyTranslate(array('s' => 'Mobile phone'), $this);?>
</label>
					<input	type="text" id="phone_mobile" name="phone_mobile" class="ipt" 
					value="<?php if (isset ( $_POST['phone_mobile'] )): ?><?php echo $_POST['phone_mobile']; ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['address']->phone_mobile)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
<?php endif; ?>" />
					</p>
					<p class="required text" id="adress_alias">
					<label for="alias"><?php echo smartyTranslate(array('s' => 'Assign an address title for future reference'), $this);?>
</label>
					<input type="text" id="alias" name="alias" class="ipt" 
					value="<?php if (isset ( $_POST['alias'] )): ?><?php echo $_POST['alias']; ?>
<?php elseif ($this->_tpl_vars['address']->alias): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['address']->alias)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
<?php elseif (isset ( $this->_tpl_vars['select_address'] )): ?><?php else: ?><?php echo smartyTranslate(array('s' => 'My address'), $this);?>
<?php endif; ?>" />
					<sup>*</sup></p>
				
					
					
					<p class="submit2">
					<?php if (isset ( $this->_tpl_vars['id_address'] )): ?><input type="hidden"	name="id_address" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['id_address'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
" /><?php endif; ?> 
					<?php if (isset ( $this->_tpl_vars['back'] )): ?><input type="hidden" name="back" value="<?php echo $this->_tpl_vars['back']; ?>
?step=1" /><?php endif; ?>
					
					<?php if (isset ( $this->_tpl_vars['select_address'] )): ?><input type="hidden" name="select_address" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['select_address'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
" /><?php endif; ?> 
					<span class="btn" ><span><input type="submit" name="submitAddress" id="submitAddress" value="<?php echo smartyTranslate(array('s' => 'Save'), $this);?>
" class="button" /></span></span>
					<div class="clear"></div>
					</p>
					<p class="required"><sup>*</sup><?php echo smartyTranslate(array('s' => 'Required field'), $this);?>
</p>
					</form>
					
		</div>
	</div>
	
<div class="clear"></div>
<!-- end of p-20 -->
</div>
<!-- #include file="inc-global/footer.html" -->
