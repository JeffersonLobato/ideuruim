<?php

	include('config.php'); 
	include('admin/config.php');

		
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>IDeuRuim</title>
	<link rel="SHORTCUT ICON" href="<?php echo INCLUDE_PATH; ?>_images/logo.ico" type="image/x-icon" />
	<meta charset="utf-8">
	<meta name="description" content="A loja IDeuRuim é localizada no Rio de Janeiro e tem especialidade em consertos e vendas de smartphones" />
	<meta name="keywords" content="conserto,conserto de celular,conserto iphone,Smartphone,conserto celular,tablet conserto,conserto de celulares,tabela de preços para conserto de celular, Iphone,iphone 11,iphone 11 pro,preço iphone 12,iphone se,iphone xr,iphone 11 pro max,novo iphone 12,apple iphone 12,iphone 8,revisão do iphone 12,iphone 12,novo iphone,iphone 12 máx.,iphone 12 pro,iphone 8 plus,iphone da Apple,iphone 12 apple,iphone 12 pro max,revisão do iphone 11,iphone 12 design,apple iphone 12 max,iphone 12 unboxing,iphone 11 unboxing,iphone x,iphone 12 data de lançamento,iphone xs,apple iphone 12 pro max,iphone 12 data de lançamento,iphone se 2,iphone 11 vs iphone 11 pro,iphone rico, xiaomi,xiaomi china,xiaomi unboxing,melhores telefones xiaomi,xiaomi lux,xiaomi mi8,xiaomi redmi note 9 pro,xiaomi pro 2,xiaomi mi 6x,xiaomi mi a2,teste de xiaomi,xiaomi mi mix,xiaomi india,xiaomi mijia,loja xiaomi,xiaomi lux tv,xiaomi mi 10 ultra unboxing,telefones xiaomi,o que é xiaomi,dentro de xiaomi,gadgets xiaomi,xiaomi mi banda 5,xiaomi mi 8 vs 6x,xiaomi note 9 pro,xiaomi m365 pro 2,produtos xiaomi,origem do xiaomi,xiaomi luxe oled,melhor telefone xiaomi,melhor telefone xiaomi,telefone xiaomi 2019,xiaomi lux oled tv" />
	<meta name="author" content="Jefferson Lobato"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
	<link href="<?php echo INCLUDE_PATH; ?>_css/slick.css" rel="stylesheet"/>
	<link href="<?php echo INCLUDE_PATH; ?>_css/style.css" rel="stylesheet"/>
	<link href="<?php echo INCLUDE_PATH; ?>_css/all.min.css" rel="stylesheet">

	<style>
	    .slide-single a{
	    	display: block;
	        width: 100%;
	        height: 100%;
	        text-decoration: none;
	        text-align: center;

	        
	    }

	    .teste1{
	    	background-color: red;
	    }

	    .teste2{
	    	background-color: green;
	    }

	    .teste3{
	    	background-color: yellow;
	    }
	    
	    .botao{
	        
	        
	        width: 80%;
        	cursor: pointer;
        	padding: 14px;
        	color: #ffffff;
        	font-size: 15px;
        	border: 1px solid rgba(0,0,0,0.5);
        	outline: none;
        	border-radius: 15px;
        	background-image: linear-gradient(to bottom, rgb(255,0,0), rgb(255,60,60) 100%);
        	margin: 10px;
        	
        	
        	
        	
        
            }

            .botao:hover{
            	background-image: linear-gradient(to bottom, rgb(255,0,0), rgb(255,120,120) 100%);
            
            
            }
            
            @media screen and (max-width: 1000px){
                
                .botao{
                		width: 80%;
                		font-size: 12px;
                		border: 1px solid rgba(0,0,0,0.5);
                		border-radius: 10px;
                		background-image: linear-gradient(to bottom, rgb(255,0,0), rgb(255,60,60) 100%);
                
                    	}
                
            }
	</style>

</head>
<body>
	<?php

		$sql = DataBase::conectar() -> prepare("SELECT * FROM `contatos`");
		$sql -> execute();
		$contato = $sql -> fetchAll();
		foreach ($contato as $key => $value) {
				$contato[0] = $value['id'];
				$contato[1] = $value['num_sac'];
				$contato[2]	= $value['num_whatsapp'];
			}


	?>
	<div class="load"><p><i class="fa fa-cog fa-spin fa-3x fa-fw"></p></i></div>
	<section class="logo-whatsapp">
		<a href="<?php echo $contato[2];?>" target="_blank"><img class="whatsapp" src="<?php echo INCLUDE_PATH; ?>_images/logo-whatsapp.png"></a>
	</section><!--logo-whatsapp-->
	<div class="clear"></div>

	<header>
			<nav>
				<div class="center-menu">

						<a href="#home"><img src="<?php echo INCLUDE_PATH; ?>_images/logo.png" class="logo"></a>
					
						<div class="menu">

							<a href="https://instagram.com/ideuruimassistencia?igshid=19nl9kuzkq2wi" target="_blank"><img src="<?php echo INCLUDE_PATH; ?>_images/logo-insta.png" class="logo-insta"></a>
							<a href="https://www.facebook.com/ideuruimassistencia/" target="_blank"><img src="<?php echo INCLUDE_PATH; ?>_images/logo-face.png" class="logo-face"></a>

							<h1 class="menu-hamburguer"><i id="hamburguer" class="fas fa-bars"></i></h1>

							<ul class="menu-desktop">
								<a href="#home"><li class="menu-home">Home</li></a>
								<a href="#produtos"><li class="menu-produtos">Produtos</li></a>
								<a href="#servicos"><li class="menu-servicos">Serviços</li></a>
								<a href="#contato"><li class="menu-contato">Contatos</li></a>
							</ul>

							<ul class="menu-mobile">
								<a href="#home"><li>Home</li></a>
								<a href="#produtos"><li>Produtos</li></a>
								<a href="#servicos"><li>Serviços</li></a>
								<a href="#contato"><li>Contatos</li></a>
								<a href="#localizacao"><li>Localização</li></a>
							</ul>

						</div><!--menu-->
						<div class="clear"></div>

				</div><!--center-menu-->
			</nav>

	</header>

	<?php

		$banner = [0,1,2,3,4,5];



		for($i=1; $i < 7; $i++){


			$sql = DataBase::conectar() -> prepare("SELECT `img` FROM `home` WHERE `home`.`id` = ".$i);
			$sql -> execute();
			$imgDel = $sql -> fetchAll();
			
			
			foreach ($imgDel as $key => $value) {
				$banner[$i] = $value['img'];

			}
		}

	?>

	
		<section id="home" class="sessao home fade-out-menu">
			<div class="slider-banner">
				
				<?php
					
					echo "<img class='banner' src='".INCLUDE_PATH."_images/".$banner[1]."'>";
					echo "<img class='banner' src='".INCLUDE_PATH."_images/".$banner[3]."'>";
					echo "<img class='banner' src='".INCLUDE_PATH."_images/".$banner[5]."'>";

				?>
			</div><!--slider-banner-->

			<div class="slider-banner-responsivo">
			
				<?php
					echo "<img class='banner' src='".INCLUDE_PATH."_images/".$banner[2]."'>";
					echo "<img class='banner' src='".INCLUDE_PATH."_images/".$banner[4]."'>";
					echo "<img class='banner' src='".INCLUDE_PATH."_images/".$banner[6]."'>";
				?>

			</div><!--slider-banner-responsivo-->

			<button id="saiba-mais" class="saiba-mais">Saiba mais</button>
		</section><!--home-->
	<section id="produtos" class="sessao produtos fade-out-menu">
		
		<div class="center-produtos">

			<h1>Produtos</h1>

			<div class="slide">
				
			
				<?php


					$sql = DataBase::conectar() -> prepare("SELECT * FROM `produtos`");
					$sql -> execute();
					$content = $sql->fetchAll();

			
					foreach ($content as $key => $value) {
							
						echo "<div class='slide-single'>";

						echo	"<img class='produto-single' src='".INCLUDE_PATH."_images/".$value['img']."'>";

						echo "<a href='COLOCAR AQUI URL DO WHATSAPP' target='_blank'><div id='botao' class='botao'>Compre Aqui</div></a>";
							
						echo "</div>";

			

					}

				?>


			</div><!--slide-->
			<div class="clear"></div>
		</div><!--container-->
	</section><!--produtos-->

	
	<section id="servicos" class="sessao servicos fade-out-menu">

		<h1>Serviços</h1>
		<div class="center-servicos">

		<?php 

			$sql = DataBase::conectar() -> prepare("SELECT * FROM `servicos`");
			$sql -> execute();
			$marcaModelo = $sql -> fetchAll();

			
		?>

		<div class="servicos-gerais">

			<?php

				if(!empty($marcaModelo)){

				foreach ($marcaModelo as $key => $value) {
				
					echo "<div class='separador'>";
					echo "<div class='serv-indiv'>";
					echo	"<h3>".$value['titulo']."</h3>";
					echo	"<p>".$value['texto']."</p>";
					echo "</div>";
					echo "</div>";

					}

				}


			?>
			
			
			<div class="clear"></div>
		</div><!--servicos-gerais-->

		</div><!--center-servicos-->

	</section><!--servicos-->

	<section id="contato" class="sessao contato fade-out-menu">


		<div class="center-contato">

			
			<div class="todos-contatos">

				<h1>Contatos</h1>

					<?php

						$sql = DataBase::conectar() -> prepare("SELECT * FROM `contatos`");
						$sql -> execute();
						$contato = $sql -> fetchAll();

						foreach ($contato as $key => $value) {
							$contato[0] = $value['id'];
							$contato[1] = $value['num_sac'];
							$contato[2]	= $value['num_whatsapp'];
						}

					?>

				<h3>Falar com um de nossos atendentes</h3>
				<span><a href="<?php echo $contato[2];?>" target="_blank">Clique aqui</a> ou no logo do WhatsApp nesta página e seja redirecionado para falar com nossos atendentes sobre produtos e serviços.</span>
				<h3>Serviço de Atendimento ao Consumidor - SAC</h3>
				<span>Para sugestões ou reclamações, ligue para <?php echo $contato[1];?></span>


			</div><!--todos-contatos-->

			<div id="localizacao" class="location fade-out-menu">
			<h1 class="h1-location">Localização</h1>

			<div class="maps-location">

				
				
				<iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" id="gmap_canvas" src="https://maps.google.com/maps?width=520&amp;height=400&amp;hl=en&amp;q=Avenida%20Marechal%20Floriano%20Peixoto,%201480,%20Loja%20110%20Nova%20Igua%C3%A7u+(Loja%20IDeuRuim)&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>

				<script type='text/javascript' src='https://maps-generator.com/google-maps-authorization/script.js?id=4c7eb268eaf6b23bc8c4b4d97615c03bd5cdebdf'></script>	

			</div><!--maps-location-->
			</div><!--location-->
		</div><!--center-contato-->

	</section><!--contato-->

	<footer>
		
		<span>iDeuRuim - Av. Mal. Floriano Peixoto, 1480 - 110 - Centro, Nova Iguaçu - RJ, 26220-060 / CNPJ</span>
		<span class="footer-desktop">© Copyright 2020. Desenvolvido por <a href="https://www.jeffelobato.com" target="_blank"><b>Jefferson Lobato</b></a></span>

		<span class="footer-mobile">© Copyright 2020.</span>
		<span class="footer-mobile">Desenvolvido por</br><a href="https://www.instagram.com/jeffelobato" target="_blank"><b>Jefferson Lobato</b></a></span>
		<div class="clear"></div>


	</footer>

	<script type="text/javascript" src="<?php echo INCLUDE_PATH; ?>_js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo INCLUDE_PATH; ?>_js/slick.js"></script>
	<script type="text/javascript" src="<?php echo INCLUDE_PATH; ?>_functions/slides.js"></script>
	<script type="text/javascript" src="<?php echo INCLUDE_PATH; ?>_functions/functions.js"></script>
	<script type="text/javascript" src="<?php echo INCLUDE_PATH; ?>_js/menu_responsivo.js"></script>
	<script type="text/javascript" src="<?php echo INCLUDE_PATH; ?>_js/scroll_dinamic.js"></script>
	<script type="text/javascript" src="<?php echo INCLUDE_PATH; ?>_js/all.min.js"></script>
</body>
</html>

