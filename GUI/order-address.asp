{capture name=path}{l s='Addresses'}{/capture}
{assign var='current_step' value='address'} 





<!-- #include file="inc-global/init.php" -->

<!-- #include file="css/style.css" -->
<!-- #include file="css/global.css" -->

<!-- #include file="js/jquery.search.js" -->
<!-- #include file="js/init.js" -->
<!-- #include file="inc-global/header.html" -->

{include file="$GUI_THEME_PATH/inc-private/order-address-js.html"} 
<!-- #include file="inc-private/order-address-js.html" -->

<!-- #include file="inc-global/base_dir_js.html" -->
{include file="$GUI_THEME_PATH/inc-global/base_dir_js.html"}

<div class="p-15">

<div class="left w-1-5 bg-lightgray">
<div class="hline-red"></div>
<div class="m-20">
{include file="$GUI_THEME_PATH/inc-private/order-steps.tpl"} 
<!-- #include file="inc-private/order-steps.tpl" -->
</div>
</div>



<div class="right w-4-5 bg-lightgray">
<div class="hline-red"></div>
<div class="m-20">
<!-- #include file="inc-global/breadcrumb.html" -->
{include file="$GUI_THEME_PATH/inc-global/breadcrumb.html"}
<h3>{l s='Addresses'}</h3>
<!-- #include file="inc-global/errors.html" -->
{include file="$GUI_THEME_PATH/inc-global/errors.html"}







<form action="{$base_dir_ssl}order.php" method="post"  id="address_form">

<div class="p-20">
<label for="id_address_delivery">{l s='Choose a delivery address:'}</label><br />
<select	name="id_address_delivery" id="id_address_delivery" class="ipt"  >
	{foreach from=$addresses key=k item=address}
	<optgroup label="{$address.alias|escape:'htmlall':'UTF-8'}">
	<option value="{$address.id_address|intval}" 
	{if $address.id_address==$cart->id_address_delivery}selected="selected"{/if} >
		{if $address.company}{$address.company} , {/if}
		{$address.firstname} {$address.lastname} ,
	{$address.address1}
	{if $address.address2},{$address.address2}{/if}
	,{$address.postcode} {$address.city} ,
	{$address.country} 
	{if isset($address.state)} ({$address.state}){/if}
	{if $address.phone} ,{$address.phone}{/if}
	{if $address.phone_mobile} {$address.phone_mobile} {/if}
		</option>
		</optgroup>
	{/foreach}
</select>
</div>

<div class="p-20">
 {if $addresses|@count > 1}  
<input type="checkbox"  onClick="$._('id_address_invoice').disabled = (this.checked)" name="same" value="1" {if $cart->id_address_invoice == $cart->id_address_delivery }checked="checked"{/if}  /> 
{else}
<input type="checkbox"  disabled="disabled" checked="checked" /><input type="hidden" name="same" value="1"  />
 {/if}
<label	for="addressesAreEquals">{l s='Use the same address for billing.'}</label>
</div>


{if $addresses|@count > 1} 
<div id="id_address_invoice_box" class="p-20">
<label for="id_address_invoice" >{l s='Choose a billing address:'}</label><br />	
<select name="id_address_invoice" id="id_address_invoice" class="ipt" 
	{if $cart->id_address_invoice == $cart->id_address_delivery }disabled="disabled"{/if} >
	{foreach from=$addresses key=k item=address}
	<optgroup label="{$address.alias|escape:'htmlall':'UTF-8'}">
	<option value="{$address.id_address|intval}"
	 {if $address.id_address==$cart->id_address_invoice}selected="selected"{/if}>
		{if $address.company}{$address.company} , {/if}
		{$address.firstname} {$address.lastname} ,
	{$address.address1}
	{if $address.address2},{$address.address2}{/if}
	,{$address.postcode} {$address.city} ,
	{$address.country} 
	{if isset($address.state)} ({$address.state}){/if}
	{if $address.phone} ,{$address.phone}{/if}
	{if $address.phone_mobile} {$address.phone_mobile} {/if}
		</option>
		</optgroup>
	{/foreach}
</select>
</div>
{else} {/if}


<div class="clear spacer"></div>
<a href="{$base_dir_ssl}address.php?back=order.php&amp;step=1"
	title="{l s='Add'}" class="button btn-orange small">{l s='Add a new address'}</a>
<div id="ordermsg">
<p>{l s='If you want to leave us comment about your order, please write it below.'}</p>
<textarea cols="60" rows="3" name="message" class="ipt" >{$oldMessage}</textarea>
<div class="clear spacer"></div>
</div>
<!--
<input type="hidden" name="ajax" value="true" />
<input type="hidden" name="processAddress" value="true" />
-->

<input type="hidden" class="hidden"	name="step" value="2" />
 <input type="hidden" name="back"	value="{$back}"  /> 
 

 <span class="btn"><span><a href="{$base_dir_ssl}order.php?step=0{if $back}&back={$back}{/if}" 	title="{l s='Previous'}" >&laquo; {l s='Previous'}</a> </span></span>

<div class="right">
 <span class="btn btn-dark"><span><input	type="submit" name="processAddress" value="{l s='Next'} &raquo;"  /></span></span></div>

</form>
</div> <!-- / right w-4-5 -->

<div class="clear"></div>
</div><!--p-20 -->
