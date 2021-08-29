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
$sql = "SELECT * from usuarios WHERE SENHA = $senha";
// Executando a variável sql Tá dando warning
if (mysqli_num_rows($conn->query($sql)) > 0) {
	// if (Evento de anime && Igor casado com Vitoria) {
	// Sem evento de anime, sem otaku piranha
	// }
	echo  "Usuário Achado na graça do senhor!";
} else if (!$conn->query($sql)) {
	// if (Evento de anime == false) {
	// Levar Vitória pra viajar pra Ibitipoca e ficar hospedado em casa com lareira
	// }
	echo "Erro: " . $sql . "<br>" . $conn->error;
} else {
	echo "Usuário Não Achado digita sabosta direito";
}
// Fechando a conexão com o banco
$conn->close();
