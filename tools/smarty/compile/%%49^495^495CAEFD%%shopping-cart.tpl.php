<?php /* Smarty version 2.6.20, created on 2010-06-09 14:56:16
         compiled from D:%5CHTDOCS%5Cpresta-tpl/themes/blackwhite/shopping-cart.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', 'D:\\HTDOCS\\presta-tpl/themes/blackwhite/shopping-cart.tpl', 4, false),array('function', 'convertPrice', 'D:\\HTDOCS\\presta-tpl/themes/blackwhite/shopping-cart.tpl', 35, false),array('modifier', 'count', 'D:\\HTDOCS\\presta-tpl/themes/blackwhite/shopping-cart.tpl', 10, false),array('modifier', 'escape', 'D:\\HTDOCS\\presta-tpl/themes/blackwhite/shopping-cart.tpl', 92, false),array('modifier', 'htmlentities', 'D:\\HTDOCS\\presta-tpl/themes/blackwhite/shopping-cart.tpl', 98, false),)), $this); ?>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['base_dir']; ?>
js/conditions.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['js_dir']; ?>
layer.js"></script>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./thickbox.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php ob_start(); ?><?php echo smartyTranslate(array('s' => 'Your shopping cart'), $this);?>
<?php $this->_smarty_vars['capture']['path'] = ob_get_contents(); ob_end_clean(); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./breadcrumb.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $this->assign('current_step', 'summary'); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./order-steps.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="global_cart">
<h2><?php echo smartyTranslate(array('s' => 'Shopping cart summary'), $this);?>
</h2>
<p><?php echo smartyTranslate(array('s' => 'Your shopping cart contains'), $this);?>
 <?php echo count($this->_tpl_vars['products']); ?>
 <?php if (count($this->_tpl_vars['products']) > 1): ?><?php echo smartyTranslate(array('s' => 'products'), $this);?>
<?php else: ?><?php echo smartyTranslate(array('s' => 'product'), $this);?>
<?php endif; ?></p>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./errors.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php if (isset ( $this->_tpl_vars['empty'] )): ?>
<li class="warning"><?php echo smartyTranslate(array('s' => 'Your shopping cart is empty.'), $this);?>
</li>
<?php else: ?>
<?php if (isset ( $this->_tpl_vars['lastProductAdded'] ) && $this->_tpl_vars['lastProductAdded']): ?>
	<?php $_from = $this->_tpl_vars['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['product']):
?>
		<?php if ($this->_tpl_vars['product']['id_product'] == $this->_tpl_vars['lastProductAdded']): ?>
		<?php endif; ?>
	<?php endforeach; endif; unset($_from); ?>
<?php endif; ?>
<div id="order-detail-content" class="table_block">
	<table id="cart_summary" class="std" cellpadding="0" cellspacing="0">
		<thead>
			<tr colspan="4">
				<th class="cart_product item"><?php echo smartyTranslate(array('s' => 'Product'), $this);?>
</th>
				<th class="cart_availability item"><?php echo smartyTranslate(array('s' => 'Availibility'), $this);?>
</th>
				<th class="cart_unit item"><?php echo smartyTranslate(array('s' => 'Unit price'), $this);?>
</th>
				<th class="cart_quantity item"><?php echo smartyTranslate(array('s' => 'Quantity'), $this);?>
</th>
				<th class="cart_total last_item"><?php echo smartyTranslate(array('s' => 'Total'), $this);?>
</th>
			</tr>
		</thead>
		<tfoot>
			<tr class="cart_total_product">
				<td colspan="4"><?php echo smartyTranslate(array('s' => 'Total products:'), $this);?>
</td>
				<td class="price"><?php echo Product::convertPrice(array('price' => $this->_tpl_vars['total_products_wt']), $this);?>
</td>
		    </tr>
			<?php if ($this->_tpl_vars['total_discounts'] != 0): ?>
			<tr class="cart_total_voucher">
				<td colspan="4"><?php echo smartyTranslate(array('s' => 'Total vouchers:'), $this);?>
</td>
				<td class="price-discount"><?php echo Product::convertPrice(array('price' => $this->_tpl_vars['total_discounts']), $this);?>
</td>
		    </tr>
			<?php endif; ?>
			<?php if ($this->_tpl_vars['shippingCost'] > 0): ?>
			<tr class="cart_total_delivery">
				<td colspan="4"><?php echo smartyTranslate(array('s' => 'Total shipping:'), $this);?>
</td>
				<td class="price"><?php echo Product::convertPrice(array('price' => $this->_tpl_vars['shippingCost']), $this);?>
</td>
		    </tr>
			<?php endif; ?>
			<tr class="cart_total_price">
				<td colspan="4"><?php echo smartyTranslate(array('s' => 'Total:'), $this);?>
</td>
				<td class="price"><?php echo Product::convertPrice(array('price' => $this->_tpl_vars['total_price']), $this);?>
</td>
		    </tr>
			<?php if ($this->_tpl_vars['free_ship'] > 0): ?>
			<tr class="cart_free_shipping">
				<td colspan="4" style="white-space:normal"><?php echo smartyTranslate(array('s' => 'Remaining amount to be added to your cart in order to obtain free shipping:'), $this);?>
</td>
				<td colspan="4" class="price"><?php echo Product::convertPrice(array('price' => $this->_tpl_vars['free_ship']), $this);?>
</td>
		    </tr>
			<?php endif; ?>
		</tfoot>
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
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./shopping-cart-product-line.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<?php endforeach; endif; unset($_from); ?>	<?php if ($this->_tpl_vars['discounts']): ?>
		<tbody>
		<?php $_from = $this->_tpl_vars['discounts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['discountLoop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['discountLoop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['discount']):
        $this->_foreach['discountLoop']['iteration']++;
?>
			<tr class="cart_discount <?php if (($this->_foreach['discountLoop']['iteration'] == $this->_foreach['discountLoop']['total'])): ?>last_item<?php elseif (($this->_foreach['discountLoop']['iteration'] <= 1)): ?>first_item<?php else: ?>item<?php endif; ?>">
				<td class="cart_discount_name"><?php echo $this->_tpl_vars['discount']['name']; ?>
</td>
				<td class="cart_discount_description"><?php echo $this->_tpl_vars['discount']['description']; ?>
</td>
				<td class="cart_discount_delete" align="right">
				  <a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
order.php?deleteDiscount=<?php echo $this->_tpl_vars['discount']['id_discount']; ?>
" title="<?php echo smartyTranslate(array('s' => 'Delete'), $this);?>
">
				   <img src="<?php echo $this->_tpl_vars['img_dir']; ?>
icon/delete.gif" alt="<?php echo smartyTranslate(array('s' => 'Delete'), $this);?>
" class="icon" />
				  </a>
				</td>
				<td class="cart_discount_price" colspan="2"><span class="price-discount"><?php echo Product::convertPrice(array('price' => $this->_tpl_vars['discount']['value_real']*-1), $this);?>
</span></td>
		    </tr>
		<?php endforeach; endif; unset($_from); ?>
		</tbody>
	<?php endif; ?>
	</table>
  </div>

<?php if ($this->_tpl_vars['voucherAllowed']): ?>
<ul id="cart_voucher" class="table_block">
	<li id="voucher">
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
	<h4><?php echo smartyTranslate(array('s' => 'Vouchers'), $this);?>
</h4>
	<p><?php echo smartyTranslate(array('s' => 'indicate your voucher code and validate'), $this);?>
</p>
	<form action="<?php echo ((is_array($_tmp=$_SERVER['PHP_SELF'])) ? $this->_run_mod_handler('htmlentities', true, $_tmp) : htmlentities($_tmp)); ?>
" method="post" id="voucher">
      <table id="voucher" border="0" cellpadding="0" cellspacing="0">
       <tr>
	    <td valign="top">
	 <input type="text" id="discount_name" name="discount_name" value="<?php if ($this->_tpl_vars['discount_name']): ?><?php echo $this->_tpl_vars['discount_name']; ?>
<?php else: ?><?php echo smartyTranslate(array('s' => 'Enter your voucher code'), $this);?>
<?php endif; ?>" onfocus="javascript:if(this.value=='<?php echo smartyTranslate(array('s' => 'Enter your voucher code'), $this);?>
')this.value='';" onblur="javascript:if(this.value=='Enter your voucher code')this.value='<?php echo smartyTranslate(array('s' => 'Enter your voucher code'), $this);?>
';"></input>
        </td>
	    <td valign="top"><input type="submit" name="submitDiscount" value="<?php echo smartyTranslate(array('s' => ''), $this);?>
" class="sub" /></td>
       </tr>
      </table>	
	</form>
   </lu>
   </ul>
<?php endif; ?>
<?php echo $this->_tpl_vars['HOOK_SHOPPING_CART']; ?>

<p class="cart_navigation">
	<a href="<?php if ($_SERVER['HTTP_REFERER'] && strstr ( $_SERVER['HTTP_REFERER'] , 'order.php' )): ?><?php echo $this->_tpl_vars['base_dir']; ?>
index.php<?php else: ?><?php echo $_SERVER['HTTP_REFERER']; ?>
<?php endif; ?>" class="buttonnext" title="<?php echo smartyTranslate(array('s' => 'Continue shopping'), $this);?>
"><?php echo smartyTranslate(array('s' => 'Continue shopping'), $this);?>
</a>
	<a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
order.php?step=1" class="buttoncontinu" title="<?php echo smartyTranslate(array('s' => 'Next'), $this);?>
"><?php echo smartyTranslate(array('s' => 'checkout'), $this);?>
</a>
</p>
<?php endif; ?>
</div>
