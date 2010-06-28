{if $product->description || $features || $accessories || $HOOK_PRODUCT_TAB || $attachments}

<div id="more_info_block">    

      <!-- full description --> 
    {if $product->description} 
    	<div id="description" >{$product->description}</div> 
    {/if} 

	<!-- product's features -->
	{if $features} 
    <div id="features">
        {foreach from=$features item=feature}
        	<li><span>{$feature.name|escape:'htmlall':'UTF-8'}</span> 	{$feature.value|escape:'htmlall':'UTF-8'}</li>
        {/foreach}
    </div>
    {/if} 
    
  {if $attachments}
    <div id="attachments">
            {foreach from=$attachments item=attachment}
                <li><a	href="{$base_dir}attachment.php?id_attachment={$attachment.id_attachment}">{$attachment.name|escape:'htmlall':'UTF-8'}</a><br />
            {$attachment.description|escape:'htmlall':'UTF-8'}</li>
            {/foreach}
    </div>
	{/if}
    
    
</div>


{/if}