<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>IDeuRuim</title>
	<link rel="SHORTCUT ICON" href="../_images/logo.ico" type="image/x-icon" />
	<link href="../_css/admin.css" rel="stylesheet"/>
	<link href="../_css/all.min.css" rel="stylesheet">
	<link href="../_css/slick.css" rel="stylesheet"/>
	<meta charset="utf-8">
	<meta name="robots" content="noindex" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
</head>
<body>

	<?php 


		if(isset($_POST['acao'])){

			$_SESSION['login'] = false;
			session_destroy();
			header('Location: index.php');
			die();

		}

	?>

	<header>
		<nav class="menu-sair">
			
			<div class="center-menu">

				<img src="../_images/logo.png" class="logo">
				
				<form method="post">		
					<input type="submit" class="sair" name="acao" value="SAIR">
				</form>
				

			</div><!--center-menu-->

		</nav>
		<div class="clear"></div>
	</header>


	<aside>

		<a href="page-principal">
			<div class="control-titulo">

				<h2>Controles do administrador</h2>

			</div>
		</a>

		<a href="control-home">
			<div class="control-banner">
				
				<h3>Slide da página home</h3>

			</div>
		</a>

		<a href="control-produtos">
			<div class="control-produtos">
				
				<h3>Slide de produtos</h3>

			</div>
		</a>

		<div class="control-servicos">
			
			<h3>Serviços</h3>

			
		</div>

		<a href="add-servicos">
			<div class="add-rem-serv control-add-serv"><h5>Adicionar Serviços</h5></div>
		</a>

		<a href="control-servicos">
			<div class="add-rem-serv control-rem-serv"><h5>Remover Serviços</h5></div>
		</a>

		<a href="control-contatos">
			<div class="control-contato">
		
			
				<h3>contatos</h3>

			</div>
		</a>
	</aside>

	<?php

		Painel::carregarPagina();

	?>

	<script type="text/javascript" src="../_js/jquery.js"></script>
	<script type="text/javascript" src="../_js/all.min.js"></script>
	<script type="text/javascript" src="../_js/slick.js"></script>
	<script type="text/javascript" src="_functions/slides.js"></script>
	<script type="text/javascript" src="_functions/functions.js"></script>

</body>
</html>