{capture name=path}{l s='Cheque payment'}{/capture}

<div class="lineage">{include file="$tpl_dir/inc-global/breadcrumb.tpl"}</div>

<h2>{l s='Order summary'}</h2>

{assign var='current_step' value='payment'}
{include file="$tpl_dir/inc-private/order-steps.tpl"} 
{include file="$tpl_dir/inc-global/errors.tpl"} 

{if $nbProducts <= 0}
	<p class="warning">{l s='Your shopping cart is empty.'}</p>
{else}

<h3>{l s='Cheque payment'}</h3>
<form action="{$this_path_ssl}validation.php" method="post">
	<p>
		<img src="{$this_path}cheque.jpg" alt="{l s='cheque'}" style="float:left; margin: 0px 10px 5px 0px;" />
		{l s='You have chosen to pay by cheque.'}
		<br/><br />
		{l s='Here is a short summary of your order:'}
	</p>
	<p style="margin-top:20px;">
		- {l s='The total amount of your order is'}
		<span id="amount" class="price">{displayPrice price=$total}</span>
		{l s='(tax incl.)'}
	</p>
	<p>
		-
		{if $currencies|@count > 1}
			{l s='We accept several currencies for cheques.'}
			<br /><br />
			{l s='Choose one of the following:'}
			<select id="currency_payement" name="currency_payement" onchange="setCurrency($('#currency_payement').val());">
			{foreach from=$currencies item=currency}
				<option value="{$currency.id_currency}" {if $currency.id_currency == $cust_currency}selected="selected"{/if}>{$currency.name}</option>
			{/foreach}
			</select>
		{else}
			{l s='We accept the following currency to be sent by cheque:'}&nbsp;<b>{$currencies.0.name}</b>
			<input type="hidden" name="currency_payement" value="{$currencies.0.id_currency}" />
		{/if}
	</p>
	<p>
		{l s='Cheque owner and address information will be displayed on the next page.'}
		<br /><br />
		<b>{l s='Please confirm your order by clicking \'I confirm my order\''}.</b>
	</p>
	<p class="cart_navigation">
		<a href="{$base_dir_ssl}order.php?step=3" class="button_large">{l s='Other payment methods'}</a>
		<input type="submit" name="submit" value="{l s='I confirm my order'}" class="exclusive_large" />
	</p>
</form>
{/if}
