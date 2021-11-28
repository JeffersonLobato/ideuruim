$(function(){
	$('.menu-hamburguer').click(function(){
	
	var lista = $('.menu-mobile');


	if(lista.is(':hidden') == true){
		var icone = $('#hamburguer');
		icone.removeClass('fa-bars');
		icone.addClass('fa-times');
		$(lista).slideToggle();
	}
	else{
		var icone = $('#hamburguer');
		icone.removeClass('fa-times');
		icone.addClass('fa-bars');
		$(lista).slideToggle();
	}

	});

})