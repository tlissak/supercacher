<!-- MODULE Loyalty -->
<p id="loyalty">
	{if $points > 0}{l s='By check out this shopping cart you can collect up to'} 
	<b>{$points} {if $points > 1}{l s='loyalty points'}{else}{l s='loyalty point'}{/if}</b> 
	
	<br />
	{l s='that can be converted into a voucher of'} {convertPrice price=$voucher}.{else}{l s='Add some products to your shopping cart to collect some loyalty points.'}{/if}
</p>
<!-- END : MODULE Loyalty -->