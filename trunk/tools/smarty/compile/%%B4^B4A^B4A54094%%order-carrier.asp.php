<?php /* Smarty version 2.6.20, created on 2010-06-13 15:03:37
         compiled from ../../../GUI//order-carrier.asp */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', '../../../GUI//order-carrier.asp', 1, false),array('function', 'convertPrice', '../../../GUI//order-carrier.asp', 99, false),array('modifier', 'intval', '../../../GUI//order-carrier.asp', 87, false),array('modifier', 'sizeof', '../../../GUI//order-carrier.asp', 90, false),array('modifier', 'escape', '../../../GUI//order-carrier.asp', 93, false),)), $this); ?>
<?php ob_start(); ?><?php echo smartyTranslate(array('s' => 'Shipping'), $this);?>
<?php $this->_smarty_vars['capture']['path'] = ob_get_contents(); ob_end_clean(); ?>
<?php $this->assign('current_step', 'shipping'); ?> 


<script type="text/javascript" src="<?php echo $this->_tpl_vars['js_dir']; ?>
layer.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['content_dir']; ?>
js/conditions.js"></script>




<!-- #include file="inc-global/init.php" -->

<!-- #include file="css/style.css" -->
<!-- #include file="css/global.css" -->

<!-- #include file="js/jquery.search.js" -->
<!-- #include file="js/init.js" -->
<!-- #include file="inc-global/header.html" -->

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['GUI_THEME_PATH'])."/inc-private/order-address-js.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 
<!-- #include file="inc-private/order-address-js.html" -->

<!-- #include file="inc-global/base_dir_js.html" -->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['GUI_THEME_PATH'])."/inc-global/base_dir_js.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div class="p-15">

<div class="left w-1-5 bg-lightgray">
<div class="hline-red"></div>
<div class="m-20">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['GUI_THEME_PATH'])."/inc-private/order-steps.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 
<!-- #include file="inc-private/order-steps.tpl" -->
</div>
</div>



<div class="right w-4-5 bg-lightgray">
<div class="hline-red"></div>
<div class="m-20">
<!-- #include file="inc-global/breadcrumb.html" -->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['GUI_THEME_PATH'])."/inc-global/breadcrumb.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<h3><?php echo smartyTranslate(array('s' => 'Shipping'), $this);?>
</h3>
<!-- #include file="inc-global/errors.html" -->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['GUI_THEME_PATH'])."/inc-global/errors.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>


<form id="form" action="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
order.php" method="post"
	onsubmit="return acceptCGV('<?php echo smartyTranslate(array('s' => 'Please accept the terms of service before the next step.','js' => 1), $this);?>
');">




<?php if ($this->_tpl_vars['conditions']): ?>
	<h3 class="condition_title"><?php echo smartyTranslate(array('s' => 'Terms of service'), $this);?>
</h3>
	<input type="checkbox" name="cgv" id="cgv" value="1"
	<?php if ($this->_tpl_vars['checkedTOS']): ?>checked="checked" <?php endif; ?> /> 
    <label for="cgv"><?php echo smartyTranslate(array('s' => 'I agree with the terms of service and I adhere to them unconditionally.'), $this);?>
</label>
	<a 	href="<?php echo $this->_tpl_vars['base_dir']; ?>
cms.php?id_cms=3&amp;content_only=1&amp;TB_iframe=true&amp;width=650&amp;height=600"
	class="nyroModalTerms" ><?php echo smartyTranslate(array('s' => '(read)'), $this);?>
</a>
<?php endif; ?> 

<br class="clear spacer" />

<?php if ($this->_tpl_vars['virtual_cart']): ?> 
	<input id="input_virtual_carrier"	class="hidden" type="hidden" name="id_carrier" value="0" /> 
<?php else: ?> 
    
    
    <h3 class="carrier_title"><?php echo smartyTranslate(array('s' => 'Choose your delivery method'), $this);?>
</h3>
		
	<?php if ($this->_tpl_vars['carriers'] && count ( $this->_tpl_vars['carriers'] )): ?>
	<table class="std" width="70%">
		<thead>
			<tr>
				<th class="carrier_action first_item"></th>
				<th class="carrier_name item"><?php echo smartyTranslate(array('s' => 'Carrier'), $this);?>
</th>
				<th class="carrier_infos item"><?php echo smartyTranslate(array('s' => 'Information'), $this);?>
</th>
				<th class="carrier_price last_item"><?php echo smartyTranslate(array('s' => 'Price'), $this);?>
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
				<td class="carrier_action radio">
					<input type="radio"
					name="id_carrier" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['carrier']['id_carrier'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
"
					id="id_carrier<?php echo ((is_array($_tmp=$this->_tpl_vars['carrier']['id_carrier'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
"
					
					checked="<?php if ($this->_tpl_vars['carrier']['id_carrier'] == $this->_tpl_vars['checked'] || ( $this->_tpl_vars['checked'] == 0 && $this->_tpl_vars['i'] == 0 ) || ( sizeof($this->_tpl_vars['carriers']) == 1 )): ?>checked<?php endif; ?>"  /></td>
				<td class="carrier_name"><label
					for="id_carrier<?php echo ((is_array($_tmp=$this->_tpl_vars['carrier']['id_carrier'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
"> <?php if ($this->_tpl_vars['carrier']['img']): ?><img
					src="<?php echo ((is_array($_tmp=$this->_tpl_vars['carrier']['img'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
"
					alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['carrier']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" /><?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['carrier']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
<?php endif; ?>
				</label></td>
				<td class="carrier_infos"><?php echo ((is_array($_tmp=$this->_tpl_vars['carrier']['delay'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</td>
				<td class="carrier_price"><?php if ($this->_tpl_vars['carrier']['price']): ?> <span class="price">
				<?php if ($this->_tpl_vars['priceDisplay'] == 1): ?>
					<?php echo Product::convertPrice(array('price' => $this->_tpl_vars['carrier']['price_tax_exc']), $this);?>

				<?php else: ?>
					<?php echo Product::convertPrice(array('price' => $this->_tpl_vars['carrier']['price']), $this);?>
<?php endif; ?> 
					</span> <?php if ($this->_tpl_vars['priceDisplay'] == 1): ?> 
					<?php echo smartyTranslate(array('s' => '(tax excl.)'), $this);?>
<?php else: ?> <?php echo smartyTranslate(array('s' => '(tax incl.)'), $this);?>
<?php endif; ?> <?php else: ?> <?php echo smartyTranslate(array('s' => 'Free!'), $this);?>
 <?php endif; ?></td>
			</tr>
			<?php endforeach; endif; unset($_from); ?>
			
			<?php echo $this->_tpl_vars['HOOK_EXTRACARRIER']; ?>

			
		</tbody>
	</table>
	<?php else: ?>
	
	
	
	<p class="warning"><?php echo smartyTranslate(array('s' => 'There is no carrier available that will deliver to this address!'), $this);?>
</p>
	
	
	
	<?php endif; ?> 
	
	
    <?php if ($this->_tpl_vars['recyclablePackAllowed']): ?>
   
    <input type="checkbox" name="recyclable" id="recyclable" value="1" <?php if ($this->_tpl_vars['recyclable'] == 1): ?>checked="checked" <?php endif; ?> />
    <label for="recyclable">    <?php echo smartyTranslate(array('s' => 'I agree to receive my order in recycled packaging'), $this);?>
.</label>

<?php endif; ?> 




<br class="clear spacer" />

<?php if ($this->_tpl_vars['giftAllowed']): ?>




<div class="left w-1-3">
    <h3 class="gift_title"><?php echo smartyTranslate(array('s' => 'Gift'), $this);?>
</h3>
    <p class="checkbox">
	<input type="checkbox" name="gift" id="gift" value="1" checked="<?php if ($this->_tpl_vars['cart']->gift == 1): ?>checked<?php endif; ?>"
    onclick="$('#gift_div').toggle('slow');" /> 
    <label for="gift"><?php echo smartyTranslate(array('s' => 'I would like the order to be gift-wrapped.'), $this);?>
</label> 
    <br />
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
    
    <?php if ($this->_tpl_vars['gift_wrapping_price'] > 0): ?> (
    <?php echo smartyTranslate(array('s' => 'Additional cost of'), $this);?>
 
    <span class="price"> 
    	<?php if ($this->_tpl_vars['priceDisplay'] == 1): ?>
        	<?php echo Product::convertPrice(array('price' => $this->_tpl_vars['total_wrapping_tax_exc']), $this);?>

        <?php else: ?><?php echo Product::convertPrice(array('price' => $this->_tpl_vars['total_wrapping']), $this);?>
<?php endif; ?> 
    </span> 
    	<?php if ($this->_tpl_vars['priceDisplay'] == 1): ?> <?php echo smartyTranslate(array('s' => '(tax excl.)'), $this);?>
<?php else: ?> <?php echo smartyTranslate(array('s' => '(tax incl.)'), $this);?>
<?php endif; ?>) 
    <?php endif; ?></p>
</div>




<div class="left w-1-3" style=" margin-left:30px;">
<p id="gift_div" class="textarea">
<label for="gift_message"><?php echo smartyTranslate(array('s' => 'If you wish, you can add a note to the gift:'), $this);?>
</label> 
<textarea rows="5"	cols="35" id="gift_message" name="gift_message" class="ipt" >
<?php echo ((is_array($_tmp=$this->_tpl_vars['cart']->gift_message)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</textarea>
</p>
</div>
<?php endif; ?> <?php endif; ?>


<br class="spacer clear" />







<input type="hidden" name="step"	value="3" /> 
<input type="hidden" name="back" value="<?php echo $this->_tpl_vars['back']; ?>
" /> 

<div class="left">
<span class="btn"><span>
<a	href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
order.php?step=1<?php if ($this->_tpl_vars['back']): ?>&back=<?php echo $this->_tpl_vars['back']; ?>
<?php endif; ?>"
	title="<?php echo smartyTranslate(array('s' => 'Previous'), $this);?>
">&laquo; <?php echo smartyTranslate(array('s' => 'Previous'), $this);?>
</a> </span></span>
</div>
<div class="right">
<span class="btn btn-dark"><span>
    <input 	type="submit" name="processCarrier" value="<?php echo smartyTranslate(array('s' => 'Next'), $this);?>
 &raquo;"  /></span></span>
</div>
</form>
</div> <!-- / right w-4-5 -->

<div class="clear"></div>
</div><!--p-20 -->