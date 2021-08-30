<?php
include "../alerta.php";
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
	echo "<script type='text/javascript'> swal('Usuário cadastrado!', 'Usuário cadastrado com sucesso','success').then((value) => {
		javascript:window.location='../login';
			});;</script>";
} else {
	echo "<script type='text/javascript'> swal('$sql', '$conn->error','success').then((value) => {
		javascript:window.location='../cadastrar';
			});;</script>";
}
// Fechando a conexão com o banco
$conn->close();
?>
</body>
</html>