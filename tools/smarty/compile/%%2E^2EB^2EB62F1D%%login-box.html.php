<?php /* Smarty version 2.6.20, created on 2010-06-27 18:17:19
         compiled from ../../../GUI//inc-global/login-box.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', '../../../GUI//inc-global/login-box.html', 5, false),)), $this); ?>
 <?php if ($this->_tpl_vars['logged']): ?>
           	
            
            <span><?php echo $this->_tpl_vars['customerName']; ?>
</span> <br />
				(<a href="<?php echo $this->_tpl_vars['base_dir']; ?>
index.php?mylogout" title="<?php echo smartyTranslate(array('s' => 'Log out'), $this);?>
"><?php echo smartyTranslate(array('s' => 'Log out'), $this);?>
</a>)
            
            	<a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
my-account.php" title="<?php echo smartyTranslate(array('s' => 'Your Account'), $this);?>
"><?php echo smartyTranslate(array('s' => 'Your Account'), $this);?>
</a>
                <a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
order.php" title="<?php echo smartyTranslate(array('s' => 'My cart'), $this);?>
"><?php echo smartyTranslate(array('s' => 'My cart'), $this);?>
</a>
            
            <?php else: ?>
            <form action="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
authentication.php" method="post">
      		 	 <h2>MON COMPTE</h2>
                 Login :<br />
                 <input type="text" class="ipt" name="email" />
                 <div class="h-10"></div>
                 Mot de passe :<br />
                 <input type="text" class="ipt" name="passwd" />
                  <div class="h-10"></div>
                  <span class="btn m-2"><span><input type="submit" value="  CONNEXION  " /></span></span>
            </form>
            
            <?php endif; ?>