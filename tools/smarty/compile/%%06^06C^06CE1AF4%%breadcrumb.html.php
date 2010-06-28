<?php /* Smarty version 2.6.20, created on 2010-06-27 21:31:46
         compiled from ../../../GUI//inc-global/breadcrumb.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', '../../../GUI//inc-global/breadcrumb.html', 6, false),)), $this); ?>
<!-- Breadcrumb -->
<div id="lineage">
<!--<?php if (isset ( $this->_smarty_vars['capture']['path'] )): ?>-->
	<?php $this->assign('path', $this->_smarty_vars['capture']['path']); ?>
<!--<?php endif; ?>-->
<a href="<?php echo $this->_tpl_vars['base_dir']; ?>
" title="<?php echo smartyTranslate(array('s' => 'return to'), $this);?>
 <?php echo smartyTranslate(array('s' => 'Home'), $this);?>
"><?php echo smartyTranslate(array('s' => 'Home'), $this);?>
</a><span class="navigation-pipe"> &rsaquo;</span><!--<?php if ($this->_tpl_vars['path']): ?>--><?php echo $this->_tpl_vars['path']; ?>
<!--<?php endif; ?>-->
</div>
<!-- /Breadcrumb -->