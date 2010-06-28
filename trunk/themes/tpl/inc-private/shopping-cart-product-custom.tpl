<tr class="alternate_item cart_item">
			<td colspan="6">
			{foreach from=$customization.datas key='type' item='datas'}
				{if $type == $CUSTOMIZE_FILE}
			<div class="customizationUploaded">
			<ul class="customizationUploaded">
				{foreach from=$datas item='picture'}
				<li><img src="{$pic_dir}{$picture.value}_small" alt=""
					class="customizationUploaded" /></li>
				{/foreach}
			</ul>
			</div>
				{elseif $type == $CUSTOMIZE_TEXTFIELD}
			<ul class="typedText">
				{foreach from=$datas item='textField' name='typedText'}
				<li>{l s='Text #'}{$smarty.foreach.typedText.index+1}{l s=':'}
				{$textField.value}</li>
				{/foreach}
			</ul>
				{/if}
		 {/foreach}
		 </td>
		 
		<td class="cart_quantity">
		<a class="cart_quantity_delete"
				href="{$base_dir_ssl}cart.php?delete&amp;id_product={$product.id_product|intval}&amp;ipa={$product.id_product_attribute|intval}&amp;id_customization={$id_customization}&amp;token={$token_cart}"><img
				src="{$img_dir}icon/delete.gif" alt="{l s='Delete'}"
				title="{l s='Delete this customization'}" class="icon" /></a>
			<p>X {$customization.quantity}</p>
			<a class="cart_quantity_up"
				href="{$base_dir_ssl}cart.php?add&amp;id_product={$product.id_product|intval}&amp;ipa={$product.id_product_attribute|intval}&amp;id_customization={$id_customization}&amp;token={$token_cart}"
				title="{l s='Add'}">
					{l s='Add'}
				</a><br />
			<a class="cart_quantity_down"
				href="{$base_dir_ssl}cart.php?add&amp;id_product={$product.id_product|intval}&amp;ipa={$product.id_product_attribute|intval}&amp;id_customization={$id_customization}&amp;op=down&amp;token={$token_cart}"
				title="{l s='Substract'}">{l s='Substract'}</a>
			</td>
			<td class="cart_total"></td>
		</tr>