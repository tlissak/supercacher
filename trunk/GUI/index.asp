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
    	
        {foreach from=$categories_sort item='gcat' name=gsubcategories}
		<li><a href="{$link->getCategoryLink($gcat.id, $gcat.link_rewrite)|escape:'htmlall':'UTF-8'}" title="{$gcat.name|escape:'htmlall':'UTF-8'}">&rsaquo; {$gcat.name|htmlspecialchars}</a>             
	</li>
{/foreach}     
    </ul>
    <ul class="nav-right">
    	
            {foreach from=$categories_sort item='gcat' name=gsubcategories}
		<li><a href="{$link->getCategoryLink($gcat.id, $gcat.link_rewrite)|escape:'htmlall':'UTF-8'}" title="{$gcat.name|escape:'htmlall':'UTF-8'}">
       <img src="{$link->getCatImageLink($gcat.link_rewrite,$gcat.id, 'medium')}" alt="{$gcat.name}"  />
         <br />
        {$gcat.name|htmlspecialchars}</a>             
	</li>
{/foreach}  
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
              {$HOOK_LEFT_COLUMN}
              
              
            </div>
             <div class="h-22"></div>
        
        	<div class="hline-gray"></div>
            
            <div class="txt-left m-20">
           
           {include file="$GUI_THEME_PATH/inc-global/login-box.html"}
           	<!-- #include file="inc-global/login-box.html" -->
            
            </div>
        </div>
        	
        
    </div>
    <div class="clear h-10"></div>
    

    
</div>


 

<!-- #include file="inc-global/footer.html" -->