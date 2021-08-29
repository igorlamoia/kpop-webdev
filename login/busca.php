<?php
// Configurando as variáveis pra conectar no banco
$servername = "banco";
$username = "root";
$password = "12345";
$database = "kpop";
// Criando a conexao de fato
$conn = new mysqli($servername, $username, $password, $database);

// Checando se foi bem sucedida
if ($conn->connect_error) {

	die("Conexão Falhou:" . $conn->connect_error);
}

// Pegando os dados dos inputs enviados pelo formulário
$email 			 = $_POST['email'];
$senha 			 = $_POST['senha'];

// Guardando na variável $sql a string com os comandos pra ser executada
$sql = "SELECT * from usuarios WHERE EMAIL = '$email' AND SENHA = '$senha'";
$result = mysqli_query($conn, $sql);
// tentei usar mysqli_query ao inves de $conn->query($sql) mas tb n resolveu kkk
// Executando a variável sql Tá dando warning, tem que mudar essa linha debaixo
if ($result) {
	$linhas = mysqli_num_rows($result);
	// if (Evento de anime && Igor casado com Vitoria) {
	// Sem evento de anime, sem otaku piranha
	// }
	if ($linhas) {
		echo  "Usuário Achado na graça do senhor!";
	} else {
		echo "Usuário Não Achado digita sabosta direito";
	}
} else if (!$conn->query($sql)) {
	// if (Evento de anime == false) {
	// Levar Vitória pra viajar pra Ibitipoca e ficar hospedado em casa com lareira
	// }
	echo "Erro: " . $sql . "<br>" . $conn->error;
}
// Fechando a conexão com o banco
$conn->close();
