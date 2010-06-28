{if $packItems|@count > 0}
        <h3>{l s='Pack content'}</h3>
        {foreach from=$packItems item=packItem}
            <div class="pack_content">{$packItem.pack_quantity} x 
            <a href="{$link->getProductLink($packItem.id_product, $packItem.link_rewrite, $packItem.category)}">
            {$packItem.name|escape:'htmlall':'UTF-8'}</a>
            <p>{$packItem.description_short}</p>
            </div>
        {/foreach} 
    {/if}