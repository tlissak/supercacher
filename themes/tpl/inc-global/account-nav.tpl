


<ul id="account-board">
	<li>&rsaquo; <a	href="{$base_dir_ssl}my-account.php" title="{l s='My Account'}">{l s='My Account'}</a></li>
	
	<li>&rsaquo; <a	href="{$base_dir_ssl}history.php" title="{l s='Orders'}">{l s='History and details of your orders'}</a></li>
	{if $returnAllowed}
	<li>&rsaquo; <a href="{$base_dir_ssl}order-follow.php" title="{l s='Merchandise returns'}">{l s='Merchandise returns'}</a></li>
	{/if}
	<li>&rsaquo; <a href="{$base_dir_ssl}order-slip.php" title="{l s='Credit slips'}">{l s='Credit slips'}</a></li>
	<li>&rsaquo; <a href="{$base_dir_ssl}addresses.php" title="{l s='Addresses'}">{l	s='Your addresses'}</a></li>
	<li>&rsaquo; <a href="{$base_dir_ssl}identity.php" title="{l s='Information'}">{l s='Your personal information'}</a></li>
	{if $voucherAllowed}
	<li>&rsaquo; <a href="{$base_dir_ssl}discount.php" title="{l s='Vouchers'}">{l s='Your vouchers'}</a></li>
	{/if}
	
	
	
	
	
	<li>&rsaquo; <a href="{$base_dir_ssl}modules/blockwishlist/mywishlist.php" title="{l s='My wishlists' mod='blockwishlist'}">{l s='My wishlists' mod='blockwishlist'}</a></li>
	<li>&rsaquo; <a href="{$base_dir_ssl}modules/loyalty/loyalty-program.php" title="{l s='My loyalty points' mod='loyalty'}">{l s='My loyalty points' mod='loyalty'}</a></li>
	<li>&rsaquo; <a href="{$base_dir_ssl}modules/mailalerts/myalerts.php" title="{l s='My alerts' mod='mailalerts'}">{l s='My alerts' mod='mailalerts'}</a></li>
	
	{$HOOK_CUSTOMER_ACCOUNT}
</ul>
<div class="spacer"></div>
<div class="p-20">
	<a href="{$base_dir_ssl}authentication.php?logout" title="{l s='Logout'}">{l s='Logout'}</a>
	<div class="spacer"></div>
	<a href="{$base_dir}" title="{l s='Home'}">{l s='Home'}</a>
</div>


