<p id="loyalty" class="align_justify">
{if $points}
	{l s='By buying this product you can collect up to'} <b>{$points} 
	{if $points > 1}{l s='loyalty points'}{else}{l s='loyalty point'}{/if}</b>.
	<br /> 
	{l s='Your cart will total'} <b>{$total_points} {if $total_points > 1}{l s='points'}{else}{l s='point'}{/if}</b> 
	{l s='that can be converted into a voucher of'} {convertPrice price=$voucher}.{else}{l s='No reward points for this product.'}{/if}
</p>
<br class="clear" />