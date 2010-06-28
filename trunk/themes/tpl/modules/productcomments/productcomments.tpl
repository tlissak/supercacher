<!-- productcomment modules  -->
<div class="product-comment-module">
{if $comments}
	{if $criterions|@count > 0}
		<h2>{l s='Average grade' mod='productcomments'}</h2>
		<div style="float: left">
			{l s='Average' mod='productcomments'}:<br />
			{section loop=6 step=1 start=1 name=average}
				<input disabled="disabled" type="radio" name="average" {if $averageTotal|round neq 0 and $smarty.section.average.index eq $averageTotal|round}checked="checked"{/if} />
			{/section}
		</div>
		<div style="float: left; margin-left: 40px; width: 400px">
		{foreach from=$criterions item=c}
			<div style="float: left; margin-left: 20px; margin-bottom: 10px;">
			{$c.name|escape:'html':'UTF-8'}<br />
			{section loop=6 step=1 start=1 name=average}
				<input disabled="disabled" type="radio" name="{$c.name|escape:'html':'UTF-8'}_{$smarty.section.average.index}" value="{$smarty.section.average.index}" {if $averages[$c.id_product_comment_criterion]|round neq 0 and $smarty.section.average.index eq $averages[$c.id_product_comment_criterion]|round}checked="checked"{/if} />
			{/section}
			</div>
		{/foreach}
		</div>
	{/if}
	
	<div class="clear"></div>
	<div class="">
		<table class="std" style="width: 100%">
			<thead>
				<tr>
					<th class="first_item" style="width:80px;">{l s='From' mod='productcomments'}</th>
					<th class="item">{l s='Comment' mod='productcomments'}</th>
				</tr>
			</thead>
			<tbody>
			{foreach from=$comments item=comment}
				{if $comment.content}
				<tr>
					<td style="vertical-align: top">
						{dateFormat date=$comment.date_add|escape:'html':'UTF-8' full=0}
						{$comment.firstname|escape:'html':'UTF-8'} {$comment.lastname|truncate:1:'...'|escape:'htmlall':'UTF-8'}.
					</td>
					<td style="vertical-align: top">
						{$comment.content|escape:'html':'UTF-8'|nl2br}
					</td>
				</tr>
				{/if}
			{/foreach}
			</tbody>
		</table>
	</div>
{else}
	<p class="align_center">{l s='No customer comments for the moment.' mod='productcomments'}</p>
{/if}
{if $logged == true}

<span class="btn btn-light"><span>
<input type="button" id="addCommentButton" value="{l s='Add a comment' mod='productcomments'}" onclick="$('#sendComment').slideDown('slow');$(this).slideUp('slow');" />
</span></span>
<div class="clear"></div>
<form action="{$action_url}" method="post" class="std" id="sendComment" style="display:none;">
	<div >
		
		<a href="javascript:closeCommentForm()">X</a> | {l s='Add a comment' mod='productcomments'} 
		
		{if $criterions|@count > 0}
		<table border="0" cellspacing="0" cellpadding="0">
		{section loop=$criterions name=i start=0 step=1}
		<tr>
			<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td>
				<input type="hidden" name="id_product_comment_criterion_{$smarty.section.i.iteration}" value="{$criterions[i].id_product_comment_criterion|intval}" />
				{$criterions[i].name|escape:'html':'UTF-8'}
			</td>
			<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td>
			<input class="star" type="radio" name="{$smarty.section.i.iteration}_grade" id="{$smarty.section.i.iteration}_grade" value="1" />
			<input class="star" type="radio" name="{$smarty.section.i.iteration}_grade" value="2" />
			<input class="star" type="radio" name="{$smarty.section.i.iteration}_grade" value="3" checked="checked" />
			<input class="star" type="radio" name="{$smarty.section.i.iteration}_grade" value="4" />
			<input class="star" type="radio" name="{$smarty.section.i.iteration}_grade" value="5" />
			</td>
		</tr>
		{/section}
		</table>
		{/if}
		<p><textarea cols="50" class="ipt"  rows="5" name="content" id="content"></textarea></p>
		
			<span class="btn"><span><input class="button" name="submitMessage" value="{l s='Send' mod='productcomments'}" type="submit" /></span></span>
		<div class="clear"></div>
		</div>
</form>
{else}
	<p class="align_center">{l s='Only registered users can post a new comment.' mod='productcomments'}</p>
{/if}
</div>
