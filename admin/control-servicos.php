<?php

	

	$sql = DataBase::conectar() -> prepare("SELECT * FROM `servicos`");
	$sql -> execute();
	$content = $sql -> fetchAll();

	if(isset($_POST['rem'])){

		if(!empty($_POST['serv'])){
			$valores = $_POST['serv'];
			foreach ($valores as $key => $value) {
				$sql = DataBase::conectar() -> prepare("DELETE FROM `servicos` WHERE `servicos`.`id` = ?");
				$sql -> execute(array($value));
			}
		}
	}


?>


<!DOCTYPE html>
<html lang="pt-br">

	<section class="page-servicos">


		<form class="serv" method="post">


			<div class="slide-serv">

		<?php

			if(!empty($content)){

				foreach ($content as $key => $value) {
				
					echo "<div class='separador'>";
					echo "<div class='serv-indiv'>";
					echo	"<h3>".$value['titulo']."</h3>";
					echo	"<p>".$value['texto']."</p>";
					echo	"<input type='checkbox' class='checkbox' name='serv[]' value='".$value['id']."'>";
					echo "</div>";
					echo "</div>";

				}

			}

			?>
		

			
			</div><!--slide-serv-->

		<div class="clear"></div>


			<div>
				<div  class="text-mais-serv"><span>Selecione um serviço e clique no botão ao lado para remover</span></div>
				<input type="submit" class="mais-produtos" name="rem" value="-"/>
			</div>

		</form>


	</section>

</body>
</html>