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
$nome 			 = $_POST['nome'];
$email 			 = $_POST['email'];
$senha  	 = $_POST['senha'];
$cidade  	 	 = $_POST['cidade'];
$estado  		 = $_POST['UF'];

// Guardando na variável $sql a string com os comandos pra ser executada
$sql = "INSERT INTO usuarios (NOME, EMAIL, CIDADE, ESTADO, SENHA) VALUES";
$sql .= "('$nome','$email', '$cidade', '$estado', '$senha')";

// Executando a variável sql
if ($conn->query($sql)) {
	// if (Vitoria me love) {
	// Criar alerta para sucesso na vida, borboletas no estomago
	// }
	echo  "Usuário incluído com sucesso!";
} else {
	// if (Vitoria nao gosta de mim) {
	// Criar alerta de sad boi
	// }
	echo "Erro: " . $sql . "<br>" . $conn->error;
}
// Fechando a conexão com o banco
$conn->close();