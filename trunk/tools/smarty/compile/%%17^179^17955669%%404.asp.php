<?php /* Smarty version 2.6.20, created on 2010-06-13 15:05:04
         compiled from ../../../GUI/404.asp */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', '../../../GUI/404.asp', 4, false),)), $this); ?>
<!-- #include file="inc-global/header.html" -->
<div id="main-top">

<div class="lineage"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['GUI_THEME_PATH'])."/inc-global/breadcrumb.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> / <?php echo smartyTranslate(array('s' => 'Page not available'), $this);?>
 </div>

<div class="clear"></div>

<div id="content">

<h2><?php echo smartyTranslate(array('s' => 'Page not available'), $this);?>
</h2>

<p class="error"><img src="<?php echo $this->_tpl_vars['img_dir']; ?>
icon/error.gif" alt="<?php echo smartyTranslate(array('s' => 'Error'), $this);?>
"
	class="middle" /> <?php echo smartyTranslate(array('s' => 'We\'re sorry, but the Web address you entered is no longer available'), $this);?>
</p>

<h3><?php echo smartyTranslate(array('s' => 'To find a product, please type its name in the field below'), $this);?>
</h3>

<form action="<?php echo $this->_tpl_vars['base_dir']; ?>
search.php" method="post" class="std">
<fieldset>
<p><label for="search"><?php echo smartyTranslate(array('s' => 'Search our product catalog:'), $this);?>
</label> <input
	id="search_query" name="search_query" type="text" /> <input
	type="submit" name="Submit" value="OK" class="button_small" /></p>
</fieldset>
</form>

<p><a href="<?php echo $this->_tpl_vars['base_dir']; ?>
" title="<?php echo smartyTranslate(array('s' => 'Home'), $this);?>
"><img
	src="<?php echo $this->_tpl_vars['img_dir']; ?>
icon/home.gif" alt="<?php echo smartyTranslate(array('s' => 'Home'), $this);?>
" class="icon" /></a><a
	href="<?php echo $this->_tpl_vars['base_dir']; ?>
" title="<?php echo smartyTranslate(array('s' => 'Home'), $this);?>
"><?php echo smartyTranslate(array('s' => 'Home'), $this);?>
</a></p>
</div>
</div>