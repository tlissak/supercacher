<?php /* Smarty version 2.6.20, created on 2010-06-03 16:19:29
         compiled from D:%5CHTDOCS%5Cpresta-tpl%5Cmodules%5Cdejala/dejala_menu.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', 'D:\\HTDOCS\\presta-tpl\\modules\\dejala/dejala_menu.tpl', 5, false),)), $this); ?>
<?php if (( $this->_tpl_vars['registered'] != 0 )): ?>
<div>
	<ul id="menu">
		<li <?php if (( $this->_tpl_vars['currentTab'] == 'home' )): ?>class="active"<?php endif; ?>>
			<a href="<?php echo $this->_tpl_vars['moduleConfigURL']; ?>
"><?php echo smartyTranslate(array('s' => 'Home','mod' => 'dejala'), $this);?>
</a>
		</li>
		<li <?php if (( $this->_tpl_vars['currentTab'] == 'location' )): ?>class="active"<?php endif; ?>>
			<a href="<?php echo $this->_tpl_vars['moduleConfigURL']; ?>
&cat=location"><?php echo smartyTranslate(array('s' => 'Location','mod' => 'dejala'), $this);?>
</a>
		</li>
		<li <?php if (( $this->_tpl_vars['currentTab'] == 'contacts' )): ?>class="active"<?php endif; ?>>
			<a href="<?php echo $this->_tpl_vars['moduleConfigURL']; ?>
&cat=contacts"><?php echo smartyTranslate(array('s' => 'Contacts','mod' => 'dejala'), $this);?>
</a>
		</li>
		<li <?php if (( $this->_tpl_vars['currentTab'] == 'processes' )): ?>class="active"<?php endif; ?>>
			<a href="<?php echo $this->_tpl_vars['moduleConfigURL']; ?>
&cat=processes"><?php echo smartyTranslate(array('s' => 'Processes','mod' => 'dejala'), $this);?>
</a>
		</li>
		<li <?php if (( $this->_tpl_vars['currentTab'] == 'delivery_options' )): ?>class="active"<?php endif; ?>>
			<a href="<?php echo $this->_tpl_vars['moduleConfigURL']; ?>
&cat=delivery_options"><?php echo smartyTranslate(array('s' => 'Delivery Options','mod' => 'dejala'), $this);?>
</a>
		</li>
		<li <?php if (( $this->_tpl_vars['currentTab'] == 'prices' )): ?>class="active"<?php endif; ?>>
			<a href="<?php echo $this->_tpl_vars['moduleConfigURL']; ?>
&cat=prices"><?php echo smartyTranslate(array('s' => 'Prices','mod' => 'dejala'), $this);?>
</a>
		</li>
		<li <?php if (( $this->_tpl_vars['currentTab'] == 'accounting' )): ?>class="active"<?php endif; ?>>
			<a href="<?php echo $this->_tpl_vars['moduleConfigURL']; ?>
&cat=accounting"><?php echo smartyTranslate(array('s' => 'Accounting','mod' => 'dejala'), $this);?>
</a>
		</li>
		<li <?php if (( $this->_tpl_vars['currentTab'] == 'technical_options' )): ?>class="active"<?php endif; ?>>
			<a href="<?php echo $this->_tpl_vars['moduleConfigURL']; ?>
&cat=technical_options"><?php echo smartyTranslate(array('s' => 'Technical options','mod' => 'dejala'), $this);?>
</a>
		</li>
		<li <?php if (( $this->_tpl_vars['currentTab'] == 'dejala' )): ?>class="active"<?php endif; ?>>
			<a href="<?php echo $this->_tpl_vars['moduleConfigURL']; ?>
&cat=dejala"><?php echo smartyTranslate(array('s' => 'DEJALA PRO','mod' => 'dejala'), $this);?>
</a>
		</li>
	</ul>
</div>
<br class='clear'/>
<?php endif; ?>
<div style="margin-top:-2px; border: 1px solid #999;">
<br/>