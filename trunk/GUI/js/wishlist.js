$(function(){
	Wishlist_AJAX_PARAM = {
	type: 'GET',
	url:	baseDir + 'modules/blockwishlist/cart.php',
	async: true,
	cache: false,
	data:  'token=' + static_token}
})
/** * Update WishList Cart by adding, deleting, updating objects * * @return void */
function WishlistCart(id, action, id_product, id_product_attribute, quantity){
	PARAM = Wishlist_AJAX_PARAM
	PARAM.data += '&action=' + action + '&id_product=' + id_product + '&quantity=' + quantity + '&id_product_attribute=' + id_product_attribute
	PARAM.success = function(data){
		alert('Your item added to wishlist !')
		if($('#' + id).length != 0)	{
				$('#' + id).slideUp('normal');
				document.getElementById(id).innerHTML = data;
				$('#' + id).slideDown('normal');
		}
	}
	$.ajax(PARAM);	
}

/**  * Change customer default wishlist * * @return void */
function WishlistChangeDefault(id, id_wishlist){
	PARAM = Wishlist_AJAX_PARAM
	PARAM.data += '&id_wishlist=' + id_wishlist 
	PARAM.success = function(data){
			$('#' + id).slideUp('normal');
			document.getElementById(id).innerHTML = data;
			$('#' + id).slideDown('normal');
	}
	$.ajax(PARAM);
}

/**  * Buy Product * * @return void */
function WishlistBuyProduct(token, id_product, id_product_attribute, id_quantity, button, ajax){
	if(ajax)
		ajaxCart.add(id_product, id_product_attribute, false, button, 1, [token, id_quantity]);
	else{
		WishlistAddProductCart(token, id_product, id_product_attribute, id_quantity)
		document.forms['addtocart' + '_' + id_product  + '_' + id_product_attribute].method='POST';
		document.forms['addtocart' + '_' + id_product  + '_' + id_product_attribute].action=baseDir + 'cart.php';
		document.forms['addtocart' + '_' + id_product  + '_' + id_product_attribute].elements['token'].value = static_token;
		document.forms['addtocart' + '_' + id_product  + '_' + id_product_attribute].submit();
	}
	return (true);
}
function WishlistAddProductCart(token, id_product, id_product_attribute, id_quantity){
	if ($('#' + id_quantity).val() <= 0)
		return (false);
	PARAM = Wishlist_AJAX_PARAM
	PARAM.url = baseDir + 'modules/blockwishlist/buywishlistproduct.php'
	PARAM.data = 'token=' + token + '&static_token=' + static_token + '&id_product=' + id_product  + '&id_product_attribute=' + id_product_attribute
	PARAM.success = function(data){
			if (data)
				alert(data);
			else{
				$('#' + id_quantity).val($('#' + id_quantity).val() - 1);
			}
	}
	$.ajax(PARAM);
	return (true);
}

/**  * Show wishlist managment page * * @return void */
function WishlistManage(id, id_wishlist){
	PARAM = Wishlist_AJAX_PARAM
	PARAM.url = baseDir + 'modules/blockwishlist/managewishlist.php'
	PARAM.data = 'id_wishlist=' + id_wishlist + '&refresh=' + false
	PARAM.success = function(data){
			$('#' + id).hide();
			document.getElementById(id).innerHTML = data;
			$('#' + id).fadeIn('slow');
	}
	$.ajax(PARAM);
}

/**  * Show wishlist product managment page * * @return void */
function WishlistProductManage(id, action, id_wishlist, id_product, id_product_attribute, quantity, priority){
	PARAM = Wishlist_AJAX_PARAM
	PARAM.url = baseDir + 'modules/blockwishlist/managewishlist.php'
	PARAM.data = 'action=' + action + '&id_wishlist=' + id_wishlist + '&id_product=' + id_product + '&id_product_attribute=' + id_product_attribute + '&quantity=' + quantity + '&priority=' + priority + '&refresh=' + true
	PARAM.success = function(data){
			if (action == 'delete')
				$('#wlp_' + id_product + '_' + id_product_attribute).fadeOut('fast');
			else if (action == 'update')
			{
				$('#wlp_' + id_product + '_' + id_product_attribute).fadeOut('fast');
				$('#wlp_' + id_product + '_' + id_product_attribute).fadeIn('fast');
			}
	}
	$.ajax(PARAM);
}
/** * Delete wishlist * * @return boolean succeed */
function WishlistDelete(id, id_wishlist, msg){
	var res = confirm(msg);
	if (res == false)
		return (false);
	PARAM = Wishlist_AJAX_PARAM
	PARAM.url = baseDir + 'modules/blockwishlist/mywishlist.php'
	PARAM.data = 'deleted&id_wishlist=' + id_wishlist
	PARAM.success = function(data){
			$('#' + id).fadeOut('slow');
	}
	$.ajax(PARAM);
}
/** * Hide/Show bought product * * @return void */
function WishlistVisibility(bought_class, id_button){
	if ($('#hide' + id_button).css('display') == 'none')	{
		$('.' + bought_class).slideDown('fast');
		$('#show' + id_button).hide();
		$('#hide' + id_button).fadeIn('fast');
	}	else	{
		$('.' + bought_class).slideUp('fast');
		$('#hide' + id_button).hide();
		$('#show' + id_button).fadeIn('fast');
	}
}
/** * Send wishlist by email * * @return void */
function WishlistSend(id, id_wishlist, id_email){
	$.post(baseDir + 'modules/blockwishlist/sendwishlist.php',
	{ token: static_token,
	  id_wishlist: id_wishlist,
	  email1: $('#' + id_email + '1').val(),
	  email2: $('#' + id_email + '2').val(),
	  email3: $('#' + id_email + '3').val(),
	  email4: $('#' + id_email + '4').val(),
	  email5: $('#' + id_email + '5').val(),
	  email6: $('#' + id_email + '6').val(),
	  email7: $('#' + id_email + '7').val(),
	  email8: $('#' + id_email + '8').val(),
	  email9: $('#' + id_email + '9').val(),
	  email10: $('#' + id_email + '10').val() },
	function(data)	{
		if (data)
			alert(data);
		else
			WishlistVisibility(id, 'hideSendWishlist');
	});
}