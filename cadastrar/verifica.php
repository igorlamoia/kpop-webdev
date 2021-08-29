<?php
header("Location: index.html");

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
		$nome 			 = $_POST['nome'];
		$email 			 = $_POST['email'];
		$cidade  	 	 = $_POST['cidade'];
		$estado  		 = $_POST['UF'];
		$senha 			 = $_POST['senha'];
		$erro 			 = 0;

		//Verifica se o campo nome não está em branco
		if (empty($nome) || !strstr($nome, ' ')) {
			$MensagemErro = "Favor digitar o seu nome corretamente.<br>";
			$erro = 1;
		}

		//Verifica se o campo email está preenchido corretamente
		if (strlen($email) < 8 || !strstr($email, '@')) {
			$MensagemErro = "Favor digitar o seu email corretamente.<br>";
			$erro = 1;
		}

		//Verifica se o campo cidade está em branco
		if (empty($cidade)) {
			$MensagemErro = "Favor digitar sua cidade.<br>";
			$erro = 1;
		}

		//Verifica se o campo UF está preenchido com 2 digitos
		if (strlen($estado) != 2) {
			$MensagemErro = "Favor digitar o seu estado corretamente.<br>";
			$erro = 1;
		}

		//Verifica se o campo senha TEM PELO MENOS 4 digitos

		if (strlen($senha) < 4) {
			// Vitoria gatinha
			$MensagemErro = "Senha tem que ter no mínimo 4 digitos.<br>";
			$erro = 1;
		}

		//Verifica se não houve erro - neste caso chama a include para inserir os dados
		if ($erro == 0) {
			include 'insere.php';
		} else {
			// Vitoria, alerta de erro de novo kkkk
			echo $MensagemErro;
		}
		?>

	</body>

</html>