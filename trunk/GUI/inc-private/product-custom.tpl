<!-- Customizable products -->
{if $product->customizable}
    <ul class="idTabs"><li><a style="cursor: pointer">{l s='Product customization'}</a></li></ul>
    <div class="customization_block">
    <form method="post" action="{$customizationFormTarget}" enctype="multipart/form-data" id="customizationForm">
    <p><img src="{$img_dir}icon/infos.gif" alt="Informations" /> 
	{l s='After saving your customized product, do not forget to add it to your cart.'}
    {if $product->uploadable_files}<br />
    	{l s='Allowed file formats are: GIF, JPG, PNG'}
    {/if}</p>
    {if $product->uploadable_files|intval}
        <h2>{l s='Pictures'}</h2>
        <ul id="uploadable_files">
            {counter start=0 assign='customizationField'} 
            {foreach from=$customizationFields item='field' name='customizationFields'} 
            {if $field.type == 0}
                <li class="customizationUploadLine{if $field.required} required{/if}">
                    {assign var='key' value='pictures_'|cat:$product->id|cat:'_'|cat:$field.id_customization_field}
                    {if isset($pictures.$key)}
                        <div class="customizationUploadBrowse">
                        <img src="{$pic_dir}{$pictures.$key}_small" alt="" />
                        <a 	href="{$link->getUrlWith('deletePicture', $field.id_customization_field)}">
                        <img src="{$img_dir}icon/delete.gif" alt="{l s='delete'}" class="customization_delete_icon" /></a></div>
                    {/if}
                    <div class="customizationUploadBrowse">
                    <input type="file"	name="file{$field.id_customization_field}"		id="img{$customizationField}"
                    class="customization_block_input {if isset($pictures.$key)}filled{/if}" />
                    {if	$field.required}<sup>*</sup>{/if}
                    
                    <div class="customizationUploadBrowseDescription">
                    {if	!empty($field.name)}{$field.name}
                    {else}{l s='Please select an image file from your hard drive'}
                    {/if}
                    </div>
                    </div>
                </li>
                {counter} 
            {/if}
            {/foreach}
         </ul>
     {/if}
     <div class="clear"></div>
     {if $product->text_fields|intval}
             <h2>{l s='Texts'}</h2>
             <ul id="text_fields">
                {counter start=0 assign='customizationField'} 
                {foreach from=$customizationFields item='field' name='customizationFields'} 
                {if $field.type == 1}
                    <li class="customizationUploadLine{if $field.required} required{/if}">
                    {assign var='key' value='textFields_'|cat:$product->id|cat:'_'|cat:$field.id_customization_field}
                        {if !empty($field.name)}{$field.name}{/if}
                        <input type="text"	name="textField{$field.id_customization_field}"
                        id="textField{$customizationField}"	value="{if isset($textFields.$key)}{$textFields.$key|stripslashes}{/if}"
                        class="customization_block_input" />
                        {if $field.required}<sup>*</sup>{/if}
                     </li>
                     {counter} 
                 {/if}
                 {/foreach}
               </ul>
      {/if}
      
      <p style="clear: left;" id="customizedDatas">
      <input type="hidden" name="quantityBackup" id="quantityBackup" value="" /> 
      <input type="hidden" name="submitCustomizedDatas" value="1" /> 
      <input type="button" class="button" value="{l s='Save'}"	onclick="javascript:saveCustomization()" /></p>
	</form>
    <p class="clear required"><sup>*</sup> {l s='required fields'}</p>
    </div>
{/if} 
<!-- / Customizable products -->