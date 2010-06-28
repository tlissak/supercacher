<?php /* Smarty version 2.6.20, created on 2010-06-27 21:31:47
         compiled from ../../../GUI//inc-private/shopping-cart-tbl.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', '../../../GUI//inc-private/shopping-cart-tbl.html', 5, false),array('function', 'displayPrice', '../../../GUI//inc-private/shopping-cart-tbl.html', 77, false),array('modifier', 'escape', '../../../GUI//inc-private/shopping-cart-tbl.html', 48, false),)), $this); ?>
<div id="order-detail-content" class="table_block">
<table id="cart_summary" class="std" cellpadding="0" cellspacing="0" width="100%" >
	<thead>
		<tr>
			<th class="cart_product first_item"><?php echo smartyTranslate(array('s' => 'Product'), $this);?>
</th>
			<th class="cart_description item"><?php echo smartyTranslate(array('s' => 'Description'), $this);?>
</th>
			<th class="cart_ref item"><?php echo smartyTranslate(array('s' => 'Ref.'), $this);?>
</th>
			<th class="cart_availability item"><?php echo smartyTranslate(array('s' => 'Avail.'), $this);?>
</th>
			<th class="cart_unit item"><?php echo smartyTranslate(array('s' => 'Unit price'), $this);?>
<sup><?php echo smartyTranslate(array('s' => '*'), $this);?>
</sup></th>
			<th class="cart_quantity item"><?php echo smartyTranslate(array('s' => 'Qty'), $this);?>
</th>
			<th class="cart_action item"><?php echo smartyTranslate(array('s' => 'Action'), $this);?>
</th>
			<th class="cart_total last_item"><?php echo smartyTranslate(array('s' => 'Total'), $this);?>
</th>
		</tr>
	</thead>
	<tbody>
	<?php $_from = $this->_tpl_vars['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['productLoop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['productLoop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['product']):
        $this->_foreach['productLoop']['iteration']++;
?> 
		<?php $this->assign('productId', $this->_tpl_vars['product']['id_product']); ?>
		<?php $this->assign('productAttributeId', $this->_tpl_vars['product']['id_product_attribute']); ?> 
		<?php $this->assign('quantityDisplayed', 0); ?> 
		
	
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['GUI_THEME_PATH'])."/inc-private/shopping-cart-product-line.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 
		
		<?php if (isset ( $this->_tpl_vars['customizedDatas'][$this->_tpl_vars['productId']][$this->_tpl_vars['productAttributeId']] )): ?> 
			<?php $_from = $this->_tpl_vars['customizedDatas'][$this->_tpl_vars['productId']][$this->_tpl_vars['productAttributeId']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['id_customization'] => $this->_tpl_vars['customization']):
?>
			
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['GUI_THEME_PATH'])."/inc-private/shopping-cart-product-custom.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 
			
				<?php $this->assign('quantityDisplayed', $this->_tpl_vars['quantityDisplayed']+$this->_tpl_vars['customization']['quantity']); ?>
			<?php endforeach; endif; unset($_from); ?> 

			<?php if ($this->_tpl_vars['product']['quantity']-$this->_tpl_vars['quantityDisplayed'] > 0): ?>
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['GUI_THEME_PATH'])."/inc-private/shopping-cart-product-line.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			<?php endif; ?>
		<?php endif; ?>
		
	<?php endforeach; endif; unset($_from); ?>
	</tbody>
</table>


<?php if ($this->_tpl_vars['voucherAllowed']): ?>
<div id="cart_voucher" class="left" >
	<?php if ($this->_tpl_vars['errors_discount']): ?>
	<ul class="error">
		<?php $_from = $this->_tpl_vars['errors_discount']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['error']):
?>
		<li><?php echo ((is_array($_tmp=$this->_tpl_vars['error'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</li>
		<?php endforeach; endif; unset($_from); ?>
	</ul>
	<?php endif; ?>
	
	<form action="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
order.php" method="post" id="voucher">

	<h4><?php echo smartyTranslate(array('s' => 'Vouchers'), $this);?>
</h4>
	<label for="discount_name"><?php echo smartyTranslate(array('s' => 'Code:'), $this);?>
</label>
	<div class="clear"></div>
		<input type="text"	id="discount_name" name="discount_name" class="ipt" 
		value="<?php if ($this->_tpl_vars['discount_name']): ?><?php echo $this->_tpl_vars['discount_name']; ?>
<?php endif; ?>" />
		 &nbsp; 
		<span class="btn btn-light right "><span><input type="submit" name="submitDiscount"
		value="<?php echo smartyTranslate(array('s' => 'Add'), $this);?>
" class="button" /></span></span>
		<div class="clear"></div>
	</form>
	
	
	<?php if ($this->_tpl_vars['discounts']): ?>
	
		<h4><?php echo smartyTranslate(array('s' => 'Your vouchers :'), $this);?>
</h4>
		
		<?php $_from = $this->_tpl_vars['discounts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['discountLoop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['discountLoop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['discount']):
        $this->_foreach['discountLoop']['iteration']++;
?>
				
				
				<span class="color-pink bold font-14">	
				<?php if ($this->_tpl_vars['discount']['value_real'] > 0): ?> 
					<?php if (! $this->_tpl_vars['priceDisplay']): ?>
						<?php echo Tools::displayPriceSmarty(array('price' => $this->_tpl_vars['discount']['value_real']*-1), $this);?>

					<?php else: ?>
						<?php echo Tools::displayPriceSmarty(array('price' => $this->_tpl_vars['discount']['value_tax_exc']*-1), $this);?>

					<?php endif; ?>
			   <?php endif; ?> 
			   </span>
					
				<?php echo $this->_tpl_vars['discount']['name']; ?>
 - <?php echo $this->_tpl_vars['discount']['description']; ?>

				 - 
				<a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
order.php?deleteDiscount=<?php echo $this->_tpl_vars['discount']['id_discount']; ?>
"
					title="<?php echo smartyTranslate(array('s' => 'Delete'), $this);?>
"><?php echo smartyTranslate(array('s' => 'Delete ?'), $this);?>
</a> 
				
			   <br />
			   
			<?php endforeach; endif; unset($_from); ?>
	<?php endif; ?>
	
	
</div> 
<?php endif; ?><!-- /voucherAllowed -->


<table  cellpadding="2" cellspacing="3" align="right" id="cart_total" bgcolor="#FFFFFF" width="50%" >
		<?php if ($this->_tpl_vars['priceDisplay']): ?>
		<tr class="cart_total_price">
			<td width="70%" ><?php echo smartyTranslate(array('s' => 'Total products (tax excl.):'), $this);?>
</td>
			<td class="price"><?php echo Tools::displayPriceSmarty(array('price' => $this->_tpl_vars['total_products']), $this);?>
</td>
		</tr>
		<?php else: ?>
		<tr class="cart_total_price">
			<td width="70%"  ><?php echo smartyTranslate(array('s' => 'Total products (tax incl.):'), $this);?>
</td>
			<td class="price"><?php echo Tools::displayPriceSmarty(array('price' => $this->_tpl_vars['total_products_wt']), $this);?>
</td>
		</tr>
		<?php endif; ?> <?php if ($this->_tpl_vars['total_discounts'] != 0): ?> <?php if ($this->_tpl_vars['priceDisplay']): ?>
		<tr class="cart_total_voucher">
			<td ><?php echo smartyTranslate(array('s' => 'Total vouchers (tax excl.):'), $this);?>
</td>
			<td class="price-discount"><?php echo Tools::displayPriceSmarty(array('price' => $this->_tpl_vars['total_discounts_tax_exc']), $this);?>
</td>
		</tr>
		<?php else: ?>
		<tr class="cart_total_voucher">
			<td ><?php echo smartyTranslate(array('s' => 'Total vouchers (tax incl.):'), $this);?>
</td>
			<td class="price-discount"><?php echo Tools::displayPriceSmarty(array('price' => $this->_tpl_vars['total_discounts']), $this);?>
</td>
		</tr>
		<?php endif; ?> <?php endif; ?> <?php if ($this->_tpl_vars['total_wrapping'] > 0): ?> <?php if ($this->_tpl_vars['priceDisplay']): ?>
		<tr class="cart_total_voucher">
			<td ><?php echo smartyTranslate(array('s' => 'Total gift-wrapping (tax excl.):'), $this);?>
</td>
			<td class="price-discount"><?php echo Tools::displayPriceSmarty(array('price' => $this->_tpl_vars['total_wrapping_tax_exc']), $this);?>
</td>
		</tr>
		<?php else: ?>
		<tr class="cart_total_voucher">
			<td ><?php echo smartyTranslate(array('s' => 'Total gift-wrapping (tax incl.):'), $this);?>
</td>
			<td class="price-discount"><?php echo Tools::displayPriceSmarty(array('price' => $this->_tpl_vars['total_wrapping']), $this);?>
</td>
		</tr>
		<?php endif; ?> <?php endif; ?> <?php if ($this->_tpl_vars['shippingCost'] > 0): ?> <?php if ($this->_tpl_vars['priceDisplay']): ?>
		<tr class="cart_total_delivery">
			<td ><?php echo smartyTranslate(array('s' => 'Total shipping (tax excl.):'), $this);?>
</td>
			<td class="price"><?php echo Tools::displayPriceSmarty(array('price' => $this->_tpl_vars['shippingCostTaxExc']), $this);?>
</td>
		</tr>
		<?php else: ?>
		<tr class="cart_total_delivery">
			<td ><?php echo smartyTranslate(array('s' => 'Total shipping (tax incl.):'), $this);?>
</td>
			<td class="price"><?php echo Tools::displayPriceSmarty(array('price' => $this->_tpl_vars['shippingCost']), $this);?>
</td>
		</tr>
		<?php endif; ?> <?php endif; ?>
		<tr class="cart_total_price">
			<td ><?php echo smartyTranslate(array('s' => 'Total (tax excl.):'), $this);?>
</td>
			<td class="price"><?php echo Tools::displayPriceSmarty(array('price' => $this->_tpl_vars['total_price_without_tax']), $this);?>
</td>
		</tr>
		<tr class="cart_total_voucher">
			<td ><?php echo smartyTranslate(array('s' => 'Total tax:'), $this);?>
</td>
			<td class="price"><?php echo Tools::displayPriceSmarty(array('price' => $this->_tpl_vars['total_tax']), $this);?>
</td>
		</tr>
		<tr class="cart_total_price">
			<td ><?php echo smartyTranslate(array('s' => 'Total (tax incl.):'), $this);?>
</td>
			<td class="price"><?php echo Tools::displayPriceSmarty(array('price' => $this->_tpl_vars['total_price']), $this);?>
</td>
		</tr>
		<?php if ($this->_tpl_vars['free_ship'] > 0): ?>
		<tr class="cart_free_shipping">
			<td class="cart_total_shipping"><?php echo smartyTranslate(array('s' => 'Remaining amount
			to be added to your cart in order to obtain free shipping:'), $this);?>
</td>
			<td class="price"><?php echo Tools::displayPriceSmarty(array('price' => $this->_tpl_vars['free_ship']), $this);?>
</td>
		</tr>
		<?php endif; ?>
</table>
<div class="clear"></div>

</div>