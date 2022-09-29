<!doctype html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>
	<?php
	$titulo;
	/*
	$titulo;
	if(isset($_GET["p"])){
		$titulo = $_GET["p"];
	} else{
		$titulo = "home";
	}
	*/

	//Esta linha abaixo corresponde ao if acima
	isset($_GET["p"])? $titulo = $_GET["p"]: $titulo = "home";
	

	
	/*
	switch($titulo){
		case "home":
			echo "Titulo Home";
		break;
		case "sobreNos":
			echo "Titulo Sobre Nos";
		break;
		case "contato":
			echo "Titulo Contato";
		break;
		default:
			echo "Titulo ERRO";
		break;
	}
	*/
	//neste caso poderia ser usado o switch acima
	if ($titulo == "home"){
		echo "Titulo Home";
	}elseif($titulo == "sobreNos"){
		echo "Titulo Sobre Nos";
	}elseif($titulo == "contato"){
		echo "Titulo Contato";
	}else{
		echo "Titulo ERRO";
	}


	?>
	</title>
</head>
<body>
<?php
	/*
	Include e require servem para a mesma coisa, mas o include não gera nenhum erro fatal caso o arquivo não exista
	contrario do require q gera um erro fatal caso não exista o arquivo
	require -> REQUISITA um arquivo
	include -> INCLUI um arquivo
	*/
	//include("./header.php");
	require_once("./header.php");

	//isset() é uma função para verificar se uma variavel não é NULL
	//isset(x) -> variavel "x" está setada?
	if(isset($_GET["p"])){
		$page = $_GET["p"];
	}else{
		$page = "home";
	}

	//switch é um verificador de casos para 1 só afirmação.
	//neste caso ele está pegando a variavel $page e verificando se os valores dela batem com algum dos casos abaixo
	//caso não entre em nenhum "case" ela recorre ao "default"
	//da pra simplificar mais.
	switch($page){
		case "home":
			require_once("./pages/aula_home.php");
		break;
		case "sobreNos":
			require_once("./pages/aula_sobreNos.php");
		break;
		case "contato":
			require_once("./pages/aula_contato.php");
		break;

		case "formTemp":
			require_once("./pages/forms/formularioTemp.php");
		break;
		case "formIMC":
			require_once("./pages/forms/formularioIMC.php");
		break;
		case "formCont":
			require_once("./pages/forms/formularioContador.php");
		break;

		case "arrays":
			require_once("./pages/exemplo_array.php");
		break;

		default:
			require_once("./pages/aula_error404.php");
		break;
	}

	require_once("./footer.php");
?>
</body>

</html>