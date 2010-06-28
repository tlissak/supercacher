<!-- #include file="inc-global/init.php" -->

<!-- #include file="css/style.css" -->
<!-- #include file="css/global.css" -->

<!-- #include file="js/jquery.search.js" -->
<!-- #include file="js/init.js" -->
<!-- #include file="inc-global/header.html" -->
<div class="p-20">

{capture name=path}{l s=$cms->meta_title}{/capture}
{include file="$GUI_THEME_PATH/inc-global/breadcrumb.html"}

<div class="clear"></div>


{if $cms} 
	{if $content_only}
		<div style="text-align: left; padding: 10px;" class="rte"> {$cms->content}</div>
	{else}
		<div class="rte">{$cms->content}</div>
	{/if} 
{else}
	{l s='This page does not exist.'} 
{/if} 

{if !$content_only}
	<p><a href="{$base_dir}" title="{l s='Home'}">{l s='Home'}</a></p>
{/if}




</div> <!-- end of p-20 -->
<!-- #include file="inc-global/footer.html" -->