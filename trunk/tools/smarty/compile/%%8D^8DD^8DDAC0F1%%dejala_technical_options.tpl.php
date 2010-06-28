<?php /* Smarty version 2.6.20, created on 2010-06-03 16:18:08
         compiled from D:%5CHTDOCS%5Cpresta-tpl%5Cmodules%5Cdejala/dejala_technical_options.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', 'D:\\HTDOCS\\presta-tpl\\modules\\dejala/dejala_technical_options.tpl', 5, false),array('modifier', 'count', 'D:\\HTDOCS\\presta-tpl\\modules\\dejala/dejala_technical_options.tpl', 8, false),)), $this); ?>
<form action="<?php echo $this->_tpl_vars['formAction']; ?>
" method="post">
	<input type="hidden" name="method" value="technical_options"/>
	<fieldset>

				<h4 class="clear"><?php echo smartyTranslate(array('s' => 'List of triggering status','mod' => 'dejala'), $this);?>
:</h4>
				<div class="margin-form">
										<input type='hidden' name='status_max' value='<?php echo count($this->_tpl_vars['statuses']); ?>
'/>
					<?php $_from = $this->_tpl_vars['statuses']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['statusLoop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['statusLoop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['status']):
        $this->_foreach['statusLoop']['iteration']++;
?>
						<?php $this->assign('curIdxStatus', ($this->_foreach['statusLoop']['iteration']-1)); ?>
						<div style="float:left;height:30px;width:50%;">
							<input type='checkbox' name='status_<?php echo $this->_tpl_vars['curIdxStatus']; ?>
' value='<?php echo $this->_tpl_vars['status']['id']; ?>
' <?php if (( '1' == $this->_tpl_vars['status']['checked'] )): ?>checked='checked'<?php endif; ?>/> <?php echo $this->_tpl_vars['status']['label']; ?>

						</div>
					<?php endforeach; endif; unset($_from); ?>

					<p class="clear"><?php echo smartyTranslate(array('s' => 'List of statuses that trigger dejala.fr','mod' => 'dejala'), $this);?>
</p>
				</div>
				<div class="margin-form"><input type="submit" name="btnSubmit" value="<?php echo smartyTranslate(array('s' => 'Update settings','mod' => 'dejala'), $this);?>
" class="button" /></div>
			</fieldset>
</form>