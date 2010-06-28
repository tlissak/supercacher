<?php /* Smarty version 2.6.20, created on 2010-06-10 22:54:19
         compiled from ../../../GUI//order-confirmation.asp */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', '../../../GUI//order-confirmation.asp', 4, false),)), $this); ?>
<!-- #include file="inc-global/header.html" -->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['GUI_THEME_PATH'])."/inc-global/base_dir_js.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php ob_start(); ?><?php echo smartyTranslate(array('s' => 'Order confirmation'), $this);?>
<?php $this->_smarty_vars['capture']['path'] = ob_get_contents(); ob_end_clean(); ?>
<div id="main-top">


<div class="lineage"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['GUI_THEME_PATH'])."/inc-global/breadcrumb.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>

<div class="clear"></div>

<div id="content">

<h2><?php echo smartyTranslate(array('s' => 'Order confirmation'), $this);?>
</h2>

<?php $this->assign('current_step', 'payment'); ?> 
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['GUI_THEME_PATH'])."/inc-private/order-steps.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['GUI_THEME_PATH'])."/inc-global/errors.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php echo $this->_tpl_vars['HOOK_ORDER_CONFIRMATION']; ?>
 <?php echo $this->_tpl_vars['HOOK_PAYMENT_RETURN']; ?>
 <br />
<a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
history.php" title="<?php echo smartyTranslate(array('s' => 'Back to orders'), $this);?>
"><img
	src="<?php echo $this->_tpl_vars['img_dir']; ?>
icon/order.gif" alt="<?php echo smartyTranslate(array('s' => 'Back to orders'), $this);?>
"
	class="icon" /></a> <a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
history.php"
	title="<?php echo smartyTranslate(array('s' => 'Back to orders'), $this);?>
"><?php echo smartyTranslate(array('s' => 'Back to orders'), $this);?>
</a></div>
</div>