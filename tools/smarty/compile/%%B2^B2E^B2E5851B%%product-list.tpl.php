<?php /* Smarty version 2.6.20, created on 2010-06-09 14:55:14
         compiled from D:%5CHTDOCS%5Cpresta-tpl/themes/blackwhite/./product-list.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'D:\\HTDOCS\\presta-tpl/themes/blackwhite/./product-list.tpl', 3, false),array('modifier', 'count', 'D:\\HTDOCS\\presta-tpl/themes/blackwhite/./product-list.tpl', 13, false),array('modifier', 'ceil', 'D:\\HTDOCS\\presta-tpl/themes/blackwhite/./product-list.tpl', 14, false),array('modifier', 'date_format', 'D:\\HTDOCS\\presta-tpl/themes/blackwhite/./product-list.tpl', 22, false),array('modifier', 'truncate', 'D:\\HTDOCS\\presta-tpl/themes/blackwhite/./product-list.tpl', 29, false),array('modifier', 'intval', 'D:\\HTDOCS\\presta-tpl/themes/blackwhite/./product-list.tpl', 32, false),array('function', 'l', 'D:\\HTDOCS\\presta-tpl/themes/blackwhite/./product-list.tpl', 21, false),array('function', 'displayWtPrice', 'D:\\HTDOCS\\presta-tpl/themes/blackwhite/./product-list.tpl', 31, false),)), $this); ?>
<div class="div_categorie_product">
 <h2 class="category_title">
	<?php echo ((is_array($_tmp=$this->_tpl_vars['category']->name)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>

    <?php if ($this->_tpl_vars['products']): ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./product-sort.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endif; ?>
</h2>
<div id="categories_block_left"><?php echo $this->_tpl_vars['HOOK_LEFT_COLUMN']; ?>
</div>
<ul id="categorie_product" class="block categorie_product">
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
			<li class="ajax_block_product <?php if (($this->_foreach['products']['iteration'] <= 1)): ?>first_item<?php elseif (($this->_foreach['products']['iteration'] == $this->_foreach['products']['total'])): ?>last_item<?php else: ?>item<?php endif; ?> <?php if ($this->_foreach['products']['iteration']%$this->_tpl_vars['nbItemsPerLine'] == 0): ?>last_item_of_line<?php elseif ($this->_foreach['products']['iteration']%$this->_tpl_vars['nbItemsPerLine'] == 1): ?>first_item_of_line<?php endif; ?> <?php if ($this->_foreach['products']['iteration'] > ( $this->_foreach['products']['total'] - ( $this->_foreach['products']['total'] % $this->_tpl_vars['nbItemsPerLine'] ) )): ?>last_line<?php endif; ?>">
          <?php if ($this->_tpl_vars['product']['on_sale']): ?>
		  <p class="on_sale"><strong><?php echo smartyTranslate(array('s' => 'On sale!'), $this);?>
</strong></p>
		  <?php elseif (( $this->_tpl_vars['product']['reduction_price'] != 0 || $this->_tpl_vars['product']['reduction_percent'] != 0 ) && ( $this->_tpl_vars['product']['reduction_from'] == $this->_tpl_vars['product']['reduction_to'] || ( ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')) <= $this->_tpl_vars['product']['reduction_to'] && ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')) >= $this->_tpl_vars['product']['reduction_from'] ) )): ?>
		  <p class="on_sale"><strong><?php echo smartyTranslate(array('s' => 'Price lowered!'), $this);?>
</strong></p>
          <?php endif; ?>
          <p class="new_product"><?php if ($this->_tpl_vars['product']['new'] == 1): ?><strong><?php echo smartyTranslate(array('s' => 'new'), $this);?>
<?php endif; ?></strong></p>
			  <a href="<?php echo $this->_tpl_vars['productLink']; ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['legend'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
">
			  <img src="<?php echo $this->_tpl_vars['img_prod_dir']; ?>
<?php echo $this->_tpl_vars['product']['id_image']; ?>
-large.jpg" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['legend'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" height="210" width="210" /></a>
              <h3>
              <a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['link'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['legend'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['product']['name'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 30) : smarty_modifier_truncate($_tmp, 30)))) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</a>
              </h3>
			  <p class="pprice"><?php echo Product::displayWtPrice(array('p' => $this->_tpl_vars['product']['price']), $this);?>
<a href="<?php echo $this->_tpl_vars['productLink']; ?>
" title="<?php echo smartyTranslate(array('s' => 'View'), $this);?>
"><?php echo smartyTranslate(array('s' => 'View'), $this);?>
</a>
			  <b id="categorie_product_view"><a rel="ajax_id_product_<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['id_product'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
" href="<?php echo $this->_tpl_vars['base_dir']; ?>
cart.php?add&amp;id_product=<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['id_product'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
&amp;token=<?php echo $this->_tpl_vars['static_token']; ?>
"><?php echo smartyTranslate(array('s' => 'Cart'), $this);?>
</a></b>
			  </p>
			 </li>
			 <?php endforeach; endif; unset($_from); ?>
			</ul>
	    <?php else: ?>
		<p><?php echo smartyTranslate(array('s' => 'No products'), $this);?>
</p>
	<?php endif; ?>
</ul>
	<!-- Pagination -->
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./pagination.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<!-- /MODULE Home Featured Products -->
</div>