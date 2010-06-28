<?php /* Smarty version 2.6.20, created on 2010-06-18 12:00:29
         compiled from ../../../GUI/contact-form.asp */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', '../../../GUI/contact-form.asp', 1, false),array('modifier', 'escape', '../../../GUI/contact-form.asp', 38, false),array('modifier', 'intval', '../../../GUI/contact-form.asp', 45, false),array('modifier', 'stripslashes', '../../../GUI/contact-form.asp', 58, false),)), $this); ?>
<?php ob_start(); ?><?php echo smartyTranslate(array('s' => 'Contact'), $this);?>
<?php $this->_smarty_vars['capture']['path'] = ob_get_contents(); ob_end_clean(); ?> 



<!-- #include file="inc-global/init.php" -->

<!-- #include file="css/style.css" -->
<!-- #include file="css/global.css" -->

<!-- #include file="js/jquery.search.js" -->
<!-- #include file="js/init.js" -->
<!-- #include file="inc-global/header.html" -->



<div class="p-20">

	<!-- #include file="inc-global/breadcrumb.html" -->
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['GUI_THEME_PATH'])."/inc-global/breadcrumb.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	
	
	
<div class="clear"></div>

<div class="w-1-2 left">
	<div class="p-20">
	<h2><?php echo smartyTranslate(array('s' => 'Contact us'), $this);?>
</h2>
<?php if (isset ( $this->_tpl_vars['confirmation'] )): ?>
<p><?php echo smartyTranslate(array('s' => 'Your message has been successfully sent to our team.'), $this);?>
</p>
<ul class="footer_links">
	<li><a href="<?php echo $this->_tpl_vars['base_dir']; ?>
"><img class="icon" alt=""
		src="<?php echo $this->_tpl_vars['img_dir']; ?>
icon/home.gif" /></a><a href="<?php echo $this->_tpl_vars['base_dir']; ?>
"><?php echo smartyTranslate(array('s' => 'Home'), $this);?>
</a></li>
</ul>
<?php else: ?>
<p class="bold"><?php echo smartyTranslate(array('s' => 'For questions about an order or for information
about our products'), $this);?>
.</p>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['GUI_THEME_PATH'])."/inc-global/errors.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<form action="<?php echo ((is_array($_tmp=$this->_tpl_vars['request_uri'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" method="post" class="form-label">
<h3><?php echo smartyTranslate(array('s' => 'Send a message'), $this);?>
</h3>
<p class="select"><label for="id_contact"><?php echo smartyTranslate(array('s' => 'Subject'), $this);?>
</label> <select class="ipt"
	id="id_contact" name="id_contact"
	onchange="showElemFromSelect('id_contact', 'desc_contact')">
	<option value="0"><?php echo smartyTranslate(array('s' => '-- Choose --'), $this);?>
</option>
	<?php $_from = $this->_tpl_vars['contacts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['contact']):
?>
	<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['contact']['id_contact'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
" <?php if (isset ( $_POST['id_contact'] ) && $_POST['id_contact'] == $this->_tpl_vars['contact']['id_contact']): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['contact']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</option>
	<?php endforeach; endif; unset($_from); ?>
</select></p>
<p id="desc_contact0" class="desc_contact">&nbsp;</p>
<?php $_from = $this->_tpl_vars['contacts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['contact']):
?>
<p id="desc_contact<?php echo ((is_array($_tmp=$this->_tpl_vars['contact']['id_contact'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
" class="desc_contact"
	style="display: none;"><label>&nbsp;</label><?php echo ((is_array($_tmp=$this->_tpl_vars['contact']['description'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</p>
<?php endforeach; endif; unset($_from); ?>
<p class="text"><label for="email"><?php echo smartyTranslate(array('s' => 'E-mail address'), $this);?>
</label> <input
	type="text" id="email" name="from"  class="ipt" value="<?php echo $this->_tpl_vars['email']; ?>
" /></p>
<p class="textarea"><label for="message"><?php echo smartyTranslate(array('s' => 'Message'), $this);?>
</label> <textarea
	id="message" name="message" rows="7" cols="35"  class="ipt"><?php if (isset ( $_POST['message'] )): ?><?php echo ((is_array($_tmp=((is_array($_tmp=$_POST['message'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')))) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
<?php endif; ?></textarea>
</p>
<span class="btn"><span><input type="submit" name="submitMessage" id="submitMessage" value="<?php echo smartyTranslate(array('s' => 'Send'), $this);?>
"  /></span></span>
</form>
<?php endif; ?>
	</div>
</div>
<div class="w-1-2 right">
	<div class="p-20">
	<p><strong>Phone:</strong><br />
		(786) 291-4817</p>
	<p><strong>Headquarter Address:</strong><br />
		Injoyme LLC, 14 NE, 1st Ave. Suite 229 Miami, Fl. 33132</p>
	<p><strong>Hours of operation:</strong><br />
		9AM-6PM EST Monday-Thursday<br />
		9AM-4PM EST Friday<br />
		9AM-9PM EST Sunday</p>
	<p><strong>E-Mail : </strong><a href="mailto:info@injoyme.com">info@injoyme.com</a></p>
	<p>In order to assist you in tracking your order or making a change to it, please include your order number, your name and telephone number, provide us with as much information as possible to help facilitate your request. We will try to answer your inquiry, order status, or questions before the end of the business days, or within 24 hours of the following business day.</p>
	<p><strong>International operations:</strong><br />
		<strong>Bogota, Colombia:</strong> Calle 119a N. 12-31 Ofc. 305. Bogota, Colombia.<br />
		<strong>Paris, France:</strong> 14-16 Rue Moliere. 92400 Courbevoie, France. <br />
		Tel: +33(1) 47 88 86 30 </p>
	</div>
</div>

<div class="clear"></div>
<!-- end of p-20 -->
</div>
<!-- #include file="inc-global/footer.html" -->