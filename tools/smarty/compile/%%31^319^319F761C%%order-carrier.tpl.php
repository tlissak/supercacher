<?php /* Smarty version 2.6.20, created on 2010-06-09 15:04:24
         compiled from D:%5CHTDOCS%5Cpresta-tpl/themes/minimaliste/order-carrier.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', 'D:\\HTDOCS\\presta-tpl/themes/minimaliste/order-carrier.tpl', 29, false),array('function', 'convertPrice', 'D:\\HTDOCS\\presta-tpl/themes/minimaliste/order-carrier.tpl', 68, false),array('modifier', 'intval', 'D:\\HTDOCS\\presta-tpl/themes/minimaliste/order-carrier.tpl', 60, false),array('modifier', 'sizeof', 'D:\\HTDOCS\\presta-tpl/themes/minimaliste/order-carrier.tpl', 60, false),array('modifier', 'escape', 'D:\\HTDOCS\\presta-tpl/themes/minimaliste/order-carrier.tpl', 64, false),)), $this); ?>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['base_dir']; ?>
js/conditions.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['js_dir']; ?>
layer.js"></script>
<?php echo '
<script type="text/javascript">
// <![CDATA[
	ThickboxI18nClose = "{l s=\'Close\'}";
	ThickboxI18nOrEscKey = "{l s=\'or Esc key\'}";
	tb_pathToImage = "{$img_ps_dir}loadingAnimation.gif";
//]]>
</script>
'; ?>

<script type="text/javascript"><?php echo '
// <![CDATA[
	/* WOWO */
    $(\'document\').ready( function(){
        if($(\'#gift_cb\').get(0).checked )
        {
        	$(\'#cart_total_wrapping\').toggle();
        	$(\'#wrapping-more\').toggle(\'slow\');
        	'; ?>
<?php if ($this->_tpl_vars['cart']->gift != 1): ?><?php echo '
        	$(\'#cart_total_global span\').toggle();
        	'; ?>
<?php endif; ?><?php echo '
        }
    });
    /* End */
//]]>
'; ?>
</script>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./thickbox.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php ob_start(); ?><?php echo smartyTranslate(array('s' => 'Shipping'), $this);?>
<?php $this->_smarty_vars['capture']['path'] = ob_get_contents(); ob_end_clean(); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./breadcrumb.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $this->assign('current_step', 'shipping'); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./order-steps.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./errors.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<form id="form" action="<?php echo $this->_tpl_vars['base_dir']; ?>
order.php" method="post" onsubmit="return acceptCGV('<?php echo smartyTranslate(array('s' => 'Please accept the terms of service before the next step.','js' => 1), $this);?>
');">
<?php if ($this->_tpl_vars['virtual_cart']): ?>
	<input id="input_virtual_carrier" class="hidden" type="hidden" name="id_carrier" value="0" />
<?php else: ?>
	<h3 class="carrier_title"><?php echo smartyTranslate(array('s' => 'Choose your delivery method'), $this);?>
</h3>
	<?php if ($this->_tpl_vars['recyclablePackAllowed']): ?>
	<p>
		<input type="checkbox" class="checkbox" name="recyclable" id="recyclable" value="0" <?php if ($this->_tpl_vars['recyclable'] == 0): ?>checked="checked"<?php endif; ?> />
		<label for="recyclable"><?php echo smartyTranslate(array('s' => 'I agree to receive my order in recycled packaging'), $this);?>
.</label>
	</p>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['carriers'] && count ( $this->_tpl_vars['carriers'] )): ?>
	<div class="table_block" style="float:left"><br />
		<table class="std">
			<thead>
				<tr>
					<th class="carrier_action first_item"></th>
					<th class="carrier_name item"><?php echo smartyTranslate(array('s' => 'Carrier'), $this);?>
</th>
					<th class="carrier_infos item"><?php echo smartyTranslate(array('s' => 'Information'), $this);?>
</th>
					<th class="carrier_price"><?php echo smartyTranslate(array('s' => 'Price'), $this);?>
</th>
				</tr>
			</thead>
			<tbody>
			<?php $_from = $this->_tpl_vars['carriers']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['myLoop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['myLoop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['carrier']):
        $this->_foreach['myLoop']['iteration']++;
?>
				<tr class="<?php if (($this->_foreach['myLoop']['iteration'] <= 1)): ?>first_item<?php elseif (($this->_foreach['myLoop']['iteration'] == $this->_foreach['myLoop']['total'])): ?>last_item<?php endif; ?> <?php if (($this->_foreach['myLoop']['iteration']-1) % 2): ?>alternate_item<?php else: ?>item<?php endif; ?>">
					<td>
						<input type="radio" class="radio" name="id_carrier" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['carrier']['id_carrier'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
" id="id_carrier<?php echo ((is_array($_tmp=$this->_tpl_vars['carrier']['id_carrier'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
" <?php if ($this->_tpl_vars['carrier']['id_carrier'] == $this->_tpl_vars['checked'] || ( $this->_tpl_vars['checked'] == 0 && $this->_tpl_vars['i'] == 0 ) || ( sizeof($this->_tpl_vars['carriers']) == 1 )): ?>checked="checked"<?php endif; ?> />
					</td>
					<td class="carrier_name">
						<label for="id_carrier<?php echo ((is_array($_tmp=$this->_tpl_vars['carrier']['id_carrier'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
">
							<?php if ($this->_tpl_vars['carrier']['img']): ?><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['carrier']['img'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['carrier']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" /><?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['carrier']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
<?php endif; ?>
						</label>
					</td>
					<td class="carrier_infos"><?php echo ((is_array($_tmp=$this->_tpl_vars['carrier']['delay'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</td>
					<td class="carrier_price"><?php if ($this->_tpl_vars['carrier']['price']): ?><span class="price"><?php echo Product::convertPrice(array('price' => $this->_tpl_vars['carrier']['price']), $this);?>
</span><?php else: ?><?php echo smartyTranslate(array('s' => 'Free!'), $this);?>
<?php endif; ?></td>
				</tr>
			<?php endforeach; endif; unset($_from); ?>
			</tbody>
		</table>
	</div>
	<?php else: ?>
		<p class="warning"><?php echo smartyTranslate(array('s' => 'There is no carrier available that will deliver to this address!'), $this);?>
</td></tr>
	<?php endif; ?>
<div id="gift_div">
	<h4><?php echo smartyTranslate(array('s' => 'Gift packing'), $this);?>
</h4>
	<p>
	 <input onclick="$('#wrapping-more').toggle('slow'); $('#cart_total_wrapping, #cart_total_global span').toggle();" type="checkbox" value="1" id="gift_cb" name="gift" <?php if ($this->_tpl_vars['cart']->gift == 1): ?>checked="checked"<?php endif; ?> style="border: none;" />
	 <label for="gift_cb"><?php echo smartyTranslate(array('s' => 'a want a gift packing'), $this);?>
 <?php if ($this->_tpl_vars['gift_wrapping_price'] > 0): ?>(<?php echo $this->_tpl_vars['gift_wrapping_price']; ?>
&nbsp;euros)<?php endif; ?></label>
	</p>
	<div class="clear"></div>
	<p id="wrapping-more" style="display:none;">
	<?php echo smartyTranslate(array('s' => 'add a message to your Gift packing'), $this);?>
 :
	<textarea name="gift_message" class="wrapping_more" cols="100" rows="5"><?php echo ((is_array($_tmp=$this->_tpl_vars['cart']->gift_message)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</textarea>
	</p>
</div>

<?php if ($this->_tpl_vars['carriers'] && count ( $this->_tpl_vars['carriers'] )): ?>
	<?php else: ?>
	<p class="warning"><?php echo smartyTranslate(array('s' => 'There is no carrier available that will deliver to this address!'), $this);?>
</td></tr>
<?php endif; ?>
<div class="condition">	
<h3><?php echo smartyTranslate(array('s' => 'Terms of service'), $this);?>
</h3>
	<p class="checkbox">
		<input type="checkbox" name="cgv" id="cgv" value="0" <?php if ($this->_tpl_vars['checkedTOS']): ?>checked="checked"<?php endif; ?> />
		<label for="cgv"><?php echo smartyTranslate(array('s' => 'I agree with the terms of service and I adhere to them unconditionally.'), $this);?>
</label> <a href="<?php echo $this->_tpl_vars['base_dir']; ?>
cms.php?id_cms=3&amp;content_only=1&amp;TB_iframe=true&amp;width=450&amp;height=500&amp;thickbox=true" class="thickbox"><?php echo smartyTranslate(array('s' => '(read)'), $this);?>
</a>
	</p>
</div>
	<p class="cart_navigation">
		<input type="hidden" name="step" value="3" />
		<a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
order.php?step=1" title="<?php echo smartyTranslate(array('s' => 'Previous'), $this);?>
" class="buttonprecedent">&laquo; <?php echo smartyTranslate(array('s' => 'Previous'), $this);?>
</a>
 		<input type="submit" name="processCarrier" value="<?php echo smartyTranslate(array('s' => 'Next'), $this);?>
 &raquo;" class="buttonorder" />
	</p>
</form>
<?php endif; ?>