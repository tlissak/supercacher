<?php /* Smarty version 2.6.20, created on 2010-06-03 16:19:30
         compiled from D:%5CHTDOCS%5Cpresta-tpl%5Cmodules%5Cdejala/dejala_footer.tpl */ ?>
<?php if (( $this->_tpl_vars['registered'] != 0 )): ?>
	<?php if (( $this->_tpl_vars['currentTab'] != 'home' )): ?>
		<?php $this->assign('page_include', $this->_tpl_vars['currentTab']); ?>
	<?php else: ?>
		<?php if (( $this->_tpl_vars['djl_mode'] == 'TEST' )): ?>
			<?php if (( $this->_tpl_vars['isLiveRequested'] == '1' )): ?>
				<?php $this->assign('page_include', 'home_ready'); ?>
			<?php else: ?>
				<?php $this->assign('page_include', 'home_testing'); ?>
			<?php endif; ?>		
		<?php else: ?>
			<?php $this->assign('page_include', 'home_active'); ?>
		<?php endif; ?>	
			
	<?php endif; ?>
<?php else: ?>
	<?php $this->assign('page_include', 'home_new'); ?>
<?php endif; ?>	
	
	
	<div id="adminNews">
		<iframe frameborder="no" style="margin:15px; padding: 0px; width: 900px; height: 500px;" src="http://module.pro.dejala.<?php echo $this->_tpl_vars['country']; ?>
/tabs/<?php echo $this->_tpl_vars['page_include']; ?>
.php"></iframe>
	</div>
	
</div>