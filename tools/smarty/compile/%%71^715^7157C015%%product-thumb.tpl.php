<?php /* Smarty version 2.6.20, created on 2010-06-27 21:28:03
         compiled from ../../../GUI//inc-private/product-thumb.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'htmlspecialchars', '../../../GUI//inc-private/product-thumb.tpl', 10, false),)), $this); ?>
<!-- thumbnails --> 
<?php if (count ( $this->_tpl_vars['images'] ) > 0): ?>
    <div id="thumbs_list">
    <div id="thumbs_list_frame">
        <?php $_from = $this->_tpl_vars['images']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['thumbnails'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['thumbnails']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['image']):
        $this->_foreach['thumbnails']['iteration']++;
?> 
		<?php $this->assign('imageIds', ($this->_tpl_vars['product']->id)."-".($this->_tpl_vars['image']['id_image'])); ?>
        <a  href="<?php echo $this->_tpl_vars['link']->getImageLink($this->_tpl_vars['product']->link_rewrite,$this->_tpl_vars['imageIds'],'large'); ?>
"
        rel="other-views"
        class="<?php if (($this->_foreach['thumbnails']['iteration'] <= 1)): ?>shown<?php endif; ?>"
        title="<?php echo ((is_array($_tmp=$this->_tpl_vars['image']['legend'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
">
			<img id="thumb_<?php echo $this->_tpl_vars['image']['id_image']; ?>
"
            src="<?php echo $this->_tpl_vars['link']->getImageLink($this->_tpl_vars['product']->link_rewrite,$this->_tpl_vars['imageIds'],'medium'); ?>
"
            alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['image']['legend'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" 
			height="<?php echo $this->_tpl_vars['mediumSize']['height']; ?>
"
            width="<?php echo $this->_tpl_vars['mediumSize']['width']; ?>
" /> </a>
        <?php endforeach; endif; unset($_from); ?>
    </div>
    </div>
   
    <br class="clear" />
<?php endif; ?> 

<!-- / thumbnails -->