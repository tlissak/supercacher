<?php /* Smarty version 2.6.20, created on 2010-06-27 18:17:19
         compiled from ../../../GUI//inc-private/product-list.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', '../../../GUI//inc-private/product-list.tpl', 10, false),array('modifier', 'truncate', '../../../GUI//inc-private/product-list.tpl', 25, false),array('modifier', 'strip_tags', '../../../GUI//inc-private/product-list.tpl', 29, false),array('modifier', 'date_format', '../../../GUI//inc-private/product-list.tpl', 54, false),array('modifier', 'intval', '../../../GUI//inc-private/product-list.tpl', 81, false),array('function', 'l', '../../../GUI//inc-private/product-list.tpl', 45, false),array('function', 'convertPrice', '../../../GUI//inc-private/product-list.tpl', 63, false),)), $this); ?>
<?php if (isset ( $this->_tpl_vars['products'] )): ?>
<!-- Products list -->
<ul class="product-list">
	<?php $_from = $this->_tpl_vars['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['products'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['products']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['product']):
        $this->_foreach['products']['iteration']++;
?>
		<?php if ($this->_tpl_vars['k'] % 4 == 0): ?><div class="clear"></div><?php endif; ?>
		
        
	<li class="ajax_block_product">
	<!-- product image -->
	<div class="center img-box"><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['link'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
"
		title="<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
"> <img
		src="<?php echo $this->_tpl_vars['link']->getImageLink($this->_tpl_vars['product']['link_rewrite'],$this->_tpl_vars['product']['id_image'],'medium'); ?>
"
		alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['legend'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" /></a>
	
	</div>
	<!-- / product image -->
	
	
	
	<!-- product description -->

	<h3 class="product_name m-1"><a
		href="<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['link'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
"
		title="<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['legend'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
">
	<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['product']['name'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 35, '...') : smarty_modifier_truncate($_tmp, 35, '...')))) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</a></h3>

	<p class="product_desc m-1"><a
		href="<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['link'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
">
	<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['product']['description_short'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp, 'UTF-8') : smarty_modifier_strip_tags($_tmp, 'UTF-8')))) ? $this->_run_mod_handler('truncate', true, $_tmp, 360, '...') : smarty_modifier_truncate($_tmp, 360, '...')); ?>
</a>
    
			<?php $_from = $this->_tpl_vars['product']['features']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['features'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['features']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['feature']):
        $this->_foreach['features']['iteration']++;
?>         
                       <b><?php echo ((is_array($_tmp=$this->_tpl_vars['feature']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</b>:<br />
						<?php echo ((is_array($_tmp=$this->_tpl_vars['feature']['value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
<br>
   			<?php endforeach; endif; unset($_from); ?> 
    </p>



    
	<!-- price / onsale / available-->
	<div class="xproduct-bottom">
    
   	 <span class="availability">
    <?php if (( $this->_tpl_vars['product']['allow_oosp'] || $this->_tpl_vars['product']['quantity'] > 0 )): ?>
    	<span class="dispo" title="<?php echo smartyTranslate(array('s' => 'Available'), $this);?>
">Dispo.</span>
     <?php else: ?>
     	<?php echo smartyTranslate(array('s' => 'Out of stock'), $this);?>

     <?php endif; ?>
    </span>
    
    <span class="p-10 right">
    <?php if ($this->_tpl_vars['product']['on_sale']): ?> 
    	<span class="on_sale"><?php echo smartyTranslate(array('s' => 'On sale!'), $this);?>
</span>
     <?php elseif (( $this->_tpl_vars['product']['reduction_price'] != 0 || $this->_tpl_vars['product']['reduction_percent'] != 0 ) && ( $this->_tpl_vars['product']['reduction_from'] == $this->_tpl_vars['product']['reduction_to'] || ( ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')) <= $this->_tpl_vars['product']['reduction_to'] && ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')) >= $this->_tpl_vars['product']['reduction_from'] ) )): ?> 
     	<span class="discount"><?php echo smartyTranslate(array('s' => 'Price lowered!'), $this);?>
</span> 
    <?php endif; ?>
    
    
    <?php if (! $this->_tpl_vars['priceDisplay'] || $this->_tpl_vars['priceDisplay'] == 2): ?> 
       	<span class="price"><?php echo Product::convertPrice(array('price' => $this->_tpl_vars['product']['price']), $this);?>
</span> 
    		<?php if ($this->_tpl_vars['priceDisplay'] == 2): ?> <?php echo smartyTranslate(array('s' => '+Tx'), $this);?>
<?php endif; ?>
    <?php endif; ?>
    <?php if ($this->_tpl_vars['priceDisplay']): ?> 
        <span class="price" style="display: inline;">
        	<?php echo Product::convertPrice(array('price' => $this->_tpl_vars['product']['price_tax_exc']), $this);?>

        </span> 
            <?php if ($this->_tpl_vars['priceDisplay'] == 2): ?> <?php echo smartyTranslate(array('s' => '-Tx'), $this);?>
<?php endif; ?>
    <?php endif; ?>
	</span>
	
	<div class="clear" ></div>

	<div class="p-20">
	<span class="btn"><span>
	<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['link'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
&amp;content_only=1" title="<?php echo smartyTranslate(array('s' => 'View'), $this);?>
" class="nyroModal"><img src="GUI/images/zoom.gif" alt="<?php echo smartyTranslate(array('s' => 'View'), $this);?>
" /></a></span></span>
	<?php if (( $this->_tpl_vars['product']['allow_oosp'] || $this->_tpl_vars['product']['quantity'] > 0 ) && $this->_tpl_vars['product']['customizable'] != 2): ?> 
	<span class="btn right"><span><a class="ajax_add_to_cart_button" rel="ajax_id_product_<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['id_product'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
" href="<?php echo $this->_tpl_vars['base_dir']; ?>
cart.php?add&amp;id_product=<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['id_product'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
&amp;token=<?php echo $this->_tpl_vars['static_token']; ?>
"><img src="GUI/images/cart.gif" alt="<?php echo smartyTranslate(array('s' => 'Add to cart'), $this);?>
" class= /></a></span></span> <?php else: ?> 
    	<span class="exclusive right" style="padding:5px;"><?php echo smartyTranslate(array('s' => 'Out of stock'), $this);?>
</span>
	<?php endif; ?></div>
	
	</div>
	
	<div class="h-18"></div>
	</li>
	<?php endforeach; endif; unset($_from); ?>
</ul>
<!-- /Products list -->
<?php endif; ?>