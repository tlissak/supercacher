<p id="loyalty" class="align_justify">
{if $points}
	{l s='By buying this product you can collect up to' mod='loyalty'} <b>{$points} 
	{if $points > 1}{l s='loyalty points' mod='loyalty'}{else}{l s='loyalty point' mod='loyalty'}{/if}</b>.
	<br /> 
	{l s='Your cart will total' mod='loyalty'} <b>{$total_points} {if $total_points > 1}{l s='points' mod='loyalty'}{else}{l s='point' mod='loyalty'}{/if}</b> 
	{l s='that can be converted into a voucher of' mod='loyalty'} {convertPrice price=$voucher}.{else}{l s='No reward points for this product.' mod='loyalty'}{/if}
</p>
<br class="clear" />