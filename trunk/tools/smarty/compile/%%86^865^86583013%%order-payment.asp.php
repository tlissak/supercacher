<?php /* Smarty version 2.6.20, created on 2010-06-13 15:03:59
         compiled from ../../../GUI//order-payment.asp */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', '../../../GUI//order-payment.asp', 1, false),array('function', 'convertPrice', '../../../GUI//order-payment.asp', 49, false),)), $this); ?>
<?php ob_start(); ?><?php echo smartyTranslate(array('s' => 'Your payment method'), $this);?>
<?php $this->_smarty_vars['capture']['path'] = ob_get_contents(); ob_end_clean(); ?>
<?php $this->assign('current_step', 'payment'); ?> 


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
<h3><?php echo smartyTranslate(array('s' => 'Choose your payment method'), $this);?>
</h3>
<!-- #include file="inc-global/errors.html" -->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['GUI_THEME_PATH'])."/inc-global/errors.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>







<?php if ($this->_tpl_vars['HOOK_PAYMENT']): ?>
<h4><?php echo smartyTranslate(array('s' => 'Please choose the payment method you want to use to pay the
amount of'), $this);?>
&nbsp;<span class="price"><?php echo Product::convertPrice(array('price' => $this->_tpl_vars['total_price']), $this);?>
</span>
<?php echo smartyTranslate(array('s' => '(tax incl.)'), $this);?>
</h4>
<br />
<?php echo $this->_tpl_vars['HOOK_PAYMENT']; ?>
 <?php else: ?>
<p class="warning"><?php echo smartyTranslate(array('s' => 'No payment modules have been installed yet.'), $this);?>
</p>
<?php endif; ?>

<p class="cart_navigation">
<span class="btn"><span>
<a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
order.php?step=2"
	title="<?php echo smartyTranslate(array('s' => 'Previous'), $this);?>
">&laquo; <?php echo smartyTranslate(array('s' => 'Previous'), $this);?>
</a>
</span></span></p>


</div> <!-- / right w-4-5 -->

<div class="clear"></div>
</div><!--p-20 -->