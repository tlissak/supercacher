// Ajax submit by Tlissak. Usage $('#form').ajax_submit({return_func:function(__s){})
(function(){
	jQuery.fn.ajax_submit = function(conf){
	var cfg = jQuery.extend({return_func:function(__s){alert(__s) ;}	}, conf);
	jQuery(this).submit(function(){
		__method 	= this.method.toUpperCase() ;
		__data		= $(this).serialize() ;
		__uri		= __method=='POST' ? this.action : this.action + '?'+__data ;
		$.ajax({    type: __method   ,url: __uri  ,data: __data   ,success: cfg.return_func}) ;
		return false ;
	})
}
})(jQuery);
(function(){
	jQuery.fn.blink = function(){	
		jQuery(this).fadeTo('fast', 0 ).fadeTo('fast', 1).fadeTo('fast', 0 ).fadeTo('fast', 1).fadeTo('fast', 0 ).fadeTo('fast', 1) ;
	}
})(jQuery);
jQuery.extend( {
    _: function(__id) {     	return document.getElementById(__id)    }
});
$(function() {
	$.nyroModalSettings({ width:720,height:500});
});
$(function(){
	$('.ajaxSubmit').ajax_submit()
})

$(function(){
	$('.nyroModalTerms').nyroModal({ width:950,height:500}) ;
	$('.nyroModalFrame').nyroModal({type: 'iframe'}) ;
	$('.nyroModalForm').nyroModal({type: 'formData'}) ;
})