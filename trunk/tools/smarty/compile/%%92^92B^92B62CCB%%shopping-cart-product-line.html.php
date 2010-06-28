<?php /* Smarty version 2.6.20, created on 2010-06-27 21:31:47
         compiled from ../../../GUI//inc-private/shopping-cart-product-line.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', '../../../GUI//inc-private/shopping-cart-product-line.html', 3, false),array('modifier', 'count', '../../../GUI//inc-private/shopping-cart-product-line.html', 35, false),array('modifier', 'intval', '../../../GUI//inc-private/shopping-cart-product-line.html', 41, false),array('function', 'l', '../../../GUI//inc-private/shopping-cart-product-line.html', 17, false),array('function', 'convertPrice', '../../../GUI//inc-private/shopping-cart-product-line.html', 22, false),)), $this); ?>
<tr>
	<td class="cart_product">
    	<a	href="<?php echo ((is_array($_tmp=$this->_tpl_vars['link']->getProductLink($this->_tpl_vars['product']['id_product'],$this->_tpl_vars['product']['link_rewrite'],$this->_tpl_vars['product']['category']))) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
">
        <img src="<?php echo $this->_tpl_vars['link']->getImageLink($this->_tpl_vars['product']['link_rewrite'],$this->_tpl_vars['product']['id_image'],'small'); ?>
"
		alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" /></a></td>
	<td class="cart_description">
	<h5><a
		href="<?php echo ((is_array($_tmp=$this->_tpl_vars['link']->getProductLink($this->_tpl_vars['product']['id_product'],$this->_tpl_vars['product']['link_rewrite'],$this->_tpl_vars['product']['category']))) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['product']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</a></h5>
		<?php if ($this->_tpl_vars['product']['attributes']): ?>
			<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['link']->getProductLink($this->_tpl_vars['product']['id_product'],$this->_tpl_vars['product']['link_rewrite'],$this->_tpl_vars['product']['category']))) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['product']['attributes'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</a>
		<?php endif; ?>
	</td>
	<td class="cart_ref">
	<?php if ($this->_tpl_vars['product']['reference']): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['product']['reference'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
<?php else: ?>--<?php endif; ?></td>
	<td class="cart_availability">
	<?php if ($this->_tpl_vars['product']['active'] && ( $this->_tpl_vars['product']['allow_oosp'] || $this->_tpl_vars['product']['stock_quantity'] > 0 )): ?> 
		<?php echo smartyTranslate(array('s' => 'Available'), $this);?>

		<?php else: ?> 
		<?php echo smartyTranslate(array('s' => 'Out of stock'), $this);?>

	<?php endif; ?></td>
	<td class="cart_unit">
		<span class="price"> <?php echo Product::convertPrice(array('price' => $this->_tpl_vars['product']['price']), $this);?>
 <?php echo smartyTranslate(array('s' => '-Tx'), $this);?>
 </span>
	</td>
	<td class="cart_quantity">
		<?php if (isset ( $this->_tpl_vars['customizedDatas'][$this->_tpl_vars['productId']][$this->_tpl_vars['productAttributeId']] ) && $this->_tpl_vars['quantityDisplayed'] == 0): ?>
		<?php echo $this->_tpl_vars['product']['customizationQuantityTotal']; ?>

		<?php endif; ?>
		<?php if (! isset ( $this->_tpl_vars['customizedDatas'][$this->_tpl_vars['productId']][$this->_tpl_vars['productAttributeId']] ) || $this->_tpl_vars['quantityDisplayed'] > 0): ?>
		
		
		<p>X <?php if ($this->_tpl_vars['quantityDisplayed'] == 0 && isset ( $this->_tpl_vars['customizedDatas'][$this->_tpl_vars['productId']][$this->_tpl_vars['productAttributeId']] )): ?>
				<?php echo count($this->_tpl_vars['customizedDatas'][$this->_tpl_vars['productId']][$this->_tpl_vars['productAttributeId']]); ?>

			<?php else: ?>
				<?php echo $this->_tpl_vars['product']['quantity']-$this->_tpl_vars['quantityDisplayed']; ?>
	
			<?php endif; ?></p>
	</td>
	<td class="cart_action">	
    	<a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
cart.php?delete&amp;id_product=<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['id_product'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
&amp;ipa=<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['id_product_attribute'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
&amp;token=<?php echo $this->_tpl_vars['token_cart']; ?>
"
		title="<?php echo smartyTranslate(array('s' => 'Delete'), $this);?>
"><?php echo smartyTranslate(array('s' => 'Delete'), $this);?>
</a><br />
		
		
		
		
		<a class="cart-qty-add" href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
cart.php?add&amp;id_product=<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['id_product'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
&amp;ipa=<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['id_product_attribute'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
&amp;token=<?php echo $this->_tpl_vars['token_cart']; ?>
"
		title="<?php echo smartyTranslate(array('s' => 'Add'), $this);?>
">
        </a>
        
	<a class="cart-qty-sub"  href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
cart.php?add&amp;id_product=<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['id_product'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
&amp;ipa=<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['id_product_attribute'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
&amp;op=down&amp;token=<?php echo $this->_tpl_vars['token_cart']; ?>
"
		title="<?php echo smartyTranslate(array('s' => 'Subtract'), $this);?>
"></a>
	<?php endif; ?></td>
	<td class="cart_total">
	<span class="price"> 
	<?php if ($this->_tpl_vars['quantityDisplayed'] == 0 && isset ( $this->_tpl_vars['customizedDatas'][$this->_tpl_vars['productId']][$this->_tpl_vars['productAttributeId']] )): ?>
		<?php if (! $this->_tpl_vars['priceDisplay'] || $this->_tpl_vars['priceDisplay'] == 2): ?>
			<?php echo Product::convertPrice(array('price' => $this->_tpl_vars['product']['total_customization_wt']), $this);?>

			<?php if ($this->_tpl_vars['priceDisplay'] == 2): ?> 
				<?php echo smartyTranslate(array('s' => '+Tx'), $this);?>
<?php endif; ?><?php endif; ?><?php if ($this->_tpl_vars['priceDisplay'] == 2): ?><br />
			<?php endif; ?>
			<?php if ($this->_tpl_vars['priceDisplay']): ?>
				<?php echo Product::convertPrice(array('price' => $this->_tpl_vars['product']['total_customization']), $this);?>

				<?php if ($this->_tpl_vars['priceDisplay'] == 2): ?> 
					<?php echo smartyTranslate(array('s' => '-Tx'), $this);?>

				<?php endif; ?>
			<?php endif; ?>
		<?php else: ?>
		<?php if (! $this->_tpl_vars['priceDisplay'] || $this->_tpl_vars['priceDisplay'] == 2): ?>
			<?php echo Product::convertPrice(array('price' => $this->_tpl_vars['product']['total_wt']), $this);?>

			<?php if ($this->_tpl_vars['priceDisplay'] == 2): ?> 
				<?php echo smartyTranslate(array('s' => '+Tx'), $this);?>

			<?php endif; ?>
		<?php endif; ?>
		<?php if ($this->_tpl_vars['priceDisplay'] == 2): ?><br />
		<?php endif; ?>
	<?php if ($this->_tpl_vars['priceDisplay']): ?>
		<?php echo Product::convertPrice(array('price' => $this->_tpl_vars['product']['total']), $this);?>

		<?php if ($this->_tpl_vars['priceDisplay'] == 2): ?>
			<?php echo smartyTranslate(array('s' => '-Tx'), $this);?>

		<?php endif; ?>
	<?php endif; ?>
	<?php endif; ?> </span></td>
</tr>