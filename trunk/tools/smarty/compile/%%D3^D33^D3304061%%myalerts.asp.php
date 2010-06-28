<?php /* Smarty version 2.6.20, created on 2010-06-13 15:04:52
         compiled from ../../../GUI//modules/mailalerts/myalerts.asp */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', '../../../GUI//modules/mailalerts/myalerts.asp', 1, false),array('modifier', 'intval', '../../../GUI//modules/mailalerts/myalerts.asp', 31, false),array('modifier', 'escape', '../../../GUI//modules/mailalerts/myalerts.asp', 45, false),array('modifier', 'truncate', '../../../GUI//modules/mailalerts/myalerts.asp', 46, false),)), $this); ?>
<?php ob_start(); ?><a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
my-account.php"><?php echo smartyTranslate(array('s' => 'My account','mod' => 'mailalerts'), $this);?>
</a><span class="navigation-pipe"><?php echo $this->_tpl_vars['navigationPipe']; ?>
</span><?php echo smartyTranslate(array('s' => 'My alerts','mod' => 'mailalerts'), $this);?>
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
				<h2><?php echo smartyTranslate(array('s' => 'My alerts','mod' => 'mailalerts'), $this);?>
</h2>

				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['GUI_THEME_PATH'])."/inc-global/errors.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				<?php if (((is_array($_tmp=$this->_tpl_vars['id_customer'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)) != 0): ?>
					<?php if ($this->_tpl_vars['alerts']): ?>
					<div id="block-history" class="block-center">
						<table class="std">
							<thead>
								<tr>
									<th class="first_item"><?php echo smartyTranslate(array('s' => 'Product','mod' => 'mailalerts'), $this);?>
</th>
									<th class="last_item" style="width:20px;"><?php echo smartyTranslate(array('s' => 'Delete','mod' => 'mailalerts'), $this);?>
</th>
								</tr>
							</thead>
							<tbody>
							<?php $_from = $this->_tpl_vars['alerts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['i'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['i']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['product']):
        $this->_foreach['i']['iteration']++;
?>
							<tr>
								<td class="first_item">
								<span style="float:left;"><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['link'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
"><img src="<?php echo $this->_tpl_vars['img_prod_dir']; ?>
<?php echo $this->_tpl_vars['product']['cover']; ?>
-small.jpg" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" /></a></span>
								<span style="float:left;"><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['link'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['product']['name'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 40, '...') : smarty_modifier_truncate($_tmp, 40, '...')))) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</a>
								<?php if (isset ( $this->_tpl_vars['product']['attributes_small'] )): ?>
									<br /><i><?php echo ((is_array($_tmp=$this->_tpl_vars['product']['attributes_small'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</i>
								<?php endif; ?></span>
								</td>
								<td class="align_center">
									<a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
modules/mailalerts/myalerts.php?action=delete&id_product=<?php echo $this->_tpl_vars['product']['id_product']; ?>
<?php if ($this->_tpl_vars['product']['id_product_attribute']): ?>&id_product_attribute=<?php echo $this->_tpl_vars['product']['id_product_attribute']; ?>
<?php endif; ?>"><img src="<?php echo $this->_tpl_vars['content_dir']; ?>
modules/mailalerts/img/delete.gif" alt="<?php echo smartyTranslate(array('s' => 'Delete','mod' => 'mailalerts'), $this);?>
" /></a>
								</td>
							</tr>
							</tbody>
						<?php endforeach; endif; unset($_from); ?>
						</table>
					</div>
					<div id="block-order-detail">&nbsp;</div>
					<?php else: ?>
						<p class="warning"><?php echo smartyTranslate(array('s' => 'You are not subscribed to any alerts.','mod' => 'mailalerts'), $this);?>
</p>
					<?php endif; ?>
				<?php endif; ?>
		</div>
	</div>
	
<div class="clear"></div>
<!-- end of p-20 -->
</div>
<!-- #include file="inc-global/footer.html" -->