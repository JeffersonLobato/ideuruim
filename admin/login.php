<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>IDeuRuim</title>
	<link rel="SHORTCUT ICON" href="../_images/logo.ico" type="image/x-icon" />
	<link href="../_css/admin.css" rel="stylesheet"/>
	<link href="../_css/all.min.css" rel="stylesheet">
	<meta charset="utf-8">
	<meta name="robots" content="noindex" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
</head>
<body>

	

	<div class="painel">

		<?php


			if(isset($_POST['acao'])){
				$user = $_POST['login'];
				$password = md5($_POST['senha']);
				$sql = DataBase::conectar() -> prepare("SELECT * FROM usuarios WHERE user = ? AND pass = ?");
				$sql -> execute(array($user, $password));

				if($sql->rowCount() == 1){

					echo $user." ".$password;
					$info = $sql->fetch();
					
					$_SESSION['login'] = true;
					$_SESSION['user'] = $user;
				
					header('Location: index.php');
					die();
				}else{
					echo '<div class="erro-box"><h3><i class="fa fa-times"></i> Usuário ou senha incorretos!</h3></div>';
				}


			}
		?>


		<form method="post">

		<h1>Painel do administrador</h1>
		<div>
			<label for="login">Usuário: </label>
			<input type="text" name="login" class="login">
		</div>

		<div>
			<label for="senha">Senha: </label>
			<input type="password" name="senha" class="senha">
		</div>

		<div>
			<input type='submit' name="acao" class="logar" value="Logar"/>
		</div>
		</form>
	</div><!--painel-->

	<script type="text/javascript" src="../_js/jquery.js"></script>
	<script type="text/javascript" src="../_js/all.min.js"></script>

</body>
</html>