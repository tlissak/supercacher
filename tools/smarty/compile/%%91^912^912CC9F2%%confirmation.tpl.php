<?php /* Smarty version 2.6.20, created on 2010-06-10 22:54:19
         compiled from C:%5Csupercacher.com%5Cmodules%5Ccashondelivery/confirmation.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', 'C:\\supercacher.com\\modules\\cashondelivery/confirmation.tpl', 1, false),)), $this); ?>
<p><?php echo smartyTranslate(array('s' => 'Your order on','mod' => 'cashondelivery'), $this);?>
 <span class="bold"><?php echo $this->_tpl_vars['shop_name']; ?>
</span> <?php echo smartyTranslate(array('s' => 'is complete.','mod' => 'cashondelivery'), $this);?>

	<br /><br />
	<?php echo smartyTranslate(array('s' => 'You have chosen the cash on delivery method.','mod' => 'cashondelivery'), $this);?>

	<br /><br /><span class="bold"><?php echo smartyTranslate(array('s' => 'Your order will be sent very soon.','mod' => 'cashondelivery'), $this);?>
</span>
	<br /><br /><?php echo smartyTranslate(array('s' => 'For any questions or for further information, please contact our','mod' => 'cashondelivery'), $this);?>
 <a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
contact-form.php"><?php echo smartyTranslate(array('s' => 'customer support','mod' => 'cashondelivery'), $this);?>
</a>.
</p>