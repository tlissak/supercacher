<div id="order-detail-content" class="table_block">
<table id="cart_summary" class="std" cellpadding="0" cellspacing="0" width="100%" >
	<thead>
		<tr>
			<th class="cart_product first_item">{l s='Product'}</th>
			<th class="cart_description item">{l s='Description'}</th>
			<th class="cart_ref item">{l s='Ref.'}</th>
			<th class="cart_availability item">{l s='Avail.'}</th>
			<th class="cart_unit item">{l s='Unit price'}<sup>{l s='*'}</sup></th>
			<th class="cart_quantity item">{l s='Qty'}</th>
			<th class="cart_action item">{l s='Action'}</th>
			<th class="cart_total last_item">{l s='Total'}</th>
		</tr>
	</thead>
	<tbody>
	{foreach from=$products item=product name=productLoop} 
		{assign	var='productId' value=$product.id_product}
		{assign	var='productAttributeId' value=$product.id_product_attribute} 
		{assign	var='quantityDisplayed' value=0} 
		
	
		{include file="$tpl_dir/inc-private/shopping-cart-product-line.tpl"} 
		
		{if	isset($customizedDatas.$productId.$productAttributeId)} 
			{foreach from=$customizedDatas.$productId.$productAttributeId
				key='id_customization' item='customization'}
			
				{include file="$tpl_dir/inc-private/shopping-cart-product-custom.tpl"} 
			
				{assign var='quantityDisplayed'	value=$quantityDisplayed+$customization.quantity}
			{/foreach} 

			{if $product.quantity-$quantityDisplayed > 0}
				{include file="$tpl_dir/inc-private/shopping-cart-product-line.tpl"}
			{/if}
		{/if}
		
	{/foreach}
	</tbody>
</table>


{if $voucherAllowed}
<div id="cart_voucher" class="left" >
	{if $errors_discount}
	<ul class="error">
		{foreach from=$errors_discount key=k item=error}
		<li>{$error|escape:'htmlall':'UTF-8'}</li>
		{/foreach}
	</ul>
	{/if}
	
	<form action="{$base_dir_ssl}order.php" method="post" id="voucher">

	<h4>{l s='Vouchers'}</h4>
	<label for="discount_name">{l s='Code:'}</label>
	<div class="clear"></div>
		<input type="text"	id="discount_name" name="discount_name" class="ipt" 
		value="{if $discount_name}{$discount_name}{/if}" />
		 &nbsp; 
		<span class="btn btn-light right "><span><input type="submit" name="submitDiscount"
		value="{l s='Add'}" class="button" /></span></span>
		<div class="clear"></div>
	</form>
	
	
	{if $discounts}
	
		<h4>{l s='Your vouchers :'}</h4>
		
		{foreach from=$discounts item=discount name=discountLoop}
				
				
				<span class="color-pink bold font-14">	
				{if $discount.value_real > 0} 
					{if !$priceDisplay}
						{displayPrice price=$discount.value_real*-1}
					{else}
						{displayPrice price=$discount.value_tax_exc*-1}
					{/if}
			   {/if} 
			   </span>
					
				{$discount.name} - {$discount.description}
				 - 
				<a href="{$base_dir_ssl}order.php?deleteDiscount={$discount.id_discount}"
					title="{l s='Delete'}">{l s='Delete ?'}</a> 
				
			   <br />
			   
			{/foreach}
	{/if}
	
	
</div> 
{/if}<!-- /voucherAllowed -->


<table  cellpadding="2" cellspacing="3" align="right" id="cart_total" bgcolor="#FFFFFF" width="50%" >
		{if $priceDisplay}
		<tr class="cart_total_price">
			<td width="70%" >{l s='Total products (tax excl.):'}</td>
			<td class="price">{displayPrice price=$total_products}</td>
		</tr>
		{else}
		<tr class="cart_total_price">
			<td width="70%"  >{l s='Total products (tax incl.):'}</td>
			<td class="price">{displayPrice price=$total_products_wt}</td>
		</tr>
		{/if} {if $total_discounts != 0} {if $priceDisplay}
		<tr class="cart_total_voucher">
			<td >{l s='Total vouchers (tax excl.):'}</td>
			<td class="price-discount">{displayPrice
			price=$total_discounts_tax_exc}</td>
		</tr>
		{else}
		<tr class="cart_total_voucher">
			<td >{l s='Total vouchers (tax incl.):'}</td>
			<td class="price-discount">{displayPrice price=$total_discounts}</td>
		</tr>
		{/if} {/if} {if $total_wrapping > 0} {if $priceDisplay}
		<tr class="cart_total_voucher">
			<td >{l s='Total gift-wrapping (tax excl.):'}</td>
			<td class="price-discount">{displayPrice
			price=$total_wrapping_tax_exc}</td>
		</tr>
		{else}
		<tr class="cart_total_voucher">
			<td >{l s='Total gift-wrapping (tax incl.):'}</td>
			<td class="price-discount">{displayPrice price=$total_wrapping}</td>
		</tr>
		{/if} {/if} {if $shippingCost > 0} {if $priceDisplay}
		<tr class="cart_total_delivery">
			<td >{l s='Total shipping (tax excl.):'}</td>
			<td class="price">{displayPrice price=$shippingCostTaxExc}</td>
		</tr>
		{else}
		<tr class="cart_total_delivery">
			<td >{l s='Total shipping (tax incl.):'}</td>
			<td class="price">{displayPrice price=$shippingCost}</td>
		</tr>
		{/if} {/if}
		<tr class="cart_total_price">
			<td >{l s='Total (tax excl.):'}</td>
			<td class="price">{displayPrice price=$total_price_without_tax}</td>
		</tr>
		<tr class="cart_total_voucher">
			<td >{l s='Total tax:'}</td>
			<td class="price">{displayPrice price=$total_tax}</td>
		</tr>
		<tr class="cart_total_price">
			<td >{l s='Total (tax incl.):'}</td>
			<td class="price">{displayPrice price=$total_price}</td>
		</tr>
		{if $free_ship > 0}
		<tr class="cart_free_shipping">
			<td class="cart_total_shipping">{l s='Remaining amount
			to be added to your cart in order to obtain free shipping:'}</td>
			<td class="price">{displayPrice price=$free_ship}</td>
		</tr>
		{/if}
</table>
<div class="clear"></div>

</div>