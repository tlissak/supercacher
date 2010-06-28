<?php /* Smarty version 2.6.20, created on 2010-06-27 21:28:03
         compiled from ../../../GUI/product.asp */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', '../../../GUI/product.asp', 27, false),)), $this); ?>
<!-- #include file="inc-global/init.php" -->

<!-- #include file="css/style.css" -->
<!-- #include file="css/global.css" -->

<!-- #include file="js/jquery.search.js" -->
<!-- #include file="js/init.js" -->
<!-- #include file="inc-global/header.html" -->


<div class="p-20">


<!-- <?php if (! $this->_tpl_vars['content_only']): ?> -->

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['GUI_THEME_PATH'])."/inc-private/product_js.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<!-- #include file="inc-private/product_js.tpl" -->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['GUI_THEME_PATH'])."/inc-global/breadcrumb.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<!-- #include file="inc-global/breadcrumb.html" -->
<div class="clear"></div>

<!-- <?php endif; ?> -->
<!-- RIGHT -->
	<div class="w-2-5 left">
	<!--<?php if ($this->_tpl_vars['have_image']): ?> -->
		<img src="<?php echo $this->_tpl_vars['link']->getImageLink($this->_tpl_vars['product']->link_rewrite,$this->_tpl_vars['cover']['id_image'],'large'); ?>
"
		title="<?php echo ((is_array($_tmp=$this->_tpl_vars['product']->name)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
"	alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['product']->name)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" id="bigpic" /> 
	<!--<?php else: ?> --><img	src="<?php echo $this->_tpl_vars['img_prod_dir']; ?>
<?php echo $this->_tpl_vars['lang_iso']; ?>
-default-large.jpg" alt=""	title="<?php echo ((is_array($_tmp=$this->_tpl_vars['product']->name)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" /> 
	<!--<?php endif; ?> -->
    <!--
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['GUI_THEME_PATH'])."/inc-private/product-thumb.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    -->
	<!-- #include file="inc-private/product-thumb.tpl" -->
	<div class="txt-center">
	<div class="clear s-spacer"></div>
	
	<img src="GUI/images/discration.png" /> 
	<div class="clear s-spacer"></div>
	 <a href="<?php echo $this->_tpl_vars['dir_path']; ?>
cms.php?id_cms=1"><img src="GUI/images/shipping.png" /></a>
	</div>
	</div>
<!-- / RIGHT -->


<!-- LEFT -->
	<div class="w-3-5 left">
	<div class="p-15">
	
	<div style="min-height:460px;">
	<div class="s-spacer"></div>
	<h3><?php echo ((is_array($_tmp=$this->_tpl_vars['product']->name)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</h3>
	
	
	
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['GUI_THEME_PATH'])."/inc-private/product-add-to-cart.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<!-- #include file="inc-private/product-add-to-cart.tpl" -->
	<div class="spacer"></div>
	
	
	<!-- <?php if ($this->_tpl_vars['confirmation']): ?>--><p class="confirmation"><?php echo $this->_tpl_vars['confirmation']; ?>
</p><!--<?php endif; ?> -->   
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['GUI_THEME_PATH'])."/inc-private/product-packcont.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<!-- #include file="inc-private/product-packcont.tpl" -->
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['GUI_THEME_PATH'])."/inc-private/product-color.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<!-- #include file="inc-private/product-color.tpl" -->
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['GUI_THEME_PATH'])."/inc-private/product-discount.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<!-- #include file="inc-private/product-discount.tpl" -->
	
	
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['GUI_THEME_PATH'])."/inc-private/product-desc.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>	
	<!-- #include file="inc-private/product-desc.tpl" -->
	
	<div class="clear"></div>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['GUI_THEME_PATH'])."/inc-private/product-custom.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<!-- #include file="inc-private/product-custom.tpl" -->
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['GUI_THEME_PATH'])."/inc-private/product-pack.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<!-- #include file="inc-private/product-pack.tpl" -->
	
	<div class="clear"></div>
	<?php echo $this->_tpl_vars['HOOK_PRODUCT_FOOTER']; ?>
 
	<!--<?php if ($this->_tpl_vars['HOOK_EXTRA_RIGHT']): ?>--><?php echo $this->_tpl_vars['HOOK_EXTRA_RIGHT']; ?>
<!--<?php endif; ?> -->
	
	<!--<?php if ($this->_tpl_vars['product']->description || $this->_tpl_vars['features'] || $this->_tpl_vars['accessories'] || $this->_tpl_vars['HOOK_PRODUCT_TAB'] || $this->_tpl_vars['attachments']): ?>-->
	<?php echo $this->_tpl_vars['HOOK_PRODUCT_TAB']; ?>
 <?php echo $this->_tpl_vars['HOOK_PRODUCT_TAB_CONTENT']; ?>

	<!--<?php endif; ?>-->
	<!--<?php if ($this->_tpl_vars['HOOK_PRODUCT_ACTIONS']): ?>--> <?php echo $this->_tpl_vars['HOOK_PRODUCT_ACTIONS']; ?>
 <!--<?php endif; ?>-->
	
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['GUI_THEME_PATH'])."/inc-private/product-accessories.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>	
	<!-- #include file="inc-private/product-accessories.tpl" -->
	
	
	</div>
	
	</div>
	</div>
<!-- / LEFT -->

<div class="clear"></div>


</div>


<!-- #include file="inc-global/footer.html" -->