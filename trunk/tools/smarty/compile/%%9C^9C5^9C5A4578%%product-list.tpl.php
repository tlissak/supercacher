<?php /* Smarty version 2.6.20, created on 2010-06-09 14:52:12
         compiled from D:%5CHTDOCS%5Cpresta-tpl/themes/2049/./product-list.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'intval', 'D:\\HTDOCS\\presta-tpl/themes/2049/./product-list.tpl', 2, false),array('modifier', 'escape', 'D:\\HTDOCS\\presta-tpl/themes/2049/./product-list.tpl', 3, false),array('modifier', 'count', 'D:\\HTDOCS\\presta-tpl/themes/2049/./product-list.tpl', 14, false),array('modifier', 'ceil', 'D:\\HTDOCS\\presta-tpl/themes/2049/./product-list.tpl', 15, false),array('modifier', 'truncate', 'D:\\HTDOCS\\presta-tpl/themes/2049/./product-list.tpl', 28, false),array('modifier', 'strip_tags', 'D:\\HTDOCS\\presta-tpl/themes/2049/./product-list.tpl', 31, false),array('function', 'displayWtPrice', 'D:\\HTDOCS\\presta-tpl/themes/2049/./product-list.tpl', 29, false),array('function', 'l', 'D:\\HTDOCS\\presta-tpl/themes/2049/./product-list.tpl', 31, false),)), $this); ?>
 <h2 class="category_title">
	<span><?php echo ((is_array($_tmp=$this->_tpl_vars['nb_products'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
</span>
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
<div class="products_block">
<?php if (isset ( $this->_tpl_vars['products'] ) && $this->_tpl_vars['products']): ?>
    <div class="block_content">
     <?php $this->assign('liHeight', 360); ?>
     <?php $this->assign('nbItemsPerLine', 4); ?>
     <?php $this->assign('nbLi', count($this->_tpl_vars['products'])); ?>
     <?php $this->assign('nbLines', ((is_array($_tmp=$this->_tpl_vars['nbLi']/$this->_tpl_vars['nbItemsPerLine'])) ? $this->_run_mod_handler('ceil', true, $_tmp) : ceil($_tmp))); ?>
     <?php $this->assign('ulHeight', $this->_tpl_vars['nbLines']*$this->_tpl_vars['liHeight']); ?>
      <ul class="projectsBig">
        <?php $_from = $this->_tpl_vars['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['homeFeaturedProducts'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['homeFeaturedProducts']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['product']):
        $this->_foreach['homeFeaturedProducts']['iteration']++;
?>
        <?php $this->assign('productLink', $this->_tpl_vars['link']->getProductLink($this->_tpl_vars['product']['id_product'],$this->_tpl_vars['product']['link_rewrite'],$this->_tpl_vars['product']['category'])); ?>
        <li class="ajax_block_product <?php if (($this->_foreach['homeFeaturedProducts']['iteration'] <= 1)): ?>first_item<?php elseif (($this->_foreach['homeFeaturedProducts']['iteration'] == $this->_foreach['homeFeaturedProducts']['total'])): ?>last_item<?php else: ?>item<?php endif; ?> <?php if ($this->_foreach['homeFeaturedProducts']['iteration']%$this->_tpl_vars['nbItemsPerLine'] == 0): ?>last_item_of_line<?php elseif ($this->_foreach['homeFeaturedProducts']['iteration']%$this->_tpl_vars['nbItemsPerLine'] == 1): ?>first_item_of_line<?php endif; ?> <?php if ($this->_foreach['homeFeaturedProducts']['iteration'] > ( $this->_foreach['homeFeaturedProducts']['total'] - ( $this->_foreach['homeFeaturedProducts']['total'] % $this->_tpl_vars['nbItemsPerLine'] ) )): ?>last_line<?php endif; ?>">
	<div class="feature"> 
     <div> 
 	  <div> 
         <a href="<?php echo $this->_tpl_vars['productLink']; ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['legend'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
">
           <em>&nbsp;</em><img src="<?php echo $this->_tpl_vars['img_prod_dir']; ?>
<?php echo $this->_tpl_vars['product']['id_image']; ?>
-large.jpg" width="224" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['legend'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
"/>
         </a>
         <h5 class="h5">
          <a class="h5" href="<?php echo $this->_tpl_vars['productLink']; ?>
" title="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['product']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')))) ? $this->_run_mod_handler('truncate', true, $_tmp, 20) : smarty_modifier_truncate($_tmp, 20)); ?>
"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['product']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')))) ? $this->_run_mod_handler('truncate', true, $_tmp, 30) : smarty_modifier_truncate($_tmp, 30)); ?>
</a>
          <span><?php echo Product::displayWtPrice(array('p' => $this->_tpl_vars['product']['price']), $this);?>
</span>
         </h5>
           <p><a href="<?php echo $this->_tpl_vars['product']['link']; ?>
" title="<?php echo smartyTranslate(array('s' => 'More','mod' => 'homefeatured'), $this);?>
"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['product']['description_short'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('truncate', true, $_tmp, 120, '...') : smarty_modifier_truncate($_tmp, 120, '...')); ?>
</a></p>
          </p>
 	   </div> 
	  </div> 
	</div> 
   </li>
  <?php endforeach; endif; unset($_from); ?>
  </ul>
    </div>
    <?php else: ?>
    <p><?php echo smartyTranslate(array('s' => 'No product'), $this);?>
</p>
  <?php endif; ?>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./pagination.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>