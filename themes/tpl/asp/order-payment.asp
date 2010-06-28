{capture name=path}{l s='Your payment method'}{/capture}
{assign var='current_step' value='payment'} 


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
<h3>{l s='Choose your payment method'}</h3>
<!-- #include file="inc-global/errors.tpl" -->
{include file="$tpl_dir/inc-global/errors.tpl"}







{if $HOOK_PAYMENT}
<h4>{l s='Please choose the payment method you want to use to pay the
amount of'}&nbsp;<span class="price">{convertPrice price=$total_price}</span>
{l s='(tax incl.)'}</h4>
<br />
{$HOOK_PAYMENT} {else}
<p class="warning">{l s='No payment modules have been installed yet.'}</p>
{/if}

<p class="cart_navigation">
<span class="btn"><span>
<a href="{$base_dir_ssl}order.php?step=2"
	title="{l s='Previous'}">&laquo; {l s='Previous'}</a>
</span></span></p>


</div> <!-- / right w-4-5 -->

<div class="clear"></div>
</div><!--p-20 -->