<?php /* Smarty version 2.6.20, created on 2010-06-03 16:17:20
         compiled from D:%5CHTDOCS%5Cpresta-tpl%5Cmodules%5Cdejala/dejala_location.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', 'D:\\HTDOCS\\presta-tpl\\modules\\dejala/dejala_location.tpl', 4, false),)), $this); ?>
		<form action="<?php echo $this->_tpl_vars['formAction']; ?>
" method="post">
			<input type="hidden" name="method" value="location"/>
			<fieldset>
				<h4 class="clear"><?php echo smartyTranslate(array('s' => 'Please specify the address of your stock','mod' => 'dejala'), $this);?>
 <?php if (( $this->_tpl_vars['djl_mode'] == 'PROD' )): ?><?php echo smartyTranslate(array('s' => '(readonly)','mod' => 'dejala'), $this);?>
<?php endif; ?>: <a href="http://maps.google.com/maps?f=q&hl=fr&geocode=&q=<?php echo $this->_tpl_vars['address']; ?>
,%20<?php echo $this->_tpl_vars['zipcode']; ?>
%20<?php echo $this->_tpl_vars['city']; ?>
" target="_blank"><img src='<?php echo $this->_tpl_vars['module_dir']; ?>
google.gif'/><?php echo smartyTranslate(array('s' => 'Locate','mod' => 'dejala'), $this);?>
</a></h4>
				<label class="clear"><?php echo smartyTranslate(array('s' => 'Company','mod' => 'dejala'), $this);?>
:</label>
				<div class="margin-form"><input size="25" type="text" name="company" value="<?php echo $this->_tpl_vars['company']; ?>
" <?php echo $this->_tpl_vars['disabled']; ?>
/></div>
				<label class="clear"><?php echo smartyTranslate(array('s' => 'Address','mod' => 'dejala'), $this);?>
:</label>
				<div class="margin-form"><input type="text" name="address" value="<?php echo $this->_tpl_vars['address']; ?>
" style="width: 300px;" <?php echo $this->_tpl_vars['disabled']; ?>
/></div>
				<label class="clear"><?php echo smartyTranslate(array('s' => 'Address (2)','mod' => 'dejala'), $this);?>
:</label>
				<div class="margin-form"><input type="text" name="address2" value="<?php echo $this->_tpl_vars['address2']; ?>
" style="width: 300px;" <?php echo $this->_tpl_vars['disabled']; ?>
/></div>
				<label class="clear"><?php echo smartyTranslate(array('s' => 'Postal code / Zip code','mod' => 'dejala'), $this);?>
:</label>
				<div class="margin-form"><input size="5" type="text" name="zipcode" value="<?php echo $this->_tpl_vars['zipcode']; ?>
" <?php echo $this->_tpl_vars['disabled']; ?>
/></div>
				<label class="clear"><?php echo smartyTranslate(array('s' => 'City','mod' => 'dejala'), $this);?>
:</label>
				<div class="margin-form"><input size="22" type="text" name="city" value="<?php echo $this->_tpl_vars['city']; ?>
" <?php echo $this->_tpl_vars['disabled']; ?>
/></div>
				<label class="clear"><?php echo smartyTranslate(array('s' => 'Phone','mod' => 'dejala'), $this);?>
:</label>
				<div class="margin-form"><input size="14" type="text" name="phone" value="<?php echo $this->_tpl_vars['phone']; ?>
" <?php echo $this->_tpl_vars['disabled']; ?>
/></div>
				<label class="clear"><?php echo smartyTranslate(array('s' => 'Cellphone','mod' => 'dejala'), $this);?>
:</label>
				<div class="margin-form"><input size="14" type="text" name="cellphone" value="<?php echo $this->_tpl_vars['cellphone']; ?>
" <?php echo $this->_tpl_vars['disabled']; ?>
/></div>
				<label class="clear"><?php echo smartyTranslate(array('s' => 'Comments','mod' => 'dejala'), $this);?>
:</label>
				<div class="margin-form"><textarea rows="4" cols="45" name="comments" <?php echo $this->_tpl_vars['disabled']; ?>
><?php echo $this->_tpl_vars['comments']; ?>
</textarea></div>
				<div class="margin-form"><input type="submit" name="btnSubmit" value="<?php echo smartyTranslate(array('s' => 'Update settings','mod' => 'dejala'), $this);?>
" class="button" <?php echo $this->_tpl_vars['disabled']; ?>
/></div>
			</fieldset>
		</form>
		