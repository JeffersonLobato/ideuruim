window.onload = function(){$(function(){
	
			
			$('.slide').slick({
				centerMode: true,
				slidesToShow: 3,
				prevArrow:"<img src='../_images/seta-esquerda.png' style='position:absolute; top:30%; left:-6vw; cursor: pointer;'>",
				nextArrow:"<img src='../_images/seta-direita.png' style='position:absolute; top:30%; right:-6vw; cursor: pointer;'>",
				responsive:[
					{
						breakpoint:768,
						settings:{
							centerMode: true,
							slidesToShow: 1,
							prevArrow:"<img src='../_images/seta-esquerda.png' style='position:absolute; top:30%; left:-8vw;'>",
							nextArrow:"<img src='../_images/seta-direita.png' style='position:absolute; top:30%; right:-8vw;'>",
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

			$('.slide-serv').slick({
				centerMode: false,
				infinite: false,
				slidesToShow: 2,
				prevArrow:"<img src='../_images/seta-esquerda.png' style='position:absolute; top:30%; left:-6vw; cursor: pointer;'>",
				nextArrow:"<img src='../_images/seta-direita.png' style='position:absolute; top:30%; right:-6vw; cursor: pointer;'>",
				responsive:[
					{
						breakpoint:768,
						settings:{
							centerMode: true,
							slidesToShow: 1,
							prevArrow:"<img src='../_images/seta-esquerda.png' style='position:absolute; top:30%; left:-8vw;'>",
							nextArrow:"<img src='../_images/seta-direita.png' style='position:absolute; top:30%; right:-8vw;'>",
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


});

}
