{capture name=path}{l s='Price drop'}{/capture} 
{include file="$GUI_THEME_PATH/inc-global/breadcrumb.html"}

<h2>{l s='Price drop'}</h2>

{if $products} {include file="$GUI_THEME_PATH/inc-private/product-sort.tpl"} 
	{include file="$GUI_THEME_PATH/inc-private/product-list.tpl" products=$products} 
    {include file="$GUI_THEME_PATH/inc-private/pagination.tpl"} 
 {else}
<p class="warning">{l s='No price drop.'}</p>
{/if}
