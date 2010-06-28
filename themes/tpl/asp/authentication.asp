{capture name=path}{l s='Login'}{/capture}
{assign var='current_step' value='login'} 

<!-- #include file="inc-private/auth_js.tpl" -->
{include file="$tpl_dir/inc-private/auth_js.tpl"}



<!-- #include file="inc-global/init.php" -->

<!-- #include file="css/style.css" -->
<!-- #include file="css/global.css" -->

<!-- #include file="js/jquery.search.js" -->
<!-- #include file="js/init.js" -->
<!-- #include file="header.tpl" -->



<!-- #include file="inc-global/base_dir_js.html" -->
{include file="$tpl_dir/inc-global/base_dir_js.html"}

<div class="p-15">

<div class="left w-1-5 bg-lightgray">
<div class="hline-red"></div>
<div class="m-20">
{include file="$tpl_dir/inc-private/order-steps.tpl"} 
<!-- #include file="inc-private/order-steps.tpl" -->
</div>
</div>



<div class="right w-4-5 bg-lightgray">
<div class="hline-red"></div>
<div class="m-20">


<!-- #include file="inc-global/breadcrumb.tpl" -->
{include file="$tpl_dir/inc-global/breadcrumb.tpl"}

<h3>{l s='Shopping cart summary'}</h3>
{include file="$tpl_dir/inc-global/errors.tpl"} 
<!-- #include file="inc-global/errors.tpl" -->
  
{if isset($confirmation)}
<div class="left  m-20">
	<p class="success">{l s='Your account has been successfully created.'}</p>
	<p><span class="btn"><span><a href="{$base_dir_ssl}my-account.php">{l s='Your account'}</a></span></span></p>
</div>
{else}
    {if !isset($email_create)}
    
    <div class="left  m-20"><form action="{$base_dir_ssl}authentication.php" method="post"
        id="create-account_form" class="form-label-s">
    
    <h3>{l s='Create your account'}</h3>
    <h4>{l s='Enter your e-mail address to create your account'}.</h4>
    <p class="text">
    <label for="email_create">{l s='E-mail address'}</label>
    <span><input type="text" id="email_create" name="email_create"
        value="{if isset($smarty.post.email_create)}{$smarty.post.email_create|escape:'htmlall'|stripslashes}{/if}"
        class="ipt" /></span></p>
    <p class="submit">{if isset($back)}
        <input type="hidden" name="back" value="{$back|escape:'htmlall':'UTF-8'}" />{/if} 
        <span class="btn"><span><input
        type="submit" id="SubmitCreate" name="SubmitCreate" value="{l s='Create your account'}" /></span>
        </span>
        <input	type="hidden"  name="SubmitCreate" 
        value="{l s='Create your account'}" /></p>
    
    </form>
    </div>
    
    <div class="left m-20">
    <form action="{$base_dir_ssl}authentication.php" method="post"
        id="login_form" class="form-label-s">
    
    <h3>{l s='Already registered ?'}</h3>
    <p class="clear p-2">
        <label for="email">{l s='E-mail address'}</label> <span><input
        type="text" id="email" name="email"
        value="{if isset($smarty.post.email)}{$smarty.post.email|escape:'htmlall'|stripslashes}{/if}"
        class="ipt right" /></span></p>
    <p class="clear p-2"><label for="passwd">{l s='Password'}</label> <span><input
        type="password" id="passwd" name="passwd"
        value="{if isset($smarty.post.passwd)}{$smarty.post.passwd|escape:'htmlall'|stripslashes}{/if}"
        class="ipt right" /></span></p>
    <p class="clear">{if isset($back)}<input type="hidden" class="hidden"
        name="back" value="{$back|escape:'htmlall':'UTF-8'}" />{/if}
     </p>
        <div class="m-5">
        <span class="btn right"><span><input type="submit" id="SubmitLogin"
         name="SubmitLogin" class="button" 	value="{l s='Log in'}" /></span></span>
         </div>
         
    <p class=""><a href="{$base_dir}password.php">{l s='Forgot
    your password?'}</a></p>
    
    </form></div>
    
    
    
    
    <div class="clear"></div>
    {else}
<form action="{$base_dir_ssl}authentication.php" method="post"
	id="account-creation_form" class="form-label-s">
	<div class="left m-10">
<h3>{l s='Your personal information'}</h3>
<p class="radio required">

	<span>{l s='Title'}</span> 
	
<p class="clear">
	<label for="id_gender1" class="top">{l s='Mr.'}</label>
	<input type="radio"	name="id_gender" id="id_gender1" value="1" {if
	isset($smarty.post.id_gender) && $smarty.post.id_gender==
	1}checked="checked" {/if} /> 
</p>
<p class="clear">	
	<label for="id_gender2" class="top">{l s='Ms.'}</label>
	<input type="radio" name="id_gender" id="id_gender2"
	value="2" {if isset($smarty.post.id_gender) && $smarty.post.id_gender==
	2}checked="checked" {/if} /> 
</p>
<p class="clear">	

	<label for="customer_firstname">{l s='First name'} <sup>*</sup></label>
	<input onKeyUp="$('#firstname').val(this.value);"
	type="text" class="ipt" id="customer_firstname"
	name="customer_firstname"
	value="{if isset($smarty.post.customer_firstname)}{$smarty.post.customer_firstname}{/if}" />
</p>

<p class="clear">
	<label for="customer_lastname">{l s='Last name'} <sup>*</sup></label>
	<input onKeyUp="$('#lastname').val(this.value);"
	type="text" class="ipt" id="customer_lastname"
	name="customer_lastname"
	value="{if isset($smarty.post.customer_lastname)}{$smarty.post.customer_lastname}{/if}" />
</p>
<p class="clear"><label for="email">{l s='E-mail'} <sup>*</sup></label>
	<input
	type="text" class="ipt" id="email" name="email"
	value="{if isset($smarty.post.email)}{$smarty.post.email}{/if}" /> 
</p>
<p class="clear">
	<label for="passwd">{l s='Password'} <sup>*</sup></label>
<input type="password" class="ipt" name="passwd" id="passwd" />
<br />
<span class="form_info">{l s='(5 characters min.)'}</span></p>

<p class="clear">
	<span>{l s='Birthday'}</span><br />
 <select id="days" name="days" class="ipt">
	<option value="">-</option>
	{foreach from=$days item=day}
	<option value="{$day|escape:'htmlall':'UTF-8'}" {if ($sl_day==
		$day)} selected="selected"{/if}>{$day|escape:'htmlall':'UTF-8'}&nbsp;&nbsp;</option>
	{/foreach}
</select> {* {l s='January'} {l s='February'} {l s='March'} {l
s='April'} {l s='May'} {l s='June'} {l s='July'} {l s='August'} {l
s='September'} {l s='October'} {l s='November'} {l s='December'} *}
	<select	id="months" name="months" class="ipt">
	<option value="">-</option>
	{foreach from=$months key=k item=month}
	<option value="{$k|escape:'htmlall':'UTF-8'}" {if ($sl_month==
		$k)} selected="selected"{/if}>{l s="$month"}&nbsp;</option>
	{/foreach}
</select>
	<select id="years" name="years" class="ipt">
	<option value="">-</option>
	{foreach from=$years item=year}
	<option value="{$year|escape:'htmlall':'UTF-8'}" {if ($sl_year==
		$year)} selected="selected"{/if}>{$year|escape:'htmlall':'UTF-8'}&nbsp;&nbsp;</option>
	{/foreach}
</select></p>

<p class="clear">
	{l s='Sign up for our newsletter'}
	<input type="checkbox" class="right" name="newsletter"
	id="newsletter" value="1" {if
	isset($smarty.post.newsletter) AND $smarty.post.newsletter==
	1} checked="checked" {/if} /> </p>
<p class="clear">
	{l s='Receive special offers from our partners'}
	<input type="checkbox" name="optin" class="right" id="optin"
		value="1" {if isset($smarty.post.optin) AND $smarty.post.optin==
	1} checked="checked" {/if} /> </p>
	</div>
	
	
<div class="right m-10">
<h3>{l s='Your address'}</h3>
<p class="clear" ><label for="company">{l s='Company'}</label>
	<input
	type="text" class="ipt" id="company" name="company"
	value="{if isset($smarty.post.company)}{$smarty.post.company}{/if}" />
</p>
<p class="clear">
	<label for="firstname">{l s='First name'} <sup>*</sup></label>
<input type="text" class="ipt" id="firstname" name="firstname"
	value="{if isset($smarty.post.firstname)}{$smarty.post.firstname}{/if}" />
</p>
<p class="clear"><label for="lastname">{l s='Last name'} <sup>*</sup></label>
<input type="text" class="ipt" id="lastname" name="lastname"
	value="{if isset($smarty.post.lastname)}{$smarty.post.lastname}{/if}" />
</p>
<p class="clear"><label for="address1">{l s='Address'} <sup>*</sup></label> <input
	type="text" class="ipt" name="address1" id="address1"
	value="{if isset($smarty.post.address1)}{$smarty.post.address1}{/if}" />
</p>
<p><label for="address2">{l s='Address (2)'}</label> <input
	type="text" class="ipt" name="address2" id="address2"
	value="{if isset($smarty.post.address2)}{$smarty.post.address2}{/if}" />
</p>
<p class="clear">
<label for="postcode">{l s='Postal code / Zip code'} <sup>*</sup></label>
<input type="text" class="ipt" name="postcode"
	id="postcode"
	value="{if isset($smarty.post.postcode)}{$smarty.post.postcode}{/if}" />
</p>
<p class="clear">
	<label for="city">{l s='City'} <sup>*</sup></label>
		<input	type="text" class="ipt" name="city" id="city"
	value="{if isset($smarty.post.city)}{$smarty.post.city}{/if}" /> 
</p>
<p class="clear">
	<label for="id_country">{l s='Country'} <sup>*</sup></label>
	<br />
	<select name="id_country" id="id_country" class="ipt" style="width:160px;"
	onchange="$('.ext_state').hide(); $('#country_'+this.value).show();" >
	<option value="">-</option>
	{foreach from=$countries item=v}
	<option value="{$v.id_country}" {if ($sl_country==
		$v.id_country)} selected="selected"{/if}>{$v.name|escape:'htmlall':'UTF-8'}</option>
	{/foreach}
</select> </p>

	
	
<!-- id_state -->
{foreach from=$countries item='country'}
	{if isset($country.states)}
		<p class="clear ext_state" id="country_{$country.id_country|intval}" style="display:none" >
		
		<label for="id_state">{l s='State'} <sup>*</sup></label>
		
		<select name="id_state" id="id_state" class="ipt" >
		{foreach from=$country.states item='state' name='states'}
			<option value="{$state.id_state|intval}">		
			{$state.name|escape:'htmlall':'UTF-8'}
			</option>			
		{/foreach}
		</select>
		</p>
	{/if}
{/foreach}






</p>
<p class="clear">
	<label for="other">{l s='Additional information'}</label>

	<textarea name="other" class="ipt" id="other" cols="26" rows="3">{if isset($smarty.post.other)}{$smarty.post.other}{/if}</textarea>
</p>
<p class="clear" ><label for="phone">{l s='Home phone'}</label>
	<input
	type="text" class="ipt" name="phone" id="phone"
	value="{if isset($smarty.post.phone)}{$smarty.post.phone}{/if}" /></p>
<p class="clear" ><label for="phone_mobile">{l s='Mobile phone'}</label> <input
	type="text" class="ipt" name="phone_mobile" id="phone_mobile"
	value="{if isset($smarty.post.phone_mobile)}{$smarty.post.phone_mobile}{/if}" />
</p>
<p class="clear" id="address_alias"><label for="alias"><sup>*</sup> {l
s='Assign an address title for future reference'} !</label> 
	<br />
	<input
	type="text" class="ipt" name="alias" id="alias"
	value="{if isset($smarty.post.alias)}{$smarty.post.alias}{else}{l s='My address'}{/if}" />
</p>

	</div>
{$HOOK_CREATE_ACCOUNT_FORM}
<p class="cart_navigation required submit clear-left">

<sup>*</sup>{l s='Required field'}
<div class="spacer"></div>

<input type="hidden"
	name="email_create" value="1" /> {if isset($back)}<input type="hidden"
	class="hidden" name="back" value="{$back|escape:'htmlall':'UTF-8'}" />{/if}
<span class="btn"><span><input type="submit" name="submitAccount" id="submitAccount"
	value="{l s='Register'}" class="exclusive" /></span></span>
	
	
	
</p>

</form>
	{/if}
    {/if}
    </div> 
    </div>
    <!-- / right w-4-5 -->

<div class="clear"></div>
</div><!--p-20 -->
