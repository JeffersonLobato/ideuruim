
<?php

	$sucesso = false;

	if(isset($_POST['num-sac']) && isset($_POST['num-whatsapp'])){

		$numSac = $_POST['num-sac'];
		$numWhatsapp = $_POST['num-whatsapp'];

		$numSac = Painel::masc_tel($numSac);

		$sql = DataBase::conectar() -> prepare("UPDATE `contatos` SET num_sac = ?, num_whatsapp = ? WHERE `id`= 1");
		$sql -> execute(array($numSac, $numWhatsapp));

		$sucesso = true;

	}



?>

<!DOCTYPE html>
<html lang="pt-br">

	<section class="page-control">

			<?php 

					if($sucesso){

						echo "<h3 class='sucesso'>Atualizado com sucesso!</h3>";

					}

			?>

		<form class="prod add-serv" method="post">
			
				<div  class="text-mais-serv">

					<label for="titulo-serv">Digite um contato para o SAC(somente números DD com 2 dígitos): </label>
		
					<input type="tel" name="num-sac" class="titulo-serv" required>
				
				</div>

				<div>

				<div  class="text-mais-serv">

					<label for="titulo-serv">Digite um link para o WhatsApp (exemplo: https://linktr.ee/megamulti): </label>
		
					<input type="text" name="num-whatsapp" class="titulo-serv" size="50px">
				
				</div>

				</div>

				<input type="submit" name="salvar" value="SALVAR" class="salvar-serv" required>
	

		</form>


	</section>

</body>
</html>