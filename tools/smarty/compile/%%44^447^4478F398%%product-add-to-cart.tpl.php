<?php /* Smarty version 2.6.20, created on 2010-06-27 21:28:04
         compiled from ../../../GUI//inc-private/product-add-to-cart.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', '../../../GUI//inc-private/product-add-to-cart.tpl', 1, false),array('modifier', 'escape', '../../../GUI//inc-private/product-add-to-cart.tpl', 20, false),array('modifier', 'intval', '../../../GUI//inc-private/product-add-to-cart.tpl', 48, false),array('modifier', 'floatval', '../../../GUI//inc-private/product-add-to-cart.tpl', 110, false),array('modifier', 'count', '../../../GUI//inc-private/product-add-to-cart.tpl', 113, false),array('modifier', 'cat', '../../../GUI//inc-private/product-add-to-cart.tpl', 133, false),array('function', 'l', '../../../GUI//inc-private/product-add-to-cart.tpl', 19, false),array('function', 'convertPrice', '../../../GUI//inc-private/product-add-to-cart.tpl', 78, false),)), $this); ?>
<!--<?php if (( $this->_tpl_vars['product']->reduction_price != 0 || $this->_tpl_vars['product']->reduction_percent != 0 ) && ( $this->_tpl_vars['product']->reduction_from == $this->_tpl_vars['product']->reduction_to || ( ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')) <= $this->_tpl_vars['product']->reduction_to && ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')) >= $this->_tpl_vars['product']->reduction_from ) )): ?>-->
		<?php $this->assign('product_price_lowered', true); ?>
<!--<?php endif; ?>-->
<!-- infile add to cart -->

<div class="clear"></div>

<!-- prices -->
<div class="spacer clear"></div>
<!-- / prices -->

<!--<?php if ($this->_tpl_vars['product']->reference): ?>
	<?php if (isset ( $this->_tpl_vars['groups'] )): ?>
    <?php else: ?>-->
    <div id="product_reference">
        <label 	for="product_reference"><?php echo smartyTranslate(array('s' => 'Reference :'), $this);?>
 </label>
        <span 	class="editable"><?php echo ((is_array($_tmp=$this->_tpl_vars['product']->reference)) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</span>
    </div>
	<!--<?php endif; ?>
<?php endif; ?> -->

<!-- availability -->
<!--<?php if (( $this->_tpl_vars['allow_oosp'] && $this->_tpl_vars['product']->quantity == 0 && ! $this->_tpl_vars['product']->available_later ) || ( ! $this->_tpl_vars['product']->available_now && $this->_tpl_vars['display_qties'] != 1 )): ?>
<?php else: ?> -->
<div id="availability_statut" > 
    <span 	id="availability_label"><?php echo smartyTranslate(array('s' => 'Availability:'), $this);?>
</span> 
    <span 	id="availability_value"   class="<?php if ($this->_tpl_vars['product']->quantity == 0): ?>warning-inline<?php endif; ?>"> 
    <!--<?php if ($this->_tpl_vars['product']->quantity == 0): ?>
		<?php if ($this->_tpl_vars['allow_oosp']): ?>-->
        	<?php echo $this->_tpl_vars['product']->available_later; ?>

        <!--<?php else: ?>-->
        	<?php echo smartyTranslate(array('s' => 'This product is no longer in stock'), $this);?>

        <!--<?php endif; ?>
    <?php else: ?>-->
    	<?php echo $this->_tpl_vars['product']->available_now; ?>

    <!--<?php endif; ?> -->
    </span>
</div>
<!--<?php endif; ?>-->
<!-- number of item in stock -->
<!--<?php if ($this->_tpl_vars['display_qties'] != 1 || ( $this->_tpl_vars['allow_oosp'] && $this->_tpl_vars['product']->quantity == 0 )): ?>
<?php else: ?>-->
<div id="pQuantityAvailable" > 
    <span id="quantityAvailable"><?php echo ((is_array($_tmp=$this->_tpl_vars['product']->quantity)) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
</span>
    <span class="<?php if ($this->_tpl_vars['product']->quantity > 1): ?>hidden<?php endif; ?>" id="quantityAvailableTxt"><?php echo smartyTranslate(array('s' => 'item in stock'), $this);?>
</span> 
    <span class="<?php if ($this->_tpl_vars['product']->quantity < 2): ?>hidden<?php endif; ?>" id="quantityAvailableTxtMultiple"><?php echo smartyTranslate(array('s' => 'items in stock'), $this);?>
</span>
</div>
<!--<?php endif; ?>-->
<!-- Out of stock hook -->
<!--<?php if ($this->_tpl_vars['product']->quantity == 0): ?>-->
	<div id="oosHook" ><?php echo $this->_tpl_vars['HOOK_PRODUCT_OOS']; ?>
</div>
<!--<?php endif; ?>
<?php if (( $this->_tpl_vars['product']->quantity > $this->_tpl_vars['last_qties'] || $this->_tpl_vars['product']->quantity == 0 ) || $this->_tpl_vars['allow_oosp']): ?>
<?php else: ?>-->
	<div class="warning-inline" id="last_quantities" ><?php echo smartyTranslate(array('s' => 'Warning: Last items in stock!'), $this);?>
</div>
<!--<?php endif; ?>-->
    
<form id="buy_block" action="<?php echo $this->_tpl_vars['base_dir']; ?>
cart.php" method="post" >
<!-- hidden datas -->
<input type="hidden" name="token"	value="<?php echo $this->_tpl_vars['static_token']; ?>
" /> 
<input type="hidden" name="id_product"	value="<?php echo ((is_array($_tmp=$this->_tpl_vars['product']->id)) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
" id="product_page_product_id" /> 
<input	type="hidden" name="add" value="1" /> 
<input type="hidden" name="id_product_attribute" id="idCombination" value="" />

<div class="txt-left font-14 bold p-5 price" >
<!--<?php if ($this->_tpl_vars['product']->on_sale): ?>-->
     <span class="on_sale"><?php echo smartyTranslate(array('s' => 'On sale!'), $this);?>
</span>
<!--<?php elseif (( $this->_tpl_vars['product_price_lowered'] )): ?>-->
	<span class="discount"><?php echo smartyTranslate(array('s' => 'Price lowered!'), $this);?>
</span> 
<!--<?php endif; ?>-->
<div class="our_price_display"> 
	<!--<?php if (! $this->_tpl_vars['priceDisplay'] || $this->_tpl_vars['priceDisplay'] == 2): ?> -->
    	<span id="our_price_display">
    	<?php echo Product::convertPrice(array('price' => $this->_tpl_vars['product']->getPrice(true,@NULL,2)), $this);?>
</span> 
    	<?php echo smartyTranslate(array('s' => 'tax incl.'), $this);?>
 
    <!--<?php endif; ?> 
    <?php if ($this->_tpl_vars['priceDisplay'] == 1): ?> -->
        <span id="our_price_display"><?php echo Product::convertPrice(array('price' => $this->_tpl_vars['product']->getPrice(false,@NULL,2)), $this);?>
</span> 
        <?php echo smartyTranslate(array('s' => 'tax excl.'), $this);?>
 
   <!-- <?php endif; ?> -->
</div> 
<div>
	<!--<?php if ($this->_tpl_vars['priceDisplay'] == 2): ?>-->
        <span id="pretaxe_price_display"><?php echo Product::convertPrice(array('price' => $this->_tpl_vars['product']->getPrice(false,@NULL,2)), $this);?>
</span>
        <?php echo smartyTranslate(array('s' => 'tax excl.'), $this);?>

    <!--<?php endif; ?> -->
</div>


<!--<?php if (( $this->_tpl_vars['product_price_lowered'] )): ?>-->
	<div id="old_price">
    	<!--<?php if (! $this->_tpl_vars['priceDisplay'] || $this->_tpl_vars['priceDisplay'] == 2): ?> -->
        	<span id="old_price_display"><?php echo Product::convertPrice(array('price' => $this->_tpl_vars['product']->getPriceWithoutReduct()), $this);?>
</span> <?php echo smartyTranslate(array('s' => 'tax incl.'), $this);?>

      <!--  <?php endif; ?>
      	<?php if ($this->_tpl_vars['priceDisplay'] == 1): ?>-->
        	<span id="old_price_display"><?php echo Product::convertPrice(array('price' => $this->_tpl_vars['product']->getPriceWithoutReduct(true)), $this);?>
</span> <?php echo smartyTranslate(array('s' => 'tax excl.'), $this);?>

       <!-- <?php endif; ?> -->
     </div>
<!--<?php endif; ?> 

<?php if ($this->_tpl_vars['product']->reduction_percent != 0 && ( $this->_tpl_vars['product']->reduction_from == $this->_tpl_vars['product']->reduction_to || ( ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')) <= $this->_tpl_vars['product']->reduction_to && ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')) >= $this->_tpl_vars['product']->reduction_from ) )): ?>-->
	<div id="reduction_percent"><?php echo smartyTranslate(array('s' => '(price reduced by'), $this);?>
 
    	<span id="reduction_percent_display"><?php echo ((is_array($_tmp=$this->_tpl_vars['product']->reduction_percent)) ? $this->_run_mod_handler('floatval', true, $_tmp) : floatval($_tmp)); ?>
</span>    %<?php echo smartyTranslate(array('s' => ')'), $this);?>

    </div>
<!--<?php endif; ?> 
<?php if (count($this->_tpl_vars['packItems'])): ?>-->
	<div class="pack_price"><?php echo smartyTranslate(array('s' => 'instead of'), $this);?>
 
    <span style="text-decoration: line-through;"><?php echo Product::convertPrice(array('price' => $this->_tpl_vars['product']->getNoPackPrice()), $this);?>
</span>
    </div>
<!--<?php endif; ?> 

<?php if ($this->_tpl_vars['product']->ecotax != 0): ?>-->
	<div class="price-ecotax"><?php echo smartyTranslate(array('s' => 'include'), $this);?>

    	<span id="ecotax_price_display"><?php echo Product::convertPrice(array('price' => $this->_tpl_vars['product']->ecotax), $this);?>
</span> 
    	<?php echo smartyTranslate(array('s' => 'for green tax'), $this);?>

    </div>
<!--<?php endif; ?>--> 

</div>

<?php if (isset ( $this->_tpl_vars['groups'] )): ?> 
<!-- attributes -->
	<div id="attributes">
    <!--<?php $_from = $this->_tpl_vars['groups']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['id_attribute_group'] => $this->_tpl_vars['group']):
?> -->   
    <div>       <label for="group_<?php echo ((is_array($_tmp=$this->_tpl_vars['id_attribute_group'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['group']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
   :</label> 
                <!--<?php $this->assign('groupName', ((is_array($_tmp='group_')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['id_attribute_group']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['id_attribute_group']))); ?> -->
                <select name="<?php echo $this->_tpl_vars['groupName']; ?>
"	id="group_<?php echo ((is_array($_tmp=$this->_tpl_vars['id_attribute_group'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
"	onchange="javascript:findCombination();" class="ipt">
                    <!--<?php $_from = $this->_tpl_vars['group']['attributes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['id_attribute'] => $this->_tpl_vars['group_attribute']):
?> -->
                    
                    <option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['id_attribute'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
" 
                    selected="<?php if (( isset ( $_GET[$this->_tpl_vars['groupName']] ) && ((is_array($_tmp=$_GET[$this->_tpl_vars['groupName']])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)) == $this->_tpl_vars['id_attribute'] ) || $this->_tpl_vars['group']['default'] == $this->_tpl_vars['id_attribute']): ?>selected<?php endif; ?>">
                    <?php echo ((is_array($_tmp=$this->_tpl_vars['group_attribute'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>

                    </option>
                        
                    <!-- <?php endforeach; endif; unset($_from); ?> -->
                 </select>
     </div>
    <!-- <?php endforeach; endif; unset($_from); ?>-->
     </div>
<?php endif; ?> 
<!-- quantity wanted -->

<!--<?php if (( ! $this->_tpl_vars['allow_oosp'] && $this->_tpl_vars['product']->quantity == 0 ) || $this->_tpl_vars['virtual']): ?>
<?php else: ?>-->
<div id="quantity_wanted_p" class="left p-5" > 
	<label><?php echo smartyTranslate(array('s' => 'Quantity :'), $this);?>
</label>
    <input type="text" name="qty" id="quantity_wanted" class="ipt"	
    value="<?php if (isset ( $this->_tpl_vars['quantityBackup'] )): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['quantityBackup'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
<?php else: ?>1<?php endif; ?>" size="2" maxlength="3" />
</div>

<div id="add_to_cart" 	class="left p-5 <?php if (! $this->_tpl_vars['allow_oosp'] && $this->_tpl_vars['product']->quantity == 0): ?> hidden<?php endif; ?>">
	<span class="btn btn-dark"><span><input	type="submit" name="Submit" value="<?php echo smartyTranslate(array('s' => 'Add to cart'), $this);?>
" /></span></span></div>
	
<div class="spacer"></div>
<!--<?php endif; ?>-->



</form>
<div class="clear"></div>

<!-- /infile add to cart -->