{if $status == 'ok'}
	<p>{l s='Your order on'} <span class="bold">{$shop_name}</span> {l s='is complete.'}
		<br /><br />
		{l s='Please send us a cheque with:'}
		<br /><br />- {l s='an amount of'} <span class="price">{$total_to_pay}</span>
		<br /><br />- {l s='payable to the order of'} <span class="bold">{if $chequeName}{$chequeName}{else}___________{/if}</span>
		<br /><br />- {l s='mail to'} <span class="bold">{if $chequeAddress}{$chequeAddress}{else}___________{/if}</span>
		<br /><br />{l s='An e-mail has been sent to you with this information.'}
		<br /><br /><span class="bold">{l s='Your order will be sent as soon as we receive your payment.'}</span>
		<br /><br />{l s='For any questions or for further information, please contact our'} <a href="{$base_dir_ssl}contact-form.php">{l s='customer support'}</a>.
	</p>
{else}
	<p class="warning">
		{l s='We noticed a problem with your order. If you think this is an error, you can contact our'} 
		<a href="{$base_dir_ssl}contact-form.php">{l s='customer support'}</a>.
	</p>
{/if}
