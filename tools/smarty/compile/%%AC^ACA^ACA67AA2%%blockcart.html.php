<?php /* Smarty version 2.6.20, created on 2010-06-27 13:43:49
         compiled from ../../../GUI//modules/blockcartmod/blockcart.html */ ?>
<?php if ($this->_tpl_vars['ajax_allowed']): ?>
	<?php if (! $this->_tpl_vars['order_page']): ?>
		<script type="text/javascript" src="<?php echo $this->_tpl_vars['content_dir']; ?>
GUI/js/ajax-cart.js"></script>
	<?php endif; ?>
<?php endif; ?>
<!-- MODULE Block cart -->
<div id="cart_block" class="block exclusive">
	<div align="center"> <img src="GUI/images/loading-1.gif" /></div>    
</div>
<!-- /MODULE Block cart -->