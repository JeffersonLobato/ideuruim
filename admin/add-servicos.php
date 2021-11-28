<?php

	$sucesso = false;

	if(isset($_POST['titulo']) && isset($_POST['texto'])){

		$titulo = $_POST['titulo'];
		$texto = $_POST['texto'];
		$sql = DataBase::conectar() -> prepare("INSERT INTO `servicos` (`id`, `titulo`,`texto`) VALUES (NULL, ?, ?)");
		$sql -> execute(array($titulo, $texto));

		$sucesso = true;

	}



?>


<!DOCTYPE html>
<html lang="pt-br">

	<section class="page-servicos">

			<?php 

					if($sucesso){

						echo "<h3 class='sucesso'>Enviado com sucesso!</h3>";

					}


				?>

		<form class="prod add-serv" method="post">


				<div>

				<div  class="text-mais-serv">

					<label for="titulo">Digite um título para o serviço: </label>
		
					<input type="text" name="titulo" class="titulo-serv" size="50px" maxlength="50px" required>
				
				</div>

				<div>

				<div  class="text-mais-serv">

					<label for="texto" class="label-add-serv">Digite o texto do serviço ( max 300 caracteres): </label>
		
					<textarea name="texto" class="text-serv" maxlength="300px" required></textarea>
				
				</div>

				</div>

				<input type="submit" name="salvar" value="SALVAR" class="salvar-serv">
	

		</form>


	</section>

</body>
</html>