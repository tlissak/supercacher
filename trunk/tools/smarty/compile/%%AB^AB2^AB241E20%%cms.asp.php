<?php /* Smarty version 2.6.20, created on 2010-06-10 22:53:56
         compiled from ../../../GUI/cms.asp */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', '../../../GUI/cms.asp', 11, false),)), $this); ?>
<!-- #include file="inc-global/init.php" -->

<!-- #include file="css/style.css" -->
<!-- #include file="css/global.css" -->

<!-- #include file="js/jquery.search.js" -->
<!-- #include file="js/init.js" -->
<!-- #include file="inc-global/header.html" -->
<div class="p-20">

<?php ob_start(); ?><?php echo smartyTranslate(array('s' => $this->_tpl_vars['cms']->meta_title), $this);?>
<?php $this->_smarty_vars['capture']['path'] = ob_get_contents(); ob_end_clean(); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['GUI_THEME_PATH'])."/inc-global/breadcrumb.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div class="clear"></div>


<?php if ($this->_tpl_vars['cms']): ?> 
	<?php if ($this->_tpl_vars['content_only']): ?>
		<div style="text-align: left; padding: 10px;" class="rte"> <?php echo $this->_tpl_vars['cms']->content; ?>
</div>
	<?php else: ?>
		<div class="rte"><?php echo $this->_tpl_vars['cms']->content; ?>
</div>
	<?php endif; ?> 
<?php else: ?>
	<?php echo smartyTranslate(array('s' => 'This page does not exist.'), $this);?>
 
<?php endif; ?> 

<?php if (! $this->_tpl_vars['content_only']): ?>
	<p><a href="<?php echo $this->_tpl_vars['base_dir']; ?>
" title="<?php echo smartyTranslate(array('s' => 'Home'), $this);?>
"><?php echo smartyTranslate(array('s' => 'Home'), $this);?>
</a></p>
<?php endif; ?>




</div> <!-- end of p-20 -->
<!-- #include file="inc-global/footer.html" -->