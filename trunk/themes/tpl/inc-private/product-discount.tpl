{if $quantity_discounts} 
<!-- quantity discount -->
    <ul class="idTabs">
        <li><a style="cursor: pointer">{l s='Quantity discount'}</a></li>
    </ul>
    <div id="quantityDiscount">
    <table class="std">
        <tr>
            {foreach from=$quantity_discounts item='quantity_discount' 		name='quantity_discounts'}
            <th>{$quantity_discount.quantity|intval} 
                {if  $quantity_discount.quantity|intval > 1} {l s='quantities'} 
                {else} {l s='quantity'} 
                {/if}</th>
            {/foreach}
        </tr>
        <tr>
            {foreach from=$quantity_discounts item='quantity_discount'	name='quantity_discounts'}
            <td>
            {if $quantity_discount.id_discount_type|intval == 1}-{$quantity_discount.value|floatval}% 
            {else} -{convertPrice	price=$quantity_discount.value|floatval} {/if}</td>
            {/foreach}
        </tr>
    </table>
    </div>
{/if} 