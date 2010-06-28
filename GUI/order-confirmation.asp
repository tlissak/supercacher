<!-- #include file="inc-global/header.html" -->
{include file="$GUI_THEME_PATH/inc-global/base_dir_js.html"}

{capture name=path}{l s='Order confirmation'}{/capture}
<div id="main-top">


<div class="lineage">{include file="$GUI_THEME_PATH/inc-global/breadcrumb.html"}</div>

<div class="clear"></div>

<div id="content">

<h2>{l s='Order confirmation'}</h2>

{assign var='current_step' value='payment'} 
{include file="$GUI_THEME_PATH/inc-private/order-steps.tpl"} 
{include file="$GUI_THEME_PATH/inc-global/errors.html"}

{$HOOK_ORDER_CONFIRMATION} {$HOOK_PAYMENT_RETURN} <br />
<a href="{$base_dir_ssl}history.php" title="{l s='Back to orders'}"><img
	src="{$img_dir}icon/order.gif" alt="{l s='Back to orders'}"
	class="icon" /></a> <a href="{$base_dir_ssl}history.php"
	title="{l s='Back to orders'}">{l s='Back to orders'}</a></div>
</div>
