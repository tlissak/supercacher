<?php /* Smarty version 2.6.20, created on 2010-06-03 16:17:35
         compiled from D:%5CHTDOCS%5Cpresta-tpl%5Cmodules%5Cdejala/dejala_picking_timetable.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', 'D:\\HTDOCS\\presta-tpl\\modules\\dejala/dejala_picking_timetable.tpl', 1, false),)), $this); ?>
<h3><?php echo smartyTranslate(array('s' => 'Stock is open','mod' => 'dejala'), $this);?>
</h3>
<?php $_from = $this->_tpl_vars['weekdayLabels']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['weekdayLoop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['weekdayLoop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['weekday']):
        $this->_foreach['weekdayLoop']['iteration']++;
?>
	<?php $this->assign('curWeekdayIdx', ($this->_foreach['weekdayLoop']['iteration']-1)); ?>
	<div class="margin-form">
		<input type="checkbox" name="weekday_<?php echo $this->_tpl_vars['curWeekdayIdx']; ?>
" value="1" <?php if (( $this->_tpl_vars['calendar']['entries'][$this->_tpl_vars['curWeekdayIdx']] )): ?>checked="checked"<?php endif; ?>>
		<?php echo $this->_tpl_vars['weekday']; ?>
: <?php echo smartyTranslate(array('s' => 'De','mod' => 'dejala'), $this);?>
 <select name="start_hour_<?php echo $this->_tpl_vars['curWeekdayIdx']; ?>
" value="<?php echo $this->_tpl_vars['deliveryHourValues'][$this->_tpl_vars['curIdxhour']]; ?>
">
		<?php if (( $this->_tpl_vars['calendar']['entries'][$this->_tpl_vars['curWeekdayIdx']] )): ?>
			<?php $this->assign('start_hour', $this->_tpl_vars['calendar']['entries'][$this->_tpl_vars['curWeekdayIdx']]['start_hour']); ?>
		<?php else: ?>
			<?php $this->assign('start_hour', 9); ?>
		<?php endif; ?>	
		<?php unset($this->_sections['starthour']);
$this->_sections['starthour']['name'] = 'starthour';
$this->_sections['starthour']['start'] = (int)0;
$this->_sections['starthour']['loop'] = is_array($_loop=24) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['starthour']['step'] = ((int)1) == 0 ? 1 : (int)1;
$this->_sections['starthour']['show'] = true;
$this->_sections['starthour']['max'] = $this->_sections['starthour']['loop'];
if ($this->_sections['starthour']['start'] < 0)
    $this->_sections['starthour']['start'] = max($this->_sections['starthour']['step'] > 0 ? 0 : -1, $this->_sections['starthour']['loop'] + $this->_sections['starthour']['start']);
else
    $this->_sections['starthour']['start'] = min($this->_sections['starthour']['start'], $this->_sections['starthour']['step'] > 0 ? $this->_sections['starthour']['loop'] : $this->_sections['starthour']['loop']-1);
if ($this->_sections['starthour']['show']) {
    $this->_sections['starthour']['total'] = min(ceil(($this->_sections['starthour']['step'] > 0 ? $this->_sections['starthour']['loop'] - $this->_sections['starthour']['start'] : $this->_sections['starthour']['start']+1)/abs($this->_sections['starthour']['step'])), $this->_sections['starthour']['max']);
    if ($this->_sections['starthour']['total'] == 0)
        $this->_sections['starthour']['show'] = false;
} else
    $this->_sections['starthour']['total'] = 0;
if ($this->_sections['starthour']['show']):

            for ($this->_sections['starthour']['index'] = $this->_sections['starthour']['start'], $this->_sections['starthour']['iteration'] = 1;
                 $this->_sections['starthour']['iteration'] <= $this->_sections['starthour']['total'];
                 $this->_sections['starthour']['index'] += $this->_sections['starthour']['step'], $this->_sections['starthour']['iteration']++):
$this->_sections['starthour']['rownum'] = $this->_sections['starthour']['iteration'];
$this->_sections['starthour']['index_prev'] = $this->_sections['starthour']['index'] - $this->_sections['starthour']['step'];
$this->_sections['starthour']['index_next'] = $this->_sections['starthour']['index'] + $this->_sections['starthour']['step'];
$this->_sections['starthour']['first']      = ($this->_sections['starthour']['iteration'] == 1);
$this->_sections['starthour']['last']       = ($this->_sections['starthour']['iteration'] == $this->_sections['starthour']['total']);
?>
			<option value="<?php echo $this->_sections['starthour']['index']; ?>
" <?php if ($this->_tpl_vars['start_hour'] == $this->_sections['starthour']['index']): ?>selected="selected"<?php endif; ?>><?php echo $this->_sections['starthour']['index']; ?>
 H</option>
		<?php endfor; endif; ?>
		</select>
		<?php echo smartyTranslate(array('s' => 'A','mod' => 'dejala'), $this);?>

		<select name="stop_hour_<?php echo $this->_tpl_vars['curWeekdayIdx']; ?>
" value="<?php echo $this->_tpl_vars['deliveryHourValues'][$this->_tpl_vars['curIdxhour']]; ?>
">
		<?php if (( $this->_tpl_vars['calendar']['entries'][$this->_tpl_vars['curWeekdayIdx']] )): ?>
			<?php $this->assign('stop_hour', $this->_tpl_vars['calendar']['entries'][$this->_tpl_vars['curWeekdayIdx']]['stop_hour']); ?>
		<?php else: ?>
			<?php $this->assign('stop_hour', 18); ?>
		<?php endif; ?>	
		<?php unset($this->_sections['stophour']);
$this->_sections['stophour']['name'] = 'stophour';
$this->_sections['stophour']['start'] = (int)0;
$this->_sections['stophour']['loop'] = is_array($_loop=25) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['stophour']['step'] = ((int)1) == 0 ? 1 : (int)1;
$this->_sections['stophour']['show'] = true;
$this->_sections['stophour']['max'] = $this->_sections['stophour']['loop'];
if ($this->_sections['stophour']['start'] < 0)
    $this->_sections['stophour']['start'] = max($this->_sections['stophour']['step'] > 0 ? 0 : -1, $this->_sections['stophour']['loop'] + $this->_sections['stophour']['start']);
else
    $this->_sections['stophour']['start'] = min($this->_sections['stophour']['start'], $this->_sections['stophour']['step'] > 0 ? $this->_sections['stophour']['loop'] : $this->_sections['stophour']['loop']-1);
if ($this->_sections['stophour']['show']) {
    $this->_sections['stophour']['total'] = min(ceil(($this->_sections['stophour']['step'] > 0 ? $this->_sections['stophour']['loop'] - $this->_sections['stophour']['start'] : $this->_sections['stophour']['start']+1)/abs($this->_sections['stophour']['step'])), $this->_sections['stophour']['max']);
    if ($this->_sections['stophour']['total'] == 0)
        $this->_sections['stophour']['show'] = false;
} else
    $this->_sections['stophour']['total'] = 0;
if ($this->_sections['stophour']['show']):

            for ($this->_sections['stophour']['index'] = $this->_sections['stophour']['start'], $this->_sections['stophour']['iteration'] = 1;
                 $this->_sections['stophour']['iteration'] <= $this->_sections['stophour']['total'];
                 $this->_sections['stophour']['index'] += $this->_sections['stophour']['step'], $this->_sections['stophour']['iteration']++):
$this->_sections['stophour']['rownum'] = $this->_sections['stophour']['iteration'];
$this->_sections['stophour']['index_prev'] = $this->_sections['stophour']['index'] - $this->_sections['stophour']['step'];
$this->_sections['stophour']['index_next'] = $this->_sections['stophour']['index'] + $this->_sections['stophour']['step'];
$this->_sections['stophour']['first']      = ($this->_sections['stophour']['iteration'] == 1);
$this->_sections['stophour']['last']       = ($this->_sections['stophour']['iteration'] == $this->_sections['stophour']['total']);
?>
			<option value="<?php echo $this->_sections['stophour']['index']; ?>
" <?php if ($this->_tpl_vars['stop_hour'] == $this->_sections['stophour']['index']): ?>selected="selected"<?php endif; ?>><?php echo $this->_sections['stophour']['index']; ?>
 H</option>
		<?php endfor; endif; ?>
		</select>

</div>

<?php endforeach; endif; unset($_from); ?>