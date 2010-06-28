<?php /* Smarty version 2.6.20, created on 2010-06-27 18:17:19
         compiled from ../../../GUI/category.asp */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', '../../../GUI/category.asp', 22, false),array('modifier', 'escape', '../../../GUI/category.asp', 41, false),array('modifier', 'intval', '../../../GUI/category.asp', 102, false),array('function', 'l', '../../../GUI/category.asp', 102, false),)), $this); ?>
<!-- #include file="inc-global/init.php" -->

<!-- #include file="css/style.css" -->
<!-- #include file="css/global.css" -->
<!-- #include file="css/layout.css" -->

<!-- #include file="js/jquery.search.js" -->
<!-- #include file="js/jquery.tools.js" -->
<!-- #include file="js/init.js" -->
<!-- #include file="inc-global/header.html" -->
<div class="wrapper">
<?php if ($this->_tpl_vars['category']->id && $this->_tpl_vars['category']->active): ?>
    	
	

	<div class="left wt-1-4">
    <div class="m-20">
    	<div class="hline-gray"></div>
		<div class="spacer"></div>   
        <?php $this->assign('isparents', 'no'); ?>
        <?php $_from = $this->_tpl_vars['categories_sort']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['gsubcategories'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['gsubcategories']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['gcat']):
        $this->_foreach['gsubcategories']['iteration']++;
?>
            <?php if (count($this->_tpl_vars['gcat']['children']) > 0): ?>
            	<?php $_from = $this->_tpl_vars['gcat']['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['gsubcategories'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['gsubcategories']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['cnode']):
        $this->_foreach['gsubcategories']['iteration']++;
?>
                	<?php if ($this->_tpl_vars['cnode']['id'] == $this->_tpl_vars['category']->id): ?>
                    	<?php $this->assign('subcategories', $this->_tpl_vars['gcat']['children']); ?>
                        <?php $this->assign('isparents', 'yes'); ?>
                    <?php endif; ?>
            	<?php endforeach; endif; unset($_from); ?>
            <?php endif; ?>
         <?php endforeach; endif; unset($_from); ?>         
	<?php if (isset ( $this->_tpl_vars['subcategories'] )): ?>	
	<!-- Subcategories -->
		<ul class="category-subcats">
			<?php $_from = $this->_tpl_vars['subcategories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['subcategory']):
?>
            <?php if ($this->_tpl_vars['subcategory']['id_category'] > 0): ?>
            	<?php $this->assign('id', $this->_tpl_vars['subcategory']['id_category']); ?>
            <?php else: ?>
            	<?php $this->assign('id', $this->_tpl_vars['subcategory']['id']); ?>
            <?php endif; ?>
			<li>
			<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['link']->getCategoryLink($this->_tpl_vars['id'],$this->_tpl_vars['subcategory']['link_rewrite']))) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" >
			<span class="gap-r">&rsaquo;</span>
			<?php echo ((is_array($_tmp=$this->_tpl_vars['subcategory']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</a>
            </li>
			<?php endforeach; endif; unset($_from); ?>
			</ul>
	<?php endif; ?> 
	</div>
    </div>









	<div class="left wt-2-4">
    	<div class="m-20">
        <div class="hline-red"></div>
          
		<!-- #include file="inc-global/breadcrumb.html" -->
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['GUI_THEME_PATH'])."/inc-global/breadcrumb.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>    
        
        
            <?php if ($this->_tpl_vars['isparents'] == 'no'): ?>
            <ul class="product-list">        	
                <?php $_from = $this->_tpl_vars['subcategories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['subcategory']):
?>
                <?php if ($this->_tpl_vars['k'] % 4 == 0): ?><div class="clear"></div><?php endif; ?>
                <li>
                <a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['link']->getCategoryLink($this->_tpl_vars['subcategory']['id_category'],$this->_tpl_vars['subcategory']['link_rewrite']))) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" >
                 <img src="<?php echo $this->_tpl_vars['link']->getCatImageLink($this->_tpl_vars['subcategory']['link_rewrite'],$this->_tpl_vars['subcategory']['id_category'],'medium'); ?>
" alt="<?php echo $this->_tpl_vars['gcat']['name']; ?>
"  /><br />
                <?php echo ((is_array($_tmp=$this->_tpl_vars['subcategory']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</a>
                </li>
                <?php endforeach; endif; unset($_from); ?>			
             </ul>
             <?php endif; ?>
		<?php if ($this->_tpl_vars['products']): ?>		
        
        	
            
            <div class="grad p-2 borders" >
        	 <div class="right">    	
                <!-- #include file="inc-private/product-sort.tpl" -->
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['GUI_THEME_PATH'])."/inc-private/product-sort.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	        </div> 
            <div class="left">
			<!-- #include file="inc-private/pagination.tpl" -->
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['GUI_THEME_PATH'])."/inc-private/pagination.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 
            </div>
            <div class="clear"></div>
            </div>
            			
			<div class="clear spacer"></div>						
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
	</div>
    
    
    
    
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['GUI_THEME_PATH'])."/inc-global/right.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <!-- #include file="inc-global/right.html" -->
    
    
	<div class="clear"></div>
<?php elseif ($this->_tpl_vars['category']->id): ?>
	<p class="warning"><?php echo smartyTranslate(array('s' => 'This category is currently unavailable.'), $this);?>
</p>
<?php endif; ?>
	
</div> <!-- end of p-20 -->
<!-- #include file="inc-global/footer.html" -->