<?php /* Smarty version 2.6.20, created on 2010-06-25 08:40:38
         compiled from ../../../GUI//inc-global/account-nav.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', '../../../GUI//inc-global/account-nav.html', 5, false),)), $this); ?>



<ul id="account-board">
	<li>&rsaquo; <a	href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
my-account.php" title="<?php echo smartyTranslate(array('s' => 'My Account'), $this);?>
"><?php echo smartyTranslate(array('s' => 'My Account'), $this);?>
</a></li>
	
	<li>&rsaquo; <a	href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
history.php" title="<?php echo smartyTranslate(array('s' => 'Orders'), $this);?>
"><?php echo smartyTranslate(array('s' => 'History and details of your orders'), $this);?>
</a></li>
	<?php if ($this->_tpl_vars['returnAllowed']): ?>
	<li>&rsaquo; <a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
order-follow.php" title="<?php echo smartyTranslate(array('s' => 'Merchandise returns'), $this);?>
"><?php echo smartyTranslate(array('s' => 'Merchandise returns'), $this);?>
</a></li>
	<?php endif; ?>
	<li>&rsaquo; <a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
order-slip.php" title="<?php echo smartyTranslate(array('s' => 'Credit slips'), $this);?>
"><?php echo smartyTranslate(array('s' => 'Credit slips'), $this);?>
</a></li>
	<li>&rsaquo; <a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
addresses.php" title="<?php echo smartyTranslate(array('s' => 'Addresses'), $this);?>
"><?php echo smartyTranslate(array('s' => 'Your addresses'), $this);?>
</a></li>
	<li>&rsaquo; <a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
identity.php" title="<?php echo smartyTranslate(array('s' => 'Information'), $this);?>
"><?php echo smartyTranslate(array('s' => 'Your personal information'), $this);?>
</a></li>
	<?php if ($this->_tpl_vars['voucherAllowed']): ?>
	<li>&rsaquo; <a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
discount.php" title="<?php echo smartyTranslate(array('s' => 'Vouchers'), $this);?>
"><?php echo smartyTranslate(array('s' => 'Your vouchers'), $this);?>
</a></li>
	<?php endif; ?>
	
	
	
	
	
	<li>&rsaquo; <a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
modules/blockwishlist/mywishlist.php" title="<?php echo smartyTranslate(array('s' => 'My wishlists','mod' => 'blockwishlist'), $this);?>
"><?php echo smartyTranslate(array('s' => 'My wishlists','mod' => 'blockwishlist'), $this);?>
</a></li>
	<li>&rsaquo; <a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
modules/loyalty/loyalty-program.php" title="<?php echo smartyTranslate(array('s' => 'My loyalty points','mod' => 'loyalty'), $this);?>
"><?php echo smartyTranslate(array('s' => 'My loyalty points','mod' => 'loyalty'), $this);?>
</a></li>
	<li>&rsaquo; <a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
modules/mailalerts/myalerts.php" title="<?php echo smartyTranslate(array('s' => 'My alerts','mod' => 'mailalerts'), $this);?>
"><?php echo smartyTranslate(array('s' => 'My alerts','mod' => 'mailalerts'), $this);?>
</a></li>
	
	<?php echo $this->_tpl_vars['HOOK_CUSTOMER_ACCOUNT']; ?>

</ul>
<div class="spacer"></div>
<div class="p20">
	<a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
authentication.php?logout" title="<?php echo smartyTranslate(array('s' => 'Logout'), $this);?>
"><?php echo smartyTranslate(array('s' => 'Logout'), $this);?>
</a>
	<div class="spacer"></div>
	<a href="<?php echo $this->_tpl_vars['base_dir']; ?>
" title="<?php echo smartyTranslate(array('s' => 'Home'), $this);?>
"><?php echo smartyTranslate(array('s' => 'Home'), $this);?>
</a>
</div>

