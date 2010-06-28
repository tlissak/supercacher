<?php /* Smarty version 2.6.20, created on 2010-06-08 13:14:06
         compiled from D:%5CHTDOCS%5Cpresta-tpl%5CGUI%5Cinc-global%5Cheader.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'D:\\HTDOCS\\presta-tpl\\GUI\\inc-global\\header.html', 4, false),array('function', 'l', 'D:\\HTDOCS\\presta-tpl\\GUI\\inc-global\\header.html', 48, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->_tpl_vars['lang_iso']; ?>
">
<head>
<title><?php echo ((is_array($_tmp=$this->_tpl_vars['meta_title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</title>
<?php if (isset ( $this->_tpl_vars['meta_description'] ) && $this->_tpl_vars['meta_description']): ?>
<meta name="description" content="<?php echo ((is_array($_tmp=$this->_tpl_vars['meta_description'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" />
<?php endif; ?> 
<?php if (isset ( $this->_tpl_vars['meta_keywords'] ) && $this->_tpl_vars['meta_keywords']): ?>
<meta name="keywords" content="<?php echo ((is_array($_tmp=$this->_tpl_vars['meta_keywords'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" />
<?php endif; ?>
<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />
<meta name="robots" content="<?php if (isset ( $this->_tpl_vars['nobots'] )): ?>no<?php endif; ?>index,follow" />
<link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo $this->_tpl_vars['img_ps_dir']; ?>
favicon.ico" />
<link rel="shortcut icon" type="image/x-icon" 	href="<?php echo $this->_tpl_vars['img_ps_dir']; ?>
favicon.ico" />
<link href="<?php echo $this->_tpl_vars['base_dir']; ?>
GUI/css/style.css" rel="stylesheet" type="text/css"	 />
<link href="css/style.css" rel="stylesheet" type="text/css"	 />
<script type="text/javascript" src="<?php echo $this->_tpl_vars['base_dir']; ?>
GUI/js/jquery.last.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['base_dir']; ?>
GUI/js/jquery.include.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['base_dir']; ?>
GUI/js/jquery.nyroModal.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['base_dir']; ?>
GUI/js/jquery.search.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['base_dir']; ?>
GUI/js/wishlist.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['base_dir']; ?>
GUI/js/history.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['base_dir']; ?>
GUI/js/jquery.rating.pack.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['base_dir']; ?>
GUI/js/init.js"></script>
<script type="text/javascript">
	var baseDir 		= '<?php echo $this->_tpl_vars['content_dir']; ?>
';
	var baseDirSSL		= '<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
';
	var static_token 	= '<?php echo $this->_tpl_vars['static_token']; ?>
';
	var token 			= '<?php echo $this->_tpl_vars['token']; ?>
';
	var currencyDecimals		= parseFloat('<?php echo $this->_tpl_vars['currency']->decimals; ?>
') ;
	var priceDisplayPrecision 	= parseFloat('<?php echo $this->_tpl_vars['priceDisplayPrecision']; ?>
') ;
	var priceDisplayPrecision 	= priceDisplayPrecision * currencyDecimals ;
</script>
<?php echo $this->_tpl_vars['HOOK_HEADER']; ?>

</head>
<body <?php if ($this->_tpl_vars['page_name']): ?>id="<?php echo ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
"<?php endif; ?>>
<!-- <?php if (! $this->_tpl_vars['content_only']): ?> -->
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
		 	<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['link']->getCategoryLink($this->_tpl_vars['gcat']['id'],$this->_tpl_vars['gcat']['link_rewrite']))) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
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

<?php echo $this->_tpl_vars['HOOK_TOP']; ?>

<?php echo $this->_tpl_vars['HOOK_LEFT']; ?>

<?php echo $this->_tpl_vars['HOOK_RIGHT']; ?>

<!-- <?php endif; ?> -->





<div class="outer">
	<div id="main" class="wrapper" >
		<div class="s-spacer"></div>