<?php /* Smarty version 2.6.20, created on 2010-06-27 21:28:04
         compiled from ../../../GUI//inc-private/product-packcont.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', '../../../GUI//inc-private/product-packcont.tpl', 1, false),array('modifier', 'escape', '../../../GUI//inc-private/product-packcont.tpl', 6, false),array('function', 'l', '../../../GUI//inc-private/product-packcont.tpl', 2, false),)), $this); ?>
<?php if (count($this->_tpl_vars['packItems']) > 0): ?>
        <h3><?php echo smartyTranslate(array('s' => 'Pack content'), $this);?>
</h3>
        <?php $_from = $this->_tpl_vars['packItems']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['packItem']):
?>
            <div class="pack_content"><?php echo $this->_tpl_vars['packItem']['pack_quantity']; ?>
 x 
            <a href="<?php echo $this->_tpl_vars['link']->getProductLink($this->_tpl_vars['packItem']['id_product'],$this->_tpl_vars['packItem']['link_rewrite'],$this->_tpl_vars['packItem']['category']); ?>
">
            <?php echo ((is_array($_tmp=$this->_tpl_vars['packItem']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</a>
            <p><?php echo $this->_tpl_vars['packItem']['description_short']; ?>
</p>
            </div>
        <?php endforeach; endif; unset($_from); ?> 
    <?php endif; ?>