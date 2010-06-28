<!-- Block Newsletter module-->

<div id="newsletter_block_left" class="block">
	<div class="block_content">
	{if $msg}
		<p class="color-white w-1-3 m-20">{$msg}</p>
	{/if}
		<div style="position:absolute; top:140px; left:10px;">
		<form action="{$base_dir}" method="post">
			<input type="text" name="email" size="18" value="{if $value}{$value}{else}{l s='your e-mail' mod='blocknewsletter'}{/if}"
			 onfocus="javascript:if(this.value=='{l s='your e-mail' mod='blocknewsletter'}')this.value='';" 
			 onblur="javascript:if(this.value=='')this.value='{l s='your e-mail' mod='blocknewsletter'}';"
			 style="width:150px; border:none" />
			 <input type="submit" value="                     "  name="submitNewsletter" style="background:none; border:none; color:#fff" />
			 <input type="hidden" name="action" value="0" />
			 <!--
			<p>
				<select name="action">
					<option value="0"{if $action == 0} selected="selected"{/if}>{l s='Subscribe' mod='blocknewsletter'}</option>
					<option value="1"{if $action == 1} selected="selected"{/if}>{l s='Unsubscribe' mod='blocknewsletter'}</option>
				</select>
				
			</p>
			-->
		</form>
		</div>
	</div>
</div>

<!-- /Block Newsletter module-->
