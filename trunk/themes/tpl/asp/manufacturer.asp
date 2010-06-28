{include file="$tpl_dir/inc-global/breadcrumb.tpl"}

<h2>{l s='List of products by
manufacturer:'}&nbsp;{$manufacturer->name|escape:'htmlall':'UTF-8'}</h2>

{include file="$tpl_dir/inc-global/errors.tpl"} 
{if $products} 
	{include file="$tpl_dir/inc-private/product-sort.tpl"} 
    {include file="$tpl_dir/inc-private/product-list.tpl" products=$products}
    {include file="$tpl_dir/inc-private/pagination.tpl"} 
    
{else}
<p class="warning">{l s='No products for this manufacturer.'}</p>
{/if}
