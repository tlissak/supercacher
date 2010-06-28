<?php /* Smarty version 2.6.20, created on 2010-06-09 14:56:40
         compiled from D:%5CHTDOCS%5Cpresta-tpl/themes/blackwhite/./order-steps.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', 'D:\\HTDOCS\\presta-tpl/themes/blackwhite/./order-steps.tpl', 7, false),)), $this); ?>
<!-- Steps -->
<ul class="step" id="order_step">
	<li class="<?php if ($this->_tpl_vars['current_step'] == 'summary'): ?>step_current<?php else: ?><?php if ($this->_tpl_vars['current_step'] == 'payment' || $this->_tpl_vars['current_step'] == 'shipping' || $this->_tpl_vars['current_step'] == 'address' || $this->_tpl_vars['current_step'] == 'login'): ?>step_done<?php else: ?>step_todo<?php endif; ?><?php endif; ?>">
		<?php if ($this->_tpl_vars['current_step'] == 'payment' || $this->_tpl_vars['current_step'] == 'shipping' || $this->_tpl_vars['current_step'] == 'address' || $this->_tpl_vars['current_step'] == 'login'): ?>
		<a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
order.php">
			<?php echo smartyTranslate(array('s' => 'Summary'), $this);?>

		</a>
		<?php else: ?>
		1. <?php echo smartyTranslate(array('s' => 'Summary'), $this);?>

		<?php endif; ?>
	</li>
	<li class="<?php if ($this->_tpl_vars['current_step'] == 'login'): ?>step_current<?php else: ?><?php if ($this->_tpl_vars['current_step'] == 'payment' || $this->_tpl_vars['current_step'] == 'shipping' || $this->_tpl_vars['current_step'] == 'address'): ?>step_done<?php else: ?>step_todo<?php endif; ?><?php endif; ?>">
		<?php if ($this->_tpl_vars['current_step'] == 'payment' || $this->_tpl_vars['current_step'] == 'shipping' || $this->_tpl_vars['current_step'] == 'address'): ?>
		<a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
order.php?step=1">
			<?php echo smartyTranslate(array('s' => 'Login'), $this);?>

		</a>
		<?php else: ?>
		2. <?php echo smartyTranslate(array('s' => 'Login'), $this);?>

		<?php endif; ?>
	</li>
	<li class="<?php if ($this->_tpl_vars['current_step'] == 'address'): ?>step_current<?php else: ?><?php if ($this->_tpl_vars['current_step'] == 'payment' || $this->_tpl_vars['current_step'] == 'shipping'): ?>step_done<?php else: ?>step_todo<?php endif; ?><?php endif; ?>">
		<?php if ($this->_tpl_vars['current_step'] == 'payment' || $this->_tpl_vars['current_step'] == 'shipping'): ?>
		<a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
order.php?step=1">
			<?php echo smartyTranslate(array('s' => 'Address'), $this);?>

		</a>
		<?php else: ?>
		3. <?php echo smartyTranslate(array('s' => 'Address'), $this);?>

		<?php endif; ?>
	</li>
	<li class="<?php if ($this->_tpl_vars['current_step'] == 'shipping'): ?>step_current<?php else: ?><?php if ($this->_tpl_vars['current_step'] == 'payment'): ?>step_done<?php else: ?>step_todo<?php endif; ?><?php endif; ?>">
		<?php if ($this->_tpl_vars['current_step'] == 'payment'): ?>
		<a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
order.php?step=2">
			<?php echo smartyTranslate(array('s' => 'Shipping'), $this);?>

		</a>
		<?php else: ?>
		4. <?php echo smartyTranslate(array('s' => 'Shipping'), $this);?>

		<?php endif; ?>
	</li>
	<li id="step_end" class="<?php if ($this->_tpl_vars['current_step'] == 'payment'): ?>step_current<?php else: ?>step_todo<?php endif; ?>">
		5. <?php echo smartyTranslate(array('s' => 'Payment'), $this);?>

	</li>
  </ul>
  <!-- /Steps -->
<div id="commitment">  
  <ul>
   <h5><?php echo smartyTranslate(array('s' => 'With Black&White'), $this);?>
</h5>
   <h6><?php echo smartyTranslate(array('s' => 'Secure payments'), $this);?>
</h6>
   <p><?php echo smartyTranslate(array('s' => 'we do not store any of your credit card details and have no access to your credit card information at any time'), $this);?>
</p>
   <h6><?php echo smartyTranslate(array('s' => 'Quick delivery'), $this);?>
</h6>
   <p><?php echo smartyTranslate(array('s' => 'we deliver within 48h with Colissimo'), $this);?>
</p>
   <h6><?php echo smartyTranslate(array('s' => 'Satisfied or refunded, easy shift and returns'), $this);?>
</h6>
   <p><?php echo smartyTranslate(array('s' => 'if you are not satisfied with our products or if you want to return a product, we will be happy to accommodate'), $this);?>
</p>
   <p><?php echo smartyTranslate(array('s' => '09 rue de Trevise 75009 Paris'), $this);?>
</p>
   <h6><?php echo smartyTranslate(array('s' => 'Respect and privacy of your personal data'), $this);?>
</h6>
   <p><?php echo smartyTranslate(array('s' => ' we do not sell or rent your personnal information to anyone'), $this);?>
</p>
   <h6><?php echo smartyTranslate(array('s' => 'Contact'), $this);?>
</h6>
   <p><?php echo smartyTranslate(array('s' => '@'), $this);?>
 :  <a href="mailto:contact@blackwhite.fr">contact@blackwhite.fr</a><br />
    <?php echo smartyTranslate(array('s' => 'Phone'), $this);?>
 : <span><a href="#"><?php echo smartyTranslate(array('s' => '+331 10 10 10'), $this);?>
</a></span><br />
   </p><br />
   <p><a href="<?php echo $this->_tpl_vars['link']->getCMSLink(5,$this->_tpl_vars['securepayment']); ?>
"><img src="<?php echo $this->_tpl_vars['base_dir']; ?>
themes/blackwhite/img/payment_logo.gif" /></a></p>
  </ul>
</div>