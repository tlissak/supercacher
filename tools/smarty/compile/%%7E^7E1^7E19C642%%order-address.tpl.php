<?php /* Smarty version 2.6.20, created on 2010-06-09 15:02:23
         compiled from D:%5CHTDOCS%5Cpresta-tpl/themes/element/order-address.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'intval', 'D:\\HTDOCS\\presta-tpl/themes/element/order-address.tpl', 5, false),array('modifier', 'addslashes', 'D:\\HTDOCS\\presta-tpl/themes/element/order-address.tpl', 5, false),array('modifier', 'default', 'D:\\HTDOCS\\presta-tpl/themes/element/order-address.tpl', 5, false),array('modifier', 'escape', 'D:\\HTDOCS\\presta-tpl/themes/element/order-address.tpl', 26, false),array('function', 'l', 'D:\\HTDOCS\\presta-tpl/themes/element/order-address.tpl', 11, false),)), $this); ?>
<script type="text/javascript">
<!--
	var addresses = new Array();
	<?php $_from = $this->_tpl_vars['addresses']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['address']):
?>
		addresses[<?php echo ((is_array($_tmp=$this->_tpl_vars['address']['id_address'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
] = new Array('<?php echo ((is_array($_tmp=$this->_tpl_vars['address']['company'])) ? $this->_run_mod_handler('addslashes', true, $_tmp) : addslashes($_tmp)); ?>
', '<?php echo ((is_array($_tmp=$this->_tpl_vars['address']['firstname'])) ? $this->_run_mod_handler('addslashes', true, $_tmp) : addslashes($_tmp)); ?>
', '<?php echo ((is_array($_tmp=$this->_tpl_vars['address']['lastname'])) ? $this->_run_mod_handler('addslashes', true, $_tmp) : addslashes($_tmp)); ?>
', '<?php echo ((is_array($_tmp=$this->_tpl_vars['address']['address1'])) ? $this->_run_mod_handler('addslashes', true, $_tmp) : addslashes($_tmp)); ?>
', '<?php echo ((is_array($_tmp=$this->_tpl_vars['address']['address2'])) ? $this->_run_mod_handler('addslashes', true, $_tmp) : addslashes($_tmp)); ?>
', '<?php echo ((is_array($_tmp=$this->_tpl_vars['address']['postcode'])) ? $this->_run_mod_handler('addslashes', true, $_tmp) : addslashes($_tmp)); ?>
', '<?php echo ((is_array($_tmp=$this->_tpl_vars['address']['city'])) ? $this->_run_mod_handler('addslashes', true, $_tmp) : addslashes($_tmp)); ?>
', '<?php echo ((is_array($_tmp=$this->_tpl_vars['address']['country'])) ? $this->_run_mod_handler('addslashes', true, $_tmp) : addslashes($_tmp)); ?>
', '<?php echo ((is_array($_tmp=((is_array($_tmp=@$this->_tpl_vars['address']['state'])) ? $this->_run_mod_handler('default', true, $_tmp, '') : smarty_modifier_default($_tmp, '')))) ? $this->_run_mod_handler('addslashes', true, $_tmp) : addslashes($_tmp)); ?>
');
	<?php endforeach; endif; unset($_from); ?>
-->
</script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['js_dir']; ?>
order-address.js"></script>

<?php ob_start(); ?><?php echo smartyTranslate(array('s' => 'Addresses'), $this);?>
<?php $this->_smarty_vars['capture']['path'] = ob_get_contents(); ob_end_clean(); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./breadcrumb.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php $this->assign('current_step', 'address'); ?>
<div id="alter_center">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./order-steps.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<h2><?php echo smartyTranslate(array('s' => 'Addresses'), $this);?>
</h2>
<div class="order_globale_step">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./errors.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<form action="<?php echo $this->_tpl_vars['base_dir']; ?>
order.php" method="post">
	<div class="addresses">
		<p class="address_delivery select">
			<label for="id_address_delivery"><?php echo smartyTranslate(array('s' => 'Choose a delivery address:'), $this);?>
</label>
			<select name="id_address_delivery" id="id_address_delivery" class="address_select" onchange="updateAddressesDisplay();">
			<?php $_from = $this->_tpl_vars['addresses']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['address']):
?>
				<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['address']['id_address'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
" <?php if ($this->_tpl_vars['address']['id_address'] == $this->_tpl_vars['cart']->id_address_delivery): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['address']['alias'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</option>
			<?php endforeach; endif; unset($_from); ?>
			</select>
		</p>
		<p id="identitygender">
			<input type="checkbox" name="same" id="addressesAreEquals" value="1" onclick="updateAddressesDisplay();" onchange="updateAddressesDisplay();" <?php if ($this->_tpl_vars['cart']->id_address_invoice == $this->_tpl_vars['cart']->id_address_delivery): ?>checked="checked"<?php endif; ?> />
			<label for="addressesAreEquals"><?php echo smartyTranslate(array('s' => 'Use the same address for billing.'), $this);?>
</label>
		</p>
		<p id="address_invoice_form" class="select" <?php if ($this->_tpl_vars['cart']->id_address_invoice == $this->_tpl_vars['cart']->id_address_delivery): ?>style="display: none;"<?php endif; ?>>
			<label for="id_address_invoice" class="strong"><?php echo smartyTranslate(array('s' => 'Choose a billing address:'), $this);?>
</label>
			<select name="id_address_invoice" id="id_address_invoice" class="address_select" onchange="updateAddressesDisplay();">
			<?php $_from = $this->_tpl_vars['addresses']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['address']):
?>
				<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['address']['id_address'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
" <?php if ($this->_tpl_vars['address']['id_address'] == $this->_tpl_vars['cart']->id_address_invoice): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['address']['alias'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</option>
			<?php endforeach; endif; unset($_from); ?>
			</select>
		</p>

		<ul class="address item" id="address_delivery">
			<li class="address_title"><?php echo smartyTranslate(array('s' => 'Your delivery address'), $this);?>
</li>
			<li class="address_company"></li>
			<li class="address_name"></li>
			<li class="address_address1"></li>
			<li class="address_address2"></li>
			<li class="address_city"></li>
			<li class="address_country"></li>
			<li class="address_update">
			   <a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
address.php?id_address=<?php echo ((is_array($_tmp=$this->_tpl_vars['address']['id_address'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
&amp;back=order.php&amp;step=1" title="<?php echo smartyTranslate(array('s' => 'Update'), $this);?>
"><?php echo smartyTranslate(array('s' => 'Update'), $this);?>
</a>
			</li>
		</ul>
		<ul class="address alternate_item" id="address_invoice">
			<li class="address_title"><?php echo smartyTranslate(array('s' => 'Your billing address'), $this);?>
</li>
			<li class="address_company"></li>
			<li class="address_name"></li>
			<li class="address_address1"></li>
			<li class="address_address2"></li>
			<li class="address_city"></li>
			<li class="address_country"></li>
			<li class="address_update">
			   <a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
address.php?id_address=<?php echo ((is_array($_tmp=$this->_tpl_vars['address']['id_address'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
&amp;back=order.php&amp;step=1" title="<?php echo smartyTranslate(array('s' => 'Update'), $this);?>
"><?php echo smartyTranslate(array('s' => 'Update'), $this);?>
</a>
			</li>
		</ul>
		<p class="address_add">
			<a class="address_add submit" href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
address.php?back=order.php&amp;step=1" title="<?php echo smartyTranslate(array('s' => 'Add'), $this);?>
"><?php echo smartyTranslate(array('s' => 'Add a new address'), $this);?>
</a>
       </p>
	    <div id="ordermsg">
			<p class="pcomment"><?php echo smartyTranslate(array('s' => 'If you want to leave us comment about your order, please write it below.'), $this);?>
</p>
			<p class="commenttextarea"><textarea cols="60" rows="3" name="message"><?php echo $this->_tpl_vars['oldMessage']; ?>
</textarea></p>
		</div>
	</div>

	<script type="text/javascript">
	<!--
		updateAddressesDisplay();
	-->
	</script>
	<p class="order_navigation">
		<input type="hidden" class="hidden" name="step" value="2" />
		<a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
order.php?step=0" title="<?php echo smartyTranslate(array('s' => 'Previous'), $this);?>
" class="buttonprecedent"><?php echo smartyTranslate(array('s' => 'Previous'), $this);?>
</a>
		<input type="submit" name="processAddress" value="<?php echo smartyTranslate(array('s' => 'Next'), $this);?>
" class="buttonorder" />
	</p>
	</p>
</form>
</div>
</div>