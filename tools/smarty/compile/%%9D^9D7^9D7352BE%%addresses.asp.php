<?php /* Smarty version 2.6.20, created on 2010-06-13 15:04:34
         compiled from ../../../GUI/addresses.asp */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', '../../../GUI/addresses.asp', 2, false),array('modifier', 'intval', '../../../GUI/addresses.asp', 70, false),)), $this); ?>
<?php ob_start(); ?>
<a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
my-account.php"><?php echo smartyTranslate(array('s' => 'My account'), $this);?>
</a>
<span class="navigation-pipe"><?php echo $this->_tpl_vars['navigationPipe']; ?>
</span>
<?php echo smartyTranslate(array('s' => 'My addresses'), $this);?>
<?php $this->_smarty_vars['capture']['path'] = ob_get_contents(); ob_end_clean(); ?>
<!-- #include file="inc-global/init.php" -->

<!-- #include file="css/style.css" -->
<!-- #include file="css/global.css" -->

<!-- #include file="js/jquery.search.js" -->
<!-- #include file="js/init.js" -->
<!-- #include file="inc-global/header.html" -->



<div class="p-20">

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['GUI_THEME_PATH'])."/inc-global/base_dir_js.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<!-- #include file="inc-global/breadcrumb.html" -->
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['GUI_THEME_PATH'])."/inc-global/breadcrumb.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	
	
	<div class="account-left">
		<div class="spacer"></div>
		<!-- #include file="inc-global/account-nav.html" -->
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['GUI_THEME_PATH'])."/inc-global/account-nav.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	</div>
	<div class="account-right">
		<div class="account-content-inner">
				<h3 class="color-pink"><?php echo smartyTranslate(array('s' => 'My addresses'), $this);?>
</h3>
				<p><?php echo smartyTranslate(array('s' => 'Configure your billing and delivery addresses that will be
				preselected by default when you make an order. You can also add
				additional addresses, which can be useful for sending gifts or receiving
				your order at the office.'), $this);?>
</p>
				
				<span class="btn"><span><a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
address.php" title="<?php echo smartyTranslate(array('s' => 'Add an address'), $this);?>
" class="button_large">
				<?php echo smartyTranslate(array('s' => 'Add an address'), $this);?>
</a></span></span>
				<div class="clear spacer"></div>
				<?php if ($this->_tpl_vars['addresses']): ?>
				<div class="addresses">
				<h3><?php echo smartyTranslate(array('s' => 'Your addresses are listed below.'), $this);?>
</h3>
				<p><?php echo smartyTranslate(array('s' => 'Be sure to update them if they have changed.'), $this);?>
</p>
				
				<?php $_from = $this->_tpl_vars['addresses']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['myLoop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['myLoop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['address']):
        $this->_foreach['myLoop']['iteration']++;
?>
				
				<div class="left w-1-2">
					<div class="m-20">
						<fieldset><legend><?php echo $this->_tpl_vars['address']['alias']; ?>
</legend>
					<ul class="address">
					<?php if ($this->_tpl_vars['address']['company']): ?>
					<li class="address_company"><?php echo $this->_tpl_vars['address']['company']; ?>
</li>
					<?php endif; ?>
					<li class="address_name"><?php echo $this->_tpl_vars['address']['firstname']; ?>
 <?php echo $this->_tpl_vars['address']['lastname']; ?>
</li>
					<li class="address_address1"><?php echo $this->_tpl_vars['address']['address1']; ?>
</li>
					<?php if ($this->_tpl_vars['address']['address2']): ?>
					<li class="address_address2"><?php echo $this->_tpl_vars['address']['address2']; ?>
</li>
					<?php endif; ?>
					<li class="address_city"><?php echo $this->_tpl_vars['address']['postcode']; ?>
 <?php echo $this->_tpl_vars['address']['city']; ?>
</li>
					<li class="address_country"><?php echo $this->_tpl_vars['address']['country']; ?>
<?php if (isset ( $this->_tpl_vars['address']['state'] )): ?> (<?php echo $this->_tpl_vars['address']['state']; ?>
)<?php endif; ?></li>
					<?php if ($this->_tpl_vars['address']['phone']): ?>
					<li class="address_phone"><?php echo $this->_tpl_vars['address']['phone']; ?>
</li>
					<?php endif; ?> <?php if ($this->_tpl_vars['address']['phone_mobile']): ?>
					<li class="address_phone_mobile"><?php echo $this->_tpl_vars['address']['phone_mobile']; ?>
</li>
					<?php endif; ?>
					<li>
						<div class="s-spacer"></div>
						<span class="btn"><span>
						<a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
address.php?id_address=<?php echo ((is_array($_tmp=$this->_tpl_vars['address']['id_address'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
"
						title="<?php echo smartyTranslate(array('s' => 'Update'), $this);?>
"><?php echo smartyTranslate(array('s' => 'Update'), $this);?>
</a>
						</span></span>
						<span class="btn right"><span>
						<a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
address.php?id_address=<?php echo ((is_array($_tmp=$this->_tpl_vars['address']['id_address'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
&amp;delete"
						onclick="return confirm('<?php echo smartyTranslate(array('s' => 'Are you sure?'), $this);?>
');"
						title="<?php echo smartyTranslate(array('s' => 'Delete'), $this);?>
"><?php echo smartyTranslate(array('s' => 'Delete'), $this);?>
</a>
						</span>	</span>
					</li>
					</ul>
				</fieldset>
					</div>
				</div>
				<?php endforeach; endif; unset($_from); ?>
				<p class="clear" />
				
				</div>
				<?php else: ?>
				<p class="warning"><?php echo smartyTranslate(array('s' => 'No addresses available.'), $this);?>
&nbsp;<a
					href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
address.php"><?php echo smartyTranslate(array('s' => 'add a new one!'), $this);?>
</a></p>
				<?php endif; ?>
				
				

		</div>
	</div>
	
<div class="clear"></div>
<!-- end of p-20 --></div>
<!-- #include file="inc-global/footer.html" -->