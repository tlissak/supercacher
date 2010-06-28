{capture name=path}<a href="{$base_dir_ssl}my-account.php">{l s='My account'}</a>
<span class="navigation-pipe">{$navigationPipe}</span>
{l s='Credit slips'}{/capture}
<!-- #include file="inc-global/init.php" -->

<!-- #include file="css/style.css" -->
<!-- #include file="css/global.css" -->

<!-- #include file="js/jquery.search.js" -->
<!-- #include file="js/init.js" -->
<!-- #include file="inc-global/header.html" -->



<div class="p-20">

{include file="$GUI_THEME_PATH/inc-global/base_dir_js.html"}

<!-- #include file="inc-global/breadcrumb.html" -->
	{include file="$GUI_THEME_PATH/inc-global/breadcrumb.html"}
	
	
	<div class="account-left">
		<div class="spacer"></div>
		<!-- #include file="inc-global/account-nav.html" -->
		{include file="$GUI_THEME_PATH/inc-global/account-nav.html"}
	</div>
	<div class="account-right">
		<div class="account-content-inner">
					<h2>{l s='Credit slips'}</h2>
					<p>{l s='Credit slips you received after canceled orders'}.</p>
				
					<div class="block-center" id="block-history">{if $ordersSlip &&
			count($ordersSlip)}
			<table id="order-list" class="std">
				<thead>
					<tr>
						<th class="first_item">{l s='Credit slip'}</th>
						<th class="item">{l s='Order'}</th>
						<th class="item">{l s='Date issued'}</th>
						<th class="last_item">{l s='View credit slip'}</th>
					</tr>
				</thead>
				<tbody>
					{foreach from=$ordersSlip item=slip name=myLoop}
					<tr
						class="{if $smarty.foreach.myLoop.first}first_item{elseif $smarty.foreach.myLoop.last}last_item{else}item{/if} {if $smarty.foreach.myLoop.index % 2}alternate_item{/if}">
						<td class="bold"><span class="color-myaccount">{l
						s='#'}{$slip.id_order_slip|string_format:"%06d"}</span></td>
						<td class="history_method"><a class="color-myaccount"
							href="javascript:showOrder(1, {$slip.id_order|intval}, 'order-detail');">{l
						s='#'}{$slip.id_order|string_format:"%06d"}</a></td>
						<td class="bold">{dateFormat date=$slip.date_add full=0}</td>
						<td class="history_invoice"><a
							href="{$base_dir}pdf-order-slip.php?id_order_slip={$slip.id_order_slip|intval}"
							title="{l s='Credit slip'} {l s='#'}{$slip.id_order_slip|string_format:"%06d"}"><img
							src="{$img_dir}icon/pdf.gif"
							alt="{l s='Order slip'} {l s='#'}{$return.id_order_slip|string_format:"
							%06d"}" class="icon" /></a> <a
							href="{$base_dir}pdf-order-slip.php?id_order_slip={$slip.id_order_slip|intval}"
							title="{l s='Credit slip'} {l s='#'}{$slip.id_order_slip|string_format:"%06d"}">{l
						s='PDF'}</a></td>
					</tr>
					{/foreach}
				</tbody>
			</table>
			<div id="block-order-detail" class="hidden">&nbsp;</div>
			{else}
			<p class="warning">{l s='You have not received any credit slips.'}</p>
			{/if}</div>
		</div>
	</div>
	
<div class="clear"></div>
<!-- end of p-20 --></div>
<!-- #include file="inc-global/footer.html" -->