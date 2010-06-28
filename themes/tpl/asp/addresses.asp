{capture name=path}
<a href="{$base_dir_ssl}my-account.php">{l s='My account'}</a>
<span class="navigation-pipe">{$navigationPipe}</span>
{l s='My addresses'}{/capture}
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
				<h3 class="color-pink">{l s='My addresses'}</h3>
				<p>{l s='Configure your billing and delivery addresses that will be
				preselected by default when you make an order. You can also add
				additional addresses, which can be useful for sending gifts or receiving
				your order at the office.'}</p>
				
				<span class="btn"><span><a href="{$base_dir_ssl}address.php" title="{l s='Add an address'}" class="button_large">
				{l s='Add an address'}</a></span></span>
				<div class="clear spacer"></div>
				{if $addresses}
				<div class="addresses">
				<h3>{l s='Your addresses are listed below.'}</h3>
				<p>{l s='Be sure to update them if they have changed.'}</p>
				
				{foreach from=$addresses item=address name=myLoop}
				
				<div class="left w-1-2">
					<div class="m-20">
						<fieldset><legend>{$address.alias}</legend>
					<ul class="address">
					{if $address.company}
					<li class="address_company">{$address.company}</li>
					{/if}
					<li class="address_name">{$address.firstname} {$address.lastname}</li>
					<li class="address_address1">{$address.address1}</li>
					{if $address.address2}
					<li class="address_address2">{$address.address2}</li>
					{/if}
					<li class="address_city">{$address.postcode} {$address.city}</li>
					<li class="address_country">{$address.country}{if
					isset($address.state)} ({$address.state}){/if}</li>
					{if $address.phone}
					<li class="address_phone">{$address.phone}</li>
					{/if} {if $address.phone_mobile}
					<li class="address_phone_mobile">{$address.phone_mobile}</li>
					{/if}
					<li>
						<div class="s-spacer"></div>
						<span class="btn"><span>
						<a href="{$base_dir_ssl}address.php?id_address={$address.id_address|intval}"
						title="{l s='Update'}">{l s='Update'}</a>
						</span></span>
						<span class="btn right"><span>
						<a href="{$base_dir_ssl}address.php?id_address={$address.id_address|intval}&amp;delete"
						onclick="return confirm('{l s='Are you sure?'}');"
						title="{l s='Delete'}">{l s='Delete'}</a>
						</span>	</span>
					</li>
					</ul>
				</fieldset>
					</div>
				</div>
				{/foreach}
				<p class="clear" />
				
				</div>
				{else}
				<p class="warning">{l s='No addresses available.'}&nbsp;<a
					href="{$base_dir_ssl}address.php">{l s='add a new one!'}</a></p>
				{/if}
				
				

		</div>
	</div>
	
<div class="clear"></div>
<!-- end of p-20 --></div>
<!-- #include file="footer.tpl" -->