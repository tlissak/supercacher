<?php /* Smarty version 2.6.20, created on 2010-06-09 15:02:33
         compiled from D:%5CHTDOCS%5Cpresta-tpl/themes/element/./order-steps.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', 'D:\\HTDOCS\\presta-tpl/themes/element/./order-steps.tpl', 7, false),)), $this); ?>
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
    <!-- /Steps -->
<div id="commitment">  
  <ul>
   <li>
    <h6><?php echo smartyTranslate(array('s' => 'Secure payments'), $this);?>
</h6>
    <p><?php echo smartyTranslate(array('s' => 'we do not store any of your credit card details and have no access to your credit card information'), $this);?>
</p>
   </li>
   <li>
    <h6><?php echo smartyTranslate(array('s' => 'Your personal data'), $this);?>
</h6>
    <p><?php echo smartyTranslate(array('s' => ' we do not sell or rent your personnal information to anyone'), $this);?>
</p>
   </li> 
    <li>  
    <h6><?php echo smartyTranslate(array('s' => 'Satisfied or refunded'), $this);?>
</h6>
    <p><?php echo smartyTranslate(array('s' => 'if you are not satisfied with our products, we will be happy to accommodate'), $this);?>
</p>
   </li>
   <li>
    <h6><?php echo smartyTranslate(array('s' => 'need informations?'), $this);?>
</h6>
    <p>
    <a href="mailto:contact@element.com">contact@element.com</a><br />
    <span>00 (0) 00 00 00 00</span>
    </p>
   </li>
  </ul>
</div>
