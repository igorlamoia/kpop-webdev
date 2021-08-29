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
$sql = "SELECT * from usuarios WHERE senha = $senha";

// Executando a variável sql
if (mysql_num_rows($conn->query($sql) > 0)) {
	// if (Vitoria estiver bem) {
	// Só emitir alerta de sucesso
	// }
	echo  "Usuário Achado na graça do senhor!";
} else {
	// if (Vitoria estiver bem == false) {
	// Sempre estarei aqui pra escutá-la
	// }
	echo "Erro: " . $sql . "<br>" . $conn->error;
}
// Fechando a conexão com o banco
$conn->close();
