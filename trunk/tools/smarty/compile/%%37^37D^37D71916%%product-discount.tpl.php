<?php /* Smarty version 2.6.20, created on 2010-06-27 21:28:04
         compiled from ../../../GUI//inc-private/product-discount.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', '../../../GUI//inc-private/product-discount.tpl', 4, false),array('function', 'convertPrice', '../../../GUI//inc-private/product-discount.tpl', 20, false),array('modifier', 'intval', '../../../GUI//inc-private/product-discount.tpl', 10, false),array('modifier', 'floatval', '../../../GUI//inc-private/product-discount.tpl', 19, false),)), $this); ?>
<?php if ($this->_tpl_vars['quantity_discounts']): ?> 
<!-- quantity discount -->
    <ul class="idTabs">
        <li><a style="cursor: pointer"><?php echo smartyTranslate(array('s' => 'Quantity discount'), $this);?>
</a></li>
    </ul>
    <div id="quantityDiscount">
    <table class="std">
        <tr>
            <?php $_from = $this->_tpl_vars['quantity_discounts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['quantity_discounts'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['quantity_discounts']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['quantity_discount']):
        $this->_foreach['quantity_discounts']['iteration']++;
?>
            <th><?php echo ((is_array($_tmp=$this->_tpl_vars['quantity_discount']['quantity'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
 
                <?php if (((is_array($_tmp=$this->_tpl_vars['quantity_discount']['quantity'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)) > 1): ?> <?php echo smartyTranslate(array('s' => 'quantities'), $this);?>
 
                <?php else: ?> <?php echo smartyTranslate(array('s' => 'quantity'), $this);?>
 
                <?php endif; ?></th>
            <?php endforeach; endif; unset($_from); ?>
        </tr>
        <tr>
            <?php $_from = $this->_tpl_vars['quantity_discounts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['quantity_discounts'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['quantity_discounts']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['quantity_discount']):
        $this->_foreach['quantity_discounts']['iteration']++;
?>
            <td>
            <?php if (((is_array($_tmp=$this->_tpl_vars['quantity_discount']['id_discount_type'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)) == 1): ?>-<?php echo ((is_array($_tmp=$this->_tpl_vars['quantity_discount']['value'])) ? $this->_run_mod_handler('floatval', true, $_tmp) : floatval($_tmp)); ?>
% 
            <?php else: ?> -<?php echo Product::convertPrice(array('price' => ((is_array($_tmp=$this->_tpl_vars['quantity_discount']['value'])) ? $this->_run_mod_handler('floatval', true, $_tmp) : floatval($_tmp))), $this);?>
 <?php endif; ?></td>
            <?php endforeach; endif; unset($_from); ?>
        </tr>
    </table>
    </div>
<?php endif; ?> 