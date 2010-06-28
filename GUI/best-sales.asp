<!-- #include file="inc-global/header.html" -->

{capture name=path}{l s='Top sellers'}{/capture} {include file="$GUI_THEME_PATH/inc-global/breadcrumb.html"}

<h2>{l s='Top sellers'}</h2>

{if $products} 
	{include file="$GUI_THEME_PATH/inc-private/product-sort.tpl"} 
    {include file="$GUI_THEME_PATH/inc-private/product-list.tpl" products=$products} 
    {include file="$GUI_THEME_PATH/inc-private/pagination.tpl"} {else}
<p class="warning">{l s='No top sellers.'}</p>
{/if}
