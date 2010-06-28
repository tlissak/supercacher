<?php /* Smarty version 2.6.20, created on 2010-06-03 16:17:47
         compiled from D:%5CHTDOCS%5Cpresta-tpl%5Cmodules%5Cdejala/dejala_deliveries.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', 'D:\\HTDOCS\\presta-tpl\\modules\\dejala/dejala_deliveries.tpl', 2, false),)), $this); ?>
			<fieldset>
				<?php if (( $this->_tpl_vars['djl_mode'] == 'PROD' )): ?><?php echo smartyTranslate(array('s' => 'Your credit','mod' => 'dejala'), $this);?>
 :<?php else: ?><?php echo smartyTranslate(array('s' => 'Your virtual credit (in order to test)','mod' => 'dejala'), $this);?>
 :<?php endif; ?> <?php echo $this->_tpl_vars['account_balance']; ?>
 <?php echo smartyTranslate(array('s' => 'euros','mod' => 'dejala'), $this);?>
<br/>
				<?php if (( $this->_tpl_vars['djl_mode'] == 'PROD' )): ?><a href="http://pro.dejala.<?php echo $this->_tpl_vars['country']; ?>
" target="_blank" style="color:blue;font-weight:bold;text-decoration:underline;"><?php echo smartyTranslate(array('s' => 'Credit your account','mod' => 'dejala'), $this);?>
</a><br/><?php endif; ?>
			
				<h4 class="clear"><?php echo smartyTranslate(array('s' => 'List of last deliveries','mod' => 'dejala'), $this);?>
:</h4>

				<table class="table" width="100%" >

					<tr class='bold'>
						<th><?php echo smartyTranslate(array('s' => '#','mod' => 'dejala'), $this);?>
</td>
						<th><?php echo smartyTranslate(array('s' => 'Creation','mod' => 'dejala'), $this);?>
</td>
						<th><?php echo smartyTranslate(array('s' => 'Order ID','mod' => 'dejala'), $this);?>
</td>
						<th><?php echo smartyTranslate(array('s' => 'Tracking_number','mod' => 'dejala'), $this);?>
</td>
						<th><?php echo smartyTranslate(array('s' => 'Label','mod' => 'dejala'), $this);?>
</td>
						<th><?php echo smartyTranslate(array('s' => 'Price','mod' => 'dejala'), $this);?>
</td>
						<th><?php echo smartyTranslate(array('s' => 'Status','mod' => 'dejala'), $this);?>
</td>
						<th><?php echo smartyTranslate(array('s' => 'Shipping','mod' => 'dejala'), $this);?>
</td>
						<th><?php echo smartyTranslate(array('s' => 'Description','mod' => 'dejala'), $this);?>
</td>
					</tr>

					<?php $_from = $this->_tpl_vars['deliveries']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['deliveryLoop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['deliveryLoop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['delivery']):
        $this->_foreach['deliveryLoop']['iteration']++;
?>
						<tr <?php if (( ($this->_foreach['deliveryLoop']['iteration']-1) % 2 == 0 )): ?>class='alt_row'<?php endif; ?>>
						<?php if ($this->_tpl_vars['delivery']['status']['picto_id']): ?>
							<td><img src="<?php if ($this->_tpl_vars['delivery']['status']['picto_id'] < 10): ?><?php echo $this->_tpl_vars['module_dir']; ?>
<?php else: ?>http://module.pro.dejala.<?php echo $this->_tpl_vars['country']; ?>
/picto/<?php endif; ?>picto_<?php echo $this->_tpl_vars['delivery']['status']['picto_id']; ?>
.gif"/></td>
						<?php else: ?>
							<td><img src="<?php echo $this->_tpl_vars['module_dir']; ?>
picto_0.gif"/></td>
						<?php endif; ?>	
							<td><?php echo $this->_tpl_vars['delivery']['creation_date']; ?>
</td>
							<td><?php echo $this->_tpl_vars['delivery']['packet_reference']; ?>
</td>
							<td><?php if ($this->_tpl_vars['delivery']['tracking_number']): ?><a href="http://tracking.dejala.<?php echo $this->_tpl_vars['country']; ?>
/tracker/<?php echo $this->_tpl_vars['delivery']['tracking_number']; ?>
" target="_blank"><?php echo $this->_tpl_vars['delivery']['tracking_number']; ?>
</a><?php endif; ?></td>
							<td><?php echo $this->_tpl_vars['delivery']['short_label']; ?>
</td>
							<td><?php echo $this->_tpl_vars['delivery']['price']; ?>
</td>
							<td><?php echo $this->_tpl_vars['delivery']['status']['labels']['fr']; ?>
</td>
							<td><?php echo $this->_tpl_vars['delivery']['shipping_date']; ?>
</td>
							<td><?php echo $this->_tpl_vars['product']['description']; ?>
<?php echo smartyTranslate(array('s' => 'In ','mod' => 'dejala'), $this);?>
<?php echo $this->_tpl_vars['delivery']['timelimit']; ?>
<?php echo smartyTranslate(array('s' => 'h','mod' => 'dejala'), $this);?>
 - <?php echo smartyTranslate(array('s' => 'from','mod' => 'dejala'), $this);?>
 <?php echo $this->_tpl_vars['delivery']['shipping_start']; ?>
 <?php echo smartyTranslate(array('s' => 'to','mod' => 'dejala'), $this);?>
 <?php echo $this->_tpl_vars['delivery']['shipping_stop']; ?>
</td>
						</tr>
					<?php endforeach; endif; unset($_from); ?>
				</table>
				<br/>
				</fieldset>
				<br/>
				<fieldset>
				<legend class="clear"><?php echo smartyTranslate(array('s' => 'Csv Export','mod' => 'dejala'), $this);?>
:</legend>

				<form action="<?php echo $this->_tpl_vars['formAction']; ?>
" method="post">
					<input type="hidden" name="method" value="accounting"/>
					<div id="calendar">
					<script type="text/javascript" src="<?php echo $this->_tpl_vars['module_dir']; ?>
../../js/jquery/datepicker/jquery-ui-personalized-1.6rc4.packed.js"></script>
					<script type="text/javascript" src="<?php echo $this->_tpl_vars['module_dir']; ?>
../../js/jquery/datepicker/ui/i18n/ui.datepicker-fr.js"></script>
					<?php echo '
					<script type="text/javascript">
						$(function() {
							$("#datepickerFrom").datepicker({
								prevText:"",
								nextText:"",
								dateFormat:"dd/mm/yy"});
						});
						$(function() {
							$("#datepickerTo").datepicker({
								prevText:"",
								nextText:"",
								dateFormat:"dd/mm/yy"});
						});
					</script>
	'; ?>


<?php echo smartyTranslate(array('s' => 'From','mod' => 'dejala'), $this);?>
: <input type="text" name="datepickerFrom" id="datepickerFrom" value="<?php echo $this->_tpl_vars['defaultDateFrom']; ?>
">
<?php echo smartyTranslate(array('s' => 'To','mod' => 'dejala'), $this);?>
: <input type="text" name="datepickerTo" id="datepickerTo" value="<?php echo $this->_tpl_vars['defaultDateTo']; ?>
">

					<input type="submit" name="submitDatePicker" value="<?php echo smartyTranslate(array('s' => 'Ok','mod' => 'dejala'), $this);?>
" class="button" />
			</div>
				</form>
			</fieldset>
			