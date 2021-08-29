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
$sql = "INSERT INTO comentarios (NOME, EMAIL, MENSAGEM) VALUES";
$sql .= "('$nome','$email', '$comentarios')";

// Executando a variável sql
if ($conn->query($sql)) { ?>
 <!DOCTYPE html>
  <html lang="pt-br">

  <head>
    <meta charset="UTF-8">
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	</head>
	<body>

	
	<?php
    echo "<script type='text/javascript'> swal('Contato enviado com sucesso!', '','success').then((value) => {
     javascript:window.location='index.html';
   });;</script>"; 
   // alerta de contato enviado

	echo  "Usuário incluído com sucesso!";
} else {
	echo "<script type='text/javascript'> swal('Falha ao enviar contato!', '','error').then((value) => {
		javascript:window.location='index.html';
	  });;</script>";
	
	// alerta de mentira mais cabeluda que Toni Ramos
	
	echo "Erro: " . $sql . "<br>" . $conn->error;
}
// Fechando a conexão com o banco
$conn->close();
?>
 </body>

</html>
