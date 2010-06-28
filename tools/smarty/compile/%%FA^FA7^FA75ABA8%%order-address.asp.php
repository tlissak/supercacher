<?php /* Smarty version 2.6.20, created on 2010-06-14 21:46:28
         compiled from ../../../GUI//order-address.asp */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', '../../../GUI//order-address.asp', 1, false),array('modifier', 'escape', '../../../GUI//order-address.asp', 56, false),array('modifier', 'intval', '../../../GUI//order-address.asp', 57, false),array('modifier', 'count', '../../../GUI//order-address.asp', 75, false),)), $this); ?>
<?php ob_start(); ?><?php echo smartyTranslate(array('s' => 'Addresses'), $this);?>
<?php $this->_smarty_vars['capture']['path'] = ob_get_contents(); ob_end_clean(); ?>
<?php $this->assign('current_step', 'address'); ?> 





<!-- #include file="inc-global/init.php" -->

<!-- #include file="css/style.css" -->
<!-- #include file="css/global.css" -->

<!-- #include file="js/jquery.search.js" -->
<!-- #include file="js/init.js" -->
<!-- #include file="inc-global/header.html" -->

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['GUI_THEME_PATH'])."/inc-private/order-address-js.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 
<!-- #include file="inc-private/order-address-js.html" -->

<!-- #include file="inc-global/base_dir_js.html" -->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['GUI_THEME_PATH'])."/inc-global/base_dir_js.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div class="p-15">

<div class="left w-1-5 bg-lightgray">
<div class="hline-red"></div>
<div class="m-20">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['GUI_THEME_PATH'])."/inc-private/order-steps.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 
<!-- #include file="inc-private/order-steps.tpl" -->
</div>
</div>



<div class="right w-4-5 bg-lightgray">
<div class="hline-red"></div>
<div class="m-20">
<!-- #include file="inc-global/breadcrumb.html" -->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['GUI_THEME_PATH'])."/inc-global/breadcrumb.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<h3><?php echo smartyTranslate(array('s' => 'Addresses'), $this);?>
</h3>
<!-- #include file="inc-global/errors.html" -->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['GUI_THEME_PATH'])."/inc-global/errors.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>







<form action="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
order.php" method="post"  id="address_form">

<div class="p-20">
<label for="id_address_delivery"><?php echo smartyTranslate(array('s' => 'Choose a delivery address:'), $this);?>
</label><br />
<select	name="id_address_delivery" id="id_address_delivery" class="ipt"  >
	<?php $_from = $this->_tpl_vars['addresses']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['address']):
?>
	<optgroup label="<?php echo ((is_array($_tmp=$this->_tpl_vars['address']['alias'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
">
	<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['address']['id_address'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
" 
	<?php if ($this->_tpl_vars['address']['id_address'] == $this->_tpl_vars['cart']->id_address_delivery): ?>selected="selected"<?php endif; ?> >
		<?php if ($this->_tpl_vars['address']['company']): ?><?php echo $this->_tpl_vars['address']['company']; ?>
 , <?php endif; ?>
		<?php echo $this->_tpl_vars['address']['firstname']; ?>
 <?php echo $this->_tpl_vars['address']['lastname']; ?>
 ,
	<?php echo $this->_tpl_vars['address']['address1']; ?>

	<?php if ($this->_tpl_vars['address']['address2']): ?>,<?php echo $this->_tpl_vars['address']['address2']; ?>
<?php endif; ?>
	,<?php echo $this->_tpl_vars['address']['postcode']; ?>
 <?php echo $this->_tpl_vars['address']['city']; ?>
 ,
	<?php echo $this->_tpl_vars['address']['country']; ?>
 
	<?php if (isset ( $this->_tpl_vars['address']['state'] )): ?> (<?php echo $this->_tpl_vars['address']['state']; ?>
)<?php endif; ?>
	<?php if ($this->_tpl_vars['address']['phone']): ?> ,<?php echo $this->_tpl_vars['address']['phone']; ?>
<?php endif; ?>
	<?php if ($this->_tpl_vars['address']['phone_mobile']): ?> <?php echo $this->_tpl_vars['address']['phone_mobile']; ?>
 <?php endif; ?>
		</option>
		</optgroup>
	<?php endforeach; endif; unset($_from); ?>
</select>
</div>

<div class="p-20">
 <?php if (count($this->_tpl_vars['addresses']) > 1): ?>  
<input type="checkbox"  onClick="$._('id_address_invoice').disabled = (this.checked)" name="same" value="1" <?php if ($this->_tpl_vars['cart']->id_address_invoice == $this->_tpl_vars['cart']->id_address_delivery): ?>checked="checked"<?php endif; ?>  /> 
<?php else: ?>
<input type="checkbox"  disabled="disabled" checked="checked" /><input type="hidden" name="same" value="1"  />
 <?php endif; ?>
<label	for="addressesAreEquals"><?php echo smartyTranslate(array('s' => 'Use the same address for billing.'), $this);?>
</label>
</div>


<?php if (count($this->_tpl_vars['addresses']) > 1): ?> 
<div id="id_address_invoice_box" class="p-20">
<label for="id_address_invoice" ><?php echo smartyTranslate(array('s' => 'Choose a billing address:'), $this);?>
</label><br />	
<select name="id_address_invoice" id="id_address_invoice" class="ipt" 
	<?php if ($this->_tpl_vars['cart']->id_address_invoice == $this->_tpl_vars['cart']->id_address_delivery): ?>disabled="disabled"<?php endif; ?> >
	<?php $_from = $this->_tpl_vars['addresses']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['address']):
?>
	<optgroup label="<?php echo ((is_array($_tmp=$this->_tpl_vars['address']['alias'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
">
	<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['address']['id_address'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
"
	 <?php if ($this->_tpl_vars['address']['id_address'] == $this->_tpl_vars['cart']->id_address_invoice): ?>selected="selected"<?php endif; ?>>
		<?php if ($this->_tpl_vars['address']['company']): ?><?php echo $this->_tpl_vars['address']['company']; ?>
 , <?php endif; ?>
		<?php echo $this->_tpl_vars['address']['firstname']; ?>
 <?php echo $this->_tpl_vars['address']['lastname']; ?>
 ,
	<?php echo $this->_tpl_vars['address']['address1']; ?>

	<?php if ($this->_tpl_vars['address']['address2']): ?>,<?php echo $this->_tpl_vars['address']['address2']; ?>
<?php endif; ?>
	,<?php echo $this->_tpl_vars['address']['postcode']; ?>
 <?php echo $this->_tpl_vars['address']['city']; ?>
 ,
	<?php echo $this->_tpl_vars['address']['country']; ?>
 
	<?php if (isset ( $this->_tpl_vars['address']['state'] )): ?> (<?php echo $this->_tpl_vars['address']['state']; ?>
)<?php endif; ?>
	<?php if ($this->_tpl_vars['address']['phone']): ?> ,<?php echo $this->_tpl_vars['address']['phone']; ?>
<?php endif; ?>
	<?php if ($this->_tpl_vars['address']['phone_mobile']): ?> <?php echo $this->_tpl_vars['address']['phone_mobile']; ?>
 <?php endif; ?>
		</option>
		</optgroup>
	<?php endforeach; endif; unset($_from); ?>
</select>
</div>
<?php else: ?> <?php endif; ?>


<div class="clear spacer"></div>
<a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
address.php?back=order.php&amp;step=1"
	title="<?php echo smartyTranslate(array('s' => 'Add'), $this);?>
" class="button btn-orange small"><?php echo smartyTranslate(array('s' => 'Add a new address'), $this);?>
</a>
<div id="ordermsg">
<p><?php echo smartyTranslate(array('s' => 'If you want to leave us comment about your order, please write it below.'), $this);?>
</p>
<textarea cols="60" rows="3" name="message" class="ipt" ><?php echo $this->_tpl_vars['oldMessage']; ?>
</textarea>
<div class="clear spacer"></div>
</div>
<!--
<input type="hidden" name="ajax" value="true" />
<input type="hidden" name="processAddress" value="true" />
-->

<input type="hidden" class="hidden"	name="step" value="2" />
 <input type="hidden" name="back"	value="<?php echo $this->_tpl_vars['back']; ?>
"  /> 
 

 <span class="btn"><span><a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
order.php?step=0<?php if ($this->_tpl_vars['back']): ?>&back=<?php echo $this->_tpl_vars['back']; ?>
<?php endif; ?>" 	title="<?php echo smartyTranslate(array('s' => 'Previous'), $this);?>
" >&laquo; <?php echo smartyTranslate(array('s' => 'Previous'), $this);?>
</a> </span></span>

<div class="right">
 <span class="btn btn-dark"><span><input	type="submit" name="processAddress" value="<?php echo smartyTranslate(array('s' => 'Next'), $this);?>
 &raquo;"  /></span></span></div>

</form>
</div> <!-- / right w-4-5 -->

<div class="clear"></div>
</div><!--p-20 -->