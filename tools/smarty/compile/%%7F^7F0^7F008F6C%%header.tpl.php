<?php /* Smarty version 2.6.20, created on 2010-06-09 16:30:12
         compiled from D:%5CHTDOCS%5Cpresta-tpl/themes/tpl/header.tpl */ ?>
<?php if ($this->_tpl_vars['GUI']['loaded'] == 'X'): ?>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['GUI_THEME_PATH'])."/inc-global/header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php else: ?>
	themes/tpl/header.tpl<br /> <?php echo $this->_tpl_vars['GUI_THEME_PATH']; ?>

	It seems that GUI Class with instanse $gui not loaded <br />
	try to include the GUI init.class.php to root/init.php and call $gui = GUI($smarty) ;
	<hr />
<?php endif; ?>