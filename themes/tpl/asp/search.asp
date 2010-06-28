{capture name=path}{l s='Search'}{/capture}
<!-- #include file="inc-global/init.php" -->

<!-- #include file="css/style.css" -->
<!-- #include file="css/global.css" -->

<!-- #include file="js/jquery.search.js" -->
<!-- #include file="js/init.js" -->
<!-- #include file="header.tpl" -->
<div class="p-20">

<!-- #include file="inc-global/breadcrumb.tpl" -->
{include file="$tpl_dir/inc-global/breadcrumb.tpl"}

<div class="clear"></div>
<h3>{l s='Search'}&nbsp;{if $nbProducts > 0}"
{if $query}{$query|escape:'htmlall':'UTF-8'}
{elseif $tag}{$tag|escape:'htmlall':'UTF-8'}
{elseif $ref}{$ref|escape:'htmlall':'UTF-8'}
{/if}"{/if}</h3>

{include file="$tpl_dir/inc-global/errors.tpl"} 
{if !$nbProducts}
	<p class="warning">{if $query} {l s='No results found for your
	search'}&nbsp;"{$query|escape:'htmlall':'UTF-8'}" {else} {l s='Please
	type a search keyword'} {/if}</p>
{else}
	<div class="right">
	{include file="$tpl_dir/inc-private/product-sort.tpl"}
	</div>
	<h4>{$nbProducts|intval} &nbsp; {if $nbProducts
	== 1}{l s='result has been found.'}{else}{l s='results have been
	found.'}{/if}</h4>
	
	{include file="$tpl_dir/inc-private/product-list.tpl" products=$products} 
	<div class="clear"></div>
	{include file="$tpl_dir/inc-private/pagination.tpl"} 
	<div class="clear"></div>
{/if}
</div>
