<?php /* Smarty version 2.6.20, created on 2010-06-09 15:00:01
         compiled from D:%5CHTDOCS%5Cpresta-tpl/themes/fennecs/./product-list.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'D:\\HTDOCS\\presta-tpl/themes/fennecs/./product-list.tpl', 3, false),array('modifier', 'intval', 'D:\\HTDOCS\\presta-tpl/themes/fennecs/./product-list.tpl', 5, false),array('modifier', 'count', 'D:\\HTDOCS\\presta-tpl/themes/fennecs/./product-list.tpl', 13, false),array('modifier', 'ceil', 'D:\\HTDOCS\\presta-tpl/themes/fennecs/./product-list.tpl', 14, false),array('modifier', 'truncate', 'D:\\HTDOCS\\presta-tpl/themes/fennecs/./product-list.tpl', 23, false),array('modifier', 'strip_tags', 'D:\\HTDOCS\\presta-tpl/themes/fennecs/./product-list.tpl', 25, false),array('function', 'l', 'D:\\HTDOCS\\presta-tpl/themes/fennecs/./product-list.tpl', 5, false),array('function', 'displayWtPrice', 'D:\\HTDOCS\\presta-tpl/themes/fennecs/./product-list.tpl', 26, false),)), $this); ?>
<div class="div_categorie_product">
 <h2 class="category_title">
	<?php echo ((is_array($_tmp=$this->_tpl_vars['category']->name)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>

    <?php if ($this->_tpl_vars['products']): ?>&nbsp;&nbsp;
    <b><?php echo ((is_array($_tmp=$this->_tpl_vars['nb_products'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
 <?php if ($this->_tpl_vars['nb_products'] > 1): ?><?php echo smartyTranslate(array('s' => 'products'), $this);?>
<?php else: ?><?php echo smartyTranslate(array('s' => 'product'), $this);?>
<?php endif; ?></b>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./pagination.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endif; ?>
</h2>
<ul id="categorie_product" class="products_block">
	<?php if (isset ( $this->_tpl_vars['products'] ) && $this->_tpl_vars['products']): ?>
		 <?php $this->assign('liHeight', 360); ?>
		 <?php $this->assign('nbItemsPerLine', 4); ?>
		 <?php $this->assign('nbLi', count($this->_tpl_vars['products'])); ?>
		 <?php $this->assign('nbLines', ((is_array($_tmp=$this->_tpl_vars['nbLi']/$this->_tpl_vars['nbItemsPerLine'])) ? $this->_run_mod_handler('ceil', true, $_tmp) : ceil($_tmp))); ?>
		 <?php $this->assign('ulHeight', $this->_tpl_vars['nbLines']*$this->_tpl_vars['liHeight']); ?>
	<ul>
			<?php $_from = $this->_tpl_vars['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['products'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['products']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['product']):
        $this->_foreach['products']['iteration']++;
?>
			<?php $this->assign('productLink', $this->_tpl_vars['link']->getProductLink($this->_tpl_vars['product']['id_product'],$this->_tpl_vars['product']['link_rewrite'],$this->_tpl_vars['product']['category'])); ?>
  <li class="<?php if (($this->_foreach['homeFeaturedProducts']['iteration'] <= 1)): ?>first_item<?php elseif (($this->_foreach['homeFeaturedProducts']['iteration'] == $this->_foreach['homeFeaturedProducts']['total'])): ?>last_item<?php else: ?>item<?php endif; ?> <?php if ($this->_foreach['homeFeaturedProducts']['iteration']%$this->_tpl_vars['nbItemsPerLine'] == 0): ?>last_item_of_line<?php elseif ($this->_foreach['homeFeaturedProducts']['iteration']%$this->_tpl_vars['nbItemsPerLine'] == 1): ?>first_item_of_line<?php endif; ?> <?php if ($this->_foreach['homeFeaturedProducts']['iteration'] > ( $this->_foreach['homeFeaturedProducts']['total'] - ( $this->_foreach['homeFeaturedProducts']['total'] % $this->_tpl_vars['nbItemsPerLine'] ) )): ?>last_line<?php endif; ?>">
<div class="boxgrid slideright">
  <img class="cover" src="<?php echo $this->_tpl_vars['img_prod_dir']; ?>
<?php echo $this->_tpl_vars['product']['id_image']; ?>
-large.jpg" height="200" width="160" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['legend'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
"/>
  <h5 class="h5">
    <a class="h5" href="<?php echo $this->_tpl_vars['productLink']; ?>
" title="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['product']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')))) ? $this->_run_mod_handler('truncate', true, $_tmp, 20) : smarty_modifier_truncate($_tmp, 20)); ?>
"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['product']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')))) ? $this->_run_mod_handler('truncate', true, $_tmp, 30) : smarty_modifier_truncate($_tmp, 30)); ?>
</a>
  </h5>
  <p><a href="<?php echo $this->_tpl_vars['product']['link']; ?>
" title="<?php echo smartyTranslate(array('s' => 'More','mod' => 'homefeatured'), $this);?>
"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['product']['description_short'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('truncate', true, $_tmp, 140, '...') : smarty_modifier_truncate($_tmp, 140, '...')); ?>
</a></p>
  <p class="price"><?php echo Product::displayWtPrice(array('p' => $this->_tpl_vars['product']['price']), $this);?>
</p>
  <p class="nav">
   <a href="<?php echo $this->_tpl_vars['productLink']; ?>
" title="<?php echo smartyTranslate(array('s' => 'View','mod' => 'homefeatured'), $this);?>
"><?php echo smartyTranslate(array('s' => 'Details'), $this);?>
</a>
   <span><a class="ajax_add_to_cart_button" rel="ajax_id_product_<?php echo $this->_tpl_vars['product']['id_product']; ?>
" href="<?php echo $this->_tpl_vars['base_dir']; ?>
cart.php?qty=1&amp;id_product=<?php echo $this->_tpl_vars['product']['id_product']; ?>
&amp;token=<?php echo $this->_tpl_vars['static_token']; ?>
&amp;add"><?php echo smartyTranslate(array('s' => 'Add to cart'), $this);?>
</a></span>
  </p> 
  </div>
 </li>
			 <?php endforeach; endif; unset($_from); ?>
			</ul>
	    <?php else: ?>
		<p><?php echo smartyTranslate(array('s' => 'No featured products','mod' => 'homefeatured'), $this);?>
</p>
	<?php endif; ?>
</ul>
</div>