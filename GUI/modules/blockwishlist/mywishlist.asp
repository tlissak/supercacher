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
					<h2>{l s='My wishlists' mod='blockwishlist'}</h2>
					<!-- #include file="../../inc-global/errors.html" -->
					{include file="$GUI_THEME_PATH/inc-global/errors.html"}
					
					{if $id_customer|intval neq 0}
						<form action="{$base_dir_ssl}modules/blockwishlist/mywishlist.php" method="post" >
							
								<h3>{l s='New wishlist' mod='blockwishlist'}</h3>
								<input type="hidden" name="token" value="{$token|escape:'htmlall':'UTF-8'}" />
								<label for="name">{l s='Name' mod='blockwishlist'}</label><br />
								<input type="text" class="ipt"  id="name" name="name" value="{if isset($smarty.post.name) and $errors|@count > 0}{$smarty.post.name|escape:'htmlall':'UTF-8'}{/if}" />
								<div class="clear"></div>
								<span class="btn"><span>
								<input type="submit" name="submitWishlist" id="submitWishlist" value="{l s='Save' mod='blockwishlist'}" class="exclusive" />
								</span></span>
								<div class="clear"></div>
						</form>
						{if $wishlists}
						<div id="block-history" class="block-center">
							<table class="std">
								<thead>
									<tr>
										<th class="first_item">{l s='Name' mod='blockwishlist'}</th>
										<th class="item mywishlist_first">{l s='Qty' mod='blockwishlist'}</th>
										<th class="item mywishlist_first">{l s='Viewed' mod='blockwishlist'}</th>
										<th class="item mywishlist_second">{l s='Created' mod='blockwishlist'}</th>
										<th class="item mywishlist_second">{l s='Direct Link' mod='blockwishlist'}</th>
										<th class="last_item mywishlist_first">{l s='Delete' mod='blockwishlist'}</th>
									</tr>
								</thead>
								<tbody>
								{section name=i loop=$wishlists}
									<tr id="wishlist_{$wishlists[i].id_wishlist|intval}">
										<td class="bold" style="width:200px;">
										<span class="btn"><span><a href="javascript:;" onclick="javascript:WishlistManage('block-order-detail', '{$wishlists[i].id_wishlist|intval}');">{$wishlists[i].name|truncate:30:'...'|escape:'htmlall':'UTF-8'}</a></span></span></td>
										<td class="bold align_center">
										{assign var=n value=0}
										{foreach from=$nbProducts item=nb name=i}
											{if $nb.id_wishlist eq $wishlists[i].id_wishlist}
												{assign var=n value=$nb.nbProducts|intval}
											{/if}
										{/foreach}
										{if $n}
											{$n|intval}
										{else}
											0
										{/if}
										</td>
										<td class="align_center">{$wishlists[i].counter|intval}</td>
										<td class="align_center">{$wishlists[i].date_add|date_format:"%Y-%m-%d"}</td>
										<td class="align_center">
										<span class="btn"><span><a href="{$base_dir_ssl}modules/blockwishlist/view.php?token={$wishlists[i].token|escape:'htmlall':'UTF-8'}">{l s='View' mod='blockwishlist'}</a></span></span></td>
										<td class="align_center">
											<span class="btn"><span><a href="javascript:;"onclick="return (WishlistDelete('wishlist_{$wishlists[i].id_wishlist|intval}', '{$wishlists[i].id_wishlist|intval}', '{l s='Do you really want to delete this wishlist ?' mod='blockwishlist'}'));">{l s='Delete' mod='blockwishlist'}</a></span></span>
										</td>
									</tr>
								{/section}
								</tbody>
							</table>
						</div>
						<div id="block-order-detail">&nbsp;</div>
						{/if}
					{/if}
		</div>	
	</div>
	
<div class="clear"></div>
<!-- end of p-20 -->
</div>
<!-- #include file="inc-global/footer.html" -->

