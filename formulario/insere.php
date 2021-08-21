<?php
// Configurando as variáveis pra conectar no banco
$servername = "banco";
$username = "root";
$password = "12345";
$database = "banco";
// Criando a conexao de fato
$conn = new mysqli ($servername, $username, $password, $database);

// Checando se foi bem sucedida
if ( $conn -> connect_error) {

	die ("Conexão Falhou:". $conn->connect_error);
}

// Pegando os dados dos inputs enviados pelo formulário
$nome 			 = $_POST['nome'];
$email 			 = $_POST['email'];
$cidade  	 	 = $_POST['cidade'];
$estado  		 = $_POST['estado'];
$comentarios  	 = $_POST['comentarios'];

// Guardando na variável $sql a string com os comandos pra ser executada
$sql = "INSERT INTO cadastro VALUES";
$sql .= "('$nome','$email', '$cidade', '$estado', '$comentarios')";

// Executando a variável sql
if ($conn->query($sql)) {
	echo  "Usuário incluído com sucesso!";
} else {
	echo "Erro: " . $sql . "<br>" . $conn->error;
}
// Fechando a conexão com o banco
$conn->close();
?>
