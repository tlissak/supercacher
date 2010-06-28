<?php /* Smarty version 2.6.20, created on 2010-06-27 21:28:04
         compiled from ../../../GUI//inc-private/product-color.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', '../../../GUI//inc-private/product-color.tpl', 4, false),array('modifier', 'intval', '../../../GUI//inc-private/product-color.tpl', 8, false),array('modifier', 'cat', '../../../GUI//inc-private/product-color.tpl', 9, false),)), $this); ?>
<!-- colors --> 
<?php if ($this->_tpl_vars['colors']): ?>
	<div id="color_picker">
    <p><?php echo smartyTranslate(array('s' => 'Pick a color:','js' => 1), $this);?>
</p>
    <div class="clear"></div>
    <ul id="color_to_pick_list">
	<?php $_from = $this->_tpl_vars['colors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['id_attribute'] => $this->_tpl_vars['color']):
?>
	<li><a id="color_<?php echo ((is_array($_tmp=$this->_tpl_vars['id_attribute'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
" class="color_pick"	style="background:<?php echo $this->_tpl_vars['color']['value']; ?>
"	onclick="updateColorSelect(<?php echo ((is_array($_tmp=$this->_tpl_vars['id_attribute'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
);">
    	<?php if (file_exists ( ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['col_img_dir'])) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['id_attribute']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['id_attribute'])))) ? $this->_run_mod_handler('cat', true, $_tmp, '.jpg') : smarty_modifier_cat($_tmp, '.jpg')) )): ?><img src="<?php echo $this->_tpl_vars['img_col_dir']; ?>
<?php echo $this->_tpl_vars['id_attribute']; ?>
.jpg" alt="" title="<?php echo $this->_tpl_vars['color']['name']; ?>
" /><?php endif; ?>
    </a></li>
	<?php endforeach; endif; unset($_from); ?>
</ul>
<a id="color_all" onclick="updateColorSelect(0);"><img	src="<?php echo $this->_tpl_vars['img_dir']; ?>
icon/cancel.gif" alt="" title="<?php echo $this->_tpl_vars['color']['name']; ?>
" /></a>
<div class="clear"></div>
</div>
<?php endif; ?> 
<!-- / colors -->