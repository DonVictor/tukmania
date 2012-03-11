$(document).ready(function(){
	$('input, select, checkbox').tipTip({attribute:'data-title', keepAlive:true});
	$('.datepicker').datepicker({dateFormat:'yy-mm-dd'});
	$('.rut').Rut({
		on_error: function(){
			$('.rut').addClass('error');
			notify(translate.this_rut_is_not_valid, this);
		},
		on_success: function(){
			$.noty.close();
			$('.rut').removeClass('error');
		}
	});
	
	/*Validate Form*/
	$('.validate-form').submit(function(e){
		var self = $(this);
		var fields = self.find(':required');
		if(fields.length > 0){
			$.each(fields, function(index, item){
				var input = $(this);
				var message = input.attr('data-title');
				if(input.hasClass('name')){
					
				}
				if(input.hasClass('number')){
					
				}
				if(input.hasClass('money')){
					
				}
			});
		}else{
			return true;		
		}

	});
});

// notifications (info, warning, success)
function notify(custom, self){
	$.noty.clearQueue();
	$.noty.closeAll();
	if(typeof custom == 'string'){
		custom = {text: custom};
	}
	var toggle = {"height":"toggle"};
	var def = {
    text: 'Atención',
    type : 'error',
    textAlign: 'center',
    easing: 'swing',
    animateOpen: toggle,
    animateClose: toggle,
    speed: 500,
    timeout:0,
    closable: true,
    closeOnSelfClick: true
  };
  var opts = $.extend(def, custom);
	noty(opts);
}


