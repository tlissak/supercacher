<!-- #include file="inc-global/init.php" -->

<!-- #include file="css/style.css" -->
<!-- #include file="css/global.css" -->

<!-- #include file="js/jquery.search.js" -->
<!-- #include file="js/init.js" -->
<!-- #include file="inc-global/header.html" -->


<div class="p-20">


<!-- {if !$content_only} -->

{include file="$GUI_THEME_PATH/inc-private/product_js.tpl"}
<!-- #include file="inc-private/product_js.tpl" -->
{include file="$GUI_THEME_PATH/inc-global/breadcrumb.html"}
<!-- #include file="inc-global/breadcrumb.html" -->
<div class="clear"></div>

<!-- {/if} -->
<!-- RIGHT -->
	<div class="w-2-5 left">
	<!--{if $have_image} -->
		<img src="{$link->getImageLink($product->link_rewrite, $cover.id_image, 'large')}"
		title="{$product->name|escape:'htmlall':'UTF-8'}"	alt="{$product->name|escape:'htmlall':'UTF-8'}" id="bigpic" /> 
	<!--{else} --><img	src="{$img_prod_dir}{$lang_iso}-default-large.jpg" alt=""	title="{$product->name|escape:'htmlall':'UTF-8'}" /> 
	<!--{/if} -->
    <!--
	{include file="$GUI_THEME_PATH/inc-private/product-thumb.tpl" }
    -->
	<!-- #include file="inc-private/product-thumb.tpl" -->
	<div class="txt-center">
	<div class="clear s-spacer"></div>
	
	<img src="GUI/images/discration.png" /> 
	<div class="clear s-spacer"></div>
	 <a href="{$dir_path}cms.php?id_cms=1"><img src="GUI/images/shipping.png" /></a>
	</div>
	</div>
<!-- / RIGHT -->


<!-- LEFT -->
	<div class="w-3-5 left">
	<div class="p-15">
	
	<div style="min-height:460px;">
	<div class="s-spacer"></div>
	<h3>{$product->name|escape:'htmlall':'UTF-8'}</h3>
	
	
	
	{include file="$GUI_THEME_PATH/inc-private/product-add-to-cart.tpl" }
	<!-- #include file="inc-private/product-add-to-cart.tpl" -->
	<div class="spacer"></div>
	
	
	<!-- {if $confirmation}--><p class="confirmation">{$confirmation}</p><!--{/if} -->   
	{include file="$GUI_THEME_PATH/inc-private/product-packcont.tpl" }
	<!-- #include file="inc-private/product-packcont.tpl" -->
	{include file="$GUI_THEME_PATH/inc-private/product-color.tpl" }
	<!-- #include file="inc-private/product-color.tpl" -->
	{include file="$GUI_THEME_PATH/inc-private/product-discount.tpl" }
	<!-- #include file="inc-private/product-discount.tpl" -->
	
	
	{include file="$GUI_THEME_PATH/inc-private/product-desc.tpl" }	
	<!-- #include file="inc-private/product-desc.tpl" -->
	
	<div class="clear"></div>
	{include file="$GUI_THEME_PATH/inc-private/product-custom.tpl" }
	<!-- #include file="inc-private/product-custom.tpl" -->
	{include file="$GUI_THEME_PATH/inc-private/product-pack.tpl" }
	<!-- #include file="inc-private/product-pack.tpl" -->
	
	<div class="clear"></div>
	{$HOOK_PRODUCT_FOOTER} 
	<!--{if $HOOK_EXTRA_RIGHT}-->{$HOOK_EXTRA_RIGHT}<!--{/if} -->
	
	<!--{if $product->description || $features || $accessories || $HOOK_PRODUCT_TAB || $attachments}-->
	{$HOOK_PRODUCT_TAB} {$HOOK_PRODUCT_TAB_CONTENT}
	<!--{/if}-->
	<!--{if $HOOK_PRODUCT_ACTIONS}--> {$HOOK_PRODUCT_ACTIONS} <!--{/if}-->
	
		{include file="$GUI_THEME_PATH/inc-private/product-accessories.tpl" }	
	<!-- #include file="inc-private/product-accessories.tpl" -->
	
	
	</div>
	
	</div>
	</div>
<!-- / LEFT -->

<div class="clear"></div>


</div>


<!-- #include file="inc-global/footer.html" -->
