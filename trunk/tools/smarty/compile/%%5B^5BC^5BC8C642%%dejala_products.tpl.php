<?php /* Smarty version 2.6.20, created on 2010-06-03 16:17:39
         compiled from D:%5CHTDOCS%5Cpresta-tpl%5Cmodules%5Cdejala/dejala_products.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', 'D:\\HTDOCS\\presta-tpl\\modules\\dejala/dejala_products.tpl', 4, false),)), $this); ?>
		<form action="<?php echo $this->_tpl_vars['formAction']; ?>
" method="post">
			<input type="hidden" name="method" value="products"/>
			<fieldset>
				<h4 class="clear"><?php echo smartyTranslate(array('s' => 'Please set you margin for deliveries','mod' => 'dejala'), $this);?>
:</h4>

				<table class="table" width="100%" >
					<tr class='center'>
						<th rowspan="2" class='center bold'><?php echo smartyTranslate(array('s' => 'Name','mod' => 'dejala'), $this);?>
</th>
						<th colspan="2" class='center bold'><?php echo smartyTranslate(array('s' => 'Buy price','mod' => 'dejala'), $this);?>
</th>
						<th rowspan="2" class='center bold'><?php echo smartyTranslate(array('s' => 'Margin TTC','mod' => 'dejala'), $this);?>
</th>						
						<th colspan="2" class='center bold'><?php echo smartyTranslate(array('s' => 'Customer price','mod' => 'dejala'), $this);?>
</th>
						<th rowspan="2" class='center bold'><?php echo smartyTranslate(array('s' => 'Description','mod' => 'dejala'), $this);?>
</th>						
					</tr>
					<tr class='bold'>
						
						<th><?php echo smartyTranslate(array('s' => 'Buy HT','mod' => 'dejala'), $this);?>
</th>
						<th><?php echo smartyTranslate(array('s' => 'Buy TTC','mod' => 'dejala'), $this);?>
</th>
						
						<th><?php echo smartyTranslate(array('s' => 'Sell HT','mod' => 'dejala'), $this);?>
</th>
						<th><?php echo smartyTranslate(array('s' => 'Sell TTC','mod' => 'dejala'), $this);?>
</th>
						
					</tr>

					<?php $_from = $this->_tpl_vars['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['productLoop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['productLoop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['product']):
        $this->_foreach['productLoop']['iteration']++;
?>
						<tr <?php if (( ($this->_foreach['dateLabelLoop']['iteration']-1) % 2 == 0 )): ?>class='alt_row'<?php endif; ?>>
							<td><?php echo $this->_tpl_vars['product']['code']; ?>
</td>
							<td><?php echo $this->_tpl_vars['product']['price_notax']; ?>
</td>
							<td><?php echo $this->_tpl_vars['product']['price']; ?>
</td>
							<td><input type="text" name="margin_<?php echo $this->_tpl_vars['product']['id']; ?>
" value="<?php if (( $this->_tpl_vars['product']['margin'] > 0 )): ?>+<?php endif; ?><?php echo $this->_tpl_vars['product']['margin']; ?>
"/></td>
							<td><?php echo $this->_tpl_vars['product']['public_price_notax']; ?>
</td>
							<td><?php echo $this->_tpl_vars['product']['public_price']; ?>
</td>
							<td><?php echo $this->_tpl_vars['product']['description']; ?>
<br/><?php echo smartyTranslate(array('s' => 'In','mod' => 'dejala'), $this);?>
 <?php echo $this->_tpl_vars['product']['timelimit']; ?>
<?php echo smartyTranslate(array('s' => 'h','mod' => 'dejala'), $this);?>
</td>
						</tr>
					<?php endforeach; endif; unset($_from); ?>
				</table>
				<br/>
				<div><input type="submit" name="btnSubmit" value="<?php echo smartyTranslate(array('s' => 'Update settings','mod' => 'dejala'), $this);?>
" class="button" /></div>
			</fieldset>
			<br/>
		</form>