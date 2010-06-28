<?php /* Smarty version 2.6.20, created on 2010-06-27 21:28:03
         compiled from ../../../GUI//modules/loyalty/product.asp */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', '../../../GUI//modules/loyalty/product.asp', 3, false),array('function', 'convertPrice', '../../../GUI//modules/loyalty/product.asp', 7, false),)), $this); ?>
<p id="loyalty" class="align_justify">
<?php if ($this->_tpl_vars['points']): ?>
	<?php echo smartyTranslate(array('s' => 'By buying this product you can collect up to','mod' => 'loyalty'), $this);?>
 <b><?php echo $this->_tpl_vars['points']; ?>
 
	<?php if ($this->_tpl_vars['points'] > 1): ?><?php echo smartyTranslate(array('s' => 'loyalty points','mod' => 'loyalty'), $this);?>
<?php else: ?><?php echo smartyTranslate(array('s' => 'loyalty point','mod' => 'loyalty'), $this);?>
<?php endif; ?></b>.
	<br /> 
	<?php echo smartyTranslate(array('s' => 'Your cart will total','mod' => 'loyalty'), $this);?>
 <b><?php echo $this->_tpl_vars['total_points']; ?>
 <?php if ($this->_tpl_vars['total_points'] > 1): ?><?php echo smartyTranslate(array('s' => 'points','mod' => 'loyalty'), $this);?>
<?php else: ?><?php echo smartyTranslate(array('s' => 'point','mod' => 'loyalty'), $this);?>
<?php endif; ?></b> 
	<?php echo smartyTranslate(array('s' => 'that can be converted into a voucher of','mod' => 'loyalty'), $this);?>
 <?php echo Product::convertPrice(array('price' => $this->_tpl_vars['voucher']), $this);?>
.<?php else: ?><?php echo smartyTranslate(array('s' => 'No reward points for this product.','mod' => 'loyalty'), $this);?>
<?php endif; ?>
</p>
<br class="clear" />