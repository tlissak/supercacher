<?php /* Smarty version 2.6.20, created on 2010-06-27 16:57:08
         compiled from ../../../GUI/index.asp */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', '../../../GUI/index.asp', 18, false),array('modifier', 'htmlspecialchars', '../../../GUI/index.asp', 18, false),)), $this); ?>
<!-- $smarty.template-->

<!-- #include file="inc-global/init.php" -->

<!-- #include file="css/style.css" -->
<!-- #include file="css/global.css" -->
<!-- #include file="css/layout.css" -->

<!-- #include file="js/jquery.search.js" -->
<!-- #include file="js/init.js" -->
<!-- #include file="inc-global/header.html" -->


<div class="wrapper">
	<ul class="nav">
    	
        <?php $_from = $this->_tpl_vars['categories_sort']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['gsubcategories'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['gsubcategories']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['gcat']):
        $this->_foreach['gsubcategories']['iteration']++;
?>
		<li><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['link']->getCategoryLink($this->_tpl_vars['gcat']['id'],$this->_tpl_vars['gcat']['link_rewrite']))) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['gcat']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
">&rsaquo; <?php echo ((is_array($_tmp=$this->_tpl_vars['gcat']['name'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a>             
	</li>
<?php endforeach; endif; unset($_from); ?>     
    </ul>
    <ul class="nav-right">
    	
            <?php $_from = $this->_tpl_vars['categories_sort']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['gsubcategories'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['gsubcategories']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['gcat']):
        $this->_foreach['gsubcategories']['iteration']++;
?>
		<li><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['link']->getCategoryLink($this->_tpl_vars['gcat']['id'],$this->_tpl_vars['gcat']['link_rewrite']))) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['gcat']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
">
       <img src="<?php echo $this->_tpl_vars['link']->getCatImageLink($this->_tpl_vars['gcat']['link_rewrite'],$this->_tpl_vars['gcat']['id'],'medium'); ?>
" alt="<?php echo $this->_tpl_vars['gcat']['name']; ?>
"  />
         <br />
        <?php echo ((is_array($_tmp=$this->_tpl_vars['gcat']['name'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</a>             
	</li>
<?php endforeach; endif; unset($_from); ?>  
    </ul>
    <div class="clear h-22"></div>

    <div class="wth-1-4 left">
        <div class=" m-20">
       		<div class="hline-red"></div>
        	
        	<div class="h-22"></div>
        	<table border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="108"><img src="GUI/images/ico-chrono.png" /></td>
                <td valign="top"><h3>DISPONIBLITE</h3>
                  
                Chrono horaires</td>
              </tr>
            </table>

        	
      </div>
    </div>
    <div class="wth-1-2 left">	
      <div class="lh16 m-20">
      	<div class="hline-red"></div>
       	<h1>Bienvenue sur supercacher.com !</h1>
          <p>Le supermarché cacher! contient 100% Produits cachers ou produits autorisés.</p>
        <p>à votre disposition une gamme très large de produits casher répondant à tous vos <br />
          besoins en matière de cacherout. Notre boutique en ligne vous permet de commander          facilement,24h/24 et 7j/7 parmi un grand choix de produits séléctionnés.</p>
        <p>choisissez vos produits parmis notre liste de produits cachers et préparez votre courses          faites vous livrer chez vous tout le nécéssaire de chabbat et préparez-le tranquillement! <br />
              Quel que soit l'article que vous recherchez, vous trouverez forcémment votre <br />
              bonheur dans notre catalogue. </p>
            <p>Et profitez de notre offre du moment ! pour toute commande supérieure à 100€,<br />
              la livraison est gratuite sur Paris et proches banlieues.        </p>
    
              <div class="h-22"></div>
                <div class="hline-gray"></div>
      </div>
    </div>
    <div class="wth-1-4 left">
    	
        
        <div class="m-20">
        <div class="hline-red"></div>
        	<div class="m-20">
                <h2>VOTRE PANIER</h2>
              <?php echo $this->_tpl_vars['HOOK_LEFT_COLUMN']; ?>

              
              
            </div>
             <div class="h-22"></div>
        
        	<div class="hline-gray"></div>
            
            <div class="txt-left m-20">
           
           <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['GUI_THEME_PATH'])."/inc-global/login-box.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
           	<!-- #include file="inc-global/login-box.html" -->
            
            </div>
        </div>
        	
        
    </div>
    <div class="clear h-10"></div>
    

    
</div>


 

<!-- #include file="inc-global/footer.html" -->