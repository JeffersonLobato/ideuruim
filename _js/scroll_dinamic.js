$(function(){

	$(window).scroll(function(){
		var windowOffY = $(window).scrollTop();
		var windowHeight = $(window).height();
		$('.sessao').each(function(){
			var elOffY = $(this).offset().top;
			if(elOffY < (windowOffY + (windowHeight/2)) && (elOffY+$(this).height()) > windowOffY){
				var target = $(this).attr('id');
				$('.menu-desktop a li').css('color', 'rgb(220,220,220)');
				$(".menu-"+target).css('color','rgb(255,50,50)');
				return false;
			}

		});

	});

	$('nav a').click(function(){
		var href = $(this).attr('href');
		var offSetTop = $(href).offset().top;

		$('html, body').animate({'scrollTop':offSetTop},1500);
		return false;
	})


});
