<?php /* Smarty version 2.6.20, created on 2010-06-13 15:03:59
         compiled from C:%5Csupercacher.com%5Cmodules%5Ccashondelivery/payment.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', 'C:\\supercacher.com\\modules\\cashondelivery/payment.tpl', 2, false),)), $this); ?>
<p class="payment_module">
	<a href="<?php echo $this->_tpl_vars['this_path_ssl']; ?>
validation.php" title="<?php echo smartyTranslate(array('s' => 'Pay with cash on delivery (COD)','mod' => 'cashondelivery'), $this);?>
">
		<img src="<?php echo $this->_tpl_vars['this_path']; ?>
cashondelivery.gif" alt="<?php echo smartyTranslate(array('s' => 'Pay with cash on delivery (COD)','mod' => 'cashondelivery'), $this);?>
" style="float:left;" />
		<br /><?php echo smartyTranslate(array('s' => 'Pay with cash on delivery (COD)','mod' => 'cashondelivery'), $this);?>

		<br /><?php echo smartyTranslate(array('s' => 'You pay for the merchandise upon delivery','mod' => 'cashondelivery'), $this);?>

		<br style="clear:both;" />
	</a>
</p>