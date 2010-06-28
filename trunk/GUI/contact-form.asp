{capture name=path}{l s='Contact'}{/capture} 



<!-- #include file="inc-global/init.php" -->

<!-- #include file="css/style.css" -->
<!-- #include file="css/global.css" -->

<!-- #include file="js/jquery.search.js" -->
<!-- #include file="js/init.js" -->
<!-- #include file="inc-global/header.html" -->



<div class="p-20">

	<!-- #include file="inc-global/breadcrumb.html" -->
	{include file="$GUI_THEME_PATH/inc-global/breadcrumb.html"}
	
	
	
<div class="clear"></div>

<div class="w-1-2 left">
	<div class="p-20">
	<h2>{l s='Contact us'}</h2>
{if isset($confirmation)}
<p>{l s='Your message has been successfully sent to our team.'}</p>
<ul class="footer_links">
	<li><a href="{$base_dir}"><img class="icon" alt=""
		src="{$img_dir}icon/home.gif" /></a><a href="{$base_dir}">{l s='Home'}</a></li>
</ul>
{else}
<p class="bold">{l s='For questions about an order or for information
about our products'}.</p>
{include file="$GUI_THEME_PATH/inc-global/errors.html"}
<form action="{$request_uri|escape:'htmlall':'UTF-8'}" method="post" class="form-label">
<h3>{l s='Send a message'}</h3>
<p class="select"><label for="id_contact">{l s='Subject'}</label> <select class="ipt"
	id="id_contact" name="id_contact"
	onchange="showElemFromSelect('id_contact', 'desc_contact')">
	<option value="0">{l s='-- Choose --'}</option>
	{foreach from=$contacts item=contact}
	<option value="{$contact.id_contact|intval}" {if
		isset($smarty.post.id_contact) && $smarty.post.id_contact==
		$contact.id_contact}selected="selected"{/if}>{$contact.name|escape:'htmlall':'UTF-8'}</option>
	{/foreach}
</select></p>
<p id="desc_contact0" class="desc_contact">&nbsp;</p>
{foreach from=$contacts item=contact}
<p id="desc_contact{$contact.id_contact|intval}" class="desc_contact"
	style="display: none;"><label>&nbsp;</label>{$contact.description|escape:'htmlall':'UTF-8'}</p>
{/foreach}
<p class="text"><label for="email">{l s='E-mail address'}</label> <input
	type="text" id="email" name="from"  class="ipt" value="{$email}" /></p>
<p class="textarea"><label for="message">{l s='Message'}</label> <textarea
	id="message" name="message" rows="7" cols="35"  class="ipt">{if isset($smarty.post.message)}{$smarty.post.message|escape:'htmlall':'UTF-8'|stripslashes}{/if}</textarea>
</p>
<span class="btn"><span><input type="submit" name="submitMessage" id="submitMessage" value="{l s='Send'}"  /></span></span>
</form>
{/if}
	</div>
</div>
<div class="w-1-2 right">
	<div class="p-20">
	<p><strong>Phone:</strong><br />
		(786) 291-4817</p>
	<p><strong>Headquarter Address:</strong><br />
		Injoyme LLC, 14 NE, 1st Ave. Suite 229 Miami, Fl. 33132</p>
	<p><strong>Hours of operation:</strong><br />
		9AM-6PM EST Monday-Thursday<br />
		9AM-4PM EST Friday<br />
		9AM-9PM EST Sunday</p>
	<p><strong>E-Mail : </strong><a href="mailto:info@injoyme.com">info@injoyme.com</a></p>
	<p>In order to assist you in tracking your order or making a change to it, please include your order number, your name and telephone number, provide us with as much information as possible to help facilitate your request. We will try to answer your inquiry, order status, or questions before the end of the business days, or within 24 hours of the following business day.</p>
	<p><strong>International operations:</strong><br />
		<strong>Bogota, Colombia:</strong> Calle 119a N. 12-31 Ofc. 305. Bogota, Colombia.<br />
		<strong>Paris, France:</strong> 14-16 Rue Moliere. 92400 Courbevoie, France. <br />
		Tel: +33(1) 47 88 86 30 </p>
	</div>
</div>

<div class="clear"></div>
<!-- end of p-20 -->
</div>
<!-- #include file="inc-global/footer.html" -->