<?php /* Smarty version 2.6.20, created on 2010-06-09 14:55:45
         compiled from D:%5CHTDOCS%5Cpresta-tpl/themes/blackwhite/cms.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', 'D:\\HTDOCS\\presta-tpl/themes/blackwhite/cms.tpl', 11, false),)), $this); ?>
<div>
<?php if ($this->_tpl_vars['cms']): ?>
	<?php if ($this->_tpl_vars['content_only']): ?>
	<div style="text-align:left; padding:10px;">
		<?php echo $this->_tpl_vars['cms']->content; ?>

	</div>
	<?php else: ?>
		<?php echo $this->_tpl_vars['cms']->content; ?>

	<?php endif; ?>
<?php else: ?>
	<?php echo smartyTranslate(array('s' => 'This page does not exist.'), $this);?>

<?php endif; ?>
<?php if (! $this->_tpl_vars['content_only']): ?>
<?php endif; ?>

</div>