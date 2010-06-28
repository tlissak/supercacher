<?php /* Smarty version 2.6.20, created on 2010-06-27 21:31:46
         compiled from ../../../GUI//inc-global/header.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', '../../../GUI//inc-global/header.html', 4, false),array('modifier', 'htmlentities', '../../../GUI//inc-global/header.html', 68, false),array('modifier', 'stripslashes', '../../../GUI//inc-global/header.html', 68, false),array('modifier', 'htmlspecialchars', '../../../GUI//inc-global/header.html', 91, false),array('modifier', 'count', '../../../GUI//inc-global/header.html', 92, false),array('function', 'l', '../../../GUI//inc-global/header.html', 69, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->_tpl_vars['lang_iso']; ?>
">
<head>
<title><?php echo ((is_array($_tmp=$this->_tpl_vars['meta_title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</title>
<!-- <?php if (! $this->_tpl_vars['content_only']): ?> -->
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
GUI/js/jquery.cycle.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['base_dir']; ?>
GUI/js/jquery.tools.js"></script>
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

<!-- <?php endif; ?> -->
</head>
<body <?php if ($this->_tpl_vars['page_name']): ?>id="<?php echo ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
"<?php endif; ?>><?php echo $this->_tpl_vars['timestamp']; ?>

<!-- <?php if (! $this->_tpl_vars['content_only']): ?> -->

<div class="wrapper top">
	
        <div class="left p-5">
            
        <a href="#"><img src="images/ico-home.png" /></a>
        <span class="gap"></span>
        09 02 04 58 67
        <span class="gap">-</span>		  
        Horaires du Lundi au vendredi de 10h a 22h
        <span class="gap">-</span> 	
        Livraison a paris uniquement 			
        </div>
        <div class="right p5">10 - TAMOUZ - 2010</div>
    
    <div class="hline m-5"></div>
    <div class="left m-10">
   <a href="<?php echo $this->_tpl_vars['base_dir']; ?>
"
	title="<?php echo ((is_array($_tmp=$this->_tpl_vars['shop_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
"><img
	src="<?php echo $this->_tpl_vars['base_dir']; ?>
GUI/images/logo.png" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['shop_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
"
	id="logo"  /></a>
    
   	</div>
    <div class="right p-20">  
    <form action="<?php echo $this->_tpl_vars['base_dir']; ?>
search.php" method="get">
    	<input type="text" class="ipt left m-1 search-ipt" size="33" name="search_query" 
        value="<?php if (isset ( $_GET['search_query'] )): ?><?php echo ((is_array($_tmp=((is_array($_tmp=$_GET['search_query'])) ? $this->_run_mod_handler('htmlentities', true, $_tmp, $this->_tpl_vars['ENT_QUOTES'], 'utf-8') : htmlentities($_tmp, $this->_tpl_vars['ENT_QUOTES'], 'utf-8')))) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
<?php endif; ?>"
      /><span class="btn m-1"><span><input type="submit" value="  <?php echo smartyTranslate(array('s' => 'Search','mod' => 'blocksearch'), $this);?>
  "  /></span></span>
        </form>
    </div>
    <div class="clear h10"></div>
</div>
<div class="wrapper">
	
    <ul class="menu-tl menu">
    	<li class="selected"><a href="#">ACCUEIL</a></li>
        <li><a href="<?php echo $this->_tpl_vars['base_dir']; ?>
contact-form.php">CONTACT</a></li>
        <li><a href="#">PROMOTIONS</a></li>
    </ul>
    <ul class="menu-tr menu">
    	<li><a href="#">LIVRAISON</a></li>
        <li><a href="<?php echo $this->_tpl_vars['base_dir']; ?>
my-account.php">MON COMPTE</a></li>
        <li><a href="<?php echo $this->_tpl_vars['base_dir']; ?>
order.php">PANIER</a></li>
    </ul>
    <div style="height:30px; background:#e5e5e5 ; border-top:#a7a7a7 2px solid; clear:both">
    	<ul class="menu-c menu">
    	
       
        <?php $_from = $this->_tpl_vars['categories_sort']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['gsubcategories'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['gsubcategories']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['gcat']):
        $this->_foreach['gsubcategories']['iteration']++;
?>
		<li><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['link']->getCategoryLink($this->_tpl_vars['gcat']['id'],$this->_tpl_vars['gcat']['link_rewrite']))) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['gcat']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['gcat']['name'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a> 
            <?php if (count($this->_tpl_vars['gcat']['children']) > 0): ?>
            	<ul>
            	<?php $_from = $this->_tpl_vars['gcat']['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['gsubcategories'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['gsubcategories']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['cnode']):
        $this->_foreach['gsubcategories']['iteration']++;
?>
            		<li><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['link']->getCategoryLink($this->_tpl_vars['cnode']['id'],$this->_tpl_vars['cnode']['link_rewrite']))) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['cnode']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['cnode']['name'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a> </li>            
            	<?php endforeach; endif; unset($_from); ?>
            	</ul>
            <?php endif; ?>
            
	</li>
<?php endforeach; endif; unset($_from); ?>
         
    </ul>
     
    </div>
    
</div>
<?php echo $this->_tpl_vars['HOOK_TOP']; ?>
<?php echo $this->_tpl_vars['HOOK_LEFT']; ?>
<?php echo $this->_tpl_vars['HOOK_RIGHT']; ?>

<!-- <?php endif; ?> -->
    

<!-- <?php if (! $this->_tpl_vars['content_only']): ?> -->
<div class="outer">
	<div id="main" class="wrapper" >
		<div class="s-spacer"></div>
<!-- <?php endif; ?> -->