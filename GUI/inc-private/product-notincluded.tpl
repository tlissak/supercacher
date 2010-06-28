{if $product->description_short OR $packItems|@count > 0}
        <div id="short_description_block">
        {if $product->description_short}
        	<div id="short_description_content" class="rte align_justify">{$product->description_short}</div>
    	{/if}    
    {/if} 