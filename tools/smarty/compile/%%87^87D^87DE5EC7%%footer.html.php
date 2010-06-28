<?php /* Smarty version 2.6.20, created on 2010-06-08 13:14:06
         compiled from D:%5CHTDOCS%5Cpresta-tpl%5CGUI%5Cinc-global%5Cfooter.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'D:\\HTDOCS\\presta-tpl\\GUI\\inc-global\\footer.html', 19, false),array('modifier', 'htmlspecialchars', 'D:\\HTDOCS\\presta-tpl\\GUI\\inc-global\\footer.html', 20, false),)), $this); ?>
<?php if (! $this->_tpl_vars['content_only']): ?> <?php echo $this->_tpl_vars['HOOK_RIGHT_COLUMN']; ?>

</div><!-- wrapper -->
</div><!-- outer -->




<div class="bottom">
<div id="footer" class="wrapper">


<div class="w-1-4 left">
&copy; Copyright 2010 Titoys / Tous droits
r&eacute;serv&eacute;s</div>
<div class="w-1-2 left center txt-center" >

<?php $_from = $this->_tpl_vars['gsubcategories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['gsubcategories'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['gsubcategories']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['gcat']):
        $this->_foreach['gsubcategories']['iteration']++;
?>
<span>
 	<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['link']->getCategoryLink($this->_tpl_vars['gcat']['id_category'],$this->_tpl_vars['gcat']['link_rewrite']))) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['gcat']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
">
    <?php echo ((is_array($_tmp=$this->_tpl_vars['gcat']['name'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
  
    </a> 
	</span>
<?php endforeach; endif; unset($_from); ?>



</div>
<div class="w-1-4 right" style="text-align:right">
	Creation People and tech
</div>




<?php echo $this->_tpl_vars['HOOK_FOOTER']; ?>
</div></div>




<?php endif; ?>
</body>
</html>