<!--{if ($product->reduction_price != 0  || $product->reduction_percent != 0) 
	&& ($product->reduction_from == $product->reduction_to 
	OR ($smarty.now|date_format:'%Y-%m-%d' <= $product->reduction_to 
	&& $smarty.now|date_format:'%Y-%m-%d' >= $product->reduction_from))}-->
		{assign var='product_price_lowered' value=true}
<!--{/if}-->
<!-- infile add to cart -->

<div class="clear"></div>

<!-- prices -->
<div class="spacer clear"></div>
<!-- / prices -->

<!--{if $product->reference}
	{if isset($groups)}
    {else}-->
    <div id="product_reference">
        <label 	for="product_reference">{l s='Reference :'} </label>
        <span 	class="editable">{$product->reference|escape}</span>
    </div>
	<!--{/if}
{/if} -->

<!-- availability -->
<!--{if ($allow_oosp && $product->quantity == 0 && !$product->available_later) 
|| (!$product->available_now &&    $display_qties != 1) }
{else} -->
<div id="availability_statut" > 
    <span 	id="availability_label">{l s='Availability:'}</span> 
    <span 	id="availability_value"   class="{if $product->quantity == 0}warning-inline{/if}"> 
    <!--{if $product->quantity == 0}
		{if $allow_oosp}-->
        	{$product->available_later}
        <!--{else}-->
        	{l s='This product is no longer in stock'}
        <!--{/if}
    {else}-->
    	{$product->available_now}
    <!--{/if} -->
    </span>
</div>
<!--{/if}-->
<!-- number of item in stock -->
<!--{if $display_qties !=1 	|| ($allow_oosp && $product->quantity == 0)}
{else}-->
<div id="pQuantityAvailable" > 
    <span id="quantityAvailable">{$product->quantity|intval}</span>
    <span class="{if $product->quantity > 1}hidden{/if}" id="quantityAvailableTxt">{l s='item in stock'}</span> 
    <span class="{if $product->quantity < 2}hidden{/if}" id="quantityAvailableTxtMultiple">{l s='items in stock'}</span>
</div>
<!--{/if}-->
<!-- Out of stock hook -->
<!--{if $product->quantity == 0}-->
	<div id="oosHook" >{$HOOK_PRODUCT_OOS}</div>
<!--{/if}
{if ($product->quantity > $last_qties || $product->quantity == 0) || $allow_oosp}
{else}-->
	<div class="warning-inline" id="last_quantities" >{l s='Warning: Last items in stock!'}</div>
<!--{/if}-->
    
<form id="buy_block" action="{$base_dir}cart.php" method="post" >
<!-- hidden datas -->
<input type="hidden" name="token"	value="{$static_token}" /> 
<input type="hidden" name="id_product"	value="{$product->id|intval}" id="product_page_product_id" /> 
<input	type="hidden" name="add" value="1" /> 
<input type="hidden" name="id_product_attribute" id="idCombination" value="" />

<div class="txt-left font-14 bold p-5 price" >
<!--{if $product->on_sale}-->
     <span class="on_sale">{l s='On sale!'}</span>
<!--{elseif ($product_price_lowered )}-->
	<span class="discount">{l s='Price lowered!'}</span> 
<!--{/if}-->
<div class="our_price_display"> 
	<!--{if !$priceDisplay || $priceDisplay == 2} -->
    	<span id="our_price_display">
    	{convertPrice price=$product->getPrice(true, $smarty.const.NULL, 2)}</span> 
    	{l s='tax incl.'} 
    <!--{/if} 
    {if $priceDisplay == 1} -->
        <span id="our_price_display">{convertPrice price=$product->getPrice(false, $smarty.const.NULL, 2)}</span> 
        {l s='tax excl.'} 
   <!-- {/if} -->
</div> 
<div>
	<!--{if $priceDisplay == 2}-->
        <span id="pretaxe_price_display">{convertPrice price=$product->getPrice(false, $smarty.const.NULL, 2)}</span>
        {l s='tax excl.'}
    <!--{/if} -->
</div>


<!--{if ($product_price_lowered)}-->
	<div id="old_price">
    	<!--{if !$priceDisplay || $priceDisplay == 2} -->
        	<span id="old_price_display">{convertPrice price=$product->getPriceWithoutReduct()}</span> {l s='tax incl.'}
      <!--  {/if}
      	{if $priceDisplay == 1}-->
        	<span id="old_price_display">{convertPrice price=$product->getPriceWithoutReduct(true)}</span> {l s='tax excl.'}
       <!-- {/if} -->
     </div>
<!--{/if} 

{if $product->reduction_percent != 0 && 
	($product->reduction_from == $product->reduction_to 
	OR ($smarty.now|date_format:'%Y-%m-%d' <= $product->reduction_to 
	&& $smarty.now|date_format:'%Y-%m-%d' >= $product->reduction_from)) }-->
	<div id="reduction_percent">{l s='(price reduced by'} 
    	<span id="reduction_percent_display">{$product->reduction_percent|floatval}</span>    %{l s=')'}
    </div>
<!--{/if} 
{if $packItems|@count}-->
	<div class="pack_price">{l s='instead of'} 
    <span style="text-decoration: line-through;">{convertPrice price=$product->getNoPackPrice()}</span>
    </div>
<!--{/if} 

{if $product->ecotax != 0}-->
	<div class="price-ecotax">{l s='include'}
    	<span id="ecotax_price_display">{convertPrice price=$product->ecotax}</span> 
    	{l s='for green tax'}
    </div>
<!--{/if}--> 

</div>

{if isset($groups)} 
<!-- attributes -->
	<div id="attributes">
    <!--{foreach from=$groups key=id_attribute_group item=group} -->   
    <div>       <label for="group_{$id_attribute_group|intval}">{$group.name|escape:'htmlall':'UTF-8'}   :</label> 
                <!--{assign var='groupName' value='group_'|cat:$id_attribute_group} -->
                <select name="{$groupName}"	id="group_{$id_attribute_group|intval}"	onchange="javascript:findCombination();" class="ipt">
                    <!--{foreach from=$group.attributes key=id_attribute item=group_attribute} -->
                    
                    <option value="{$id_attribute|intval}" 
                    selected="{if (isset($smarty.get.$groupName) && $smarty.get.$groupName|intval==$id_attribute) || $group.default== $id_attribute}selected{/if}">
                    {$group_attribute|escape:'htmlall':'UTF-8'}
                    </option>
                        
                    <!-- {/foreach} -->
                 </select>
     </div>
    <!-- {/foreach}-->
     </div>
{/if} 
<!-- quantity wanted -->

<!--{if (!$allow_oosp && $product->quantity == 0) || $virtual}
{else}-->
<div id="quantity_wanted_p" class="left p-5" > 
	<label>{l s='Quantity :'}</label>
    <input type="text" name="qty" id="quantity_wanted" class="ipt"	
    value="{if isset($quantityBackup)}{$quantityBackup|intval}{else}1{/if}" size="2" maxlength="3" />
</div>

<div id="add_to_cart" 	class="left p-5 {if !$allow_oosp && $product->quantity == 0} hidden{/if}">
	<span class="btn btn-dark"><span><input	type="submit" name="Submit" value="{l s='Add to cart'}" /></span></span></div>
	
<div class="spacer"></div>
<!--{/if}-->



</form>
<div class="clear"></div>

<!-- /infile add to cart -->