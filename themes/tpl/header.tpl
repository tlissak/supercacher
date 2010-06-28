<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="{$lang_iso}">
<head>
<title>{$meta_title|escape:'htmlall':'UTF-8'}</title>
<!-- {if !$content_only} -->
{if isset($meta_description) AND $meta_description}
<meta name="description" content="{$meta_description|escape:htmlall:'UTF-8'}" />
{/if} 
{if isset($meta_keywords) AND $meta_keywords}
<meta name="keywords" content="{$meta_keywords|escape:htmlall:'UTF-8'}" />
{/if}
<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />
<meta name="robots" content="{if isset($nobots)}no{/if}index,follow" />
<link rel="icon" type="image/vnd.microsoft.icon" href="{$img_ps_dir}favicon.ico" />
<link rel="shortcut icon" type="image/x-icon" 	href="{$img_ps_dir}favicon.ico" />
<link href="{$css_dir}/style.css" rel="stylesheet" type="text/css"	 />
<link href="css/style.css" rel="stylesheet" type="text/css"	 />
<script type="text/javascript" src="{$js_dir}jquery.last.js"></script>
<script type="text/javascript" src="{$js_dir}jquery.include.js"></script>
<script type="text/javascript" src="{$js_dir}jquery.nyroModal.js"></script>
<script type="text/javascript" src="{$js_dir}jquery.search.js"></script>
<script type="text/javascript" src="{$js_dir}jquery.cycle.js"></script>
<script type="text/javascript" src="{$js_dir}jquery.tools.js"></script>
<script type="text/javascript" src="{$js_dir}wishlist.js"></script>
<script type="text/javascript" src="{$js_dir}history.js"></script>
<script type="text/javascript" src="{$js_dir}jquery.rating.pack.js"></script>
<script type="text/javascript" src="{$js_dir}init.js"></script>
<script type="text/javascript">
	var baseDir 		= '{$content_dir}';
	var baseDirSSL		= '{$base_dir_ssl}';
	var static_token 	= '{$static_token}';
	var token 			= '{$token}';
	var currencyDecimals		= parseFloat('{$currency->decimals}') ;
	var priceDisplayPrecision 	= parseFloat('{$priceDisplayPrecision}') ;
	var priceDisplayPrecision 	= priceDisplayPrecision * currencyDecimals ;
</script>
{$HOOK_HEADER}
<!-- {/if} -->
</head>
<body {if $page_name}id="{$page_name|escape:'htmlall':'UTF-8'}"{/if}>
<!-- {if !$content_only} -->

<div class="wrapper top">
	
        <div class="left p-5">
            
        <a href="#"><img src="{$img_dir}ico-home.png" /></a>
        <span class="gap"></span>
        09 02 04 58 67
        <span class="gap">-</span>		  
        Horaires du Lundi au vendredi de 10h a 22h
        <span class="gap">-</span> 	
        Livraison a paris uniquement 			
        </div>
        <div class="right p5">10 - TAMOUZ - 2010</div>
    
    <div class="hline m-5"></div>
    <div class="left m-10">
   <a href="{$base_dir}"
	title="{$shop_name|escape:'htmlall':'UTF-8'}"><img
	src="{$img_dir}logo.png" alt="{$shop_name|escape:'htmlall':'UTF-8'}"
	id="logo"  /></a>
    
   	</div>
    <div class="right p-20">  
    <form action="{$base_dir}search.php" method="get">
    	<input type="text" class="ipt left m-1 search-ipt" size="33" name="search_query" 
        value="{if isset($smarty.get.search_query)}{$smarty.get.search_query|htmlentities:$ENT_QUOTES:'utf-8'|stripslashes}{/if}"
      /><span class="btn m-1"><span><input type="submit" value="  {l s='Search'}  "  /></span></span>
        </form>
    </div>
    <div class="clear h10"></div>
</div>
<div class="wrapper">
	
    <ul class="menu-tl menu">
    	<li class="selected"><a href="#">ACCUEIL</a></li>
        <li><a href="{$base_dir}contact-form.php">CONTACT</a></li>
        <li><a href="#">PROMOTIONS</a></li>
    </ul>
    <ul class="menu-tr menu">
    	<li><a href="#">LIVRAISON</a></li>
        <li><a href="{$base_dir}my-account.php">MON COMPTE</a></li>
        <li><a href="{$base_dir}order.php">PANIER</a></li>
    </ul>
    <div style="height:30px; background:#e5e5e5 ; border-top:#a7a7a7 2px solid; clear:both">
    	<ul class="menu-c menu">
    	
       
        {foreach from=$categories_sort item='gcat' name=gsubcategories}
		<li><a href="{$link->getCategoryLink($gcat.id, $gcat.link_rewrite)|escape:'htmlall':'UTF-8'}" title="{$gcat.name|escape:'htmlall':'UTF-8'}">{$gcat.name|htmlspecialchars}</a> 
            {if $gcat.children|@count > 0}
            	<ul>
            	{foreach from=$gcat.children item=cnode name=gsubcategories}
            		<li><a href="{$link->getCategoryLink($cnode.id, $cnode.link_rewrite)|escape:'htmlall':'UTF-8'}" title="{$cnode.name|escape:'htmlall':'UTF-8'}">{$cnode.name|htmlspecialchars}</a> </li>            
            	{/foreach}
            	</ul>
            {/if}
            
	</li>
{/foreach}
         
    </ul>
     
    </div>
    
</div>
{$HOOK_TOP}{$HOOK_LEFT}{$HOOK_RIGHT}
<!-- {/if} -->
    

<!-- {if !$content_only} -->
<div class="outer">
	<div id="main" class="wrapper" >
		<div class="s-spacer"></div>
<!-- {/if} -->