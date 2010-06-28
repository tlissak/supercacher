<?php /* Smarty version 2.6.20, created on 2010-06-09 14:54:24
         compiled from D:%5CHTDOCS%5Cpresta-tpl/themes/2049/header.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'D:\\HTDOCS\\presta-tpl/themes/2049/header.tpl', 4, false),)), $this); ?>
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
		<meta name="generator" content="PrestaShop" />
		<meta name="robots" content="<?php if (isset ( $this->_tpl_vars['nobots'] )): ?>no<?php endif; ?>index,follow" />
		<link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo $this->_tpl_vars['img_ps_dir']; ?>
favicon.ico" />
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo $this->_tpl_vars['img_ps_dir']; ?>
favicon.ico" />
	<link href="<?php echo $this->_tpl_vars['content_dir']; ?>
modules/categoriesbar/chromestyle.css" rel="stylesheet" type="text/css" media="<?php echo $this->_tpl_vars['media']; ?>
" />
<?php if (isset ( $this->_tpl_vars['css_files'] )): ?>
	<?php $_from = $this->_tpl_vars['css_files']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['css_uri'] => $this->_tpl_vars['media']):
?>
	<link href="<?php echo $this->_tpl_vars['css_uri']; ?>
" rel="stylesheet" type="text/css" media="<?php echo $this->_tpl_vars['media']; ?>
" />
    <?php endforeach; endif; unset($_from); ?>
<?php endif; ?>
		<script type="text/javascript" src="<?php echo $this->_tpl_vars['content_dir']; ?>
js/tools.js"></script>
		<script type="text/javascript">
			var baseDir = '<?php echo $this->_tpl_vars['content_dir']; ?>
';
			var static_token = '<?php echo $this->_tpl_vars['static_token']; ?>
';
			var token = '<?php echo $this->_tpl_vars['token']; ?>
';
			var priceDisplayPrecision = <?php echo $this->_tpl_vars['priceDisplayPrecision']*$this->_tpl_vars['currency']->decimals; ?>
;
		</script>
		<script type="text/javascript" src="<?php echo $this->_tpl_vars['content_dir']; ?>
js/jquery/jquery-1.2.6.pack.js"></script>
		<script type="text/javascript" src="<?php echo $this->_tpl_vars['content_dir']; ?>
js/jquery/jquery.easing.1.3.js"></script>
		<script type="text/javascript" src="<?php echo $this->_tpl_vars['content_dir']; ?>
js/jquery/jquery.hotkeys-0.7.8-packed.js"></script>
		<script type="text/javascript" src="<?php echo $this->_tpl_vars['content_dir']; ?>
js/jquery/jquery.scrollto.js"></script>
		<script type="text/javascript" src="<?php echo $this->_tpl_vars['content_dir']; ?>
js/jquery/jquery.serialScroll.js"></script>
		<script type="text/javascript" src="<?php echo $this->_tpl_vars['content_dir']; ?>
js/jquery/jquery.slider.js"></script>
		<script type="text/javascript" src="<?php echo $this->_tpl_vars['content_dir']; ?>
themes/2049/js/jquery.cycle.js"></script>
        <script type="text/javascript" src="<?php echo $this->_tpl_vars['content_dir']; ?>
themes/2049/js/jquery.simpletooltip-min.js"></script>
<?php if (isset ( $this->_tpl_vars['js_files'] )): ?>
	<?php $_from = $this->_tpl_vars['js_files']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['js_uri']):
?>
	<script type="text/javascript" src="<?php echo $this->_tpl_vars['js_uri']; ?>
"></script>
	<?php endforeach; endif; unset($_from); ?>
<?php endif; ?>
<?php echo '
<script type="text/javascript">
$(document).ready(function(){
  $("#banner-imgs").cycle({
    fx: \'scrollHorz\',
    speed: \'500\',
    next: \'#arrow_right\',
    prev: \'#arrow_left\',
    timeout: 8000
  });
  $(\'#subscribe_btn\').click(function () { $(\'#subscribe_box\').slideToggle(\'fast\'); });
});
</script>
'; ?>

<?php echo '
<script type="text/javascript">
		$(function(){
			$("a.tooltiplink").simpletooltip();
			$("a.clic").simpletooltip({click: true});
			$("a.delay").simpletooltip({hideDelay: 0.5});
			$("#demo_3").simpletooltip({ showEffect: "slideDown", hideEffect: "slideUp" });
			$("#demo_4").simpletooltip({ showEffect: "slideDown", hideEffect: "slideUp" });
		});
	</script>
'; ?>


		<?php echo $this->_tpl_vars['HOOK_HEADER']; ?>

	</head>	
	<body <?php if ($this->_tpl_vars['page_name']): ?>id="<?php echo ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
"<?php endif; ?>>
	<?php if (! $this->_tpl_vars['content_only']): ?>
    <div id="top">
	 <div id="header">
	  <?php echo $this->_tpl_vars['HOOK_TOP']; ?>
					
	 </div>
     <div><h1 id="logo"><a href="<?php echo $this->_tpl_vars['base_dir']; ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['shop_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
"><img src="<?php echo $this->_tpl_vars['img_ps_dir']; ?>
logo.png" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['shop_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" /></a></h1></div>
	</div>
	<div id="main_center_column">
	 <!-- Center -->
	 <div id="center_column">
	<?php endif; ?>