<?php /* Smarty version 2.6.20, created on 2010-06-09 14:55:14
         compiled from D:%5CHTDOCS%5Cpresta-tpl/themes/blackwhite/./product-sort.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'intval', 'D:\\HTDOCS\\presta-tpl/themes/blackwhite/./product-sort.tpl', 4, false),array('modifier', 'escape', 'D:\\HTDOCS\\presta-tpl/themes/blackwhite/./product-sort.tpl', 30, false),array('function', 'l', 'D:\\HTDOCS\\presta-tpl/themes/blackwhite/./product-sort.tpl', 30, false),)), $this); ?>
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
</ul>
<?php endif; ?>
</ul>