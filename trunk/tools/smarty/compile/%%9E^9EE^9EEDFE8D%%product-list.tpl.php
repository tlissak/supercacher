<?php /* Smarty version 2.6.20, created on 2010-06-09 15:15:13
         compiled from D:%5CHTDOCS%5Cpresta-tpl/themes/ipnotik/./product-list.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'D:\\HTDOCS\\presta-tpl/themes/ipnotik/./product-list.tpl', 3, false),array('modifier', 'intval', 'D:\\HTDOCS\\presta-tpl/themes/ipnotik/./product-list.tpl', 11, false),array('modifier', 'count', 'D:\\HTDOCS\\presta-tpl/themes/ipnotik/./product-list.tpl', 89, false),array('modifier', 'ceil', 'D:\\HTDOCS\\presta-tpl/themes/ipnotik/./product-list.tpl', 90, false),array('modifier', 'truncate', 'D:\\HTDOCS\\presta-tpl/themes/ipnotik/./product-list.tpl', 101, false),array('function', 'l', 'D:\\HTDOCS\\presta-tpl/themes/ipnotik/./product-list.tpl', 37, false),array('function', 'displayWtPrice', 'D:\\HTDOCS\\presta-tpl/themes/ipnotik/./product-list.tpl', 102, false),)), $this); ?>
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
<ul class="select_Sort_ul">
<!-- MODULE Home Featured Products -->
<?php if (isset ( $this->_tpl_vars['p'] ) && $this->_tpl_vars['p']): ?>
	<?php if (((is_array($_tmp=$_GET['id_category'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp))): ?>
		<?php $this->assign('requestPage', $this->_tpl_vars['link']->getPaginationLink('category',$this->_tpl_vars['category'],false,false,true,false)); ?>
		<?php $this->assign('requestNb', $this->_tpl_vars['link']->getPaginationLink('category',$this->_tpl_vars['category'],true,false,false,true)); ?>
	<?php elseif (((is_array($_tmp=$_GET['id_manufacturer'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp))): ?>
		<?php $this->assign('requestPage', $this->_tpl_vars['link']->getPaginationLink('manufacturer',$this->_tpl_vars['manufacturer'],false,false,true,false)); ?>
		<?php $this->assign('requestNb', $this->_tpl_vars['link']->getPaginationLink('manufacturer',$this->_tpl_vars['manufacturer'],true,false,false,true)); ?>
	<?php elseif (((is_array($_tmp=$_GET['id_supplier'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp))): ?>
		<?php $this->assign('requestPage', $this->_tpl_vars['link']->getPaginationLink('supplier',$this->_tpl_vars['supplier'],false,false,true,false)); ?>
		<?php $this->assign('requestNb', $this->_tpl_vars['link']->getPaginationLink('supplier',$this->_tpl_vars['supplier'],true,false,false,true)); ?>
	<?php else: ?>
		<?php $this->assign('requestPage', $this->_tpl_vars['link']->getPaginationLink(false,false,false,false,true,false)); ?>
		<?php $this->assign('requestNb', $this->_tpl_vars['link']->getPaginationLink(false,false,true,false,false,true)); ?>
	<?php endif; ?>
<?php if (isset ( $this->_tpl_vars['orderby'] ) && isset ( $this->_tpl_vars['orderway'] )): ?>
<!-- Sort products -->
<?php if (((is_array($_tmp=$_GET['id_category'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp))): ?>
	<?php $this->assign('request', $this->_tpl_vars['link']->getPaginationLink('category',$this->_tpl_vars['category'],false,true)); ?>
<?php elseif (((is_array($_tmp=$_GET['id_manufacturer'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp))): ?>
	<?php $this->assign('request', $this->_tpl_vars['link']->getPaginationLink('manufacturer',$this->_tpl_vars['manufacturer'],false,true)); ?>
<?php elseif (((is_array($_tmp=$_GET['id_supplier'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp))): ?>
	<?php $this->assign('request', $this->_tpl_vars['link']->getPaginationLink('supplier',$this->_tpl_vars['supplier'],false,true)); ?>
<?php else: ?>
	<?php $this->assign('request', $this->_tpl_vars['link']->getPaginationLink(false,false,false,true)); ?>
<?php endif; ?>
<form id="productsSortForm" action="<?php echo $this->_tpl_vars['request']; ?>
">
		<select id="selectPrductSort" onchange="document.location.href = $(this).val();">
			<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['link']->addSortDetails($this->_tpl_vars['request'],'position','desc'))) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" <?php if ($this->_tpl_vars['orderby'] == 'position' && $this->_tpl_vars['orderway'] == 'DESC'): ?>selected="selected"<?php endif; ?>><?php echo smartyTranslate(array('s' => 'Trier la liste'), $this);?>
</option>
			<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['link']->addSortDetails($this->_tpl_vars['request'],'price','asc'))) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" <?php if ($this->_tpl_vars['orderby'] == 'price' && $this->_tpl_vars['orderway'] == 'ASC'): ?>selected="selected"<?php endif; ?>><?php echo smartyTranslate(array('s' => 'price: lowest first'), $this);?>
</option>
			<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['link']->addSortDetails($this->_tpl_vars['request'],'price','desc'))) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" <?php if ($this->_tpl_vars['orderby'] == 'price' && $this->_tpl_vars['orderway'] == 'DESC'): ?>selected="selected"<?php endif; ?>><?php echo smartyTranslate(array('s' => 'price: highest first'), $this);?>
</option>
			<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['link']->addSortDetails($this->_tpl_vars['request'],'name','asc'))) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" <?php if ($this->_tpl_vars['orderby'] == 'name' && $this->_tpl_vars['orderway'] == 'ASC'): ?>selected="selected"<?php endif; ?>><?php echo smartyTranslate(array('s' => 'name: A to Z'), $this);?>
</option>
			<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['link']->addSortDetails($this->_tpl_vars['request'],'name','desc'))) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" <?php if ($this->_tpl_vars['orderby'] == 'name' && $this->_tpl_vars['orderway'] == 'DESC'): ?>selected="selected"<?php endif; ?>><?php echo smartyTranslate(array('s' => 'name: Z to A'), $this);?>
</option>
			<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['link']->addSortDetails($this->_tpl_vars['request'],'quantity','desc'))) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" <?php if ($this->_tpl_vars['orderby'] == 'quantity' && $this->_tpl_vars['orderway'] == 'DESC'): ?>selected="selected"<?php endif; ?>><?php echo smartyTranslate(array('s' => 'in-stock first'), $this);?>
</option>
			<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['link']->addSortDetails($this->_tpl_vars['request'],'quantity','asc'))) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" <?php if ($this->_tpl_vars['orderby'] == 'quantity' && $this->_tpl_vars['orderway'] == 'ASC'): ?>selected="selected"<?php endif; ?>><?php echo smartyTranslate(array('s' => 'out-of-stock first'), $this);?>
</option>
		</select>
</form>
<!-- /Sort products -->
<?php endif; ?>

	<!-- Pagination -->
	<?php if ($this->_tpl_vars['start'] != $this->_tpl_vars['stop']): ?>
		<ul class="pagination">
		<?php if ($this->_tpl_vars['p'] != 1): ?>
			<?php $this->assign('p_previous', $this->_tpl_vars['p']-1); ?>
			<li id="pagination_previous"><a href="<?php echo $this->_tpl_vars['link']->goPage($this->_tpl_vars['requestPage'],$this->_tpl_vars['p_previous']); ?>
">&nbsp;<?php echo smartyTranslate(array('s' => 'Previous'), $this);?>
</a></li>
		<?php else: ?>
			<li id="pagination_previous" class="disabled"><span>&nbsp;<?php echo smartyTranslate(array('s' => 'Previous'), $this);?>
</span></li>
		<?php endif; ?>
		<?php if ($this->_tpl_vars['start'] > 3): ?>
			<li><a href="<?php echo $this->_tpl_vars['link']->goPage($this->_tpl_vars['requestPage'],1); ?>
">1</a></li>
			<li class="truncate">...</li>
		<?php endif; ?>
		<?php unset($this->_sections['pagination']);
$this->_sections['pagination']['name'] = 'pagination';
$this->_sections['pagination']['start'] = (int)$this->_tpl_vars['start'];
$this->_sections['pagination']['loop'] = is_array($_loop=$this->_tpl_vars['stop']+1) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['pagination']['step'] = ((int)1) == 0 ? 1 : (int)1;
$this->_sections['pagination']['show'] = true;
$this->_sections['pagination']['max'] = $this->_sections['pagination']['loop'];
if ($this->_sections['pagination']['start'] < 0)
    $this->_sections['pagination']['start'] = max($this->_sections['pagination']['step'] > 0 ? 0 : -1, $this->_sections['pagination']['loop'] + $this->_sections['pagination']['start']);
else
    $this->_sections['pagination']['start'] = min($this->_sections['pagination']['start'], $this->_sections['pagination']['step'] > 0 ? $this->_sections['pagination']['loop'] : $this->_sections['pagination']['loop']-1);
if ($this->_sections['pagination']['show']) {
    $this->_sections['pagination']['total'] = min(ceil(($this->_sections['pagination']['step'] > 0 ? $this->_sections['pagination']['loop'] - $this->_sections['pagination']['start'] : $this->_sections['pagination']['start']+1)/abs($this->_sections['pagination']['step'])), $this->_sections['pagination']['max']);
    if ($this->_sections['pagination']['total'] == 0)
        $this->_sections['pagination']['show'] = false;
} else
    $this->_sections['pagination']['total'] = 0;
if ($this->_sections['pagination']['show']):

            for ($this->_sections['pagination']['index'] = $this->_sections['pagination']['start'], $this->_sections['pagination']['iteration'] = 1;
                 $this->_sections['pagination']['iteration'] <= $this->_sections['pagination']['total'];
                 $this->_sections['pagination']['index'] += $this->_sections['pagination']['step'], $this->_sections['pagination']['iteration']++):
$this->_sections['pagination']['rownum'] = $this->_sections['pagination']['iteration'];
$this->_sections['pagination']['index_prev'] = $this->_sections['pagination']['index'] - $this->_sections['pagination']['step'];
$this->_sections['pagination']['index_next'] = $this->_sections['pagination']['index'] + $this->_sections['pagination']['step'];
$this->_sections['pagination']['first']      = ($this->_sections['pagination']['iteration'] == 1);
$this->_sections['pagination']['last']       = ($this->_sections['pagination']['iteration'] == $this->_sections['pagination']['total']);
?>
			<?php if ($this->_tpl_vars['p'] == $this->_sections['pagination']['index']): ?>
				<li class="current"><span><?php echo ((is_array($_tmp=$this->_tpl_vars['p'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</span></li>
			<?php else: ?>
				<li><a href="<?php echo $this->_tpl_vars['link']->goPage($this->_tpl_vars['requestPage'],$this->_sections['pagination']['index']); ?>
"><?php echo ((is_array($_tmp=$this->_sections['pagination']['index'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</a></li>
			<?php endif; ?>
		<?php endfor; endif; ?>
		<?php if ($this->_tpl_vars['pages_nb'] > $this->_tpl_vars['stop']+2): ?>
			<li class="truncate">...</li>
			<li><a href="<?php echo $this->_tpl_vars['link']->goPage($this->_tpl_vars['requestPage'],$this->_tpl_vars['pages_nb']); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['pages_nb'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
</a></li>
		<?php endif; ?>
		<?php if ($this->_tpl_vars['pages_nb'] > 1 && $this->_tpl_vars['p'] != $this->_tpl_vars['pages_nb']): ?>
			<?php $this->assign('p_next', $this->_tpl_vars['p']+1); ?>
			<li id="pagination_next"><a href="<?php echo $this->_tpl_vars['link']->goPage($this->_tpl_vars['requestPage'],$this->_tpl_vars['p_next']); ?>
"><?php echo smartyTranslate(array('s' => 'Next'), $this);?>
&nbsp;</a></li>
		<?php else: ?>
			<li id="pagination_next" class="disabled"><span><?php echo smartyTranslate(array('s' => 'Next'), $this);?>
&nbsp;</span></li>
		<?php endif; ?>
	 </ul>
	<?php endif; ?>
<?php endif; ?>
</ul>
<!-- /Pagination -->
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
			  <p>
			  <?php if ($this->_tpl_vars['product']['new'] == 1): ?><span class="new"><?php echo smartyTranslate(array('s' => 'new'), $this);?>
</span><?php endif; ?>  
			  <a href="<?php echo $this->_tpl_vars['productLink']; ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['legend'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
">
			  <img src="<?php echo $this->_tpl_vars['img_prod_dir']; ?>
<?php echo $this->_tpl_vars['product']['id_image']; ?>
-home.jpg" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['legend'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" height="129" width="129" /></a>
			  </p>
			  <h3><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['link'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['legend'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['product']['name'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 30) : smarty_modifier_truncate($_tmp, 30)))) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</a></h3>
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
		<p><?php echo smartyTranslate(array('s' => 'No featured products','mod' => 'homefeatured'), $this);?>
</p>
	<?php endif; ?>
</ul>
<!-- /MODULE Home Featured Products -->
</div>