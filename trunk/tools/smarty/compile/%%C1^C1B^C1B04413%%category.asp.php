<?php /* Smarty version 2.6.20, created on 2010-06-08 13:14:06
         compiled from D:%5CHTDOCS%5Cpresta-tpl%5CGUI%5Ccategory.asp */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'D:\\HTDOCS\\presta-tpl\\GUI\\category.asp', 20, false),array('modifier', 'intval', 'D:\\HTDOCS\\presta-tpl\\GUI\\category.asp', 72, false),array('function', 'l', 'D:\\HTDOCS\\presta-tpl\\GUI\\category.asp', 72, false),)), $this); ?>
<!-- #include file="inc-global/init.php" -->

<!-- #include file="css/style.css" -->
<!-- #include file="css/global.css" -->

<!-- #include file="js/jquery.search.js" -->
<!-- #include file="js/init.js" -->
<!-- #include file="inc-global/header.html" -->
<div class="p-20">

<?php if ($this->_tpl_vars['category']->id && $this->_tpl_vars['category']->active): ?>
    <?php if ($this->_tpl_vars['scenes']): ?>
        <!-- Scenes -->
		<!-- #include file="inc-private/category-scenes.tpl" -->
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['GUI_THEME_PATH'])."/inc-private/category-scenes.tpl", 'smarty_include_vars' => array('scenes' => $this->_tpl_vars['scenes'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 
    <?php else: ?>
        <!-- Category image | large|category-->
        <?php if ($this->_tpl_vars['category']->id_image && isset ( $this->_tpl_vars['subcategories'] )): ?>
			<img src="<?php echo $this->_tpl_vars['link']->getCatImageLink($this->_tpl_vars['category']->link_rewrite,$this->_tpl_vars['category']->id_image); ?>
"
			alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['category']->name)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
"
			title="<?php echo ((is_array($_tmp=$this->_tpl_vars['category']->name)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" id="categoryImage" />
        <?php endif; ?> 
    <?php endif; ?> 

    <?php if ($this->_tpl_vars['category']->description): ?>
    	<div class="cat_desc"><?php echo $this->_tpl_vars['category']->description; ?>
..</div>
    <?php endif; ?> 
	
	<div class="right">
			<!-- #include file="inc-private/product-sort.tpl" -->
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['GUI_THEME_PATH'])."/inc-private/product-sort.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	</div>
	<!-- #include file="inc-global/breadcrumb.html" -->
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['GUI_THEME_PATH'])."/inc-global/breadcrumb.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div class="clear"></div>

	<div class="left w-1-5">
		<div class="spacer"></div>
	<?php if (isset ( $this->_tpl_vars['subcategories'] )): ?>
	
	<!-- Subcategories -->
		<ul class="category-subcats">
			<?php $_from = $this->_tpl_vars['subcategories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['subcategory']):
?>
			<li>
			<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['link']->getCategoryLink($this->_tpl_vars['subcategory']['id_category'],$this->_tpl_vars['subcategory']['link_rewrite']))) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" class="color-pink">
			<span class="gap-r">&rsaquo;</span>
			<?php echo ((is_array($_tmp=$this->_tpl_vars['subcategory']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</a>
            </li>
			<?php endforeach; endif; unset($_from); ?>
			</ul>
	<?php endif; ?> 
	</div>

	<div class="w-4-5 left">
	
	
		
	
		<?php if ($this->_tpl_vars['products']): ?>
		
			
			
			<div class="clear"></div>			
			
			<!-- #include file="inc-private/product-list.tpl" -->
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['GUI_THEME_PATH'])."/inc-private/product-list.tpl", 'smarty_include_vars' => array('products' => $this->_tpl_vars['products'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 
			<div class="clear"></div>
			<!-- #include file="inc-private/pagination.tpl" -->
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['GUI_THEME_PATH'])."/inc-private/pagination.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 
			<div class="clear"></div>
			<span><?php echo ((is_array($_tmp=$this->_tpl_vars['nb_products'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
&nbsp; <?php if ($this->_tpl_vars['nb_products'] > 1): ?><?php echo smartyTranslate(array('s' => 'products'), $this);?>
<?php else: ?><?php echo smartyTranslate(array('s' => 'product'), $this);?>
<?php endif; ?></span>
		
		<?php elseif (! isset ( $this->_tpl_vars['subcategories'] )): ?>
			<p class="warning"><?php echo smartyTranslate(array('s' => 'There is no product in this category.'), $this);?>
</p>
		<?php endif; ?> 
	
	</div>
	<div class="clear"></div>
<?php elseif ($this->_tpl_vars['category']->id): ?>
	<p class="warning"><?php echo smartyTranslate(array('s' => 'This category is currently unavailable.'), $this);?>
</p>
<?php endif; ?>
	
</div> <!-- end of p-20 -->
<!-- #include file="inc-global/footer.html" -->