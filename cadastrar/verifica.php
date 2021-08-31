<?php include "../alerta.php"; ?>
<form method="POST" action="insere.php">
		<?php
		$nome 			 = $_POST['nome'];
		$email 			 = $_POST['email'];
		$cidade  	 	 = $_POST['cidade'];
		$estado  		 = $_POST['UF'];
		$senha 			 = $_POST['senha'];
		$erro 			 = 0;

		//Verifica se o campo nome não está em branco
		if (empty($nome) || !strstr($nome, ' ')) {
			$MensagemErro = "Favor digitar o seu nome completo.";
			$erro = 1;
		}

		//Verifica se o campo email está preenchido corretamente
		if (strlen($email) < 8 || !strstr($email, '@')) {
			$MensagemErro = "Favor digitar o seu email corretamente.";
			$erro = 1;
		}

		//Verifica se o campo cidade está em branco
		if (empty($cidade)) {
			$MensagemErro = "Favor digitar sua cidade.";
			$erro = 1;
		}

		//Verifica se o campo UF está preenchido com 2 digitos
		if (strlen($estado) != 2) {
			$MensagemErro = "Favor digitar o seu estado corretamente.";
			$erro = 1;
		}

		//Verifica se o campo senha TEM PELO MENOS 4 digitos

		if (strlen($senha) < 4) {
			// Vitoria gatinha
			$MensagemErro = "Senha tem que ter no mínimo 4 digitos";
			$erro = 1;
		}

		$sql = "SELECT * from usuarios WHERE EMAIL = '$email'";
		$resultado = mysqli_query($conn, $sql);
		if($resultado->fetch_array()) {
			$MensagemErro = "E-mail já cadastrado!";
			$erro = 1;
		}
		//Verifica se não houve erro - neste caso redireciona para insere.php para inserir os dados
		if ($erro == 0) {
				include "insere.php";
		} else {
			//Caso apresente erro, mostra o alert e volta para o index.html
			
    echo "<script type='text/javascript'> swal('Usuário não cadastrado', '$MensagemErro','error').then((value) => {
     javascript:window.location='index.html';
   		});;</script>";
		}
		?>

	</body>

</html>