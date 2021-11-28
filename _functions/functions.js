$('.saiba-mais').click(function(){
	
	var offSetTop = $('#produtos').offset().top;

	$('html, body').animate({'scrollTop':offSetTop},1500);

	return false;

});

$(document).ready(function() {
  
   $('.load').hide();

});

