<?php /* Smarty version 2.6.20, created on 2010-06-27 21:28:04
         compiled from ../../../GUI//inc-private/product-pack.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', '../../../GUI//inc-private/product-pack.tpl', 2, false),array('function', 'l', '../../../GUI//inc-private/product-pack.tpl', 3, false),)), $this); ?>

<?php if (count($this->_tpl_vars['packItems']) > 0): ?> 	<div>
    <h2><?php echo smartyTranslate(array('s' => 'Pack content'), $this);?>
</h2>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['GUI_THEME_PATH'])."/inc-private/product-list.tpl", 'smarty_include_vars' => array('products' => $this->_tpl_vars['packItems'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    </div> <?php endif; ?> 