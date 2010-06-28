{if $GUI.loaded == 'X' }
	{ include file="$GUI_THEME_PATH/inc-global/header.html" }
{ else }
	themes/tpl/header.tpl<br /> { $GUI_THEME_PATH }
	It seems that GUI Class with instanse $gui not loaded <br />
	try to include the GUI init.class.php to root/init.php and call $gui = GUI($smarty) ;
	<hr />
{/if}