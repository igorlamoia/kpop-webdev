<?php
session_start();
require "../alerta.php";
require "../connecta.php";
?>

<!DOCTYPE html>

<html lang="pt-br">

<head>
	<title>Verifica</title>
	<meta charset="utf-8">
</head>

<form method="POST" action="insere.php">

	<body>

		<?php
		$nome 		= $_POST['nome'];
		$url 			= $_POST['url'];
		$banda  	= $_POST['banda'];
		$erro 		= 0;

		//Verifica se o campo url está preenchido corretamente
		if (strlen($url) < 8 || !strstr($url, 'https://')) {
			$mensagemErro = "Favor digitar a url corretamente.<br>";
			$erro = 1;
		}

		//Verifica se não houve erro - neste caso chama a include para inserir os dados
		if ($erro == 0) {
			include 'insere.php';
		} else {
			//Caso apresente erro, mostra o alert e volta para o index.html

			echo "<script type='text/javascript'> swal('Usuário não cadastrado', '$mensagemErro','error').then((value) => {
				 javascript:window.location='index.php';
					 });;</script>";
		}
		?>
	</body>

</html>