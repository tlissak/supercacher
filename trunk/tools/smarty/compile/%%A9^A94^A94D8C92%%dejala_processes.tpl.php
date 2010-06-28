<?php /* Smarty version 2.6.20, created on 2010-06-03 16:17:28
         compiled from D:%5CHTDOCS%5Cpresta-tpl%5Cmodules%5Cdejala/dejala_processes.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', 'D:\\HTDOCS\\presta-tpl\\modules\\dejala/dejala_processes.tpl', 4, false),)), $this); ?>
		<form action="<?php echo $this->_tpl_vars['formAction']; ?>
" method="post">
			<input type="hidden" name="method" value="processes"/>
			<fieldset>
				<h4 class="clear"><?php echo smartyTranslate(array('s' => 'Please specify the processes to properly handle deliveries','mod' => 'dejala'), $this);?>
:</h4>
				<?php echo smartyTranslate(array('s' => 'Feel free to adapt the default processes to your own business processes','mod' => 'dejala'), $this);?>
<br/>
				<br/>
				
				<label class="clear"><?php echo smartyTranslate(array('s' => 'Bad address','mod' => 'dejala'), $this);?>
:</label>
				<div class="margin-form"><textarea rows="4" cols="45" name="process_bad_address"><?php echo $this->_tpl_vars['process_bad_address']; ?>
</textarea></div>

				<label class="clear"><?php echo smartyTranslate(array('s' => 'Absent recipient','mod' => 'dejala'), $this);?>
:</label>
				<div class="margin-form"><textarea rows="4" cols="45" name="process_absent_recipient"><?php echo $this->_tpl_vars['process_absent_recipient']; ?>
</textarea></div>

				<label class="clear"><?php echo smartyTranslate(array('s' => 'Delivery rejected','mod' => 'dejala'), $this);?>
:</label>
				<div class="margin-form"><textarea rows="4" cols="45" name="process_delivery_rejected"><?php echo $this->_tpl_vars['process_delivery_rejected']; ?>
</textarea></div>
				
				<label class="clear"><?php echo smartyTranslate(array('s' => 'Delivery packaging','mod' => 'dejala'), $this);?>
:</label>
				<div class="margin-form"><textarea rows="4" cols="45" name="process_packaging"><?php echo $this->_tpl_vars['process_packaging']; ?>
</textarea></div>

				<div class="margin-form"><input type="submit" name="btnSubmit" value="<?php echo smartyTranslate(array('s' => 'Update settings','mod' => 'dejala'), $this);?>
" class="button" /></div>
			</fieldset>
		</form>
	