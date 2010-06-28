{include file="$GUI_THEME_PATH/inc-global/breadcrumb.html"}

<h2>{l s='List of products by
manufacturer:'}&nbsp;{$manufacturer->name|escape:'htmlall':'UTF-8'}</h2>

{include file="$GUI_THEME_PATH/inc-global/errors.html"} 
{if $products} 
	{include file="$GUI_THEME_PATH/inc-private/product-sort.tpl"} 
    {include file="$GUI_THEME_PATH/inc-private/product-list.tpl" products=$products}
    {include file="$GUI_THEME_PATH/inc-private/pagination.tpl"} 
    
{else}
<p class="warning">{l s='No products for this manufacturer.'}</p>
{/if}
