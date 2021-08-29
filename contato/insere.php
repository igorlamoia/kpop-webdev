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
$comentarios  		 = $_POST['comentarios'];

// Guardando na variável $sql a string com os comandos pra ser executada
$sql = "INSERT INTO usuarios (nome, email, mensagem) VALUES";
$sql .= "('$nome','$email', '$comentarios')";

// Executando a variável sql
if ($conn->query($sql)) {
	// if (vitoria linda) {
	// verdade verdadeira, tem que colocar um alerta bonito igual ela
	// }
	echo  "Usuário incluído com sucesso!";
} else {
	// if (vitoria linda == false ) {
	// Criar alerta de mentira mais cabeluda que Toni Ramos
	// }
	echo "Erro: " . $sql . "<br>" . $conn->error;
}
// Fechando a conexão com o banco
$conn->close();
