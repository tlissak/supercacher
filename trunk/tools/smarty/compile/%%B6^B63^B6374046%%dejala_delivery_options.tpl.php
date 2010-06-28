<?php /* Smarty version 2.6.20, created on 2010-06-03 16:17:35
         compiled from D:%5CHTDOCS%5Cpresta-tpl%5Cmodules%5Cdejala/dejala_delivery_options.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', 'D:\\HTDOCS\\presta-tpl\\modules\\dejala/dejala_delivery_options.tpl', 5, false),)), $this); ?>
	<fieldset>
		<form action="<?php echo $this->_tpl_vars['formAction']; ?>
" method="post">
			<input type="hidden" name="method" value="delivery_options"/>

			<h3><?php echo smartyTranslate(array('s' => 'Shipping preferences','mod' => 'dejala'), $this);?>
</h3>

				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => $this->_tpl_vars['timetableTpl'], 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

				<h3><?php echo smartyTranslate(array('s' => 'Propose shipping ','mod' => 'dejala'), $this);?>
:</h3>
				<div class="margin-form">
					<select name="delivery_delay">
						<option value="0" <?php if ($this->_tpl_vars['delivery_delay'] == '0'): ?>selected="selected"<?php endif; ?>><?php echo smartyTranslate(array('s' => 'immediately','mod' => 'dejala'), $this);?>
</option>
						<option value="0.5" <?php if ($this->_tpl_vars['delivery_delay'] == "0.5"): ?>selected="selected"<?php endif; ?>><?php echo smartyTranslate(array('s' => 'half a day','mod' => 'dejala'), $this);?>
</option>
						<option value="1" <?php if ($this->_tpl_vars['delivery_delay'] == '1'): ?>selected="selected"<?php endif; ?>><?php echo smartyTranslate(array('s' => 'a day','mod' => 'dejala'), $this);?>
</option>
						<option value="2" <?php if ($this->_tpl_vars['delivery_delay'] == '2'): ?>selected="selected"<?php endif; ?>>2 <?php echo smartyTranslate(array('s' => 'days','mod' => 'dejala'), $this);?>
</option>
						<option value="3" <?php if ($this->_tpl_vars['delivery_delay'] == '3'): ?>selected="selected"<?php endif; ?>>3 <?php echo smartyTranslate(array('s' => 'days','mod' => 'dejala'), $this);?>
</option>
						<option value="4" <?php if ($this->_tpl_vars['delivery_delay'] == '4'): ?>selected="selected"<?php endif; ?>>4 <?php echo smartyTranslate(array('s' => 'days','mod' => 'dejala'), $this);?>
</option>
						<option value="5" <?php if ($this->_tpl_vars['delivery_delay'] == '5'): ?>selected="selected"<?php endif; ?>>5 <?php echo smartyTranslate(array('s' => 'days','mod' => 'dejala'), $this);?>
</option>

					</select>
					<?php echo smartyTranslate(array('s' => ' after ordering','mod' => 'dejala'), $this);?>

				</div>

				<h3><?php echo smartyTranslate(array('s' => 'Display ','mod' => 'dejala'), $this);?>
:</h3>
				<div class="margin-form">
					<select name="nb_days">
						<?php unset($this->_sections['day']);
$this->_sections['day']['name'] = 'day';
$this->_sections['day']['start'] = (int)1;
$this->_sections['day']['loop'] = is_array($_loop=15) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['day']['step'] = ((int)1) == 0 ? 1 : (int)1;
$this->_sections['day']['show'] = true;
$this->_sections['day']['max'] = $this->_sections['day']['loop'];
if ($this->_sections['day']['start'] < 0)
    $this->_sections['day']['start'] = max($this->_sections['day']['step'] > 0 ? 0 : -1, $this->_sections['day']['loop'] + $this->_sections['day']['start']);
else
    $this->_sections['day']['start'] = min($this->_sections['day']['start'], $this->_sections['day']['step'] > 0 ? $this->_sections['day']['loop'] : $this->_sections['day']['loop']-1);
if ($this->_sections['day']['show']) {
    $this->_sections['day']['total'] = min(ceil(($this->_sections['day']['step'] > 0 ? $this->_sections['day']['loop'] - $this->_sections['day']['start'] : $this->_sections['day']['start']+1)/abs($this->_sections['day']['step'])), $this->_sections['day']['max']);
    if ($this->_sections['day']['total'] == 0)
        $this->_sections['day']['show'] = false;
} else
    $this->_sections['day']['total'] = 0;
if ($this->_sections['day']['show']):

            for ($this->_sections['day']['index'] = $this->_sections['day']['start'], $this->_sections['day']['iteration'] = 1;
                 $this->_sections['day']['iteration'] <= $this->_sections['day']['total'];
                 $this->_sections['day']['index'] += $this->_sections['day']['step'], $this->_sections['day']['iteration']++):
$this->_sections['day']['rownum'] = $this->_sections['day']['iteration'];
$this->_sections['day']['index_prev'] = $this->_sections['day']['index'] - $this->_sections['day']['step'];
$this->_sections['day']['index_next'] = $this->_sections['day']['index'] + $this->_sections['day']['step'];
$this->_sections['day']['first']      = ($this->_sections['day']['iteration'] == 1);
$this->_sections['day']['last']       = ($this->_sections['day']['iteration'] == $this->_sections['day']['total']);
?>
						  <option value="<?php echo $this->_sections['day']['index']; ?>
" <?php if ($this->_tpl_vars['nb_days'] == $this->_sections['day']['index']): ?>selected="selected"<?php endif; ?>><?php echo $this->_sections['day']['index']; ?>
 <?php echo smartyTranslate(array('s' => 'dates','mod' => 'dejala'), $this);?>
</option>
						<?php endfor; endif; ?>
					</select>
					<?php echo smartyTranslate(array('s' => ' days in the timerange selection interface','mod' => 'dejala'), $this);?>

				</div>

				<label class="clear"><?php echo smartyTranslate(array('s' => 'Keep Dejala active when cart is out of stock','mod' => 'dejala'), $this);?>
:</label>
				<div class="margin-form">
					<input type="checkbox" name="delivery_partial" value="1" <?php if (( $this->_tpl_vars['delivery_partial'] )): ?>checked="checked"<?php endif; ?>>
					<?php echo smartyTranslate(array('s' => 'Enable customers to choose Dejala even if a product is out of stock (The customer will choose the date of the delivery when its order will be ready)','mod' => 'dejala'), $this);?>

				</div>

				<br/>
				<input type="submit" value="<?php echo smartyTranslate(array('s' => 'Save','mod' => 'dejala'), $this);?>
" class="button" />			
		</form>
	</fieldset>