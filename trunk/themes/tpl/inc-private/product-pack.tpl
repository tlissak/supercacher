
{if $packItems|@count > 0} 	<div>
    <h2>{l s='Pack content'}</h2>
    {include file="$tpl_dir/inc-private/product-list.tpl" products=$packItems}
    </div> {/if} 