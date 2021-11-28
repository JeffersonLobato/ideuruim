<!DOCTYPE html>
<html lang="pt-br">

	<section class="page-control">

		<?php
			if(isset($_POST['add'])){

				if(!empty($_FILES['input-mais'])){

					$imagem = $_FILES['input-mais'];
				
					if(Painel::imagemValida($imagem) == true){
						$sql = DataBase::conectar() -> prepare("INSERT INTO `produtos` (`id`, `img`) VALUES (NULL, ?)");
						$sql -> execute(array($imagem['name']));

						Painel::uploadFiles($imagem);
					}else{
						echo "<h3 class='imagem-invalida'>Arquivo inválido, tente uma imagem do tipo jpeg, jpg ou png com no máximo 300kb</h3>";
					}
				}
			
			}

			if(isset($_POST['rem'])){

				if(!empty($_POST['prod'])){
					$valores = $_POST['prod'];
					foreach ($valores as $key => $value) {
						$sql = DataBase::conectar() -> prepare("DELETE FROM `produtos` WHERE `produtos`.`img` = ?");
						$sql -> execute(array($value));
						Painel::deleteFile($value);
					}
				}
			}


		?>






		<form class="prod" method="post" enctype="multipart/form-data">
			
			
			<div  class="text-mais-prod"></div>

				<label for="input-mais">Clique no botão ao lado para adicionar produtos</label>
	
				<input type="file" name="input-mais">

				<input type="submit" class="mais-produtos" name="add" value="+"/>

				<p>Certifique-se de que as imagens estão com nomes diferentes e dimensões proporcionais a 320x568</p>

			



		<div class="clear"></div>

		</form>

		<form class="prod" method="post">

			<div class="slide">
				
			<?php


				$sql = DataBase::conectar() -> prepare("SELECT * FROM `produtos`");
				$sql -> execute();
				$content = $sql->fetchAll();

				foreach ($content as $key => $value) {
						
					echo "<div class='slide-single'>";

					echo	"<img class='produto-single' src='../_images/".$value['img']."'>";
					echo	"<input type='checkbox' name='prod[]' value='".$value['img']."'>";
						
					echo "</div>";

				}

			?>


			</div><!--slide-->

		<div class="clear"></div>

			<div>
				<div  class="text-mais-prod"><span>Selecione uma imagem e clique no botão ao lado para remover</span></div>
				<input type="submit" class="mais-produtos" name="rem" value="-"/>

			</div>

		</form>


	</section>

</body>
</html>