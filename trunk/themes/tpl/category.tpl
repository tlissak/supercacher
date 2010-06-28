<!-- #include file="inc-global/init.php" -->

<!-- #include file="css/style.css" -->
<!-- #include file="css/global.css" -->
<!-- #include file="css/layout.css" -->

<!-- #include file="js/jquery.search.js" -->
<!-- #include file="js/jquery.tools.js" -->
<!-- #include file="js/init.js" -->
<!-- #include file="header.tpl" -->
<div class="wrapper">
{if $category->id AND $category->active}
    	
	

	<div class="left wt-1-4">
    <div class="m-20">
    	<div class="hline-gray"></div>
		<div class="spacer"></div>   
        {assign var='isparents' value='no'}
        {foreach from=$categories_sort item='gcat' name=gsubcategories}
            {if $gcat.children|@count > 0}
            	{foreach from=$gcat.children item=cnode name=gsubcategories}
                	{if $cnode.id==$category->id}
                    	{assign var='subcategories' value=$gcat.children}
                        {assign var='isparents' value='yes'}
                    {/if}
            	{/foreach}
            {/if}
         {/foreach}         
	{if isset($subcategories)}	
	<!-- Subcategories -->
		<ul class="category-subcats">
			{foreach from=$subcategories item=subcategory}
            {if $subcategory.id_category > 0}
            	{assign var='id' value=$subcategory.id_category}
            {else}
            	{assign var='id' value=$subcategory.id}
            {/if}
			<li>
			<a href="{$link->getCategoryLink($id, $subcategory.link_rewrite)|escape:'htmlall':'UTF-8'}" >
			<span class="gap-r">&rsaquo;</span>
			{$subcategory.name|escape:'htmlall':'UTF-8'}</a>
            </li>
			{/foreach}
			</ul>
	{/if} 
	</div>
    </div>









	<div class="left wt-2-4">
    	<div class="m-20">
        <div class="hline-red"></div>
          
		<!-- #include file="inc-global/breadcrumb.tpl" -->
        {include file="$tpl_dir/inc-global/breadcrumb.tpl"}    
        
        
            {if $isparents == 'no'}
            <ul class="product-list">        	
                {foreach from=$subcategories key=k  item=subcategory}
                {if $k MOD 4 == 0}<div class="clear"></div>{/if}
                <li>
                <a href="{$link->getCategoryLink($subcategory.id_category, $subcategory.link_rewrite)|escape:'htmlall':'UTF-8'}" >
                 <img src="{$link->getCatImageLink($subcategory.link_rewrite,$subcategory.id_category, 'medium')}" alt="{$gcat.name}"  /><br />
                {$subcategory.name|escape:'htmlall':'UTF-8'}</a>
                </li>
                {/foreach}			
             </ul>
             {/if}
		{if $products}		
        
        	
            
            <div class="grad p-2 borders" >
        	 <div class="right">    	
                <!-- #include file="inc-private/product-sort.tpl" -->
                {include file="$tpl_dir/inc-private/product-sort.tpl"}
	        </div> 
            <div class="left">
			<!-- #include file="inc-private/pagination.tpl" -->
			{include file="$tpl_dir/inc-private/pagination.tpl"} 
            </div>
            <div class="clear"></div>
            </div>
            			
			<div class="clear spacer"></div>						
			<!-- #include file="inc-private/product-list.tpl" -->
			{include file="$tpl_dir/inc-private/product-list.tpl" products=$products} 
			<div class="clear"></div>
			<!-- #include file="inc-private/pagination.tpl" -->
			{include file="$tpl_dir/inc-private/pagination.tpl"} 
			<div class="clear"></div>
			<span>{$nb_products|intval}&nbsp; {if $nb_products>1}{l s='products'}{else}{l s='product'}{/if}</span>		
		{elseif !isset($subcategories)}
			<p class="warning">{l s='There is no product in this category.'}</p>
		{/if} 
        </div>	
	</div>
    
    
    
    
    {include file="$tpl_dir/inc-global/right.tpl"}
    <!-- #include file="inc-global/right.tpl" -->
    
    
	<div class="clear"></div>
{elseif $category->id}
	<p class="warning">{l s='This category is currently unavailable.'}</p>
{/if}
	
</div> <!-- end of p-20 -->
<!-- #include file="footer.tpl" -->