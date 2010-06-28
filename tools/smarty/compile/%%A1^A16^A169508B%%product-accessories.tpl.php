<?php /* Smarty version 2.6.20, created on 2010-06-27 21:28:04
         compiled from ../../../GUI//inc-private/product-accessories.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', '../../../GUI//inc-private/product-accessories.tpl', 13, false),array('modifier', 'truncate', '../../../GUI//inc-private/product-accessories.tpl', 13, false),array('modifier', 'strip_tags', '../../../GUI//inc-private/product-accessories.tpl', 24, false),array('modifier', 'intval', '../../../GUI//inc-private/product-accessories.tpl', 33, false),array('function', 'l', '../../../GUI//inc-private/product-accessories.tpl', 23, false),array('function', 'displayWtPrice', '../../../GUI//inc-private/product-accessories.tpl', 26, false),)), $this); ?>
 <!-- accessories -->
    <?php if (isset ( $this->_tpl_vars['accessories'] ) && $this->_tpl_vars['accessories']): ?>    
    <div id="accessoires">
                    <ul>
                        <?php $_from = $this->_tpl_vars['accessories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['accessories_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['accessories_list']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['accessory']):
        $this->_foreach['accessories_list']['iteration']++;
?>
                        
                        <?php $this->assign('accessoryLink', $this->_tpl_vars['link']->getProductLink($this->_tpl_vars['accessory']['id_product'],$this->_tpl_vars['accessory']['link_rewrite'],$this->_tpl_vars['accessory']['category'])); ?>
                        <li	class="ajax_block_product 
                        <?php if (($this->_foreach['accessories_list']['iteration'] <= 1)): ?>first_item<?php elseif (($this->_foreach['accessories_list']['iteration'] == $this->_foreach['accessories_list']['total'])): ?>last_item<?php else: ?>item<?php endif; ?> 
                        product_accessories_description">
                        
						<h3 class="align_center">
                        <a	href="<?php echo ((is_array($_tmp=$this->_tpl_vars['accessoryLink'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['accessory']['name'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 22, '...') : smarty_modifier_truncate($_tmp, 22, '...')))) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</a></h3>
						
                        <div class="left w-1-3" >
                        <a 	href="<?php echo ((is_array($_tmp=$this->_tpl_vars['accessoryLink'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['accessory']['legend'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
"	>
                            <img src="<?php echo $this->_tpl_vars['link']->getImageLink($this->_tpl_vars['accessory']['link_rewrite'],$this->_tpl_vars['accessory']['id_image'],'medium'); ?>
" 
                            alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['accessory']['legend'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" class=" m-20 "/></a>
                       
                        </div>
                        <div class="left w-2-3" >
						
						 <a	href="<?php echo ((is_array($_tmp=$this->_tpl_vars['accessoryLink'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" title="<?php echo smartyTranslate(array('s' => 'More'), $this);?>
">
                        <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['accessory']['description_short'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('truncate', true, $_tmp, 100, '...') : smarty_modifier_truncate($_tmp, 100, '...')); ?>
</a>
						<div class="clear s-spacer"></div>
                        <span class="price bold font-14"><?php echo Product::displayWtPrice(array('p' => $this->_tpl_vars['accessory']['price']), $this);?>
</span> 
						
						<div class="clear s-spacer"></div>
						
						<span class="btn"><span><a  href="<?php echo ((is_array($_tmp=$this->_tpl_vars['accessoryLink'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" title="<?php echo smartyTranslate(array('s' => 'View'), $this);?>
">
                            <?php echo smartyTranslate(array('s' => 'View'), $this);?>
</a></span></span>
						<span class="btn"><span>
                        <a  href="<?php echo $this->_tpl_vars['base_dir']; ?>
cart.php?qty=1&amp;id_product=<?php echo ((is_array($_tmp=$this->_tpl_vars['accessory']['id_product'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
&amp;token=<?php echo $this->_tpl_vars['static_token']; ?>
&amp;add"
                            rel="ajax_id_product_<?php echo ((is_array($_tmp=$this->_tpl_vars['accessory']['id_product'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
"
                            title="<?php echo smartyTranslate(array('s' => 'Add to cart'), $this);?>
"><?php echo smartyTranslate(array('s' => 'Add to cart'), $this);?>
</a>
							</span></span>
                            </div>
                        </li>
                        <?php endforeach; endif; unset($_from); ?>
                    </ul>
            <div class="clear"></div>
    </div>
	<?php endif; ?> 