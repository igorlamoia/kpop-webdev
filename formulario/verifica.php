<!DOCTYPE html>

<html lang="pt-br">
	<head>
		<title>Verifica</title>
		<meta charset="utf-8">
	</head>

	<form method="POST"	action="insere.php">

		<body>

			<?php 
			$nome 			 = $_POST['nome'];
			$email 			 = $_POST['email'];
			$cidade  	 	 = $_POST['cidade'];
			$estado  		 = $_POST['UF'];
			$comentarios = $_POST['comentarios'];
			$erro 			 = 0;

			//Verifica se o campo nome não está em branco
			if (empty($nome) || !strstr($nome, ' ')) {
				echo "Favor digitar o seu nome corretamente.<br>";
				$erro = 1;
			}

			//Verifica se o campo email está preenchido corretamente
			if (strlen($email)< 8 || !strstr($email, '@')) {
				echo "Favor digitar o seu email corretamente.<br>";
				$erro = 1;
			}

			//Verifica se o campo cidade está em branco
			if (empty($cidade)) {
				echo "Favor digitar sua cidade.<br>";
				$erro = 1;
			}

			//Verifica se o campo UF está preenchido com 2 digitos
			if (strlen($estado)!=2) {
				echo "Favor digitar o seu estado corretamente.<br>";
				$erro = 1;
			}

			//Verifica se o campo comentarios está vazio

			if (empty($comentarios)) {
				echo "Favor entre com algum comentário.<br>";
				$erro = 1;
			}

			//Verifica se não houve erro - neste caso chama a include para inserir os dados
			if ($erro == 0) {
				echo "Todos os dados foram digitados corretamente.<br>";
				include 'insere.php';
			}
			?>

	</body>

</html>
