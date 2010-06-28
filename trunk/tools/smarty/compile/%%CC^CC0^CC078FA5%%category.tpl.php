<?php /* Smarty version 2.6.20, created on 2010-06-09 15:00:01
         compiled from D:%5CHTDOCS%5Cpresta-tpl/themes/fennecs/category.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', 'D:\\HTDOCS\\presta-tpl/themes/fennecs/category.tpl', 10, false),)), $this); ?>
<div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./breadcrumb.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 
 <!-- Left -->
<div class="center_column">
<?php if ($this->_tpl_vars['category']->active): ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./errors.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <?php if ($this->_tpl_vars['products']): ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./product-list.tpl", 'smarty_include_vars' => array('products' => $this->_tpl_vars['products'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php elseif (! isset ( $this->_tpl_vars['subcategories'] )): ?>
		<li class="warning"><?php echo smartyTranslate(array('s' => 'There is no product in this category.'), $this);?>
</li>
	<?php endif; ?>
    <?php else: ?>
	<li class="warning"><?php echo smartyTranslate(array('s' => 'This category is currently unavailable.'), $this);?>
</li>
<?php endif; ?>

</div>