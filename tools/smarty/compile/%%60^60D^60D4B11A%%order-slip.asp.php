<?php /* Smarty version 2.6.20, created on 2010-06-13 15:04:32
         compiled from ../../../GUI//order-slip.asp */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', '../../../GUI//order-slip.asp', 1, false),array('function', 'dateFormat', '../../../GUI//order-slip.asp', 53, false),array('modifier', 'string_format', '../../../GUI//order-slip.asp', 49, false),array('modifier', 'intval', '../../../GUI//order-slip.asp', 51, false),)), $this); ?>
<?php ob_start(); ?><a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
my-account.php"><?php echo smartyTranslate(array('s' => 'My account'), $this);?>
</a>
<span class="navigation-pipe"><?php echo $this->_tpl_vars['navigationPipe']; ?>
</span>
<?php echo smartyTranslate(array('s' => 'Credit slips'), $this);?>
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
					<h2><?php echo smartyTranslate(array('s' => 'Credit slips'), $this);?>
</h2>
					<p><?php echo smartyTranslate(array('s' => 'Credit slips you received after canceled orders'), $this);?>
.</p>
				
					<div class="block-center" id="block-history"><?php if ($this->_tpl_vars['ordersSlip'] && count ( $this->_tpl_vars['ordersSlip'] )): ?>
			<table id="order-list" class="std">
				<thead>
					<tr>
						<th class="first_item"><?php echo smartyTranslate(array('s' => 'Credit slip'), $this);?>
</th>
						<th class="item"><?php echo smartyTranslate(array('s' => 'Order'), $this);?>
</th>
						<th class="item"><?php echo smartyTranslate(array('s' => 'Date issued'), $this);?>
</th>
						<th class="last_item"><?php echo smartyTranslate(array('s' => 'View credit slip'), $this);?>
</th>
					</tr>
				</thead>
				<tbody>
					<?php $_from = $this->_tpl_vars['ordersSlip']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['myLoop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['myLoop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['slip']):
        $this->_foreach['myLoop']['iteration']++;
?>
					<tr
						class="<?php if (($this->_foreach['myLoop']['iteration'] <= 1)): ?>first_item<?php elseif (($this->_foreach['myLoop']['iteration'] == $this->_foreach['myLoop']['total'])): ?>last_item<?php else: ?>item<?php endif; ?> <?php if (($this->_foreach['myLoop']['iteration']-1) % 2): ?>alternate_item<?php endif; ?>">
						<td class="bold"><span class="color-myaccount"><?php echo smartyTranslate(array('s' => '#'), $this);?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['slip']['id_order_slip'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%06d") : smarty_modifier_string_format($_tmp, "%06d")); ?>
</span></td>
						<td class="history_method"><a class="color-myaccount"
							href="javascript:showOrder(1, <?php echo ((is_array($_tmp=$this->_tpl_vars['slip']['id_order'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
, 'order-detail');"><?php echo smartyTranslate(array('s' => '#'), $this);?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['slip']['id_order'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%06d") : smarty_modifier_string_format($_tmp, "%06d")); ?>
</a></td>
						<td class="bold"><?php echo Tools::dateFormat(array('date' => $this->_tpl_vars['slip']['date_add'],'full' => 0), $this);?>
</td>
						<td class="history_invoice"><a
							href="<?php echo $this->_tpl_vars['base_dir']; ?>
pdf-order-slip.php?id_order_slip=<?php echo ((is_array($_tmp=$this->_tpl_vars['slip']['id_order_slip'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
"
							title="<?php echo smartyTranslate(array('s' => 'Credit slip'), $this);?>
 <?php echo smartyTranslate(array('s' => '#'), $this);?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['slip']['id_order_slip'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%06d") : smarty_modifier_string_format($_tmp, "%06d")); ?>
"><img
							src="<?php echo $this->_tpl_vars['img_dir']; ?>
icon/pdf.gif"
							alt="<?php echo smartyTranslate(array('s' => 'Order slip'), $this);?>
 <?php echo smartyTranslate(array('s' => '#'), $this);?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['return']['id_order_slip'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "
							%06d") : smarty_modifier_string_format($_tmp, "
							%06d")); ?>
" class="icon" /></a> <a
							href="<?php echo $this->_tpl_vars['base_dir']; ?>
pdf-order-slip.php?id_order_slip=<?php echo ((is_array($_tmp=$this->_tpl_vars['slip']['id_order_slip'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
"
							title="<?php echo smartyTranslate(array('s' => 'Credit slip'), $this);?>
 <?php echo smartyTranslate(array('s' => '#'), $this);?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['slip']['id_order_slip'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%06d") : smarty_modifier_string_format($_tmp, "%06d")); ?>
"><?php echo smartyTranslate(array('s' => 'PDF'), $this);?>
</a></td>
					</tr>
					<?php endforeach; endif; unset($_from); ?>
				</tbody>
			</table>
			<div id="block-order-detail" class="hidden">&nbsp;</div>
			<?php else: ?>
			<p class="warning"><?php echo smartyTranslate(array('s' => 'You have not received any credit slips.'), $this);?>
</p>
			<?php endif; ?></div>
		</div>
	</div>
	
<div class="clear"></div>
<!-- end of p-20 --></div>
<!-- #include file="inc-global/footer.html" -->