{capture name=path}{l s='Price drop'}{/capture} 
{include file="$tpl_dir/inc-global/breadcrumb.tpl"}

<h2>{l s='Price drop'}</h2>

{if $products} {include file="$tpl_dir/inc-private/product-sort.tpl"} 
	{include file="$tpl_dir/inc-private/product-list.tpl" products=$products} 
    {include file="$tpl_dir/inc-private/pagination.tpl"} 
 {else}
<p class="warning">{l s='No price drop.'}</p>
{/if}
