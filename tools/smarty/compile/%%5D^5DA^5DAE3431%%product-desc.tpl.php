<?php /* Smarty version 2.6.20, created on 2010-06-27 21:28:04
         compiled from ../../../GUI//inc-private/product-desc.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', '../../../GUI//inc-private/product-desc.tpl', 14, false),)), $this); ?>
<?php if ($this->_tpl_vars['product']->description || $this->_tpl_vars['features'] || $this->_tpl_vars['accessories'] || $this->_tpl_vars['HOOK_PRODUCT_TAB'] || $this->_tpl_vars['attachments']): ?>

<div id="more_info_block">    

      <!-- full description --> 
    <?php if ($this->_tpl_vars['product']->description): ?> 
    	<div id="description" ><?php echo $this->_tpl_vars['product']->description; ?>
</div> 
    <?php endif; ?> 

	<!-- product's features -->
	<?php if ($this->_tpl_vars['features']): ?> 
    <div id="features">
        <?php $_from = $this->_tpl_vars['features']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['feature']):
?>
        	<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['feature']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</span> 	<?php echo ((is_array($_tmp=$this->_tpl_vars['feature']['value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</li>
        <?php endforeach; endif; unset($_from); ?>
    </div>
    <?php endif; ?> 
    
  <?php if ($this->_tpl_vars['attachments']): ?>
    <div id="attachments">
            <?php $_from = $this->_tpl_vars['attachments']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['attachment']):
?>
                <li><a	href="<?php echo $this->_tpl_vars['base_dir']; ?>
attachment.php?id_attachment=<?php echo $this->_tpl_vars['attachment']['id_attachment']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['attachment']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</a><br />
            <?php echo ((is_array($_tmp=$this->_tpl_vars['attachment']['description'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</li>
            <?php endforeach; endif; unset($_from); ?>
    </div>
	<?php endif; ?>
    
    
</div>


<?php endif; ?>