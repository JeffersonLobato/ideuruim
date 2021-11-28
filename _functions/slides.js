window.onload = function(){$(function(){
	
	$('.slide').slick({
		centerMode: true,
		slidesToShow: 3,
		prevArrow:"<img src='_images/seta-esquerda.png' style='position:absolute; top:60%; left:-6vw; cursor:pointer;'>",
		nextArrow:"<img src='_images/seta-direita.png' style='position:absolute; top:60%; right:-6vw; cursor: pointer;'>",
		responsive:[
			{
				breakpoint:768,
				settings:{
					centerMode: true,
					slidesToShow: 1,
					prevArrow:"<img src='_images/seta-esquerda.png' style='position:absolute; top:50%; left:-8vw;'>",
					nextArrow:"<img src='_images/seta-direita.png' style='position:absolute; top:50%; right:-8vw;'>",
				}
			},

			{
				breakpoint: 667,
				settings:{
					centerMode: true,
					slidesToShow: 1,
					arrows: false
				}
			}
		]
	});


	$('.servicos-gerais').slick({
		centerMode: false,
		infinite: false,
		slidesToShow: 2,
		prevArrow:"<img src='_images/seta-esquerda.png' style='position:absolute; top:60%; left:-6vw; cursor:pointer;'>",
		nextArrow:"<img src='_images/seta-direita.png' style='position:absolute; top:60%; right:-6vw; cursor: pointer;'>",
		responsive:[
			{
				breakpoint:768,
				settings:{
					centerMode: true,
					slidesToShow: 1,
					prevArrow:"<img src='_images/seta-esquerda.png' style='position:absolute; top:50%; left:-8vw;'>",
					nextArrow:"<img src='_images/seta-direita.png' style='position:absolute; top:50%; right:-8vw;'>",
				}
			},

			{
				breakpoint: 667,
				settings:{
					centerMode: false,
					slidesToShow: 1,
					prevArrow:"<img src='_images/seta-esquerda.png' style='position:absolute; bottom:35vh; left:-8vw;'>",
					nextArrow:"<img src='_images/seta-direita.png' style='position:absolute; bottom:35vh; right:-8vw;'>",
				}
			}
		]
	});

});



var largura = $(window).width();

if(largura > 400){

	$('.slider-banner-responsivo').css('display','none');

	$('.slider-banner').slick({
	  infinite: true,
	  speed: 3000,
	  fade: true,
	  autoplay: true,
	  autoplaySpeed: 3000,
	  arrows: false
	});
}
else{

	$('.slider-banner').css('display','none');
	$('.slider-banner-responsivo').css('display','block');

	$('.slider-banner-responsivo').slick({
	  infinite: true,
	  speed: 3000,
	  fade: true,
	  autoplay: true,
	  autoplaySpeed: 3000,
	  arrows: false
	});

}}