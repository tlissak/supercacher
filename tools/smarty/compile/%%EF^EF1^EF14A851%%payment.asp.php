<?php /* Smarty version 2.6.20, created on 2010-06-13 15:03:59
         compiled from ../../../GUI//modules/cheque/payment.asp */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', '../../../GUI//modules/cheque/payment.asp', 2, false),)), $this); ?>
<p class="payment_module">
	<a href="<?php echo $this->_tpl_vars['this_path_ssl']; ?>
payment.php" title="<?php echo smartyTranslate(array('s' => 'Pay by cheque','mod' => 'cheque'), $this);?>
">
		<img src="<?php echo $this->_tpl_vars['this_path']; ?>
cheque.jpg" alt="<?php echo smartyTranslate(array('s' => 'Pay by cheque','mod' => 'cheque'), $this);?>
" />
		<?php echo smartyTranslate(array('s' => 'Pay by cheque (order process will be longer)','mod' => 'cheque'), $this);?>

	</a>
</p>