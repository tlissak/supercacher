<?php /* Smarty version 2.6.20, created on 2010-06-09 15:00:02
         compiled from D:%5CHTDOCS%5Cpresta-tpl/themes/fennecs/./pagination.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'intval', 'D:\\HTDOCS\\presta-tpl/themes/fennecs/./pagination.tpl', 2, false),array('modifier', 'escape', 'D:\\HTDOCS\\presta-tpl/themes/fennecs/./pagination.tpl', 31, false),)), $this); ?>
<?php if (isset ( $this->_tpl_vars['p'] ) && $this->_tpl_vars['p']): ?>
	<?php if (((is_array($_tmp=$_GET['id_category'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp))): ?>
		<?php $this->assign('requestPage', $this->_tpl_vars['link']->getPaginationLink('category',$this->_tpl_vars['category'],false,false,true,false)); ?>
		<?php $this->assign('requestNb', $this->_tpl_vars['link']->getPaginationLink('category',$this->_tpl_vars['category'],true,false,false,true)); ?>
	<?php elseif (((is_array($_tmp=$_GET['id_manufacturer'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp))): ?>
		<?php $this->assign('requestPage', $this->_tpl_vars['link']->getPaginationLink('manufacturer',$this->_tpl_vars['manufacturer'],false,false,true,false)); ?>
		<?php $this->assign('requestNb', $this->_tpl_vars['link']->getPaginationLink('manufacturer',$this->_tpl_vars['manufacturer'],true,false,false,true)); ?>
	<?php elseif (((is_array($_tmp=$_GET['id_supplier'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp))): ?>
		<?php $this->assign('requestPage', $this->_tpl_vars['link']->getPaginationLink('supplier',$this->_tpl_vars['supplier'],false,false,true,false)); ?>
		<?php $this->assign('requestNb', $this->_tpl_vars['link']->getPaginationLink('supplier',$this->_tpl_vars['supplier'],true,false,false,true)); ?>
	<?php else: ?>
		<?php $this->assign('requestPage', $this->_tpl_vars['link']->getPaginationLink(false,false,false,false,true,false)); ?>
		<?php $this->assign('requestNb', $this->_tpl_vars['link']->getPaginationLink(false,false,true,false,false,true)); ?>
	<?php endif; ?>
	<!-- Pagination -->
	<div id="pagination" class="pagination">
	<?php if ($this->_tpl_vars['start'] != $this->_tpl_vars['stop']): ?>
		<ul class="pagination">
		<?php if ($this->_tpl_vars['p'] != 1): ?>
			<?php $this->assign('p_previous', $this->_tpl_vars['p']-1); ?>
			<li id="pagination_previous"><a href="<?php echo $this->_tpl_vars['link']->goPage($this->_tpl_vars['requestPage'],$this->_tpl_vars['p_previous']); ?>
">&laquo;</a></li>
		<?php else: ?>
			<li id="pagination_previous" class="disabled"><span>&laquo;</span></li>
		<?php endif; ?>
		<?php if ($this->_tpl_vars['start'] > 3): ?>
			<li><a href="<?php echo $this->_tpl_vars['link']->goPage($this->_tpl_vars['requestPage'],1); ?>
">1</a></li>
			<li class="truncate">...</li>
		<?php endif; ?>
		<?php unset($this->_sections['pagination']);
$this->_sections['pagination']['name'] = 'pagination';
$this->_sections['pagination']['start'] = (int)$this->_tpl_vars['start'];
$this->_sections['pagination']['loop'] = is_array($_loop=$this->_tpl_vars['stop']+1) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['pagination']['step'] = ((int)1) == 0 ? 1 : (int)1;
$this->_sections['pagination']['show'] = true;
$this->_sections['pagination']['max'] = $this->_sections['pagination']['loop'];
if ($this->_sections['pagination']['start'] < 0)
    $this->_sections['pagination']['start'] = max($this->_sections['pagination']['step'] > 0 ? 0 : -1, $this->_sections['pagination']['loop'] + $this->_sections['pagination']['start']);
else
    $this->_sections['pagination']['start'] = min($this->_sections['pagination']['start'], $this->_sections['pagination']['step'] > 0 ? $this->_sections['pagination']['loop'] : $this->_sections['pagination']['loop']-1);
if ($this->_sections['pagination']['show']) {
    $this->_sections['pagination']['total'] = min(ceil(($this->_sections['pagination']['step'] > 0 ? $this->_sections['pagination']['loop'] - $this->_sections['pagination']['start'] : $this->_sections['pagination']['start']+1)/abs($this->_sections['pagination']['step'])), $this->_sections['pagination']['max']);
    if ($this->_sections['pagination']['total'] == 0)
        $this->_sections['pagination']['show'] = false;
} else
    $this->_sections['pagination']['total'] = 0;
if ($this->_sections['pagination']['show']):

            for ($this->_sections['pagination']['index'] = $this->_sections['pagination']['start'], $this->_sections['pagination']['iteration'] = 1;
                 $this->_sections['pagination']['iteration'] <= $this->_sections['pagination']['total'];
                 $this->_sections['pagination']['index'] += $this->_sections['pagination']['step'], $this->_sections['pagination']['iteration']++):
$this->_sections['pagination']['rownum'] = $this->_sections['pagination']['iteration'];
$this->_sections['pagination']['index_prev'] = $this->_sections['pagination']['index'] - $this->_sections['pagination']['step'];
$this->_sections['pagination']['index_next'] = $this->_sections['pagination']['index'] + $this->_sections['pagination']['step'];
$this->_sections['pagination']['first']      = ($this->_sections['pagination']['iteration'] == 1);
$this->_sections['pagination']['last']       = ($this->_sections['pagination']['iteration'] == $this->_sections['pagination']['total']);
?>
			<?php if ($this->_tpl_vars['p'] == $this->_sections['pagination']['index']): ?>
				<li class="current"><span><?php echo ((is_array($_tmp=$this->_tpl_vars['p'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</span></li>
			<?php else: ?>
				<li><a href="<?php echo $this->_tpl_vars['link']->goPage($this->_tpl_vars['requestPage'],$this->_sections['pagination']['index']); ?>
"><?php echo ((is_array($_tmp=$this->_sections['pagination']['index'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</a></li>
			<?php endif; ?>
		<?php endfor; endif; ?>
		<?php if ($this->_tpl_vars['pages_nb'] > $this->_tpl_vars['stop']+2): ?>
			<li class="truncate">...</li>
			<li><a href="<?php echo $this->_tpl_vars['link']->goPage($this->_tpl_vars['requestPage'],$this->_tpl_vars['pages_nb']); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['pages_nb'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
</a></li>
		<?php endif; ?>
		<?php if ($this->_tpl_vars['pages_nb'] > 1 && $this->_tpl_vars['p'] != $this->_tpl_vars['pages_nb']): ?>
			<?php $this->assign('p_next', $this->_tpl_vars['p']+1); ?>
			<li id="pagination_next"><a href="<?php echo $this->_tpl_vars['link']->goPage($this->_tpl_vars['requestPage'],$this->_tpl_vars['p_next']); ?>
">&raquo;</a></li>
		<?php else: ?>
			<li id="pagination_next" class="disabled"><span>&raquo;</span></li>
		<?php endif; ?>
		</ul>
	<?php endif; ?>
	</div>
	<!-- /Pagination -->
<?php endif; ?>