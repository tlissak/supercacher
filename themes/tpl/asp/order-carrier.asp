{capture name=path}{l s='Shipping'}{/capture}
{assign var='current_step' value='shipping'} 


<script type="text/javascript" src="{$js_dir}layer.js"></script>
<script type="text/javascript" src="{$content_dir}js/conditions.js"></script>




<!-- #include file="inc-global/init.php" -->

<!-- #include file="css/style.css" -->
<!-- #include file="css/global.css" -->

<!-- #include file="js/jquery.search.js" -->
<!-- #include file="js/init.js" -->
<!-- #include file="header.tpl" -->

{include file="$tpl_dir/inc-private/order-address-js.html"} 
<!-- #include file="inc-private/order-address-js.html" -->

<!-- #include file="inc-global/base_dir_js.html" -->
{include file="$tpl_dir/inc-global/base_dir_js.html"}

<div class="p-15">

<div class="left w-1-5 bg-lightgray">
<div class="hline-red"></div>
<div class="m-20">
{include file="$tpl_dir/inc-private/order-steps.tpl"} 
<!-- #include file="inc-private/order-steps.tpl" -->
</div>
</div>



<div class="right w-4-5 bg-lightgray">
<div class="hline-red"></div>
<div class="m-20">
<!-- #include file="inc-global/breadcrumb.tpl" -->
{include file="$tpl_dir/inc-global/breadcrumb.tpl"}
<h3>{l s='Shipping'}</h3>
<!-- #include file="inc-global/errors.tpl" -->
{include file="$tpl_dir/inc-global/errors.tpl"}


<form id="form" action="{$base_dir_ssl}order.php" method="post"
	onsubmit="return acceptCGV('{l s='Please accept the terms of service before the next step.' js=1}');">




{if $conditions}
	<h3 class="condition_title">{l s='Terms of service'}</h3>
	<input type="checkbox" name="cgv" id="cgv" value="1"
	{if $checkedTOS}checked="checked" {/if} /> 
    <label for="cgv">{l s='I agree with the terms of service and I adhere to them unconditionally.'}</label>
	<a 	href="{$base_dir}cms.php?id_cms=3&amp;content_only=1&amp;TB_iframe=true&amp;width=650&amp;height=600"
	class="nyroModalTerms" >{l s='(read)'}</a>
{/if} 

<br class="clear spacer" />

{if $virtual_cart} 
	<input id="input_virtual_carrier"	class="hidden" type="hidden" name="id_carrier" value="0" /> 
{else} 
    
    
    <h3 class="carrier_title">{l s='Choose your delivery method'}</h3>
		
	{if $carriers && count($carriers)}
	<table class="std" width="70%">
		<thead>
			<tr>
				<th class="carrier_action first_item"></th>
				<th class="carrier_name item">{l s='Carrier'}</th>
				<th class="carrier_infos item">{l s='Information'}</th>
				<th class="carrier_price last_item">{l s='Price'}</th>
			</tr>
		</thead>
		<tbody>
			{foreach from=$carriers item=carrier name=myLoop}
			<tr class="{if $smarty.foreach.myLoop.first}first_item{elseif $smarty.foreach.myLoop.last}last_item{/if} {if $smarty.foreach.myLoop.index % 2}alternate_item{else}item{/if}">
				<td class="carrier_action radio">
					<input type="radio"
					name="id_carrier" value="{$carrier.id_carrier|intval}"
					id="id_carrier{$carrier.id_carrier|intval}"
					
					checked="{if $carrier.id_carrier== $checked || ($checked== 0 && $i== 0) || ($carriers|@sizeof== 1)}checked{/if}"  /></td>
				<td class="carrier_name"><label
					for="id_carrier{$carrier.id_carrier|intval}"> {if $carrier.img}<img
					src="{$carrier.img|escape:'htmlall':'UTF-8'}"
					alt="{$carrier.name|escape:'htmlall':'UTF-8'}" />{else}{$carrier.name|escape:'htmlall':'UTF-8'}{/if}
				</label></td>
				<td class="carrier_infos">{$carrier.delay|escape:'htmlall':'UTF-8'}</td>
				<td class="carrier_price">{if $carrier.price} <span class="price">
				{if $priceDisplay == 1}
					{convertPrice price=$carrier.price_tax_exc}
				{else}
					{convertPrice price=$carrier.price}{/if} 
					</span> {if $priceDisplay == 1} 
					{l s='(tax excl.)'}{else} {l s='(tax incl.)'}{/if} {else} {l s='Free!'} {/if}</td>
			</tr>
			{/foreach}
			
			{$HOOK_EXTRACARRIER}
			
		</tbody>
	</table>
	{else}
	
	
	
	<p class="warning">{l s='There is no carrier available that will deliver to this address!'}</p>
	
	
	
	{/if} 
	
	
    {if $recyclablePackAllowed}
   
    <input type="checkbox" name="recyclable" id="recyclable" value="1" {if $recyclable== 1}checked="checked" {/if} />
    <label for="recyclable">    {l s='I agree to receive my order in recycled packaging'}.</label>

{/if} 




<br class="clear spacer" />

{if $giftAllowed}




<div class="left w-1-3">
    <h3 class="gift_title">{l s='Gift'}</h3>
    <p class="checkbox">
	<input type="checkbox" name="gift" id="gift" value="1" checked="{if $cart->gift == 1}checked{/if}"
    onclick="$('#gift_div').toggle('slow');" /> 
    <label for="gift">{l s='I would like the order to be gift-wrapped.'}</label> 
    <br />
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
    
    {if $gift_wrapping_price > 0} (
    {l s='Additional cost of'} 
    <span class="price"> 
    	{if $priceDisplay == 1}
        	{convertPrice price=$total_wrapping_tax_exc}
        {else}{convertPrice price=$total_wrapping}{/if} 
    </span> 
    	{if $priceDisplay == 1} {l s='(tax excl.)'}{else} {l s='(tax incl.)'}{/if}) 
    {/if}</p>
</div>




<div class="left w-1-3" style=" margin-left:30px;">
<p id="gift_div" class="textarea">
<label for="gift_message">{l s='If you wish, you can add a note to the gift:'}</label> 
<textarea rows="5"	cols="35" id="gift_message" name="gift_message" class="ipt" >
{$cart->gift_message|escape:'htmlall':'UTF-8'}</textarea>
</p>
</div>
{/if} {/if}


<br class="spacer clear" />







<input type="hidden" name="step"	value="3" /> 
<input type="hidden" name="back" value="{$back}" /> 

<div class="left">
<span class="btn"><span>
<a	href="{$base_dir_ssl}order.php?step=1{if $back}&back={$back}{/if}"
	title="{l s='Previous'}">&laquo; {l s='Previous'}</a> </span></span>
</div>
<div class="right">
<span class="btn btn-dark"><span>
    <input 	type="submit" name="processCarrier" value="{l s='Next'} &raquo;"  /></span></span>
</div>
</form>
</div> <!-- / right w-4-5 -->

<div class="clear"></div>
</div><!--p-20 -->
