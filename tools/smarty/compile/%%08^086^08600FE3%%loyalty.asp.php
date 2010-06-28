<?php /* Smarty version 2.6.20, created on 2010-06-13 15:04:47
         compiled from ../../../GUI//modules/loyalty/loyalty.asp */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', '../../../GUI//modules/loyalty/loyalty.asp', 1, false),array('function', 'dateFormat', '../../../GUI//modules/loyalty/loyalty.asp', 53, false),array('function', 'convertPrice', '../../../GUI//modules/loyalty/loyalty.asp', 67, false),array('function', 'displayPrice', '../../../GUI//modules/loyalty/loyalty.asp', 93, false),array('modifier', 'intval', '../../../GUI//modules/loyalty/loyalty.asp', 45, false),array('modifier', 'string_format', '../../../GUI//modules/loyalty/loyalty.asp', 52, false),array('modifier', 'escape', '../../../GUI//modules/loyalty/loyalty.asp', 55, false),)), $this); ?>
<?php ob_start(); ?><a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
my-account.php"><?php echo smartyTranslate(array('s' => 'My account','mod' => 'loyalty'), $this);?>
</a><span class="navigation-pipe"><?php echo $this->_tpl_vars['navigationPipe']; ?>
</span><?php echo smartyTranslate(array('s' => 'My loyalty points','mod' => 'loyalty'), $this);?>
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
							<h2><?php echo smartyTranslate(array('s' => 'My loyalty points','mod' => 'loyalty'), $this);?>
</h2>
							<?php if ($this->_tpl_vars['orders']): ?>
							<div class="block-center" id="block-history">
								<?php if ($this->_tpl_vars['orders'] && count ( $this->_tpl_vars['orders'] )): ?>
								<table id="order-list" class="std">
									<thead>
										<tr>
											<th class="first_item"><?php echo smartyTranslate(array('s' => 'Order','mod' => 'loyalty'), $this);?>
</th>
											<th class="item"><?php echo smartyTranslate(array('s' => 'Date','mod' => 'loyalty'), $this);?>
</th>
											<th class="item"><?php echo smartyTranslate(array('s' => 'Points','mod' => 'loyalty'), $this);?>
</th>
											<th class="last_item"><?php echo smartyTranslate(array('s' => 'Points Status','mod' => 'loyalty'), $this);?>
</th>
										</tr>
									</thead>
									<tfoot>
										<tr class="alternate_item">
											<td colspan="2" class="history_method bold" style="text-align:center;"><?php echo smartyTranslate(array('s' => 'Total points available:','mod' => 'loyalty'), $this);?>
</td>
											<td class="history_method" style="text-align:left;"><?php echo ((is_array($_tmp=$this->_tpl_vars['totalPoints'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
</td>
											<td class="history_method">&nbsp;</td>
										</tr>
									</tfoot>
									<tbody>
									<?php $_from = $this->_tpl_vars['orders']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['order']):
?>
										<tr class="alternate_item">
											<td class="history_link bold"><?php echo smartyTranslate(array('s' => '#','mod' => 'loyalty'), $this);?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['order']['id'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%06d") : smarty_modifier_string_format($_tmp, "%06d")); ?>
</td>
											<td class="history_date"><?php echo Tools::dateFormat(array('date' => $this->_tpl_vars['order']['date'],'full' => 1), $this);?>
</td>
											<td class="history_method"><?php echo ((is_array($_tmp=$this->_tpl_vars['order']['points'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
</td>
											<td class="history_method"><?php echo ((is_array($_tmp=$this->_tpl_vars['order']['state'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</td>
										</tr>
									<?php endforeach; endif; unset($_from); ?>
									</tbody>
								</table>
								<div id="block-order-detail" class="hidden">&nbsp;</div>
								<?php else: ?>
									<p class="warning"><?php echo smartyTranslate(array('s' => 'You have not placed any orders.'), $this);?>
</p>
								<?php endif; ?>
							</div>							
							<?php if ($this->_tpl_vars['transformation_allowed']): ?>
							<p style="text-align:center; margin-top:20px">
								<a href="<?php echo $this->_tpl_vars['base_dir']; ?>
modules/loyalty/loyalty-program.php?transform-points=true" onclick="return confirm('<?php echo smartyTranslate(array('s' => 'Are you sure to want to transform your points into vouchers ?','mod' => 'loyalty','js' => 1), $this);?>
');"><?php echo smartyTranslate(array('s' => 'Transform my points into a voucher of','mod' => 'loyalty'), $this);?>
 <span class="price"><?php echo Product::convertPrice(array('price' => $this->_tpl_vars['voucher']), $this);?>
</span>.</a>
							</p>
							<?php endif; ?>
							<br />
							<h2><?php echo smartyTranslate(array('s' => 'My vouchers from loyalty points','mod' => 'loyalty'), $this);?>
</h2>
							<?php if ($this->_tpl_vars['nbDiscounts']): ?>
							<div class="block-center" id="block-history">
								<table id="order-list" class="std">
									<thead>
										<tr>
											<th class="first_item"><?php echo smartyTranslate(array('s' => 'Created','mod' => 'loyalty'), $this);?>
</th>
											<th class="item"><?php echo smartyTranslate(array('s' => 'Value','mod' => 'loyalty'), $this);?>
</th>
											<th class="item"><?php echo smartyTranslate(array('s' => 'Code','mod' => 'loyalty'), $this);?>
</th>
											<th class="item"><?php echo smartyTranslate(array('s' => 'Valid from','mod' => 'loyalty'), $this);?>
</th>
											<th class="item"><?php echo smartyTranslate(array('s' => 'Valid until','mod' => 'loyalty'), $this);?>
</th>
											<th class="item"><?php echo smartyTranslate(array('s' => 'Status','mod' => 'loyalty'), $this);?>
</th>
											<th class="last_item"><?php echo smartyTranslate(array('s' => 'Details','mod' => 'loyalty'), $this);?>
</th>
										</tr>
									</thead>
									<tbody>
									<?php $_from = $this->_tpl_vars['discounts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['myLoop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['myLoop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['discount']):
        $this->_foreach['myLoop']['iteration']++;
?>
										<tr class="alternate_item">
											<td class="history_date"><?php echo Tools::dateFormat(array('date' => $this->_tpl_vars['discount']->date_add), $this);?>
</td>
											<td class="history_price"><span class="price"><?php if ($this->_tpl_vars['discount']->id_discount_type == 1): ?>
													<?php echo $this->_tpl_vars['discount']->value; ?>
%
												<?php elseif ($this->_tpl_vars['discount']->id_discount_type == 2): ?>
													<?php echo Tools::displayPriceSmarty(array('price' => $this->_tpl_vars['discount']->value,'currency' => $this->_tpl_vars['discount']->id_currency), $this);?>

												<?php else: ?>
													<?php echo smartyTranslate(array('s' => 'Free shipping','mod' => 'loyalty'), $this);?>

												<?php endif; ?></span></td>
											<td class="history_method bold"><?php echo $this->_tpl_vars['discount']->name; ?>
</td>
											<td class="history_date"><?php echo Tools::dateFormat(array('date' => $this->_tpl_vars['discount']->date_from), $this);?>
</td>
											<td class="history_date"><?php echo Tools::dateFormat(array('date' => $this->_tpl_vars['discount']->date_to), $this);?>
</td>
											<td class="history_method bold"><?php if ($this->_tpl_vars['discount']->quantity > 0): ?><?php echo smartyTranslate(array('s' => 'To use','mod' => 'loyalty'), $this);?>
<?php else: ?><?php echo smartyTranslate(array('s' => 'Used','mod' => 'loyalty'), $this);?>
<?php endif; ?></td>
											<td class="history_method"><a href="<?php echo $_SERVER['SCRIPT_NAME']; ?>
" onclick="return false" class="tips" title="<?php echo smartyTranslate(array('s' => 'Generated by these following orders','mod' => 'loyalty'), $this);?>
|<?php $_from = $this->_tpl_vars['discount']->orders; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['myLoop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['myLoop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['myorder']):
        $this->_foreach['myLoop']['iteration']++;
?><?php echo smartyTranslate(array('s' => 'Order #','mod' => 'loyalty'), $this);?>
<?php echo $this->_tpl_vars['myorder']['id_order']; ?>
 (<?php echo Tools::displayPriceSmarty(array('price' => $this->_tpl_vars['myorder']['total_paid'],'currency' => $this->_tpl_vars['myorder']['id_currency']), $this);?>
) : <?php if ($this->_tpl_vars['myorder']['points'] > 0): ?><?php echo $this->_tpl_vars['myorder']['points']; ?>
 <?php echo smartyTranslate(array('s' => 'points.','mod' => 'loyalty'), $this);?>
<?php else: ?><?php echo smartyTranslate(array('s' => 'Cancelled','mod' => 'loyalty'), $this);?>
<?php endif; ?><?php if (! ($this->_foreach['myLoop']['iteration'] == $this->_foreach['myLoop']['total'])): ?>|<?php endif; ?><?php endforeach; endif; unset($_from); ?>"><?php echo smartyTranslate(array('s' => 'more...','mod' => 'loyalty'), $this);?>
</a></td>
										</tr>
									<?php endforeach; endif; unset($_from); ?>
									</tbody>
								</table>
								<div id="block-order-detail" class="hidden">&nbsp;</div>
							</div>
							<?php else: ?>
							<p class="warning"><?php echo smartyTranslate(array('s' => 'No vouchers yet.','mod' => 'loyalty'), $this);?>
</p>
							<?php endif; ?>
							<?php else: ?>
							<p class="warning"><?php echo smartyTranslate(array('s' => 'No reward points yet.','mod' => 'loyalty'), $this);?>
</p>
							<?php endif; ?>
		</div>
	</div>
	
<div class="clear"></div>
<!-- end of p-20 -->
</div>
<!-- #include file="inc-global/footer.html" -->
