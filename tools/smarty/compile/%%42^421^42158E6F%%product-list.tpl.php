<?php /* Smarty version 2.6.20, created on 2010-06-09 15:01:53
         compiled from D:%5CHTDOCS%5Cpresta-tpl/themes/element/./product-list.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', 'D:\\HTDOCS\\presta-tpl/themes/element/./product-list.tpl', 12, false),array('modifier', 'ceil', 'D:\\HTDOCS\\presta-tpl/themes/element/./product-list.tpl', 13, false),array('modifier', 'escape', 'D:\\HTDOCS\\presta-tpl/themes/element/./product-list.tpl', 18, false),array('modifier', 'date_format', 'D:\\HTDOCS\\presta-tpl/themes/element/./product-list.tpl', 23, false),array('modifier', 'truncate', 'D:\\HTDOCS\\presta-tpl/themes/element/./product-list.tpl', 28, false),array('modifier', 'strip_tags', 'D:\\HTDOCS\\presta-tpl/themes/element/./product-list.tpl', 30, false),array('function', 'l', 'D:\\HTDOCS\\presta-tpl/themes/element/./product-list.tpl', 22, false),array('function', 'displayWtPrice', 'D:\\HTDOCS\\presta-tpl/themes/element/./product-list.tpl', 32, false),)), $this); ?>
<div class="sort_page">
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./pagination.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <?php if ($this->_tpl_vars['products']): ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./product-sort.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endif; ?>
</div>
<div class="products_block">
<ul class="products_block" style="background:transparent">
 <?php if (isset ( $this->_tpl_vars['products'] ) && $this->_tpl_vars['products']): ?>
  <?php $this->assign('liHeight', 360); ?>
  <?php $this->assign('nbItemsPerLine', 4); ?>
  <?php $this->assign('nbLi', count($this->_tpl_vars['products'])); ?>
  <?php $this->assign('nbLines', ((is_array($_tmp=$this->_tpl_vars['nbLi']/$this->_tpl_vars['nbItemsPerLine'])) ? $this->_run_mod_handler('ceil', true, $_tmp) : ceil($_tmp))); ?>
  <?php $this->assign('ulHeight', $this->_tpl_vars['nbLines']*$this->_tpl_vars['liHeight']); ?>
 <?php $_from = $this->_tpl_vars['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['products'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['products']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['product']):
        $this->_foreach['products']['iteration']++;
?>
 <?php $this->assign('productLink', $this->_tpl_vars['link']->getProductLink($this->_tpl_vars['product']['id_product'],$this->_tpl_vars['product']['link_rewrite'],$this->_tpl_vars['product']['category'])); ?>
        <li class="ajax_block_product <?php if (($this->_foreach['homeFeaturedProducts']['iteration'] <= 1)): ?>first_item<?php elseif (($this->_foreach['homeFeaturedProducts']['iteration'] == $this->_foreach['homeFeaturedProducts']['total'])): ?>last_item<?php else: ?>item<?php endif; ?> <?php if ($this->_foreach['homeFeaturedProducts']['iteration']%$this->_tpl_vars['nbItemsPerLine'] == 0): ?>last_item_of_line<?php elseif ($this->_foreach['homeFeaturedProducts']['iteration']%$this->_tpl_vars['nbItemsPerLine'] == 1): ?>first_item_of_line<?php endif; ?> <?php if ($this->_foreach['homeFeaturedProducts']['iteration'] > ( $this->_foreach['homeFeaturedProducts']['total'] - ( $this->_foreach['homeFeaturedProducts']['total'] % $this->_tpl_vars['nbItemsPerLine'] ) )): ?>last_line<?php endif; ?>">
          <a href="<?php echo $this->_tpl_vars['productLink']; ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['legend'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
">
           <img src="<?php echo $this->_tpl_vars['img_prod_dir']; ?>
<?php echo $this->_tpl_vars['product']['id_image']; ?>
-home.jpg" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['legend'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" height="129" width="135" />
          </a>
          <?php if ($this->_tpl_vars['product']['on_sale']): ?>
		  <p class="on_sale"><span><?php echo smartyTranslate(array('s' => 'On sale!'), $this);?>
</span></p>
		  <?php elseif (( $this->_tpl_vars['product']['reduction_price'] != 0 || $this->_tpl_vars['product']['reduction_percent'] != 0 ) && ( $this->_tpl_vars['product']['reduction_from'] == $this->_tpl_vars['product']['reduction_to'] || ( ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')) <= $this->_tpl_vars['product']['reduction_to'] && ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')) >= $this->_tpl_vars['product']['reduction_from'] ) )): ?>
			<p class="on_sale"><span><?php echo smartyTranslate(array('s' => 'Price lowered!'), $this);?>
</span></p>
          <?php endif; ?>
          <p class="new"><?php if ($this->_tpl_vars['product']['new'] == 1): ?><span><?php echo smartyTranslate(array('s' => 'new'), $this);?>
<?php endif; ?></span></p>
          <h5 class="h5">
            <a class="h5" href="<?php echo $this->_tpl_vars['productLink']; ?>
" title="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['product']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')))) ? $this->_run_mod_handler('truncate', true, $_tmp, 20) : smarty_modifier_truncate($_tmp, 20)); ?>
"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['product']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')))) ? $this->_run_mod_handler('truncate', true, $_tmp, 1000) : smarty_modifier_truncate($_tmp, 1000)); ?>
</a>
          </h5>
          <p><a href="<?php echo $this->_tpl_vars['product']['link']; ?>
" title="<?php echo smartyTranslate(array('s' => 'More'), $this);?>
"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['product']['description_short'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('truncate', true, $_tmp, 100, '...') : smarty_modifier_truncate($_tmp, 100, '...')); ?>
</a></p>
          <p class="pprice">
          <span class="price_span"><?php echo Product::displayWtPrice(array('p' => $this->_tpl_vars['product']['price']), $this);?>
</span>
          <span class="nav">
          <b class="view_it"><a href="<?php echo $this->_tpl_vars['productLink']; ?>
">&nbsp;</a></b>
          <b class="add_it"><a class="ajax_add_to_cart_button" rel="ajax_id_product_<?php echo $this->_tpl_vars['product']['id_product']; ?>
" href="<?php echo $this->_tpl_vars['base_dir']; ?>
cart.php?qty=1&amp;id_product=<?php echo $this->_tpl_vars['product']['id_product']; ?>
&amp;token=<?php echo $this->_tpl_vars['static_token']; ?>
&amp;add">&nbsp;</a></b>
          </span>
<?php if (( $this->_tpl_vars['product']['quantity'] > 0 || $this->_tpl_vars['product']['allow_oosp'] ) && $this->_tpl_vars['product']['customizable'] != 2): ?>
          </p>
             <?php else: ?>
             <span class="exclusive"><?php echo smartyTranslate(array('s' => 'Add to cart'), $this);?>
</span>
            <?php endif; ?>
          </p>
         </li>
 <?php endforeach; endif; unset($_from); ?>
 <?php else: ?>
  <p><?php echo smartyTranslate(array('s' => 'No products'), $this);?>
</p>
 <?php endif; ?>
</ul>
</div>
</div>