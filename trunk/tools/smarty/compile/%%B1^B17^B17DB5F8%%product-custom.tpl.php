<?php /* Smarty version 2.6.20, created on 2010-06-27 21:28:04
         compiled from ../../../GUI//inc-private/product-custom.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', '../../../GUI//inc-private/product-custom.tpl', 3, false),array('function', 'counter', '../../../GUI//inc-private/product-custom.tpl', 14, false),array('modifier', 'intval', '../../../GUI//inc-private/product-custom.tpl', 11, false),array('modifier', 'cat', '../../../GUI//inc-private/product-custom.tpl', 18, false),array('modifier', 'stripslashes', '../../../GUI//inc-private/product-custom.tpl', 53, false),)), $this); ?>
<!-- Customizable products -->
<?php if ($this->_tpl_vars['product']->customizable): ?>
    <ul class="idTabs"><li><a style="cursor: pointer"><?php echo smartyTranslate(array('s' => 'Product customization'), $this);?>
</a></li></ul>
    <div class="customization_block">
    <form method="post" action="<?php echo $this->_tpl_vars['customizationFormTarget']; ?>
" enctype="multipart/form-data" id="customizationForm">
    <p><img src="<?php echo $this->_tpl_vars['img_dir']; ?>
icon/infos.gif" alt="Informations" /> 
	<?php echo smartyTranslate(array('s' => 'After saving your customized product, do not forget to add it to your cart.'), $this);?>

    <?php if ($this->_tpl_vars['product']->uploadable_files): ?><br />
    	<?php echo smartyTranslate(array('s' => 'Allowed file formats are: GIF, JPG, PNG'), $this);?>

    <?php endif; ?></p>
    <?php if (((is_array($_tmp=$this->_tpl_vars['product']->uploadable_files)) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp))): ?>
        <h2><?php echo smartyTranslate(array('s' => 'Pictures'), $this);?>
</h2>
        <ul id="uploadable_files">
            <?php echo smarty_function_counter(array('start' => 0,'assign' => 'customizationField'), $this);?>
 
            <?php $_from = $this->_tpl_vars['customizationFields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['customizationFields'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['customizationFields']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['field']):
        $this->_foreach['customizationFields']['iteration']++;
?> 
            <?php if ($this->_tpl_vars['field']['type'] == 0): ?>
                <li class="customizationUploadLine<?php if ($this->_tpl_vars['field']['required']): ?> required<?php endif; ?>">
                    <?php $this->assign('key', ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp='pictures_')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['product']->id) : smarty_modifier_cat($_tmp, $this->_tpl_vars['product']->id)))) ? $this->_run_mod_handler('cat', true, $_tmp, '_') : smarty_modifier_cat($_tmp, '_')))) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['field']['id_customization_field']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['field']['id_customization_field']))); ?>
                    <?php if (isset ( $this->_tpl_vars['pictures'][$this->_tpl_vars['key']] )): ?>
                        <div class="customizationUploadBrowse">
                        <img src="<?php echo $this->_tpl_vars['pic_dir']; ?>
<?php echo $this->_tpl_vars['pictures'][$this->_tpl_vars['key']]; ?>
_small" alt="" />
                        <a 	href="<?php echo $this->_tpl_vars['link']->getUrlWith('deletePicture',$this->_tpl_vars['field']['id_customization_field']); ?>
">
                        <img src="<?php echo $this->_tpl_vars['img_dir']; ?>
icon/delete.gif" alt="<?php echo smartyTranslate(array('s' => 'delete'), $this);?>
" class="customization_delete_icon" /></a></div>
                    <?php endif; ?>
                    <div class="customizationUploadBrowse">
                    <input type="file"	name="file<?php echo $this->_tpl_vars['field']['id_customization_field']; ?>
"		id="img<?php echo $this->_tpl_vars['customizationField']; ?>
"
                    class="customization_block_input <?php if (isset ( $this->_tpl_vars['pictures'][$this->_tpl_vars['key']] )): ?>filled<?php endif; ?>" />
                    <?php if ($this->_tpl_vars['field']['required']): ?><sup>*</sup><?php endif; ?>
                    
                    <div class="customizationUploadBrowseDescription">
                    <?php if (! empty ( $this->_tpl_vars['field']['name'] )): ?><?php echo $this->_tpl_vars['field']['name']; ?>

                    <?php else: ?><?php echo smartyTranslate(array('s' => 'Please select an image file from your hard drive'), $this);?>

                    <?php endif; ?>
                    </div>
                    </div>
                </li>
                <?php echo smarty_function_counter(array(), $this);?>
 
            <?php endif; ?>
            <?php endforeach; endif; unset($_from); ?>
         </ul>
     <?php endif; ?>
     <div class="clear"></div>
     <?php if (((is_array($_tmp=$this->_tpl_vars['product']->text_fields)) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp))): ?>
             <h2><?php echo smartyTranslate(array('s' => 'Texts'), $this);?>
</h2>
             <ul id="text_fields">
                <?php echo smarty_function_counter(array('start' => 0,'assign' => 'customizationField'), $this);?>
 
                <?php $_from = $this->_tpl_vars['customizationFields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['customizationFields'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['customizationFields']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['field']):
        $this->_foreach['customizationFields']['iteration']++;
?> 
                <?php if ($this->_tpl_vars['field']['type'] == 1): ?>
                    <li class="customizationUploadLine<?php if ($this->_tpl_vars['field']['required']): ?> required<?php endif; ?>">
                    <?php $this->assign('key', ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp='textFields_')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['product']->id) : smarty_modifier_cat($_tmp, $this->_tpl_vars['product']->id)))) ? $this->_run_mod_handler('cat', true, $_tmp, '_') : smarty_modifier_cat($_tmp, '_')))) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['field']['id_customization_field']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['field']['id_customization_field']))); ?>
                        <?php if (! empty ( $this->_tpl_vars['field']['name'] )): ?><?php echo $this->_tpl_vars['field']['name']; ?>
<?php endif; ?>
                        <input type="text"	name="textField<?php echo $this->_tpl_vars['field']['id_customization_field']; ?>
"
                        id="textField<?php echo $this->_tpl_vars['customizationField']; ?>
"	value="<?php if (isset ( $this->_tpl_vars['textFields'][$this->_tpl_vars['key']] )): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['textFields'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
<?php endif; ?>"
                        class="customization_block_input" />
                        <?php if ($this->_tpl_vars['field']['required']): ?><sup>*</sup><?php endif; ?>
                     </li>
                     <?php echo smarty_function_counter(array(), $this);?>
 
                 <?php endif; ?>
                 <?php endforeach; endif; unset($_from); ?>
               </ul>
      <?php endif; ?>
      
      <p style="clear: left;" id="customizedDatas">
      <input type="hidden" name="quantityBackup" id="quantityBackup" value="" /> 
      <input type="hidden" name="submitCustomizedDatas" value="1" /> 
      <input type="button" class="button" value="<?php echo smartyTranslate(array('s' => 'Save'), $this);?>
"	onclick="javascript:saveCustomization()" /></p>
	</form>
    <p class="clear required"><sup>*</sup> <?php echo smartyTranslate(array('s' => 'required fields'), $this);?>
</p>
    </div>
<?php endif; ?> 
<!-- / Customizable products -->