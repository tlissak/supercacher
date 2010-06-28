 <!-- accessories -->
    {if isset($accessories) AND $accessories}    
    <div id="accessoires">
                    <ul>
                        {foreach from=$accessories item=accessory name=accessories_list}
                        
                        {assign var='accessoryLink' value=$link->getProductLink($accessory.id_product,$accessory.link_rewrite, $accessory.category)}
                        <li	class="ajax_block_product 
                        {if $smarty.foreach.accessories_list.first}first_item{elseif $smarty.foreach.accessories_list.last}last_item{else}item{/if} 
                        product_accessories_description">
                        
						<h3 class="align_center">
                        <a	href="{$accessoryLink|escape:'htmlall':'UTF-8'}">{$accessory.name|truncate:22:'...'|escape:'htmlall':'UTF-8'}</a></h3>
						
                        <div class="left w-1-3" >
                        <a 	href="{$accessoryLink|escape:'htmlall':'UTF-8'}" title="{$accessory.legend|escape:'htmlall':'UTF-8'}"	>
                            <img src="{$link->getImageLink($accessory.link_rewrite, $accessory.id_image, 'medium')}" 
                            alt="{$accessory.legend|escape:'htmlall':'UTF-8'}" class=" m-20 "/></a>
                       
                        </div>
                        <div class="left w-2-3" >
						
						 <a	href="{$accessoryLink|escape:'htmlall':'UTF-8'}" title="{l s='More'}">
                        {$accessory.description_short|strip_tags|truncate:100:'...'}</a>
						<div class="clear s-spacer"></div>
                        <span class="price bold font-14">{displayWtPrice p=$accessory.price}</span> 
						
						<div class="clear s-spacer"></div>
						
						<span class="btn"><span><a  href="{$accessoryLink|escape:'htmlall':'UTF-8'}" title="{l s='View'}">
                            {l s='View'}</a></span></span>
						<span class="btn"><span>
                        <a  href="{$base_dir}cart.php?qty=1&amp;id_product={$accessory.id_product|intval}&amp;token={$static_token}&amp;add"
                            rel="ajax_id_product_{$accessory.id_product|intval}"
                            title="{l s='Add to cart'}">{l s='Add to cart'}</a>
							</span></span>
                            </div>
                        </li>
                        {/foreach}
                    </ul>
            <div class="clear"></div>
    </div>
	{/if} 