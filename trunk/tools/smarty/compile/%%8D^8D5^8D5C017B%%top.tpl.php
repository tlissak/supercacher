<?php /* Smarty version 2.6.20, created on 2010-06-07 15:26:49
         compiled from D:%5CHTDOCS%5Cpresta-tpl%5Cmodules%5Cadminmodal/top.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'D:\\HTDOCS\\presta-tpl\\modules\\adminmodal/top.tpl', 3, false),array('function', 'l', 'D:\\HTDOCS\\presta-tpl\\modules\\adminmodal/top.tpl', 11, false),)), $this); ?>
<div id="header" class="wrapper">
	<a href="<?php echo $this->_tpl_vars['base_dir']; ?>
"
	title="<?php echo ((is_array($_tmp=$this->_tpl_vars['shop_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
"><img
	src="<?php echo $this->_tpl_vars['base_dir']; ?>
GUI/images/logo.png" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['shop_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
"
	id="logo"  /></a>
	<div id="top-cart" >
    	<div id="top-cart-bag">
		<img src="<?php echo $this->_tpl_vars['base_dir']; ?>
GUI/images/ico-bag.png" width="28" height="28" alt="cart"/>
		</div>
		<div id="top-cart-txt"><a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
order.php"
	title="<?php echo smartyTranslate(array('s' => 'Your Shopping Cart','mod' => 'blockuserinfo'), $this);?>
"><?php echo smartyTranslate(array('s' => 'Cart:'), $this);?>

(<?php echo $this->_tpl_vars['cart_qties']; ?>
)</a></div>
	</div>
	<div id="top-links">
		<ul>
			<li><a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
modules/blockwishlist/mywishlist.php"  title="<?php echo smartyTranslate(array('s' => 'My wishlists','mod' => 'blockwishlist'), $this);?>
"><img src="<?php echo $this->_tpl_vars['base_dir']; ?>
GUI/images/ico-favorite.png" alt="<?php echo smartyTranslate(array('s' => 'My wishlists','mod' => 'blockwishlist'), $this);?>
" /><?php echo smartyTranslate(array('s' => 'My wishlists','mod' => 'blockwishlist'), $this);?>
</a></li>
			<li><a href="<?php echo $this->_tpl_vars['base_dir']; ?>
my-account.php" title="<?php echo smartyTranslate(array('s' => 'My account'), $this);?>
"><img src="<?php echo $this->_tpl_vars['base_dir']; ?>
GUI/images/ico-account.png" /> <?php echo smartyTranslate(array('s' => 'My account'), $this);?>
</a></li>
			<li><a href="<?php echo $this->_tpl_vars['base_dir']; ?>
contact-form.php"><img src="<?php echo $this->_tpl_vars['base_dir']; ?>
GUI/images/ico-contact.png" />Contact</a></li>
		</ul>
	</div>
	<div class="clear"></div>
	<div id="menu">
		<div class="menu-l"></div>
		<div class="menu-r"></div>
		<ul>
		<?php $_from = $this->_tpl_vars['gsubcategories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['gcat']):
?>
		<li>
		 	<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['link']->getCategoryLink($this->_tpl_vars['gcat']['id_category'],$this->_tpl_vars['gcat']['link_rewrite']))) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['gcat']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['gcat']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</a> 
	</li>
<?php endforeach; endif; unset($_from); ?>
	
			<li class="search">
				<form action="<?php echo $this->_tpl_vars['base_dir']; ?>
search.php" method="post"><input type="text" class="search-ipt"/><input type="submit" class="search-submit" value="  GO" /></form>
			</li>
		</ul>
		
	</div>
</div>