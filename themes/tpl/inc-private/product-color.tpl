<!-- colors --> 
{if $colors}
	<div id="color_picker">
    <p>{l s='Pick a color:' js=1}</p>
    <div class="clear"></div>
    <ul id="color_to_pick_list">
	{foreach from=$colors key='id_attribute' item='color'}
	<li><a id="color_{$id_attribute|intval}" class="color_pick"	style="background:{$color.value}"	onclick="updateColorSelect({$id_attribute|intval});">
    	{if	file_exists($col_img_dir|cat:$id_attribute|cat:'.jpg')}<img src="{$img_col_dir}{$id_attribute}.jpg" alt="" title="{$color.name}" />{/if}
    </a></li>
	{/foreach}
</ul>
<a id="color_all" onclick="updateColorSelect(0);"><img	src="{$img_dir}icon/cancel.gif" alt="" title="{$color.name}" /></a>
<div class="clear"></div>
</div>
{/if} 
<!-- / colors -->