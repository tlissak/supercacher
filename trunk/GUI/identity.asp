{capture name=path}
<a href="{$base_dir_ssl}my-account.php">{l s='My account'}</a>
<span class="navigation-pipe">{$navigationPipe}</span>
{l s='Your personal information'}{/capture}




{capture name=path}{l s='My account'}{/capture}
<!-- #include file="inc-global/init.php" -->

<!-- #include file="css/style.css" -->
<!-- #include file="css/global.css" -->

<!-- #include file="js/jquery.search.js" -->
<!-- #include file="js/init.js" -->
<!-- #include file="inc-global/header.html" -->



<div class="p-20">

{include file="$GUI_THEME_PATH/inc-global/base_dir_js.html"}

<!-- #include file="inc-global/breadcrumb.html" -->
	{include file="$GUI_THEME_PATH/inc-global/breadcrumb.html"}
	
	
	<div class="account-left">
		<div class="spacer"></div>
		<!-- #include file="inc-global/account-nav.html" -->
		{include file="$GUI_THEME_PATH/inc-global/account-nav.html"}
	</div>
	<div class="account-right">
		<div class="account-content-inner">
					<h2>{l s='Your personal information'}</h2>
			
					{include file="$GUI_THEME_PATH/inc-global/errors.html"} 
					
					{if $confirmation}
					<p class="success">
					{l s='Your personal information has been successfully updated.'} 
					{if $pwd_changed}<br />{l s='Your password has been sent to your e-mail:'}{$email|escape:'htmlall':'UTF-8'}{/if}</p>
					{else}
					<h3>{l s='Do not hesitate to update your personal information if it has
					changed.'}</h3>
					<p class="required"><sup>*</sup>{l s='Required field'}</p>
					<form action="{$base_dir_ssl}identity.php" method="post" class="form-label">
					<p class="radio"><span>{l s='Gender'}</span> 	</p>
					<p>	
						<label	for="id_gender1">{l s='Mr.'}</label>
						
						<input type="radio"
						id="id_gender1" name="id_gender" value="1" {if $smarty.post.id_gender==
						1 OR !$smarty.post.id_gender}checked="checked" {/if} />
					</p>
					<p>
						<label for="id_gender2">{l s='Ms.'}</label>
						 <input type="radio" id="id_gender2" name="id_gender" value="2" {if $smarty.post.id_gender==
						2}checked="checked" {/if} /> 
					</p>
					<p class="required text"><label for="firstname">{l s='First name'}<sup>*</sup></label>
					<input type="text" id="firstname" name="firstname"
						value="{$smarty.post.firstname}" class="ipt" /></p>
					<p class="required text"><label for="lastname">{l s='Last name'}<sup>*</sup></label>
					<input type="text" name="lastname" id="lastname"
						value="{$smarty.post.lastname}" class="ipt"  /></p>
					<p class="required text"><label for="email">{l s='E-mail'}<sup>*</sup></label>
					<input type="text" name="email" id="email" value="{$smarty.post.email}" class="ipt"  />
					</p>
					<p class="required text"><label for="old_passwd">{l s='Current
					password'}<sup>*</sup></label> <input type="password" name="old_passwd"
						id="old_passwd" class="ipt"  /></p>
					<p class="password"><label for="passwd">{l s='Password'}</label> <input
						type="password" name="passwd" id="passwd" class="ipt"  /></p>
					<p class="password"><label for="confirmation">{l s='Confirmation'}</label>
					<input type="password" name="confirmation" id="confirmation" class="ipt"  /></p>
					<p class="select"><label>{l s='Birthday'}</label> <select name="days" class="ipt" 
						id="days">
						<option value="">-</option>
						{foreach from=$days item=v}
						<option value="{$v|escape:'htmlall':'UTF-8'}" {if ($sl_day==
							$v)}selected="selected"{/if}>{$v|escape:'htmlall':'UTF-8'}&nbsp;&nbsp;</option>
						{/foreach}
					</select> {* {l s='January'} {l s='February'} {l s='March'} {l
					s='April'} {l s='May'} {l s='June'} {l s='July'} {l s='August'} {l
					s='September'} {l s='October'} {l s='November'} {l s='December'} *} 
					
					<select	id="months" name="months"  class="ipt" >
						<option value="">-</option>
						{foreach from=$months key=k item=v}
						<option value="{$k|escape:'htmlall':'UTF-8'}" {if ($sl_month==
							$k)}selected="selected"{/if}>{l s="$v"}&nbsp;</option>
						{/foreach}
					</select> <select id="years" name="years" class="ipt" >
						<option value="">-</option>
						{foreach from=$years item=v}
						<option value="{$v|escape:'htmlall':'UTF-8'}" {if ($sl_year==
							$v)}selected="selected"{/if}>{$v|escape:'htmlall':'UTF-8'}&nbsp;&nbsp;</option>
						{/foreach}
					</select></p>
					<p class="checkbox"><input type="checkbox" id="newsletter"
						name="newsletter" value="1" {if $smarty.post.newsletter==
						1} checked="checked" {/if} /> <label for="newsletter">{l s='Sign up for
					our newsletter'}</label></p>
					<p class="checkbox"><input type="checkbox" name="optin" id="optin"
						value="1" {if $smarty.post.optin== 1} checked="checked" {/if} /> <label
						for="optin">{l s='Receive special offers from our partners'}</label></p>
					<p class="submit">
						<span class="btn"><span>
					<input type="submit" class="button" name="submitIdentity" value="{l s='Save'}" /></span>
						</span>
						<div class="clear"></div>	
					</p>
					</form>
					<p id="security_informations">{l s='[Insert customer data privacy clause
					or law here, if applicable]'}</p>
					{/if}
		</div>
	</div>
	
<div class="clear"></div>
<!-- end of p-20 -->
</div>
<!-- #include file="inc-global/footer.html" -->
















