<?php /* Smarty version 2.6.20, created on 2010-06-14 21:46:28
         compiled from ../../../GUI//inc-private/order-address-js.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'intval', '../../../GUI//inc-private/order-address-js.html', 6, false),array('modifier', 'addslashes', '../../../GUI//inc-private/order-address-js.html', 6, false),array('modifier', 'default', '../../../GUI//inc-private/order-address-js.html', 6, false),)), $this); ?>
<script type="text/javascript">
<!--
	var baseDir = '<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
';
	var addresses = new Array();
	<?php $_from = $this->_tpl_vars['addresses']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['address']):
?>
		addresses[<?php echo ((is_array($_tmp=$this->_tpl_vars['address']['id_address'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
] = new Array('<?php echo ((is_array($_tmp=$this->_tpl_vars['address']['company'])) ? $this->_run_mod_handler('addslashes', true, $_tmp) : addslashes($_tmp)); ?>
', '<?php echo ((is_array($_tmp=$this->_tpl_vars['address']['firstname'])) ? $this->_run_mod_handler('addslashes', true, $_tmp) : addslashes($_tmp)); ?>
', '<?php echo ((is_array($_tmp=$this->_tpl_vars['address']['lastname'])) ? $this->_run_mod_handler('addslashes', true, $_tmp) : addslashes($_tmp)); ?>
', '<?php echo ((is_array($_tmp=$this->_tpl_vars['address']['address1'])) ? $this->_run_mod_handler('addslashes', true, $_tmp) : addslashes($_tmp)); ?>
', '<?php echo ((is_array($_tmp=$this->_tpl_vars['address']['address2'])) ? $this->_run_mod_handler('addslashes', true, $_tmp) : addslashes($_tmp)); ?>
', '<?php echo ((is_array($_tmp=$this->_tpl_vars['address']['postcode'])) ? $this->_run_mod_handler('addslashes', true, $_tmp) : addslashes($_tmp)); ?>
', '<?php echo ((is_array($_tmp=$this->_tpl_vars['address']['city'])) ? $this->_run_mod_handler('addslashes', true, $_tmp) : addslashes($_tmp)); ?>
', '<?php echo ((is_array($_tmp=$this->_tpl_vars['address']['country'])) ? $this->_run_mod_handler('addslashes', true, $_tmp) : addslashes($_tmp)); ?>
', '<?php echo ((is_array($_tmp=((is_array($_tmp=@$this->_tpl_vars['address']['state'])) ? $this->_run_mod_handler('default', true, $_tmp, '') : smarty_modifier_default($_tmp, '')))) ? $this->_run_mod_handler('addslashes', true, $_tmp) : addslashes($_tmp)); ?>
');
	<?php endforeach; endif; unset($_from); ?>
-->
</script>