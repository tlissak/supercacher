<?php /* Smarty version 2.6.20, created on 2010-06-09 15:02:13
         compiled from D:%5CHTDOCS%5Cpresta-tpl/themes/element/./shopping-cart-product-line.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'D:\\HTDOCS\\presta-tpl/themes/element/./shopping-cart-product-line.tpl', 3, false),array('modifier', 'count', 'D:\\HTDOCS\\presta-tpl/themes/element/./shopping-cart-product-line.tpl', 29, false),array('modifier', 'intval', 'D:\\HTDOCS\\presta-tpl/themes/element/./shopping-cart-product-line.tpl', 32, false),array('function', 'l', 'D:\\HTDOCS\\presta-tpl/themes/element/./shopping-cart-product-line.tpl', 19, false),array('function', 'convertPrice', 'D:\\HTDOCS\\presta-tpl/themes/element/./shopping-cart-product-line.tpl', 24, false),)), $this); ?>
<tr class="<?php if (($this->_foreach['productLoop']['iteration'] == $this->_foreach['productLoop']['total'])): ?>last_item<?php elseif (($this->_foreach['productLoop']['iteration'] <= 1)): ?>first_item<?php endif; ?><?php if (isset ( $this->_tpl_vars['customizedDatas'][$this->_tpl_vars['productId']][$this->_tpl_vars['productAttributeId']] ) && $this->_tpl_vars['quantityDisplayed'] == 0): ?>alternate_item<?php endif; ?> cart_item">
	<td class="cart_product">
	  <a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['link']->getProductLink($this->_tpl_vars['product']['id_product'],$this->_tpl_vars['product']['link_rewrite'],$this->_tpl_vars['product']['category']))) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
">
		<img src="<?php echo $this->_tpl_vars['img_prod_dir']; ?>
<?php echo $this->_tpl_vars['product']['id_image']; ?>
-small.jpg" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" />
	  </a>
	  <h5>
	   <a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['link']->getProductLink($this->_tpl_vars['product']['id_product'],$this->_tpl_vars['product']['link_rewrite'],$this->_tpl_vars['product']['category']))) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['product']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</a> 
	  </h5>
		<span>
		<?php if ($this->_tpl_vars['product']['attributes']): ?>
		<a class="cart_span_attribut" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['link']->getProductLink($this->_tpl_vars['product']['id_product'],$this->_tpl_vars['product']['link_rewrite'],$this->_tpl_vars['product']['category']))) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['product']['attributes'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</a>
		<?php if ($this->_tpl_vars['product']['attributes']): ?><?php if (isset ( $this->_tpl_vars['product']['attributes_each']['2'] )): ?><?php echo $this->_tpl_vars['product']['attributes_each']['2']; ?>
<?php endif; ?><?php endif; ?>
		<?php if ($this->_tpl_vars['product']['attributes']): ?><?php if (isset ( $this->_tpl_vars['product']['attributes_each']['1'] )): ?><?php echo $this->_tpl_vars['product']['attributes_each']['1']; ?>
<?php endif; ?><?php endif; ?>		
		<?php endif; ?>
		</span> 	
     </td>
	<td class="cart_availability">
		<?php if ($this->_tpl_vars['product']['active'] && ( $this->_tpl_vars['product']['allow_oosp'] || $this->_tpl_vars['product']['stock_quantity'] > 0 )): ?>
			<img src="<?php echo $this->_tpl_vars['img_dir']; ?>
icon/available.gif" alt="<?php echo smartyTranslate(array('s' => 'Available'), $this);?>
" />
		<?php else: ?>
			<img src="<?php echo $this->_tpl_vars['img_dir']; ?>
icon/unavailable.gif" alt="<?php echo smartyTranslate(array('s' => 'Out of stock'), $this);?>
" />
		<?php endif; ?>
	</td>
	<td class="cart_unit"><?php echo Product::convertPrice(array('price' => $this->_tpl_vars['product']['price_wt']), $this);?>
</td>
	<td class="cart_quantity">
		<?php if (isset ( $this->_tpl_vars['customizedDatas'][$this->_tpl_vars['productId']][$this->_tpl_vars['productAttributeId']] ) && $this->_tpl_vars['quantityDisplayed'] == 0): ?><?php echo $this->_tpl_vars['product']['customizationQuantityTotal']; ?>
<?php endif; ?>
		<?php if (! isset ( $this->_tpl_vars['customizedDatas'][$this->_tpl_vars['productId']][$this->_tpl_vars['productAttributeId']] ) || $this->_tpl_vars['quantityDisplayed'] > 0): ?>
		<span class="cart_quantity_number">
		<?php if ($this->_tpl_vars['quantityDisplayed'] == 0 && isset ( $this->_tpl_vars['customizedDatas'][$this->_tpl_vars['productId']][$this->_tpl_vars['productAttributeId']] )): ?><?php echo count($this->_tpl_vars['customizedDatas'][$this->_tpl_vars['productId']][$this->_tpl_vars['productAttributeId']]); ?>
<?php else: ?><?php echo $this->_tpl_vars['product']['quantity']-$this->_tpl_vars['quantityDisplayed']; ?>
<?php endif; ?>
		</span>		
		<span style="float:right">
		 <a class="cart_quantity_up" href="<?php echo $this->_tpl_vars['base_dir']; ?>
cart.php?add&amp;id_product=<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['id_product'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
&amp;ipa=<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['id_product_attribute'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
&amp;token=<?php echo $this->_tpl_vars['token_cart']; ?>
" title="<?php echo smartyTranslate(array('s' => 'Add'), $this);?>
">
		  <img src="<?php echo $this->_tpl_vars['img_dir']; ?>
icon/quantity_up.gif" alt="<?php echo smartyTranslate(array('s' => 'Add'), $this);?>
" />
		 </a>
		 <br />
		 <a class="cart_quantity_down" href="<?php echo $this->_tpl_vars['base_dir']; ?>
cart.php?add&amp;id_product=<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['id_product'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
&amp;ipa=<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['id_product_attribute'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
&amp;op=down&amp;token=<?php echo $this->_tpl_vars['token_cart']; ?>
" title="<?php echo smartyTranslate(array('s' => 'Subtract'), $this);?>
">
		 <img src="<?php echo $this->_tpl_vars['img_dir']; ?>
icon/quantity_down.gif" alt="<?php echo smartyTranslate(array('s' => 'Subtract'), $this);?>
" />
		 </a>
        </span>		
        <span style="float:right; margin-top:0.7em">
		<a class="cart_quantity_delete" href="<?php echo $this->_tpl_vars['base_dir']; ?>
cart.php?delete&amp;id_product=<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['id_product'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
&amp;ipa=<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['id_product_attribute'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
&amp;token=<?php echo $this->_tpl_vars['token_cart']; ?>
" title="<?php echo smartyTranslate(array('s' => 'Delete'), $this);?>
">
		<img src="<?php echo $this->_tpl_vars['img_dir']; ?>
icon/delete.gif" alt="<?php echo smartyTranslate(array('s' => 'Delete'), $this);?>
" class="icon" />
		</a>
		<?php endif; ?>
	    </span>
	</td>
	<td class="cart_total"><span class="price"><?php if ($this->_tpl_vars['quantityDisplayed'] == 0 && isset ( $this->_tpl_vars['customizedDatas'][$this->_tpl_vars['productId']][$this->_tpl_vars['productAttributeId']] )): ?><?php echo Product::convertPrice(array('price' => $this->_tpl_vars['product']['total_customization_wt']), $this);?>
<?php else: ?><?php echo Product::convertPrice(array('price' => $this->_tpl_vars['product']['total_wt']), $this);?>
<?php endif; ?></span></td>
</tr>