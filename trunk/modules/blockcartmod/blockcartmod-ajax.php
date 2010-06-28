<?php
include(dirname(__FILE__).'/../../config/config.inc.php');
include(dirname(__FILE__).'/../../init.php');
include(dirname(__FILE__).'/blockcartmod.php');

include(dirname(__FILE__).'/cart.php');

$cart = new Cart(intval($cookie->id_cart));
$cart->id_lang = intval($cookie->id_lang);

$blockCart = new BlockCartMod();
echo $blockCart->hookAjaxCall(array('cookie' => $cookie, 'cart' => $cart));

?>