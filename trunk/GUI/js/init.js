$(function(){
	$('#home-pdt').cycle({ 
		fx: 'scrollLeft'
		, delay: 0 ,speed:500
		,pager: '#nav'
		,pagerAnchorBuilder: function(idx, slide) {
				$('#nav li').eq(idx).click(function(){
				$('#home-pdt').cycle(idx)
					return false 
			})
		}	
	}) ;	
})
$(function(){
	$('input[@type=radio].star').rating();
});
$(function(){
	$('.auto-submit-star').rating({
			callback: function(value, link){}
	});
})
function closeCommentForm(){
	$('#sendComment').slideUp('fast');
	$('input#addCommentButton').fadeIn('slow');
}
$(	function (){
	uri = baseDir + '/modules/ajaxsearch/ajaxsearch-ajax.php?q='
	$('.search-ipt').liveSearch({url:uri ,handleData:function(dt){
		jsonData = eval("("+dt+")")
		for (var i=0,res=[];(l=jsonData[i]);i++){
			res.push('<div><a href="'+l.link+'"><img src="'+ l.image +'" />'+l.name+'<span class="price"> '+l.price+'</span></a></div>')
		}
		return res.join('')		
	},fixWidth:297})

	$("ul.menu-c>li:last-child").addClass("last"); 
})

$(function(){
	$('a[href$="jpg"]').click(function(){ 
		$('#bigpic').attr('src',this.href)
		return false 
	})	
})




