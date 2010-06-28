<?php /* Smarty version 2.6.20, created on 2010-06-27 21:28:03
         compiled from ../../../GUI//modules/blockwishlist/blockwishlist-extra.asp */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'intval', '../../../GUI//modules/blockwishlist/blockwishlist-extra.asp', 1, false),array('function', 'l', '../../../GUI//modules/blockwishlist/blockwishlist-extra.asp', 1, false),)), $this); ?>
<span class="btn"><span><a href="javascript:;" class="button" onclick="javascript:WishlistCart('wishlist_block_list', 'add', '<?php echo ((is_array($_tmp=$this->_tpl_vars['id_product'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
', $('#idCombination').val(), document.getElementById('quantity_wanted').value);"><?php echo smartyTranslate(array('s' => 'Add to my wishlist','mod' => 'blockwishlist'), $this);?>
</a></span></span>