{capture name=path}<a href="{$base_dir_ssl}my-account.php">{l s='My account' mod='mailalerts'}</a><span class="navigation-pipe">{$navigationPipe}</span>{l s='My alerts' mod='mailalerts'}{/capture}
<!-- #include file="inc-global/init.php" -->

<!-- #include file="css/style.css" -->
<!-- #include file="css/global.css" -->

<!-- #include file="js/jquery.search.js" -->
<!-- #include file="js/init.js" -->
<!-- #include file="header.tpl" -->



<div class="p-20">

{include file="$tpl_dir/inc-global/base_dir_js.html"}

<!-- #include file="inc-global/breadcrumb.tpl" -->
	{include file="$tpl_dir/inc-global/breadcrumb.tpl"}
	
	
	<div class="account-left">
		<div class="spacer"></div>
		<!-- #include file="inc-global/account-nav.tpl" -->
		{include file="$tpl_dir/inc-global/account-nav.tpl"}
	</div>
	<div class="account-right">
		<div class="account-content-inner">
				<h2>{l s='My alerts' mod='mailalerts'}</h2>

				{include file="$tpl_dir/inc-global/errors.tpl"}
				{if $id_customer|intval neq 0}
					{if $alerts}
					<div id="block-history" class="block-center">
						<table class="std">
							<thead>
								<tr>
									<th class="first_item">{l s='Product' mod='mailalerts'}</th>
									<th class="last_item" style="width:20px;">{l s='Delete' mod='mailalerts'}</th>
								</tr>
							</thead>
							<tbody>
							{foreach from=$alerts item=product name=i}
							<tr>
								<td class="first_item">
								<span style="float:left;"><a href="{$product.link|escape:'htmlall':'UTF-8'}"><img src="{$img_prod_dir}{$product.cover}-small.jpg" alt="{$product.name|escape:'htmlall':'UTF-8'}" /></a></span>
								<span style="float:left;"><a href="{$product.link|escape:'htmlall':'UTF-8'}">{$product.name|truncate:40:'...'|escape:'htmlall':'UTF-8'}</a>
								{if isset($product.attributes_small)}
									<br /><i>{$product.attributes_small|escape:'htmlall':'UTF-8'}</i>
								{/if}</span>
								</td>
								<td class="align_center">
									<a href="{$base_dir_ssl}modules/mailalerts/myalerts.php?action=delete&id_product={$product.id_product}{if $product.id_product_attribute}&id_product_attribute={$product.id_product_attribute}{/if}"><img src="{$content_dir}modules/mailalerts/img/delete.gif" alt="{l s='Delete' mod='mailalerts'}" /></a>
								</td>
							</tr>
							</tbody>
						{/foreach}
						</table>
					</div>
					<div id="block-order-detail">&nbsp;</div>
					{else}
						<p class="warning">{l s='You are not subscribed to any alerts.' mod='mailalerts'}</p>
					{/if}
				{/if}
		</div>
	</div>
	
<div class="clear"></div>
<!-- end of p-20 -->
</div>
<!-- #include file="footer.tpl" -->
