<?php /* Smarty version 2.6.20, created on 2010-06-09 12:51:25
         compiled from ../../../GUI//modules/blockwishlist/view.asp */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', '../../../GUI//modules/blockwishlist/view.asp', 1, false),array('modifier', 'truncate', '../../../GUI//modules/blockwishlist/view.asp', 55, false),array('modifier', 'escape', '../../../GUI//modules/blockwishlist/view.asp', 55, false),array('modifier', 'intval', '../../../GUI//modules/blockwishlist/view.asp', 65, false),)), $this); ?>
<?php ob_start(); ?><a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
my-account.php"><?php echo smartyTranslate(array('s' => 'My account','mod' => 'blockwishlist'), $this);?>
</a><span class="navigation-pipe"><?php echo $this->_tpl_vars['navigationPipe']; ?>
</span><?php echo smartyTranslate(array('s' => 'My wishlists','mod' => 'blockwishlist'), $this);?>
<?php $this->_smarty_vars['capture']['path'] = ob_get_contents(); ob_end_clean(); ?>

<!-- #include file="inc-global/init.php" -->

<!-- #include file="css/style.css" -->
<!-- #include file="css/global.css" -->

<!-- #include file="js/jquery.search.js" -->
<!-- #include file="js/init.js" -->
<!-- #include file="inc-global/header.html" -->



<?php ob_start(); ?><a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
my-account.php"><?php echo smartyTranslate(array('s' => 'My account','mod' => 'blockwishlist'), $this);?>
</a><span class="navigation-pipe"><?php echo $this->_tpl_vars['navigationPipe']; ?>
</span><?php echo smartyTranslate(array('s' => 'My wishlists','mod' => 'blockwishlist'), $this);?>
<?php $this->_smarty_vars['capture']['path'] = ob_get_contents(); ob_end_clean(); ?>

<div class="p-20">

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['GUI_THEME_PATH'])."/inc-global/base_dir_js.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<!-- #include file="../../inc-global/breadcrumb.html" -->
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['GUI_THEME_PATH'])."/inc-global/breadcrumb.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	
	
	<div class="account-left">
		<div class="spacer"></div>
		<!-- #include file="../../inc-global/account-nav.html" -->
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['GUI_THEME_PATH'])."/inc-global/account-nav.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	</div>
	<div class="account-right">
		<div class="account-content-inner">
	
	
	
							<div id="view_wishlist">
							<h2><?php echo smartyTranslate(array('s' => 'Wishlist','mod' => 'blockwishlist'), $this);?>
</h2>
							<?php if ($this->_tpl_vars['wishlists']): ?>
							<p>
								<?php echo smartyTranslate(array('s' => 'Other wishlists of','mod' => 'blockwishlist'), $this);?>
 <?php echo $this->_tpl_vars['current_wishlist']['firstname']; ?>
 <?php echo $this->_tpl_vars['current_wishlist']['lastname']; ?>
:
								<?php $_from = $this->_tpl_vars['wishlists']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['i'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['i']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['wishlist']):
        $this->_foreach['i']['iteration']++;
?>
								<a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
modules/blockwishlist/view.php?token=<?php echo $this->_tpl_vars['wishlist']['token']; ?>
"><?php echo $this->_tpl_vars['wishlist']['name']; ?>
</a>
									<?php if (! ($this->_foreach['i']['iteration'] == $this->_foreach['i']['total'])): ?>
										/
									<?php endif; ?>
								<?php endforeach; endif; unset($_from); ?>
							</p>
							<?php endif; ?>
							<?php if ($this->_tpl_vars['products']): ?>
							<div class="addresses" id="featured-products_block_center">
								<h3><?php echo smartyTranslate(array('s' => 'Welcome to the wishlist of','mod' => 'blockwishlist'), $this);?>
 <?php echo $this->_tpl_vars['current_wishlist']['firstname']; ?>
 <?php echo $this->_tpl_vars['current_wishlist']['lastname']; ?>
: <?php echo $this->_tpl_vars['current_wishlist']['name']; ?>
</h3>
								<p />
								<?php $_from = $this->_tpl_vars['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['i'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['i']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['product']):
        $this->_foreach['i']['iteration']++;
?>
								<ul class="address <?php if (($this->_foreach['i']['iteration'] == $this->_foreach['i']['total'])): ?>last_item<?php elseif (($this->_foreach['i']['iteration'] <= 1)): ?>first_item<?php endif; ?> <?php if (($this->_foreach['i']['iteration']-1) % 2): ?>alternate_item<?php else: ?>item<?php endif; ?>" id="block_<?php echo $this->_tpl_vars['product']['id_product']; ?>
_<?php echo $this->_tpl_vars['product']['id_product_attribute']; ?>
">
								<div class="ajax_block_product w-1-3 left">
									<li class="address_title"><a href="<?php echo $this->_tpl_vars['link']->getProductLink($this->_tpl_vars['product']['id_product'],$this->_tpl_vars['product']['link_rewrite'],$this->_tpl_vars['product']['category_rewrite']); ?>
" title="<?php echo smartyTranslate(array('s' => 'View','mod' => 'blockwishlist'), $this);?>
"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['product']['name'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 30, '...') : smarty_modifier_truncate($_tmp, 30, '...')))) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</a></li>
									<li class="address_name">
										<a	href="<?php echo $this->_tpl_vars['link']->getProductlink($this->_tpl_vars['product']['id_product'],$this->_tpl_vars['product']['link_rewrite'],$this->_tpl_vars['product']['category_rewrite']); ?>
" title="<?php echo smartyTranslate(array('s' => 'Product detail','mod' => 'blockwishlist'), $this);?>
">
											<img src="<?php echo $this->_tpl_vars['img_prod_dir']; ?>
<?php echo $this->_tpl_vars['product']['cover']; ?>
-medium.jpg" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" />
										</a>
									<span class="wishlist_product_detail">
									<?php if (isset ( $this->_tpl_vars['product']['attributes_small'] )): ?>
										<br /><a href="<?php echo $this->_tpl_vars['link']->getProductlink($this->_tpl_vars['product']['id_product'],$this->_tpl_vars['product']['link_rewrite'],$this->_tpl_vars['product']['category_rewrite']); ?>
" title="<?php echo smartyTranslate(array('s' => 'Product detail','mod' => 'blockwishlist'), $this);?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['product']['attributes_small'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</a>
									<?php endif; ?>
										<br /><?php echo smartyTranslate(array('s' => 'Quantity:','mod' => 'blockwishlist'), $this);?>

										<input type="text" id="<?php echo $this->_tpl_vars['product']['id_product']; ?>
_<?php echo $this->_tpl_vars['product']['id_product_attribute']; ?>
" size="3" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['quantity'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
" class="ipt" />
										<br />
										<?php echo smartyTranslate(array('s' => 'Priority:','mod' => 'blockwishlist'), $this);?>

										<?php if ($this->_tpl_vars['product']['priority'] == 0): ?>
											<span style="color:darkred; "><?php echo smartyTranslate(array('s' => 'High','mod' => 'blockwishlist'), $this);?>
</span>
										<?php elseif ($this->_tpl_vars['product']['priority'] == 1): ?>
											<span style="color:darkorange;"><?php echo smartyTranslate(array('s' => 'Medium','mod' => 'blockwishlist'), $this);?>
</span>
										<?php else: ?>
											<span style="color:green;"><?php echo smartyTranslate(array('s' => 'Low','mod' => 'blockwishlist'), $this);?>
</span>
										<?php endif; ?>
									</span>
									</li>
									<li class="address_address1 clear">
										<span class="btn"><a class="button_small clear" href="<?php echo $this->_tpl_vars['link']->getProductLink($this->_tpl_vars['product']['id_product'],$this->_tpl_vars['product']['link_rewrite'],$this->_tpl_vars['product']['category_rewrite']); ?>
" title="<?php echo smartyTranslate(array('s' => 'View','mod' => 'blockwishlist'), $this);?>
"><?php echo smartyTranslate(array('s' => 'View','mod' => 'blockwishlist'), $this);?>
</a></span>
										<?php if ($this->_tpl_vars['product']['attribute_quantity'] && $this->_tpl_vars['product']['attribute_quantity'] >= 1): ?>
										<?php if (! $this->_tpl_vars['ajax']): ?>
										<form 
										id="addtocart_<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['id_product'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
_<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['id_product_attribute'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
" 
										action="<?php echo $this->_tpl_vars['base_dir']; ?>
cart.php" method="post">
										<p class="hidden">
											<input type="hidden" name="id_product" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['id_product'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
" id="product_page_product_id"  />
											<input type="hidden" name="add" value="1" />
											<input type="hidden" name="token" value="<?php echo $this->_tpl_vars['token']; ?>
" />
											<input type="hidden" name="id_product_attribute" id="idCombination" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['id_product_attribute'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
" />
										</p>
										</form>
										<?php endif; ?>
										<span class="btn">
										<a href="javascript:;" class="exclusive" onclick="WishlistBuyProduct('<?php echo ((is_array($_tmp=$this->_tpl_vars['token'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
', '<?php echo $this->_tpl_vars['product']['id_product']; ?>
', '<?php echo $this->_tpl_vars['product']['id_product_attribute']; ?>
', '<?php echo $this->_tpl_vars['product']['id_product']; ?>
_<?php echo $this->_tpl_vars['product']['id_product_attribute']; ?>
', this, <?php echo $this->_tpl_vars['ajax']; ?>
);" 
										title="<?php echo smartyTranslate(array('s' => 'Add to cart','mod' => 'homefeatured'), $this);?>
"><?php echo smartyTranslate(array('s' => 'Add to cart','mod' => 'blockwishlist'), $this);?>
</a></span>
										<?php else: ?>
										<span class="btn">
										<span class="exclusive"><?php echo smartyTranslate(array('s' => 'Add to cart','mod' => 'blockwishlist'), $this);?>
</span>
										</span>
										<?php endif; ?>
									</li>
								</div>
								</ul>
								<?php endforeach; endif; unset($_from); ?>
								<p class="clear" />
							</div>
							<?php else: ?>
								<?php echo smartyTranslate(array('s' => 'No products','mod' => 'blockwishlist'), $this);?>

							<?php endif; ?>
							</div>
	
	
		</div>
	</div>
</div>