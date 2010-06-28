{capture name=path}{l s='Your shopping cart'}{/capture} 
{assign var='current_step' value='summary'} 

<!-- #include file="inc-global/init.php" -->

<!-- #include file="css/style.css" -->
<!-- #include file="css/global.css" -->
<!-- #include file="css/layout.css" -->

<!-- #include file="js/jquery.search.js" -->
<!-- #include file="js/init.js" -->
<!-- #include file="inc-global/header.html" -->



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

<h3>{l s='Shopping cart summary'}</h3>
{include file="$GUI_THEME_PATH/inc-global/errors.html"} 
<!-- #include file="inc-global/errors.html" -->
{if isset($empty)}
	<p class="warning">{l s='Your shopping cart is empty.'}</p>
{else} 
{include file="$GUI_THEME_PATH/inc-private/shopping-cart-tbl.html"} 
<!-- #include file="inc-private/shopping-cart-tbl.html" -->
<p><sup>{l s='*'}</sup> 
{l s='When discount quantity applies, the unit price may be rounded up to 2 decimals'}</p>
<p>{l s='Your shopping cart contains'} {$productNumber}
 {if $productNumber > 1}{l s='products'}{else}{l s='product'}{/if}</p>
{$HOOK_SHOPPING_CART} 
{if ($carrier->id AND !$virtualCart) OR $delivery->id OR $invoice->id}
<div class="clear"></div>
{if $delivery->id}
<div class="left  m-20">
<h3 class="address_title">{l s='Delivery address'}</h3>
<ul id="delivery_address">
	{if $delivery->company}
	<li class="address_company">{$delivery->company|escape:'htmlall':'UTF-8'}</li>
	{/if}
	<li class="address_name">{$delivery->lastname|escape:'htmlall':'UTF-8'}
	{$delivery->firstname|escape:'htmlall':'UTF-8'}</li>
	<li class="address_address1">{$delivery->address1|escape:'htmlall':'UTF-8'}</li>
	{if $delivery->address2}
	<li class="address_address2">{$delivery->address2|escape:'htmlall':'UTF-8'}</li>
	{/if}
	<li class="address_city">{$delivery->postcode|escape:'htmlall':'UTF-8'}
	{$delivery->city|escape:'htmlall':'UTF-8'}</li>
	<li class="address_country">{$delivery->country|escape:'htmlall':'UTF-8'}</li>
</ul>
</div>
{/if} <!-- /delivery->id -->
{if $invoice->id}
<div  class="left  m-20">
<h3>{l s='Invoice address'}</h3>
<ul id="invoice_address">	
	{if $invoice->company}
	<li class="address_company">{$invoice->company|escape:'htmlall':'UTF-8'}</li>
	{/if}
	<li class="address_name">{$invoice->lastname|escape:'htmlall':'UTF-8'}
	{$invoice->firstname|escape:'htmlall':'UTF-8'}</li>
	<li class="address_address1">{$invoice->address1|escape:'htmlall':'UTF-8'}</li>
	{if $invoice->address2}
	<li class="address_address2">{$invoice->address2|escape:'htmlall':'UTF-8'}</li>
	{/if}
	<li class="address_city">{$invoice->postcode|escape:'htmlall':'UTF-8'}
	{$invoice->city|escape:'htmlall':'UTF-8'}</li>
	<li class="address_country">{$invoice->country|escape:'htmlall':'UTF-8'}</li>
</ul>
</div>
{/if} <!-- /invoice->id -->
{if $carrier->id AND !$virtualCart}
<div id="order_carrier" class="left m-20">
<h3>{l s='Carrier:'}</h3>
	{if isset($carrierPicture)}
		<img src="{$img_ship_dir}{$carrier->id}.jpg" alt="{l s='Carrier'}" />
	{/if} 
<span>{$carrier->name|escape:'htmlall':'UTF-8'}</span>
</div>
{/if}<!-- /$carrier->id AND !$virtualCart -->
<div class="clear"></div>
{/if}<!-- /if ($carrier->id AND !$virtualCart) OR $delivery->id OR $invoice->id -->
<div class="clear"></div>
<p class="cart_navigation">
	<span class="btn right"><span><a	href="{$base_dir_ssl}order.php?step=1{if $back}&amp;back={$back}{/if}" title="{l s='Next'}">{l s='Next'} &raquo;</a> </span></span>
    
    <span class="btn"><span><a href="{if $smarty.server.HTTP_REFERER && strstr($smarty.server.HTTP_REFERER, 'order.php')}{$base_dir}index.php{else}{$smarty.server.HTTP_REFERER|escape:'htmlall':'UTF-8'|secureReferrer}{/if}"  title="{l s='Continue shopping'}">
	&laquo; {l s='Continue shopping'}</a></span></span>
</p>
<p class="cart_navigation_extra">{$HOOK_SHOPPING_CART_EXTRA}</p>
{/if}<!-- /{if isset($empty) ---- else -->

</div>




</div>
<div class="clear"></div>
</div>