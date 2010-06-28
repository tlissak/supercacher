<?php /* Smarty version 2.6.20, created on 2010-06-27 21:31:46
         compiled from ../../../GUI//shopping-cart.asp */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', '../../../GUI//shopping-cart.asp', 1, false),array('modifier', 'escape', '../../../GUI//shopping-cart.asp', 59, false),array('modifier', 'secureReferrer', '../../../GUI//shopping-cart.asp', 107, false),)), $this); ?>
<?php ob_start(); ?><?php echo smartyTranslate(array('s' => 'Your shopping cart'), $this);?>
<?php $this->_smarty_vars['capture']['path'] = ob_get_contents(); ob_end_clean(); ?> 
<?php $this->assign('current_step', 'summary'); ?> 

<!-- #include file="inc-global/init.php" -->

<!-- #include file="css/style.css" -->
<!-- #include file="css/global.css" -->
<!-- #include file="css/layout.css" -->

<!-- #include file="js/jquery.search.js" -->
<!-- #include file="js/init.js" -->
<!-- #include file="inc-global/header.html" -->



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

<h3><?php echo smartyTranslate(array('s' => 'Shopping cart summary'), $this);?>
</h3>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['GUI_THEME_PATH'])."/inc-global/errors.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 
<!-- #include file="inc-global/errors.html" -->
<?php if (isset ( $this->_tpl_vars['empty'] )): ?>
	<p class="warning"><?php echo smartyTranslate(array('s' => 'Your shopping cart is empty.'), $this);?>
</p>
<?php else: ?> 
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['GUI_THEME_PATH'])."/inc-private/shopping-cart-tbl.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 
<!-- #include file="inc-private/shopping-cart-tbl.html" -->
<p><sup><?php echo smartyTranslate(array('s' => '*'), $this);?>
</sup> 
<?php echo smartyTranslate(array('s' => 'When discount quantity applies, the unit price may be rounded up to 2 decimals'), $this);?>
</p>
<p><?php echo smartyTranslate(array('s' => 'Your shopping cart contains'), $this);?>
 <?php echo $this->_tpl_vars['productNumber']; ?>

 <?php if ($this->_tpl_vars['productNumber'] > 1): ?><?php echo smartyTranslate(array('s' => 'products'), $this);?>
<?php else: ?><?php echo smartyTranslate(array('s' => 'product'), $this);?>
<?php endif; ?></p>
<?php echo $this->_tpl_vars['HOOK_SHOPPING_CART']; ?>
 
<?php if (( $this->_tpl_vars['carrier']->id && ! $this->_tpl_vars['virtualCart'] ) || $this->_tpl_vars['delivery']->id || $this->_tpl_vars['invoice']->id): ?>
<div class="clear"></div>
<?php if ($this->_tpl_vars['delivery']->id): ?>
<div class="left  m-20">
<h3 class="address_title"><?php echo smartyTranslate(array('s' => 'Delivery address'), $this);?>
</h3>
<ul id="delivery_address">
	<?php if ($this->_tpl_vars['delivery']->company): ?>
	<li class="address_company"><?php echo ((is_array($_tmp=$this->_tpl_vars['delivery']->company)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</li>
	<?php endif; ?>
	<li class="address_name"><?php echo ((is_array($_tmp=$this->_tpl_vars['delivery']->lastname)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>

	<?php echo ((is_array($_tmp=$this->_tpl_vars['delivery']->firstname)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</li>
	<li class="address_address1"><?php echo ((is_array($_tmp=$this->_tpl_vars['delivery']->address1)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</li>
	<?php if ($this->_tpl_vars['delivery']->address2): ?>
	<li class="address_address2"><?php echo ((is_array($_tmp=$this->_tpl_vars['delivery']->address2)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</li>
	<?php endif; ?>
	<li class="address_city"><?php echo ((is_array($_tmp=$this->_tpl_vars['delivery']->postcode)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>

	<?php echo ((is_array($_tmp=$this->_tpl_vars['delivery']->city)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</li>
	<li class="address_country"><?php echo ((is_array($_tmp=$this->_tpl_vars['delivery']->country)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</li>
</ul>
</div>
<?php endif; ?> <!-- /delivery->id -->
<?php if ($this->_tpl_vars['invoice']->id): ?>
<div  class="left  m-20">
<h3><?php echo smartyTranslate(array('s' => 'Invoice address'), $this);?>
</h3>
<ul id="invoice_address">	
	<?php if ($this->_tpl_vars['invoice']->company): ?>
	<li class="address_company"><?php echo ((is_array($_tmp=$this->_tpl_vars['invoice']->company)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</li>
	<?php endif; ?>
	<li class="address_name"><?php echo ((is_array($_tmp=$this->_tpl_vars['invoice']->lastname)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>

	<?php echo ((is_array($_tmp=$this->_tpl_vars['invoice']->firstname)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</li>
	<li class="address_address1"><?php echo ((is_array($_tmp=$this->_tpl_vars['invoice']->address1)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</li>
	<?php if ($this->_tpl_vars['invoice']->address2): ?>
	<li class="address_address2"><?php echo ((is_array($_tmp=$this->_tpl_vars['invoice']->address2)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</li>
	<?php endif; ?>
	<li class="address_city"><?php echo ((is_array($_tmp=$this->_tpl_vars['invoice']->postcode)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>

	<?php echo ((is_array($_tmp=$this->_tpl_vars['invoice']->city)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</li>
	<li class="address_country"><?php echo ((is_array($_tmp=$this->_tpl_vars['invoice']->country)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</li>
</ul>
</div>
<?php endif; ?> <!-- /invoice->id -->
<?php if ($this->_tpl_vars['carrier']->id && ! $this->_tpl_vars['virtualCart']): ?>
<div id="order_carrier" class="left m-20">
<h3><?php echo smartyTranslate(array('s' => 'Carrier:'), $this);?>
</h3>
	<?php if (isset ( $this->_tpl_vars['carrierPicture'] )): ?>
		<img src="<?php echo $this->_tpl_vars['img_ship_dir']; ?>
<?php echo $this->_tpl_vars['carrier']->id; ?>
.jpg" alt="<?php echo smartyTranslate(array('s' => 'Carrier'), $this);?>
" />
	<?php endif; ?> 
<span><?php echo ((is_array($_tmp=$this->_tpl_vars['carrier']->name)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</span>
</div>
<?php endif; ?><!-- /$carrier->id AND !$virtualCart -->
<div class="clear"></div>
<?php endif; ?><!-- /if ($carrier->id AND !$virtualCart) OR $delivery->id OR $invoice->id -->
<div class="clear"></div>
<p class="cart_navigation">
	<span class="btn right"><span><a	href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
order.php?step=1<?php if ($this->_tpl_vars['back']): ?>&amp;back=<?php echo $this->_tpl_vars['back']; ?>
<?php endif; ?>" title="<?php echo smartyTranslate(array('s' => 'Next'), $this);?>
"><?php echo smartyTranslate(array('s' => 'Next'), $this);?>
 &raquo;</a> </span></span>
    
    <span class="btn"><span><a href="<?php if ($_SERVER['HTTP_REFERER'] && strstr ( $_SERVER['HTTP_REFERER'] , 'order.php' )): ?><?php echo $this->_tpl_vars['base_dir']; ?>
index.php<?php else: ?><?php echo ((is_array($_tmp=((is_array($_tmp=$_SERVER['HTTP_REFERER'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')))) ? $this->_run_mod_handler('secureReferrer', true, $_tmp) : Tools::secureReferrer($_tmp)); ?>
<?php endif; ?>"  title="<?php echo smartyTranslate(array('s' => 'Continue shopping'), $this);?>
">
	&laquo; <?php echo smartyTranslate(array('s' => 'Continue shopping'), $this);?>
</a></span></span>
</p>
<p class="cart_navigation_extra"><?php echo $this->_tpl_vars['HOOK_SHOPPING_CART_EXTRA']; ?>
</p>
<?php endif; ?><!-- /{if isset($empty) ---- else -->

</div>




</div>
<div class="clear"></div>
</div>