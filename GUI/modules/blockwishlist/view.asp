{capture name=path}<a href="{$base_dir_ssl}my-account.php">{l s='My account' mod='blockwishlist'}</a><span class="navigation-pipe">{$navigationPipe}</span>{l s='My wishlists' mod='blockwishlist'}{/capture}

<!-- #include file="inc-global/init.php" -->

<!-- #include file="css/style.css" -->
<!-- #include file="css/global.css" -->

<!-- #include file="js/jquery.search.js" -->
<!-- #include file="js/init.js" -->
<!-- #include file="inc-global/header.html" -->



{capture name=path}<a href="{$base_dir_ssl}my-account.php">{l s='My account' mod='blockwishlist'}</a><span class="navigation-pipe">{$navigationPipe}</span>{l s='My wishlists' mod='blockwishlist'}{/capture}

<div class="p-20">

{include file="$GUI_THEME_PATH/inc-global/base_dir_js.html"}

<!-- #include file="../../inc-global/breadcrumb.html" -->
	{include file="$GUI_THEME_PATH/inc-global/breadcrumb.html"}
	
	
	<div class="account-left">
		<div class="spacer"></div>
		<!-- #include file="../../inc-global/account-nav.html" -->
		{include file="$GUI_THEME_PATH/inc-global/account-nav.html"}
	</div>
	<div class="account-right">
		<div class="account-content-inner">
	
	
	
							<div id="view_wishlist">
							<h2>{l s='Wishlist' mod='blockwishlist'}</h2>
							{if $wishlists}
							<p>
								{l s='Other wishlists of' mod='blockwishlist'} {$current_wishlist.firstname} {$current_wishlist.lastname}:
								{foreach from=$wishlists item=wishlist name=i}
								<a href="{$base_dir_ssl}modules/blockwishlist/view.php?token={$wishlist.token}">{$wishlist.name}</a>
									{if !$smarty.foreach.i.last}
										/
									{/if}
								{/foreach}
							</p>
							{/if}
							{if $products}
							<div class="addresses" id="featured-products_block_center">
								<h3>{l s='Welcome to the wishlist of' mod='blockwishlist'} {$current_wishlist.firstname} {$current_wishlist.lastname}: {$current_wishlist.name}</h3>
								<p />
								{foreach from=$products item=product name=i}
								<ul class="address {if $smarty.foreach.i.last}last_item{elseif $smarty.foreach.i.first}first_item{/if} {if $smarty.foreach.i.index % 2}alternate_item{else}item{/if}" id="block_{$product.id_product}_{$product.id_product_attribute}">
								<div class="ajax_block_product w-1-3 left">
									<li class="address_title"><a href="{$link->getProductLink($product.id_product,
									$product.link_rewrite, $product.category_rewrite)}" title="{l s='View' mod='blockwishlist'}">{$product.name|truncate:30:'...'|escape:'htmlall':'UTF-8'}</a></li>
									<li class="address_name">
										<a	href="{$link->getProductlink($product.id_product, $product.link_rewrite, $product.category_rewrite)}" title="{l s='Product detail' mod='blockwishlist'}">
											<img src="{$img_prod_dir}{$product.cover}-medium.jpg" alt="{$product.name|escape:'htmlall':'UTF-8'}" />
										</a>
									<span class="wishlist_product_detail">
									{if isset($product.attributes_small)}
										<br /><a href="{$link->getProductlink($product.id_product, $product.link_rewrite, $product.category_rewrite)}" title="{l s='Product detail' mod='blockwishlist'}">{$product.attributes_small|escape:'htmlall':'UTF-8'}</a>
									{/if}
										<br />{l s='Quantity:' mod='blockwishlist'}
										<input type="text" id="{$product.id_product}_{$product.id_product_attribute}" size="3" value="{$product.quantity|intval}" class="ipt" />
										<br />
										{l s='Priority:' mod='blockwishlist'}
										{if $product.priority eq 0}
											<span style="color:darkred; ">{l s='High' mod='blockwishlist'}</span>
										{elseif $product.priority eq 1}
											<span style="color:darkorange;">{l s='Medium' mod='blockwishlist'}</span>
										{else}
											<span style="color:green;">{l s='Low' mod='blockwishlist'}</span>
										{/if}
									</span>
									</li>
									<li class="address_address1 clear">
										<span class="btn"><span><a class="button_small clear" href="{$link->getProductLink($product.id_product,  $product.link_rewrite, $product.category_rewrite)}" title="{l s='View' mod='blockwishlist'}">{l s='View' mod='blockwishlist'}</a></span></span>
										{if $product.attribute_quantity AND $product.attribute_quantity >= 1}
										{if !$ajax}
										<form 
										id="addtocart_{$product.id_product|intval}_{$product.id_product_attribute|intval}" 
										action="{$base_dir}cart.php" method="post">
										<p class="hidden">
											<input type="hidden" name="id_product" value="{$product.id_product|intval}" id="product_page_product_id"  />
											<input type="hidden" name="add" value="1" />
											<input type="hidden" name="token" value="{$token}" />
											<input type="hidden" name="id_product_attribute" id="idCombination" value="{$product.id_product_attribute|intval}" />
										</p>
										</form>
										{/if}
										<span class="btn"><span>
										<a href="javascript:;" class="exclusive" onclick="WishlistBuyProduct('{$token|escape:'htmlall':'UTF-8'}', '{$product.id_product}', '{$product.id_product_attribute}', '{$product.id_product}_{$product.id_product_attribute}', this, {$ajax});" 
										title="{l s='Add to cart' mod='homefeatured'}">{l s='Add to cart' mod='blockwishlist'}</a></span></span>
										{else}
										<span class="btn"><span>{l s='Add to cart' mod='blockwishlist'}</span></span>
										{/if}
									</li>
								</div>
								</ul>
								{/foreach}
								<p class="clear" />
							</div>
							{else}
								{l s='No products' mod='blockwishlist'}
							{/if}
							</div>
	
	
		</div>
	</div>
</div>