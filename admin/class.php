<?php 

	
	class Painel
	{
		
		public static function logado(){

			return isset($_SESSION['login']) ? true : false;

		}

		public static function carregarPagina(){
			if(isset($_GET['url'])){
				
				$url = $_GET['url'];

				switch ($url) {
					case 'page-principal':
						include('page-principal.php');
						break;
					
					case 'control-home':
						include('control-home.php');
						break;

					case 'control-produtos':
						include('control-produtos.php');
						break;

					case 'add-servicos':
						include('add-servicos.php');
						break;

					case 'control-servicos':
						include('control-servicos.php');
						break;

					case 'control-contatos':
						include('control-contatos.php');
						break;

					default:
						header('Location: index.php');
						break;
				}

			}else

			{

				include('page-principal.php');
			}
		}


		public static function imagemValida($imagem){
				if($imagem['type'] == 'image/jpeg' || $imagem['type'] == 'imagem/jpg' || $imagem['type'] == 'imagem/png'){
					
					$tamanho = intval($imagem['size']/1024);
					
					if($tamanho < 300)
						return true;
					else
						return false;
				}else{
					return false;
				}
			
		}

		public static function uploadFiles($file){
			move_uploaded_file($file['tmp_name'], "../_images/".$file['name']);
		}

		public static function deleteFile($file){
			@unlink('../_images/'.$file);
		}

	

		public static function masc_tel($TEL) {

		    $tam = strlen(preg_replace("/[^0-9]/", "", $TEL));
		    if ($tam == 13) { // COM CÓDIGO DE ÁREA NACIONAL E DO PAIS e 9 dígitos
		      return "+".substr($TEL,0,$tam-11)."(".substr($TEL,$tam-11,2).")".substr($TEL,$tam-9,5)."-".substr($TEL,-4);
		    }
		    if ($tam == 12) { // COM CÓDIGO DE ÁREA NACIONAL E DO PAIS
		      return "+".substr($TEL,0,$tam-10)."(".substr($TEL,$tam-10,2).")".substr($TEL,$tam-8,4)."-".substr($TEL,-4);
		    }
		    if ($tam == 11) { // COM CÓDIGO DE ÁREA NACIONAL e 9 dígitos
		      return "(".substr($TEL,0,2).")".substr($TEL,2,5)."-".substr($TEL,7,11);
		    }
		    if ($tam == 10) { // COM CÓDIGO DE ÁREA NACIONAL
		      return "(".substr($TEL,0,2).")".substr($TEL,2,4)."-".substr($TEL,6,10);
		    }
		    if ($tam <= 9) { // SEM CÓDIGO DE ÁREA
		      return substr($TEL,0,$tam-4)."-".substr($TEL,-4);
		    }

		 }



	}


  	

	class DataBase
	{

		
		private static $pdo;

		public static function conectar(){
			if(self::$pdo == null){
				try{
				self::$pdo = new PDO('mysql:host='.HOST.';dbname='.DATABASE,USER,PASSWORD,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
				self::$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
				}catch(Exception $e){
					echo '<h5>Erro ao conectar com banco de dados</h5>';
				}
			}

			return self::$pdo;
		}


	}



?>