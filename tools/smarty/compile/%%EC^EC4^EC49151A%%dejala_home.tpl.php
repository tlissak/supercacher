<?php /* Smarty version 2.6.20, created on 2010-06-03 16:19:30
         compiled from D:%5CHTDOCS%5Cpresta-tpl%5Cmodules%5Cdejala/dejala_home.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', 'D:\\HTDOCS\\presta-tpl\\modules\\dejala/dejala_home.tpl', 58, false),)), $this); ?>
<?php echo '
<script type="text/javascript">
<!--
function toggleVisibleUserListState(state) {
	var elt = document.getElementById(\'visible_users_list\');

	if (state == 0) {
		elt.style.setProperty(\'background-color\', \'#ECE9D8\', \'\') ;
		elt.style.setProperty(\'color\', \'#ACA899\', \'\') ;
		elt.setAttribute(\'disabled\', \'disabled\') ;
	}
	else {
		elt.style.removeProperty(\'background-color\') ;
		elt.style.removeProperty(\'color\') ;
		elt.removeAttribute(\'disabled\');
	}
}

function updateDJLVisibilityChoices() {
	for (var i=0 ; i < document.visibility_form.visibility_status.length ; i++) {
		var elt = document.visibility_form.visibility_status[i] ;
		if (elt.checked) {
			elt.parentNode.style.setProperty(\'color\', \'#993300\', \'\') ;
			elt.parentNode.style.setProperty(\'font-weight\', \'bold\', \'\') ;
		}
		else {
			elt.parentNode.style.removeProperty(\'color\') ;
			elt.parentNode.style.removeProperty(\'font-weight\') ;
		}
		if (elt.value == "visible_limited") {
			toggleVisibleUserListState(elt.checked) ;
		}
	}
}

addLoadEvent(function() {
	for (var i=0 ; i < document.visibility_form.visibility_status.length ; i++) {
		document.visibility_form.visibility_status[i].onclick = function() { updateDJLVisibilityChoices() ;} ;
	}
	updateDJLVisibilityChoices() ;
}) ;

//-->
</script>
'; ?>


	<?php if (( $this->_tpl_vars['registered'] == 0 )): ?>

		<div style="width:100%;margin:0px 10px 0px 10px">
			<div style="width:100%;background-color:red">
				<?php echo $this->_tpl_vars['errorMsg']; ?>

			</div>
			<div class="clear"></div>
			<div style="float:left;width:48%;">
				<form action="<?php echo $this->_tpl_vars['formAction']; ?>
" method="post">
					<input type="hidden" name="method" value="register">
					<fieldset >
						<legend><?php echo smartyTranslate(array('s' => 'New to Dejala.fr ?','mod' => 'dejala'), $this);?>
</legend>
						<div>
							<?php echo smartyTranslate(array('s' => 'Your shop name:','mod' => 'dejala'), $this);?>
 <input size="30" type="text" name="store_name" value="<?php echo $this->_tpl_vars['store_name']; ?>
"/>
						</div>
						<div>
							<?php echo smartyTranslate(array('s' => 'Select your country:','mod' => 'dejala'), $this);?>
 
							<select name="country">	
								<option value="fr"><?php echo smartyTranslate(array('s' => 'France','mod' => 'dejala'), $this);?>
</option>
								<option value="es"><?php echo smartyTranslate(array('s' => 'Spain','mod' => 'dejala'), $this);?>
</option>
							</select>
						</div>
						<div>
							<?php echo smartyTranslate(array('s' => 'Choose your login:','mod' => 'dejala'), $this);?>
 <input size="30" type="text" name="login" value="<?php echo $this->_tpl_vars['login']; ?>
"/>
						</div>
						<div>
							<?php echo smartyTranslate(array('s' => 'Choose your password:','mod' => 'dejala'), $this);?>
 <input size="15" type="password" name="password" value=""/>
						</div>
						<br/>
						<input type="submit" name="btnSubmit" value="<?php echo smartyTranslate(array('s' => 'Register','mod' => 'dejala'), $this);?>
" class="button" <?php echo $this->_tpl_vars['disabled']; ?>
 />
					</fieldset>
				</form>
			</div>
	
			<div style="float:left; margin-left:5px;width:47%;">
				<form action="<?php echo $this->_tpl_vars['formAction']; ?>
" method="post">
					<input type="hidden" name="method" value="signin" />
					<fieldset>
						<legend><?php echo smartyTranslate(array('s' => 'I already have an account for my shop:','mod' => 'dejala'), $this);?>
</legend>
						<div><?php echo smartyTranslate(array('s' => 'Login:','mod' => 'dejala'), $this);?>
 <input size="30" type="text" name="login" value="<?php echo $this->_tpl_vars['login']; ?>
"/></div>
						<div>
							<?php echo smartyTranslate(array('s' => 'Select your country:','mod' => 'dejala'), $this);?>
 
							<select name="country">	
								<option value="fr"><?php echo smartyTranslate(array('s' => 'France','mod' => 'dejala'), $this);?>
</option>
								<option value="es"><?php echo smartyTranslate(array('s' => 'Spain','mod' => 'dejala'), $this);?>
</option>
							</select>
						</div>
						<div><?php echo smartyTranslate(array('s' => 'Password:','mod' => 'dejala'), $this);?>
 <input size="15" type="password" name="password" value=""/></div>
						<br/>
						<input type="submit" name="btnSubmit" value="<?php echo smartyTranslate(array('s' => 'Sign-in','mod' => 'dejala'), $this);?>
" class="button" <?php echo $this->_tpl_vars['disabled']; ?>
 />
					</fieldset>
				</form>
			</div>
		</div>
		<div class="clear"></div>

		<?php else: ?>
			<fieldset>
			<div id="dejalaAutopub" style="float:right;margin:0px;margin-top:10px;">
				<iframe frameborder="no" scrolling="no" style="margin:0px; margin-top:-10px; padding: 0px; width: 310px; height: 270px;" src="http://module.pro.dejala.<?php echo $this->_tpl_vars['country']; ?>
/tabs/home_pub.php"></iframe>
			</div>
			<div style="width:65%;">
				<legend><?php echo smartyTranslate(array('s' => 'Dejala.fr','mod' => 'dejala'), $this);?>
</legend>
				<?php echo smartyTranslate(array('s' => 'As a reminder','mod' => 'dejala'), $this);?>
 :<br/>
				<?php echo smartyTranslate(array('s' => 'Your store name is','mod' => 'dejala'), $this);?>
 : <?php echo $this->_tpl_vars['store_name']; ?>
<br/>
				<?php echo smartyTranslate(array('s' => 'Your login is','mod' => 'dejala'), $this);?>
 : <?php echo $this->_tpl_vars['store_login']; ?>
<br/><br/>
				<?php echo smartyTranslate(array('s' => 'Your are running on the','mod' => 'dejala'), $this);?>
 : <?php if (( $this->_tpl_vars['djl_mode'] == 'TEST' )): ?><?php echo smartyTranslate(array('s' => 'test platform','mod' => 'dejala'), $this);?>
<?php else: ?><?php echo smartyTranslate(array('s' => 'production platform','mod' => 'dejala'), $this);?>
<?php endif; ?><br/>
								
								<?php if (( $this->_tpl_vars['djl_mode'] == 'PROD' )): ?>
					<form action="<?php echo $this->_tpl_vars['formAction']; ?>
" method="post">
						<input type="hidden" name="method" value="switchMode">
						<input type="hidden" name="mode" value="TEST">
						<input type="submit" name="btnSubmit" value="<?php echo smartyTranslate(array('s' => 'Switch to test mode','mod' => 'dejala'), $this);?>
" class="button" />
					</form>
				<?php else: ?>
					<?php if (( $this->_tpl_vars['isLiveReady'] == '1' )): ?>
						<form action="<?php echo $this->_tpl_vars['formAction']; ?>
" method="post">
							<input type="hidden" name="method" value="switchMode">
							<input type="hidden" name="mode" value="PROD">
							<input type="submit" name="btnSubmit" value="<?php echo smartyTranslate(array('s' => 'Switch to production mode','mod' => 'dejala'), $this);?>
" class="button" />
						</form>
					<?php else: ?>
						<?php if (( $this->_tpl_vars['isLiveRequested'] == '1' )): ?>
							<?php echo smartyTranslate(array('s' => 'Your request to go live is under process : Dejala.fr will contact you to finalize your registration.','mod' => 'dejala'), $this);?>

						<?php else: ?>
														<form action="<?php echo $this->_tpl_vars['formAction']; ?>
" method="post">
								<input type="hidden" name="method" value="golive">
								<input type="submit" name="btnSubmit" value="<?php echo smartyTranslate(array('s' => 'Go live : request Dejala.fr to create my account in production.','mod' => 'dejala'), $this);?>
" class="button" />
							</form>
						<?php endif; ?>
					<?php endif; ?>
				<?php endif; ?>
				
				<br/><br/>		
				<?php if (( $this->_tpl_vars['djl_mode'] == 'PROD' )): ?><?php echo smartyTranslate(array('s' => 'Your credit','mod' => 'dejala'), $this);?>
 :<?php else: ?><?php echo smartyTranslate(array('s' => 'Your virtual credit (in order to test)','mod' => 'dejala'), $this);?>
 :<?php endif; ?> <?php echo $this->_tpl_vars['account_balance']; ?>
 <?php echo smartyTranslate(array('s' => 'euros','mod' => 'dejala'), $this);?>
<br/>
				<?php if (( $this->_tpl_vars['djl_mode'] == 'PROD' )): ?><a href="http://pro.dejala.<?php echo $this->_tpl_vars['country']; ?>
" target="_blank" style="color:blue;font-weight:bold;text-decoration:underline;"><?php echo smartyTranslate(array('s' => 'Credit your account','mod' => 'dejala'), $this);?>
</a><br/><?php endif; ?>
				
				<br/><br/>
				<form action="<?php echo $this->_tpl_vars['formAction']; ?>
" method="post" name="visibility_form">
					<div>
					<input type="radio" name="visibility_status" value="invisible" <?php if (( $this->_tpl_vars['visibility_status'] == 'invisible' )): ?><?php echo "checked=\"checked\""; ?>
<?php endif; ?> /> <?php echo smartyTranslate(array('s' => 'Dejala IS NOT visible for any users','mod' => 'dejala'), $this);?>

					</div>
					<div>
					<input type="radio" name="visibility_status" value="visible" <?php if (( $this->_tpl_vars['visibility_status'] == 'visible' )): ?><?php echo "checked=\"checked\""; ?>
<?php endif; ?> /> <?php echo smartyTranslate(array('s' => 'Dejala IS visible for all users','mod' => 'dejala'), $this);?>

					</div>
					<div>
					<input type="radio" name="visibility_status" value="visible_limited" <?php if (( $this->_tpl_vars['visibility_status'] == 'visible_limited' )): ?><?php echo "checked=\"checked\""; ?>
<?php endif; ?> /> <?php echo smartyTranslate(array('s' => 'Dejala IS visible ONLY for the following users','mod' => 'dejala'), $this);?>
 :
					</div>
					<div>
					<input size="40" type="text" id="visible_users_list" name="visible_users_list" value="<?php echo $this->_tpl_vars['visible_users_list']; ?>
"/> <?php echo smartyTranslate(array('s' => '(e.g. : a@foo.com, b@bar.com)','mod' => 'dejala'), $this);?>

					</div>
					<input type="hidden" name="method" value="switchActive">
					<br />
					<input type="submit" name="btnSubmit" value="<?php echo smartyTranslate(array('s' => 'Update Dejala visibility','mod' => 'dejala'), $this);?>
" class="button" />
				</form>
			</div>
		
			
			</fieldset>
		<?php endif; ?>