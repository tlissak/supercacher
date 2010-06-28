<?php /* Smarty version 2.6.20, created on 2010-06-27 21:31:47
         compiled from ../../../GUI//inc-global/footer.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', '../../../GUI//inc-global/footer.html', 17, false),array('modifier', 'htmlspecialchars', '../../../GUI//inc-global/footer.html', 18, false),)), $this); ?>
<?php if (! $this->_tpl_vars['content_only']): ?> <?php echo $this->_tpl_vars['HOOK_RIGHT_COLUMN']; ?>

</div><!-- wrapper -->
</div><!-- outer -->




<div class="bottom">
<div id="footer" class="wrapper">
<div class="spacer"></div>


<div class="left center txt-center" style="width:340px;" >

<?php $_from = $this->_tpl_vars['categories_sort']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['gcat']):
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
<div class="right txt-right" style="width:450px;" >
	<span><a href="<?php echo $this->_tpl_vars['base_dir']; ?>
cms.php?id_cms=4">About Us</a></span>
	<span><a href="<?php echo $this->_tpl_vars['base_dir']; ?>
cms.php?id_cms=3">Terms of use</a></span>
	<span><a href="<?php echo $this->_tpl_vars['base_dir']; ?>
cms.php?id_cms=9">Privacy policy</a></span>
	<span><a href="<?php echo $this->_tpl_vars['base_dir']; ?>
cms.php?id_cms=8">Customer Service</a></span>
	<span><a href="<?php echo $this->_tpl_vars['base_dir']; ?>
cms.php?id_cms=1">Shipping/Returns</a></span>
	<span><a href="<?php echo $this->_tpl_vars['base_dir']; ?>
cms.php?id_cms=7">F.A.Q</a></span>
	<span><a href="http://blog.injoyme.com/" target="_blank">INJOY's Blog</a></span>
	<span><a href="<?php echo $this->_tpl_vars['base_dir']; ?>
cms.php?id_cms=6">Wholesale</a></span>
	<span><a href="<?php echo $this->_tpl_vars['base_dir']; ?>
contact-form.php">Contact</a></span>
	
</div>

<div class="clear spacer"></div>

<div style="border-top:#F69 1px solid; height:10px"></div>

<div class="w-1-3 left">
&copy; Copyright 2010 Titoys / Tous droits
r&eacute;serv&eacute;s</div>

<div class="w-1-3 right txt-right" >
	Creation People and tech
</div>
<div class="clear s-spacer"></div>

<div class="txt-center font-10">
This website is in compliance with 18 U.S.C. 2257 all buyers appearing on this site have contractually represented to us that they are 18 years of age or older.</div>
<?php echo $this->_tpl_vars['HOOK_FOOTER']; ?>
</div>



</div>




<?php endif; ?>
</body>
</html>