<?php /* Smarty version 2.6.20, created on 2010-06-09 15:01:12
         compiled from D:%5CHTDOCS%5Cpresta-tpl/themes/fennecs/footer.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', 'D:\\HTDOCS\\presta-tpl/themes/fennecs/footer.tpl', 14, false),)), $this); ?>
	<?php if (! $this->_tpl_vars['content_only']): ?>
	<div id="right_column">
	  <?php echo $this->_tpl_vars['HOOK_RIGHT_COLUMN']; ?>
	 
  </div>
 </div>
</div>
<div class="devider"></div>
</div>
<!-- Footer -->
<div id="footer">
<div class="path"><?php echo $this->_tpl_vars['HOOK_FOOTER']; ?>

<div class="copyright">
    <p> 
     <a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
cms.php?id_cms=4" title=""><?php echo smartyTranslate(array('s' => 'About us'), $this);?>
</a> | 
     <a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
contact-form.php" title=""><?php echo smartyTranslate(array('s' => 'Contact'), $this);?>
</a> | 
     <a href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
sitemap.php" title=""><?php echo smartyTranslate(array('s' => 'Site map'), $this);?>
</a> | 
     <a href="<?php echo $this->_tpl_vars['base_dir']; ?>
cms.php?id_cms=1" title=""><?php echo smartyTranslate(array('s' => 'Delivery'), $this);?>
</a> | 
     <a href="<?php echo $this->_tpl_vars['base_dir']; ?>
cms.php?id_cms=2" title=""><?php echo smartyTranslate(array('s' => 'Legal Notice'), $this);?>
</a> | 
     <a href="<?php echo $this->_tpl_vars['base_dir']; ?>
cms.php?id_cms=3" title=""><?php echo smartyTranslate(array('s' => 'Terms of use'), $this);?>
</a>
    </p>
   &copy; <?php echo smartyTranslate(array('s' => 'Template'), $this);?>
 <?php echo smartyTranslate(array('s' => 'Fennecs'), $this);?>
 <?php echo smartyTranslate(array('s' => 'by'), $this);?>
 <span><a href="http://dgcraft.free.fr" target="_blank"><?php echo smartyTranslate(array('s' => '2link'), $this);?>
</a></span>
</div>  
</div>
</div>
	 <?php endif; ?>
 </body>
</html>