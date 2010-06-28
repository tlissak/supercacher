{capture name=path}
	<a href="{$base_dir_ssl}my-account.php">{l s='My account'}</a> <span class="navigation-pipe">{$navigationPipe}</span>{l s='Order history'}
{/capture}

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
				<p>{l s='Here are the orders you have placed since the creation of your account'}.</p>
				
				<div class="block-center" id="block-history">
				{if $orders && count($orders)}
				<table id="order-list" class="std">
					<thead>
						<tr>
							<th class="first_item">{l s='Order'}</th>
							<th class="item">{l s='Date'}</th>
							<th class="item">{l s='Total price'}</th>
							<th class="item">{l s='Payment'}</th>
							<th class="item">{l s='Status'}</th>
							<th class="item">{l s='Invoice'}</th>
							<th class="last_item">&nbsp;</th>
						</tr>
					</thead>
					<tbody>
						{foreach from=$orders item=order name=myLoop}
						<tr
							class="{if $smarty.foreach.myLoop.first}first_item{elseif $smarty.foreach.myLoop.last}last_item{else}item{/if} {if $smarty.foreach.myLoop.index % 2}alternate_item{/if}">
							<td class="history_link bold">{if $order.invoice && $order.virtual}<img
								src="{$img_dir}icon/download_product.gif" class="icon"
								alt="{l s='Product(s) to download'}"
								title="{l s='Product(s) to download'}" />{/if} <a
								class="color-myaccount"
								href="javascript:showOrder(1, {$order.id_order|intval}, 'order-detail');">{l
							s='#'}{$order.id_order|string_format:"%06d"}</a></td>
							<td class="history_date bold">{dateFormat date=$order.date_add
							full=0}</td>
							<td class="history_price"><span class="price">{displayPrice
							price=$order.total_paid_real currency=$order.id_currency
							no_utf8=false convert=false}</span></td>
							<td class="history_method">{$order.payment|escape:'htmlall':'UTF-8'}</td>
							<td class="history_state">{$order.order_state|escape:'htmlall':'UTF-8'}</td>
							<td class="history_invoice">{if ($order.invoice or
							$order.invoice_number) AND $invoiceAllowed} <a
								href="{$base_dir}pdf-invoice.php?id_order={$order.id_order|intval}"
								title="{l s='Invoice'} {$order.name|escape:'htmlall':'UTF-8'}"><img
								src="{$img_dir}icon/pdf.gif"
								alt="{l s='Invoice'} {$order.name|escape:'htmlall':'UTF-8'}"
								class="icon" /></a> <a
								href="{$base_dir}pdf-invoice.php?id_order={$order.id_order|intval}"
								title="{l s='Invoice'} {$order.name|escape:'htmlall':'UTF-8'}">{l
							s='PDF'}</a> {else}-{/if}</td>
							<td class="history_detail"><a class="color-myaccount"
								href="javascript:showOrder(1, {$order.id_order|intval}, 'order-detail');">{l
							s='details'}</a></td>
						</tr>
						{/foreach}
					</tbody>
				</table>
				<div id="block-order-detail" class="hidden">&nbsp;</div>
				{else}
				<p class="warning">{l s='You have not placed any orders.'}</p>
				{/if}</div>

		</div>		
	</div>
	
<div class="clear"></div>
<!-- end of p-20 --></div>
<!-- #include file="footer.tpl" -->