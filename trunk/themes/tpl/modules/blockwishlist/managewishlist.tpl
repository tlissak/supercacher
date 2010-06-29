{if $products}
{if !$refresh}
	<br />
	<span class="btn"><span>
	<a href="javascript:;" id="hideBoughtProducts" class="button_account_large"  onclick="WishlistVisibility('wlp_bought', 'BoughtProducts');">{l s='Hide products'}</a>
	</span></span>
	<span class="btn"><span>
	<a href="javascript:;" id="showBoughtProducts" class="button_account_large"  onclick="WishlistVisibility('wlp_bought', 'BoughtProducts');">{l s='Show products'}</a>
	</span></span>
	{if count($productsBoughts)}
	<span class="btn"><span>
	<a href="javascript:;" id="hideBoughtProductsInfos" class="button_account_large" onclick="WishlistVisibility('wlp_bought_infos', 'BoughtProductsInfos');">{l s='Hide bought product\'s infos'}</a>
	</span></span>
	<span class="btn"><span>
	<a href="javascript:;" id="showBoughtProductsInfos" class="button_account_large"  onclick="WishlistVisibility('wlp_bought_infos', 'BoughtProductsInfos');">{l s='Show bought product\'s infos'}</a>
	</span></span>
	{/if}
	<span class="btn"><span>
	<a href="javascript:;" id="showSendWishlist" class="button_account" onclick="WishlistVisibility('wl_send', 'SendWishlist');">{l s='Send this wishlist'}</a>
	</span></span>
	<span class="btn"><span>
	<a href="javascript:;" id="hideSendWishlist" class="button_account" onclick="WishlistVisibility('wl_send', 'SendWishlist');">{l s='Close send this wishlist'}</a>
	</span></span>
	<span class="clear"></span>
	<br />
{/if}
	<div class="wlp_bought">
	{foreach from=$products item=product name=i}
	<ul class="address {if $smarty.foreach.i.index % 2}alternate_{/if}item" style="margin:5px 0 0 5px;border-bottom:1px solid #ccc;" id="wlp_{$product.id_product}_{$product.id_product_attribute}">
		<li class="address_title">{$product.name|truncate:30:'...'|escape:'htmlall':'UTF-8'}</li>
		<li class="address_name">
			
			<a href="{$link->getProductlink($product.id_product, $product.link_rewrite, $product.category_rewrite)}" title="{l s='Product detail'}">
				<img src="{$img_prod_dir}{$product.cover}-medium.jpg" alt="{$product.name|escape:'htmlall':'UTF-8'}" />
			</a>
		<span class="wishlist_product_detail">
		{if isset($product.attributes_small)}
			<a href="{$link->getProductlink($product.id_product, $product.link_rewrite, $product.category_rewrite)}" title="{l s='Product detail'}">{$product.attributes_small|escape:'htmlall':'UTF-8'}</a>
		{/if}
			<br />{l s='Quantity'}:
			<input type="text" id="quantity_{$product.id_product}_{$product.id_product_attribute}" value="{$product.quantity|intval}" size="3"  class="ipt" />
			
			<div class="clear"></div>
			
			{l s='Priority'}:
			<select class="ipt" id="priority_{$product.id_product}_{$product.id_product_attribute}">
				<option value="0"{if $product.priority eq 0} selected="selected"{/if}>{l s='High'}</option>
				<option value="1"{if $product.priority eq 1} selected="selected"{/if}>{l s='Medium'}</option>
				<option value="2"{if $product.priority eq 2} selected="selected"{/if}>{l s='Low'}</option>
			</select>
		</span>
			<span class="btn"><span><a href="javascript:;" class="clear button" onclick="WishlistProductManage('wlp_bought', 'delete', '{$id_wishlist}', '{$product.id_product}', '{$product.id_product_attribute}', $('#quantity_{$product.id_product}_{$product.id_product_attribute}').val(), $('#priority_{$product.id_product}_{$product.id_product_attribute}').val());" title="{l s='Delete'}">{l s='Delete'}</a>
			</span></span>
			<span class="btn"><span>
			<a href="javascript:;" class="exclusive" onclick="WishlistProductManage('wlp_bought_{$product.id_product_attribute}', 'update', '{$id_wishlist}', '{$product.id_product}', '{$product.id_product_attribute}', $('#quantity_{$product.id_product}_{$product.id_product_attribute}').val(), $('#priority_{$product.id_product}_{$product.id_product_attribute}').val());" title="{l s='Save'}">{l s='Save'}</a>
			</span></span>
		</li>
	</ul>
	{/foreach}
	</div>
	<div class="clear"></div>
	<br />
	{if !$refresh}
	<form class="wl_send std hidden" method="post"  onsubmit="return (false);">
		<fieldset>
			<p class="required">
				<label for="email1">{l s='Email'} 1</label>
				<input type="text" class="ipt" name="email1" id="email1" />
				<sup>*</sup>
			</p>
			{section name=i loop=11 start=2}
			<p>
				<label for="email{$smarty.section.i.index}">{l s='Email'} {$smarty.section.i.index}</label>
				<input type="text" class="ipt" name="email{$smarty.section.i.index}" id="email{$smarty.section.i.index}" />
			</p>
			{/section}
			<p class="submit">
				<span class="btn"><span>
				<input class="button" type="submit" value="{l s='Send'}" name="submitWishlist" onclick="WishlistSend('wl_send', '{$id_wishlist}', 'email');" />
				</span></span>
			</p>
			<p class="required">
				<sup>*</sup>
				{l s='Required field'}
			</p>
		</fieldset>
	</form>
	{if count($productsBoughts)}
	<table class="wlp_bought_infos hidden std">
		<thead>
			<tr>
				<th class="first_item">{l s='Product'}</td>
				<th class="item">{l s='Quantity'}</td>
				<th class="item">{l s='Offered by'}</td>
				<th class="last_item">{l s='Date'}</td>
			</tr>
		</thead>
		<tbody>
		{foreach from=$productsBoughts item=product name=i}
			{foreach from=$product.bought item=bought name=j}
			{if $bought.quantity > 0}
				<tr>
					<td class="first_item">
					<span style="float:left;"><img src="{$img_prod_dir}{$product.cover}-small.jpg" alt="{$product.name|escape:'htmlall':'UTF-8'}" /></span>
					<span style="float:left;">{$product.name|truncate:40:'...'|escape:'htmlall':'UTF-8'}
					{if isset($product.attributes_small)}
						<br /><i>{$product.attributes_small|escape:'htmlall':'UTF-8'}</i>
					{/if}</span>
					</td>
					<td class="item align_center">{$bought.quantity|intval}</td>
					<td class="item align_center">{$bought.firstname} {$bought.lastname}</td>
					<td class="last_item align_center">{$bought.date_add|date_format:"%Y-%m-%d"}</td>
				</tr>
			{/if}
			{/foreach}
		{/foreach}
		</tbody>
	</table>
	{/if}
	{/if}
{else}
	{l s='No products'}
{/if}
