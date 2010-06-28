<?php /* Smarty version 2.6.20, created on 2010-06-09 15:05:27
         compiled from D:%5CHTDOCS%5Cpresta-tpl/themes/minimaliste/footer.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', 'D:\\HTDOCS\\presta-tpl/themes/minimaliste/footer.tpl', 12, false),)), $this); ?>
	<?php if (! $this->_tpl_vars['content_only']): ?>
	</div>
     <!-- Right -->
	 <div id="right_column" class="column">
	  <?php echo $this->_tpl_vars['HOOK_RIGHT_COLUMN']; ?>

	 </div>
     <!-- Footer -->
	 <div id="footer"><?php echo $this->_tpl_vars['HOOK_FOOTER']; ?>
</div>
	  <div id="footercopyright">
	   <p>
	    <span>
		  &copy; <?php echo smartyTranslate(array('s' => 'Template'), $this);?>
 <?php echo smartyTranslate(array('s' => 'Minimaliste for'), $this);?>
 <a href="http://www.prestashop.com"><?php echo smartyTranslate(array('s' => 'PrestaShop'), $this);?>
 1.2</a>
          <?php echo smartyTranslate(array('s' => 'by'), $this);?>
 <a href="http://dgcraft.free.fr" target="_blank"><?php echo smartyTranslate(array('s' => 'DG.Craft'), $this);?>
</a>
	    </span>
	   </p>
      </div>
	</div>
	<?php endif; ?>
	</body>
</html>