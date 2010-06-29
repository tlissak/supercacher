{if !$content_only} {$HOOK_RIGHT_COLUMN}
</div><!-- wrapper -->
</div><!-- outer -->




<div class="bottom">
<div id="footer" class="wrapper">
<div class="spacer"></div>


<div class="left center txt-center" style="width:340px;" >

{foreach from=$categories_sort item='gcat'}
<span>
 	<a href="{$link->getCategoryLink($gcat.id_category, $gcat.link_rewrite)|escape:'htmlall':'UTF-8'}" title="{$gcat.name|escape:'htmlall':'UTF-8'}">
    {$gcat.name|htmlspecialchars}  
    </a> 
	</span>
{/foreach}


</div>
<div class="right txt-right" style="width:450px;" >
	<span><a href="{$base_dir}cms.php?id_cms=4">About Us</a></span>
	<span><a href="{$base_dir}cms.php?id_cms=3">Terms of use</a></span>
	<span><a href="{$base_dir}cms.php?id_cms=9">Privacy policy</a></span>
	<span><a href="{$base_dir}cms.php?id_cms=8">Customer Service</a></span>
	<span><a href="{$base_dir}cms.php?id_cms=1">Shipping/Returns</a></span>
	<span><a href="{$base_dir}cms.php?id_cms=7">F.A.Q</a></span>
	<span><a href="http://blog.injoyme.com/" target="_blank">INJOY's Blog</a></span>
	<span><a href="{$base_dir}cms.php?id_cms=6">Wholesale</a></span>
	<span><a href="{$base_dir}contact-form.php">Contact</a></span>
	
</div>

<div class="clear spacer"></div>

<div class="h-10"></div>

<div class="w-1-3 left">
&copy; Copyright 2010 Titoys / Tous droits
r&eacute;serv&eacute;s</div>

<div class="w-1-3 right txt-right" >
	Creation People and tech
</div>
<div class="clear s-spacer"></div>

<div class="txt-center font-10">
This website is in compliance with 18 U.S.C. 2257 all buyers appearing on this site have contractually represented to us that they are 18 years of age or older.</div>
{$HOOK_FOOTER}</div>



</div>




{/if}
</body>
</html>
