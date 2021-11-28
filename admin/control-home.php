<?php
	$sucesso = false;
	$noSucesso = false;
	if(isset($_POST['salvar'])){


		if(!empty($_FILES['banner1'])){

			$imagem = $_FILES['banner1'];
		
			if(Painel::imagemValida($imagem) == true){

				$sql = DataBase::conectar() -> prepare("SELECT `img` FROM `home` WHERE `home`.`id` = 1");
				$sql -> execute();
				$imgDel = $sql -> fetchAll();
				
				foreach ($imgDel as $key => $value) {
					Painel::deleteFile($value['img']);
				}
					


				$sql = DataBase::conectar() -> prepare("UPDATE `home` SET `home`.`img` = ? WHERE `home`.`id` = 1");
				$sql -> execute(array($imagem['name']));

				Painel::uploadFiles($imagem);

				$sucesso = true;
			}else{
				$noSucesso = true;
			}
		}

		if(!empty($_FILES['banner2'])){

			$imagem = $_FILES['banner2'];
		
			if(Painel::imagemValida($imagem) == true){

				$sql = DataBase::conectar() -> prepare("SELECT `img` FROM `home` WHERE `home`.`id` = 2");
				$sql -> execute();
				$imgDel = $sql -> fetchAll();
				
				foreach ($imgDel as $key => $value) {
					Painel::deleteFile($value['img']);
				}
					


				$sql = DataBase::conectar() -> prepare("UPDATE `home` SET `home`.`img` = ? WHERE `home`.`id` = 2");
				$sql -> execute(array($imagem['name']));

				Painel::uploadFiles($imagem);

				$sucesso = true;
			}else{
				$noSucesso = true;
			}
		}

		if(!empty($_FILES['banner3'])){

			$imagem = $_FILES['banner3'];
		
			if(Painel::imagemValida($imagem) == true){

				$sql = DataBase::conectar() -> prepare("SELECT `img` FROM `home` WHERE `home`.`id` = 3");
				$sql -> execute();
				$imgDel = $sql -> fetchAll();
				
				foreach ($imgDel as $key => $value) {
					Painel::deleteFile($value['img']);
				}
					


				$sql = DataBase::conectar() -> prepare("UPDATE `home` SET `home`.`img` = ? WHERE `home`.`id` = 3");
				$sql -> execute(array($imagem['name']));

				Painel::uploadFiles($imagem);

				$sucesso = true;
			}else{
				$noSucesso = true;
			}
		}

		if(!empty($_FILES['banner4'])){

			$imagem = $_FILES['banner4'];
		
			if(Painel::imagemValida($imagem) == true){

				$sql = DataBase::conectar() -> prepare("SELECT `img` FROM `home` WHERE `home`.`id` = 4");
				$sql -> execute();
				$imgDel = $sql -> fetchAll();
				
				foreach ($imgDel as $key => $value) {
					Painel::deleteFile($value['img']);
				}
					


				$sql = DataBase::conectar() -> prepare("UPDATE `home` SET `home`.`img` = ? WHERE `home`.`id` = 4");
				$sql -> execute(array($imagem['name']));

				Painel::uploadFiles($imagem);

				$sucesso = true;
			}else{
				$noSucesso = true;
			}
		}

		if(!empty($_FILES['banner5'])){

			$imagem = $_FILES['banner5'];
		
			if(Painel::imagemValida($imagem) == true){

				$sql = DataBase::conectar() -> prepare("SELECT `img` FROM `home` WHERE `home`.`id` = 5");
				$sql -> execute();
				$imgDel = $sql -> fetchAll();
				
				foreach ($imgDel as $key => $value) {
					Painel::deleteFile($value['img']);
				}
					


				$sql = DataBase::conectar() -> prepare("UPDATE `home` SET `home`.`img` = ? WHERE `home`.`id` = 5");
				$sql -> execute(array($imagem['name']));

				Painel::uploadFiles($imagem);

				$sucesso = true;
			}else{
				$noSucesso = true;
			}
		}

		if(!empty($_FILES['banner6'])){

			$imagem = $_FILES['banner6'];
		
			if(Painel::imagemValida($imagem) == true){

				$sql = DataBase::conectar() -> prepare("SELECT `img` FROM `home` WHERE `home`.`id` = 6");
				$sql -> execute();
				$imgDel = $sql -> fetchAll();
				
				foreach ($imgDel as $key => $value) {
					Painel::deleteFile($value['img']);
				}
					


				$sql = DataBase::conectar() -> prepare("UPDATE `home` SET `home`.`img` = ? WHERE `home`.`id` = 6");
				$sql -> execute(array($imagem['name']));

				Painel::uploadFiles($imagem);

				$sucesso = true;
			}else{
				$noSucesso = true;
			}
		}
	
	}

	


?>



<!DOCTYPE html>
<html lang="pt-br">

	<section class="page-control">

		<form class="prod" method="post" enctype="multipart/form-data">
			<div class="banner">
				
				<?php

					if($sucesso){
						echo "<h3 class='atualizado'>Atualizado com sucesso.</h3>";
					}

					if($noSucesso){
						echo "<h3 class='imagem-invalida'>Arquivo inválido, tente uma imagem do tipo jpeg, jpg ou png com no máximo 300kb</h3>";
					}


				?>
				<div class="banner-estilo">
				<label for="banner1">Banner 1 - Desktop (dimensões 1920x600 em jpeg):</label>
				<input type="file" name="banner1" class="upload-banner">
				</div>

				<div class="banner-estilo">
				<label for="banner1-mobile">Banner 1 - Mobile (dimensões 380x460 em jpeg):</label>
				<input type="file" name="banner2" class="upload-banner">
				</div>

			</div>

			<div class="banner">
				
				<div class="banner-estilo">
				<label for="banner2">Banner 2 - Desktop (dimensões 1920x600 em jpeg):</label>
				<input type="file" name="banner3" class="upload-banner">
				</div>

				<div class="banner-estilo">
				<label for="banner2-mobile">Banner 2 - Mobile (dimensões 380x460 em jpeg):</label>
				<input type="file" name="banner4" class="upload-banner">
				</div>
				
			</div>

			<div class="banner">
				
				<div class="banner-estilo">
				<label for="banner3">Banner 3 - Desktop (dimensões 1920x600 em jpeg):</label>
				<input type="file" name="banner5" class="upload-banner">
				</div>

				<div class="banner-estilo">
				<label for="banner3-mobile">Banner 3 - Mobile (dimensões 380x460 em jpeg):</label>
				<input type="file" name="banner6" class="upload-banner">
				</div>

			</div>

			<div class="botao-salvar">
				<input type="submit" name="salvar" value="SALVAR">
			</div>

		</form>


	</section>

</body>
</html>