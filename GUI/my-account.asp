{capture name=path}{l s='My account'}{/capture}
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
					{l s='My account'}
					<h4>{l s='Welcome to your account. Here you can manage your addresses
					and orders.'}</h4>
					
		</div>
	</div>
	
<div class="clear"></div>
<!-- end of p-20 -->
</div>
<!-- #include file="inc-global/footer.html" -->
