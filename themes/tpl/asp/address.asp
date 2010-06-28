{capture name=path}
<a href="{$base_dir_ssl}my-account.php">{l s='Your addresses'}</a>
<span class="navigation-pipe">{$navigationPipe}</span>
{l s='My addresses'}{/capture}


{include file="$tpl_dir/inc-private/address_js.tpl"}

<!-- #include file="inc-global/init.php" -->

<!-- #include file="css/style.css" -->
<!-- #include file="css/global.css" -->

<!-- #include file="js/jquery.search.js" -->
<!-- #include file="js/init.js" -->
<!-- #include file="header.tpl" -->



<div class="p-20">

{include file="$tpl_dir/inc-global/base_dir_js.html"}

<!-- #include file="inc-global/breadcrumb.tpl" -->
	{include file="$tpl_dir/inc-global/breadcrumb.tpl"}
	
	
	<div class="account-left">
		<div class="spacer"></div>
		<!-- #include file="inc-global/account-nav.tpl" -->
		{include file="$tpl_dir/inc-global/account-nav.tpl"}
	</div>
	<div class="account-right">
		<div class="account-content-inner">
					<h2>{l s='Your addresses'}</h2>
					
					{include file="$tpl_dir/inc-global/errors.tpl"}
					
					<h3>{if isset($id_address)}{l s='Modify the address'} {if isset($smarty.post.alias)}"{$smarty.post.alias}"{elseif
					$address->alias}"{$address->alias|escape:'htmlall':'UTF-8'}"{/if}{else}{l
					s='To add a new address, please fill out the form below.'}{/if}</h3>
					
					
					<form action="{$base_dir_ssl}address.php" method="post" class="form-label">
					
					<h3>{if isset($id_address)}{l s='Your address'}{else}{l s='New address'}{/if}</h3>
					<input type="hidden" name="token" value="{$token}" /> 
					
					<p class="text">					
					<label for="company">{l s='Company'}</label> 
					<input type="text" id="company" name="company" class="ipt" 
					value="{if isset($smarty.post.company)}{$smarty.post.company}{else}{$address->company|escape:'htmlall':'UTF-8'}{/if}" />
					</p>
					<p class="required text">
					<label for="firstname">{l s='First name'}</label>
					<input type="text" name="firstname" id="firstname" class="ipt" 
					value="{if isset($smarty.post.firstname)}{$smarty.post.firstname}{else}{$address->firstname|escape:'htmlall':'UTF-8'}{/if}" />
					<sup>*</sup></p>
					<p class="required text">
					<label for="lastname">{l s='Last name'}</label>
					<input type="text" id="lastname" name="lastname" class="ipt" 
						value="{if isset($smarty.post.lastname)}{$smarty.post.lastname}{else}{$address->lastname|escape:'htmlall':'UTF-8'}{/if}" />
					<sup>*</sup></p>
					<p class="required text">
					<label for="address1">{l s='Address'}</label> 
					<input	type="text" id="address1" name="address1" class="ipt" 
					value="{if isset($smarty.post.address1)}{$smarty.post.address1}{else}{$address->address1|escape:'htmlall':'UTF-8'}{/if}" />
					<sup>*</sup></p>
					<p class="required text">
					<label for="address2">{l s='Address (2)'}</label>
					<input type="text" id="address2" name="address2" class="ipt" 
					value="{if isset($smarty.post.address2)}{$smarty.post.address2}{else}{$address->address2|escape:'htmlall':'UTF-8'}{/if}" />
					</p>
					<p class="required text">
					<label for="postcode">{l s='Postal code / Zip code'}</label>
					<input type="text" id="postcode" name="postcode" class="ipt" 
					value="{if isset($smarty.post.postcode)}{$smarty.post.postcode}{else}{$address->postcode|escape:'htmlall':'UTF-8'}{/if}" />
					<sup>*</sup></p>
					<p class="required text">
					<label for="city">{l s='City'}</label>
					<input type="text" name="city" id="city" class="ipt" 
					value="{if isset($smarty.post.city)}{$smarty.post.city}{else}{$address->city|escape:'htmlall':'UTF-8'}{/if}"
					maxlength="64" /> <sup>*</sup></p>
					<p class="required select">
					<label for="id_country">{l s='Country'}</label>
					<select id="id_country" name="id_country" class="ipt" >
						{$countries_list}
					</select> <sup>*</sup></p>
					<p class="required id_state select">
					<label for="id_state">{l s='State'}</label>
					<select name="id_state" id="id_state" class="ipt" >
						<option value="">-</option>
					</select> <sup>*</sup></p>
					<p class="textarea">
					<label for="other">{l s='Additional information'}</label>
					<textarea id="other" name="other"  class="ipt" 
					cols="26" rows="3">{if isset($smarty.post.other)}{$smarty.post.other}{else}{$address->other|escape:'htmlall':'UTF-8'}{/if}</textarea>
					</p>
					<p class="text">
					<label for="phone">{l s='Home phone'}</label>
					<input	type="text" id="phone" name="phone" class="ipt" 
					value="{if isset($smarty.post.phone)}{$smarty.post.phone}{else}{$address->phone|escape:'htmlall':'UTF-8'}{/if}" />
					</p>
					<p class="text">
					<label for="phone_mobile">{l s='Mobile phone'}</label>
					<input	type="text" id="phone_mobile" name="phone_mobile" class="ipt" 
					value="{if isset($smarty.post.phone_mobile)}{$smarty.post.phone_mobile}{else}{$address->phone_mobile|escape:'htmlall':'UTF-8'}{/if}" />
					</p>
					<p class="required text" id="adress_alias">
					<label for="alias">{l s='Assign an address title for future reference'}</label>
					<input type="text" id="alias" name="alias" class="ipt" 
					value="{if isset($smarty.post.alias)}{$smarty.post.alias}{elseif $address->alias}{$address->alias|escape:'htmlall':'UTF-8'}{elseif isset($select_address)}{else}{l s='My address'}{/if}" />
					<sup>*</sup></p>
				
					
					
					<p class="submit2">
					{if isset($id_address)}<input type="hidden"	name="id_address" value="{$id_address|intval}" />{/if} 
					{if	isset($back)}<input type="hidden" name="back" value="{$back}?step=1" />{/if}
					
					{if isset($select_address)}<input type="hidden" name="select_address" value="{$select_address|intval}" />{/if} 
					<span class="btn" ><span><input type="submit" name="submitAddress" id="submitAddress" value="{l s='Save'}" class="button" /></span></span>
					<div class="clear"></div>
					</p>
					<p class="required"><sup>*</sup>{l s='Required field'}</p>
					</form>
					
		</div>
	</div>
	
<div class="clear"></div>
<!-- end of p-20 -->
</div>
<!-- #include file="footer.tpl" -->

