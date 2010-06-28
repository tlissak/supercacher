aCart = {
	init:function(){
		this.cart_url = 'cart.php'
		this.cart_url = 'modules/blockcartmod/blockcartmod-ajax.php'
		
		this.lang = []
		this.lang['emptycart'] = 'Votre panier est vide !'
		this.lang['products'] = 'Product(s)'
		this.lang['shipping'] = 'Livraison'
		this.lang['total'] = 'Total'
				
		this.loadObj()
		this.bindlinks()
		this.getCart()
	},getCart:function(){
		that = this
		this.call('ajax=true&token=' + static_token
		,function(dt){that.update(dt)})	
	},loadObj:function(){
		this.cartblock = $('#cart_block')
	},bindlinks:function(){
		that = this
		$('.ajax_add_to_cart_button').click(function(){
			id_product = $(this).attr('rel').replace('ajax_id_product_', '');
			that.add(id_product,$(this))
			return false ;
		})	
	},log :function(p){	if (window.console){if (console.log){console.log(p);}}
	},call:function(__data,__ret_func){
		that = this
		$.ajax({ 
			type: 'GET'
			,url: baseDir + that.cart_url
			,data: __data
			,async: true
			,cache: false
			,success: function(data){
				jsonData = that.toJson(data) ;	__ret_func(jsonData) ;}
		})
	},toJson:function(str){
		try{Json = eval("("+str+")")}catch(e){	this.log(e+'\n'+str) ;	Json = {s:str} ; }	return Json
	},update:function(json){
		that = this
		if (json.products.length == 0 && json.discounts.length ){
			this.cartblock.html(this.lang['cartempty'])
			return 
		}
		d = '<dl>'
		for(pdt in json.products  )	{	
			pdt = json.products[pdt]
			d += '<dd class="clear">'
			d += '<span class="left">x'+pdt.quantity+' </span> &nbsp; '
			d += ' <a href="'+pdt.link+'" class="fsmall" >'+pdt.name+'</a>'
			d += ' <a href="cart.php?delete&id_product=' 
			d += pdt.id + '&token=' + static_token + '&ajax=true"'
			d += ' rel="'+pdt.id+'" class="right ajaxdel" >'
			d += '<img src="GUI/images/deleteGrey.gif" /></a>'
			d += ' <span class="price right">'+pdt.price+'</span>'
			d += '</dd>'		
		}
		d += '</dl>'
		d += '<dl>'
		for(pdt in json.discounts  )	{	
			pdt = json.discounts[pdt]
			d += '<dd class="clear">'
			d += '<span class="left">x'+pdt.quantity+' </span> &nbsp; '
			d += ' <span class="fsmall" >'+pdt.name+'</span>'
			d += ' <a href="'+pdt.link+'" class="right" >'
			d += '<img src="GUI/images/deleteGrey.gif" /></a>'
			d += ' <span class="price right">'+pdt.price+'</span>'
			d += '</dd>'
		}	
		d += '</dl>'	
		
		d += '<dl style="padding-top:7px; margin-top:7px; border-top:#CCC 1px dotted;">'		
		d += '<dd class="clear">'
		d += '<span class="left">'+ json.nbTotalProducts +' '+this.lang['products']+' </span> &nbsp; '
		d += ' <span  class="price right" >'+ json.productTotal + '</span>'
		d += '</dd>'	
		d += '<dd class="clear">'
		d += '<span class="left">'+this.lang['shipping']+' </span> &nbsp; '
		d += ' <span  class="price right" >'+ json.shippingCost + '</span>'
		d += '</dd>'
		d += '<dd class="clear">'
		d += '<span class="left">'+this.lang['total']+' </span> &nbsp; '
		d += ' <span  class="price right" >'+ json.total + '</span>'
		d += '</dd>'	
		d += '</dl>'
		
		dt = jQuery(d)		
		
		dt.find("a.ajaxdel").click(function(){
			idPdt = $(this).attr("rel")
			that.del(idPdt)
			return false	
		})
		this.cartblock.html(dt)
	},del:function(idProduct){
		that = this
		this.call('delete&id_product=' + idProduct 
			+ '&token=' + static_token + '&ajax=true'
			,function(dt){that.update(dt)})	
	},add : function(idProduct, caller, quantity){
		that = this 	//if (!this.checkCustomizations()){ajaxCart.log(fieldRequired);	return ; }
		caller.attr('disabled', 'disabled');
		this.call(
			'add&ajax=true&qty=' + (quantity  ? quantity : 1) + '&id_product=' + idProduct + '&token=' + static_token
			,function(jsonData){
				caller_block = caller
				caller.parents().each( function() {	if ($(this).is('.ajax_block_product')) caller_block = $(this);	});
				$.add2cart(	caller_block, that.cartblock, function(){ caller.attr('disabled',''); that.update(jsonData);	});
			})
	},x :{'products': [{'id': 1188293,
			'link': 'http://localhost/product.php?id_product=1188293',
			'quantity': 3,	'name': 'Of Tov','priceByLine': '35,70 €', 'price': '35,70 €',
			'idCombination': 0,	'hasAttributes': false,	'hasCustomizedDatas': false,'customizedDatas':[]
		}],'discounts': [{'id': 1,	'name': 'discount','description': 'discount description','nameDescription': 'discount.name',
					'link': 'order.php?deleteDiscount=0','price': '0,00 €'	}]
		,'shippingCost': '7,00 €','wrappingCost': '0,00 €','nbTotalProducts': '23'
		,'total': '111,87 €','productTotal': '104,87 €','hasError' : false
	}
}
$(function() {
	aCart.init();
});
(function($) {	
	$.extend({
	add2cart: function(source, target, callback) {
    var shadow = $('#cart_shadow');	
      if( !shadow.attr('id') ) {
          $('body').prepend('<div id="cart_shadow" style="display: none; background-color: #ddd; border: solid 1px darkgray; position: static; top: 0px; z-index: 100000;">&nbsp;</div>');
          var shadow = $('#cart_shadow');
      }      
      shadow.css({
	  width: source.css('width')
	  ,height:source.css('height')
	  ,top:source.offset().top
	  ,left:source.offset().left
	  ,position:'absolute'
	  ,opacity:0.5}).show();      
      shadow.animate( { width: target.innerWidth(), height: target.innerHeight()
	  					, top: target.offset().top, left: target.offset().left }, { duration: 300 } )
        .animate( { opacity: 0 }, { duration: 100, complete: function(){
			$(this).css({display:'none'})
			callback()
		}} );
        
		}
	});
})(jQuery);