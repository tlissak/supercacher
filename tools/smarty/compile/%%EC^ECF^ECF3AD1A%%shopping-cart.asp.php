<?php /* Smarty version 2.6.20, created on 2010-06-27 21:31:46
         compiled from ../../../GUI//modules/loyalty/shopping-cart.asp */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', '../../../GUI//modules/loyalty/shopping-cart.asp', 3, false),array('function', 'convertPrice', '../../../GUI//modules/loyalty/shopping-cart.asp', 7, false),)), $this); ?>
<!-- MODULE Loyalty -->
<p id="loyalty">
	<?php if ($this->_tpl_vars['points'] > 0): ?><?php echo smartyTranslate(array('s' => 'By check out this shopping cart you can collect up to','mod' => 'loyalty'), $this);?>
 
	<b><?php echo $this->_tpl_vars['points']; ?>
 <?php if ($this->_tpl_vars['points'] > 1): ?><?php echo smartyTranslate(array('s' => 'loyalty points','mod' => 'loyalty'), $this);?>
<?php else: ?><?php echo smartyTranslate(array('s' => 'loyalty point','mod' => 'loyalty'), $this);?>
<?php endif; ?></b> 
	
	<br />
	<?php echo smartyTranslate(array('s' => 'that can be converted into a voucher of','mod' => 'loyalty'), $this);?>
 <?php echo Product::convertPrice(array('price' => $this->_tpl_vars['voucher']), $this);?>
.<?php else: ?><?php echo smartyTranslate(array('s' => 'Add some products to your shopping cart to collect some loyalty points.','mod' => 'loyalty'), $this);?>
<?php endif; ?>
</p>
<!-- END : MODULE Loyalty -->