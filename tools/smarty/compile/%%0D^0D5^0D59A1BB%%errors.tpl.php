<?php /* Smarty version 2.6.20, created on 2010-06-09 14:56:40
         compiled from D:%5CHTDOCS%5Cpresta-tpl/themes/blackwhite/./errors.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', 'D:\\HTDOCS\\presta-tpl/themes/blackwhite/./errors.tpl', 3, false),array('function', 'l', 'D:\\HTDOCS\\presta-tpl/themes/blackwhite/./errors.tpl', 3, false),)), $this); ?>
<?php if (isset ( $this->_tpl_vars['errors'] ) && $this->_tpl_vars['errors']): ?>
	<div class="error">
		<p><?php if (count($this->_tpl_vars['errors']) > 1): ?><?php echo smartyTranslate(array('s' => 'There are'), $this);?>
<?php else: ?><?php echo smartyTranslate(array('s' => 'There is'), $this);?>
<?php endif; ?> <?php echo count($this->_tpl_vars['errors']); ?>
 <?php if (count($this->_tpl_vars['errors']) > 1): ?><?php echo smartyTranslate(array('s' => 'errors'), $this);?>
<?php else: ?><?php echo smartyTranslate(array('s' => 'error'), $this);?>
<?php endif; ?> :</p>
		<ol>
		<?php $_from = $this->_tpl_vars['errors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['error']):
?>
			<li style="width:auto"><?php echo $this->_tpl_vars['error']; ?>
</li>
		<?php endforeach; endif; unset($_from); ?>
		</ol>
		<p><a href="<?php echo $_SERVER['HTTP_REFERER']; ?>
" class="button_small" title="<?php echo smartyTranslate(array('s' => 'Back'), $this);?>
">&laquo; <?php echo smartyTranslate(array('s' => 'Back'), $this);?>
</a></p>
	</div>
<?php endif; ?>