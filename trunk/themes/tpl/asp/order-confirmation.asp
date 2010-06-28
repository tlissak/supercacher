<!-- #include file="header.tpl" -->
{include file="$tpl_dir/inc-global/base_dir_js.html"}

{capture name=path}{l s='Order confirmation'}{/capture}
<div id="main-top">


<div class="lineage">{include file="$tpl_dir/inc-global/breadcrumb.tpl"}</div>

<div class="clear"></div>

<div id="content">

<h2>{l s='Order confirmation'}</h2>

{assign var='current_step' value='payment'} 
{include file="$tpl_dir/inc-private/order-steps.tpl"} 
{include file="$tpl_dir/inc-global/errors.tpl"}

{$HOOK_ORDER_CONFIRMATION} {$HOOK_PAYMENT_RETURN} <br />
<a href="{$base_dir_ssl}history.php" title="{l s='Back to orders'}"><img
	src="{$img_dir}icon/order.gif" alt="{l s='Back to orders'}"
	class="icon" /></a> <a href="{$base_dir_ssl}history.php"
	title="{l s='Back to orders'}">{l s='Back to orders'}</a></div>
</div>
