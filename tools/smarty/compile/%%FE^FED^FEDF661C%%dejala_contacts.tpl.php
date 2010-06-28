<?php /* Smarty version 2.6.20, created on 2010-06-03 16:17:25
         compiled from D:%5CHTDOCS%5Cpresta-tpl%5Cmodules%5Cdejala/dejala_contacts.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', 'D:\\HTDOCS\\presta-tpl\\modules\\dejala/dejala_contacts.tpl', 5, false),)), $this); ?>
<form action="<?php echo $this->_tpl_vars['formAction']; ?>
" method="post">
	<div style="float:left">
		<input type="hidden" name="method" value="contact">
		<fieldset style="width:250px;">
				<legend><img src="../img/t/AdminCustomers.gif" /><?php echo smartyTranslate(array('s' => 'Responsable boutique (signataire)','mod' => 'dejala'), $this);?>
</legend>
					<p><?php echo smartyTranslate(array('s' => 'Name:','mod' => 'dejala'), $this);?>
 <input type="text" name="contact_owner_name" id="contact_owner_name" value="<?php echo $this->_tpl_vars['contact_owner_name']; ?>
"></p>
					<p><?php echo smartyTranslate(array('s' => 'Firstname:','mod' => 'dejala'), $this);?>
 <input type="text" name="contact_owner_firstname" id="contact_owner_firstname" value="<?php echo $this->_tpl_vars['contact_owner_firstname']; ?>
"></p>
					<p><?php echo smartyTranslate(array('s' => 'Phone:','mod' => 'dejala'), $this);?>
 <input type="text" name="contact_owner_phone" id="contact_owner_phone" value="<?php echo $this->_tpl_vars['contact_owner_phone']; ?>
"></p>
					<p><?php echo smartyTranslate(array('s' => 'Cellphone:','mod' => 'dejala'), $this);?>
 <input type="text" name="contact_owner_cellphone" id="contact_owner_cellphone" value="<?php echo $this->_tpl_vars['contact_owner_cellphone']; ?>
"></p>
					<p><?php echo smartyTranslate(array('s' => 'E-Mail:','mod' => 'dejala'), $this);?>
 <input type="text" name="contact_owner_email" id="contact_owner_email" value="<?php echo $this->_tpl_vars['contact_owner_email']; ?>
"></p>
		</fieldset>

		<fieldset class="clear space" style="width:250px;">
			<legend><img src="../img/t/AdminCustomers.gif" /><?php echo smartyTranslate(array('s' => 'Contact logistique (stock)','mod' => 'dejala'), $this);?>
</legend>
				<p><?php echo smartyTranslate(array('s' => 'Name:','mod' => 'dejala'), $this);?>
 <input type="text" name="contact_stock_name" id="contact_stock_name" value="<?php echo $this->_tpl_vars['contact_stock_name']; ?>
"></p>
				<p><?php echo smartyTranslate(array('s' => 'Firstname:','mod' => 'dejala'), $this);?>
 <input type="text" name="contact_stock_firstname" id="contact_stock_firstname" value="<?php echo $this->_tpl_vars['contact_stock_firstname']; ?>
"></p>
				<p><?php echo smartyTranslate(array('s' => 'Phone:','mod' => 'dejala'), $this);?>
 <input type="text" name="contact_stock_phone" id="contact_stock_phone" value="<?php echo $this->_tpl_vars['contact_stock_phone']; ?>
"></p>
				<p><?php echo smartyTranslate(array('s' => 'Cellphone:','mod' => 'dejala'), $this);?>
 <input type="text" name="contact_stock_cellphone" id="contact_stock_cellphone" value="<?php echo $this->_tpl_vars['contact_stock_cellphone']; ?>
"></p>
				<p><?php echo smartyTranslate(array('s' => 'E-Mail:','mod' => 'dejala'), $this);?>
 <input type="text" name="contact_stock_email" id="contact_stock_email" value="<?php echo $this->_tpl_vars['contact_stock_email']; ?>
"></p>
		</fieldset>
</div>
<div style="float:left; margin-left:5px;">
		<fieldset style="width:250px;">
			<legend><img src="../img/t/AdminCustomers.gif" /><?php echo smartyTranslate(array('s' => 'Contact administratif','mod' => 'dejala'), $this);?>
</legend>
				<p><?php echo smartyTranslate(array('s' => 'Name:','mod' => 'dejala'), $this);?>
 <input type="text" name="contact_administrative_name" id="contact_administrative_name" value="<?php echo $this->_tpl_vars['contact_administrative_name']; ?>
"></p>
				<p><?php echo smartyTranslate(array('s' => 'Firstname:','mod' => 'dejala'), $this);?>
 <input type="text" name="contact_administrative_firstname" id="contact_administrative_firstname" value="<?php echo $this->_tpl_vars['contact_administrative_firstname']; ?>
"></p>
				<p><?php echo smartyTranslate(array('s' => 'Phone:','mod' => 'dejala'), $this);?>
 <input type="text" name="contact_administrative_phone" id="contact_administrative_phone" value="<?php echo $this->_tpl_vars['contact_administrative_phone']; ?>
"></p>
				<p><?php echo smartyTranslate(array('s' => 'Cellphone:','mod' => 'dejala'), $this);?>
 <input type="text" name="contact_administrative_cellphone" id="contact_administrative_cellphone" value="<?php echo $this->_tpl_vars['contact_administrative_cellphone']; ?>
"></p>
				<p><?php echo smartyTranslate(array('s' => 'E-Mail:','mod' => 'dejala'), $this);?>
 <input type="text" name="contact_administrative_email" id="contact_administrative_email" value="<?php echo $this->_tpl_vars['contact_administrative_email']; ?>
"></p>
		</fieldset>

		<fieldset class="clear space" style="width:250px">
			<legend><img src="../img/t/AdminCustomers.gif" /><?php echo smartyTranslate(array('s' => 'Contact logistique (web)','mod' => 'dejala'), $this);?>
</legend>
				<p><?php echo smartyTranslate(array('s' => 'Name:','mod' => 'dejala'), $this);?>
 <input type="text" name="contact_web_name" id="contact_web_name" value="<?php echo $this->_tpl_vars['contact_web_name']; ?>
"></p>
				<p><?php echo smartyTranslate(array('s' => 'Firstname:','mod' => 'dejala'), $this);?>
 <input type="text" name="contact_web_firstname" id="contact_web_firstname" value="<?php echo $this->_tpl_vars['contact_web_firstname']; ?>
"></p>
				<p><?php echo smartyTranslate(array('s' => 'Phone:','mod' => 'dejala'), $this);?>
 <input type="text" name="contact_web_phone" id="contact_web_phone" value="<?php echo $this->_tpl_vars['contact_web_phone']; ?>
"></p>
				<p><?php echo smartyTranslate(array('s' => 'Cellphone:','mod' => 'dejala'), $this);?>
 <input type="text" name="contact_web_cellphone" id="contact_web_cellphone" value="<?php echo $this->_tpl_vars['contact_web_cellphone']; ?>
"></p>
				<p><?php echo smartyTranslate(array('s' => 'E-Mail:','mod' => 'dejala'), $this);?>
 <input type="text" name="contact_web_email" id="contact_web_email" value="<?php echo $this->_tpl_vars['contact_web_email']; ?>
"></p>
			</fieldset>
</div>
<div class="clear"></div>
<br/>
<input type="submit" value="<?php echo smartyTranslate(array('s' => 'Save','mod' => 'dejala'), $this);?>
" class="button" />

</form>
