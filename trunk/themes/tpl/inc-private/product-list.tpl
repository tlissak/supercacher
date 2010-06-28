{if isset($products)}
<!-- Products list -->
<ul class="product-list">
	{foreach from=$products item=product key=k name=products}
		{if $k MOD 4 == 0}<div class="clear"></div>{/if}
		
        
	<li class="ajax_block_product">
	<!-- product image -->
	<div class="center img-box"><a href="{$product.link|escape:'htmlall':'UTF-8'}"
		title="{$product.name|escape:'htmlall':'UTF-8'}"> <img
		src="{$link->getImageLink($product.link_rewrite, $product.id_image, 'medium')}"
		alt="{$product.legend|escape:'htmlall':'UTF-8'}" /></a>
	
	</div>
	<!-- / product image -->
	
	
	
	<!-- product description -->

	<h3 class="product_name m-1"><a
		href="{$product.link|escape:'htmlall':'UTF-8'}"
		title="{$product.legend|escape:'htmlall':'UTF-8'}">
	{$product.name|truncate:35:'...'|escape:'htmlall':'UTF-8'}</a></h3>

	<p class="product_desc m-1"><a
		href="{$product.link|escape:'htmlall':'UTF-8'}">
	{$product.description_short|strip_tags:'UTF-8'|truncate:360:'...'}</a>
    
			{foreach from=$product.features item=feature name=features}         
                       <b>{$feature.name|escape:'htmlall':'UTF-8'}</b>:<br />
						{$feature.value|escape:'htmlall':'UTF-8'}<br>
   			{/foreach} 
    </p>



    
	<!-- price / onsale / available-->
	<div class="xproduct-bottom">
    
   	 <span class="availability">
    {if ($product.allow_oosp OR	$product.quantity > 0)}
    	<span class="dispo" title="{l s='Available'}">Dispo.</span>
     {else}
     	{l s='Out of stock'}
     {/if}
    </span>
    
    <span class="p-10 right">
    {if $product.on_sale} 
    	<span class="on_sale">{l s='On sale!'}</span>
     {elseif ($product.reduction_price != 0 || $product.reduction_percent != 0)
     	&& ($product.reduction_from == $product.reduction_to 
        OR ($smarty.now|date_format:'%Y-%m-%d' <= $product.reduction_to 
        && 	$smarty.now|date_format:'%Y-%m-%d' >= $product.reduction_from))} 
     	<span class="discount">{l s='Price lowered!'}</span> 
    {/if}
    
    
    {if !$priceDisplay || $priceDisplay == 2} 
       	<span class="price">{convertPrice price=$product.price}</span> 
    		{if $priceDisplay == 2} {l s='+Tx'}{/if}
    {/if}
    {if $priceDisplay} 
        <span class="price" style="display: inline;">
        	{convertPrice price=$product.price_tax_exc}
        </span> 
            {if $priceDisplay == 2} {l s='-Tx'}{/if}
    {/if}
	</span>
	
	<div class="clear" ></div>

	<div class="p-20">
	<span class="btn"><span>
	<a href="{$product.link|escape:'htmlall':'UTF-8'}&amp;content_only=1" title="{l s='View'}" class="nyroModal"><img src="{$img_dir}/zoom.gif" alt="{l s='View'}" /></a></span></span>
	{if ($product.allow_oosp OR $product.quantity > 0) &&
	$product.customizable != 2} 
	<span class="btn right"><span><a class="ajax_add_to_cart_button" rel="ajax_id_product_{$product.id_product|intval}" href="{$base_dir}cart.php?add&amp;id_product={$product.id_product|intval}&amp;token={$static_token}"><img src="{$img_dir}/cart.gif" alt="{l s='Add to cart'}" class= /></a></span></span> {else} 
    	<span class="exclusive right" style="padding:5px;">{l s='Out of stock'}</span>
	{/if}</div>
	
	</div>
	
	<div class="h-18"></div>
	</li>
	{/foreach}
</ul>
<!-- /Products list -->
{/if}
