<!-- thumbnails --> 
{if count($images) > 0}
    <div id="thumbs_list">
    <div id="thumbs_list_frame">
        {foreach from=$images item=image name=thumbnails} 
		{assign var=imageIds	value=`$product->id`-`$image.id_image`}
        <a  href="{$link->getImageLink($product->link_rewrite, $imageIds, 'large')}"
        rel="other-views"
        class="{if $smarty.foreach.thumbnails.first}shown{/if}"
        title="{$image.legend|htmlspecialchars}">
			<img id="thumb_{$image.id_image}"
            src="{$link->getImageLink($product->link_rewrite, $imageIds, 'medium')}"
            alt="{$image.legend|htmlspecialchars}" 
			height="{$mediumSize.height}"
            width="{$mediumSize.width}" /> </a>
        {/foreach}
    </div>
    </div>
   
    <br class="clear" />
{/if} 

<!-- / thumbnails -->