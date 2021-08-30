<?php
include "../alerta.php";
include "../connecta.php";
// Criando a conexao de fato
$conn = new mysqli($servername, $username, $password, $database);

// Checando se foi bem sucedida
if ($conn->connect_error) {

	die("Conexão Falhou:" . $conn->connect_error);
}

// Pegando os dados dos inputs enviados pelo formulário
$nome 			 = $_POST['nome'];
$email 			 = $_POST['email'];
$comentarios = $_POST['comentarios'];

// Guardando na variável $sql a string com os comandos pra ser executada
$sql = "INSERT INTO comentarios (NOME, EMAIL, MENSAGEM) VALUES";
$sql .= "('$nome','$email', '$comentarios')";

// Executando a variável sql
if ($conn->query($sql)) { ?>
	<?php
    echo "<script type='text/javascript'> swal('Mensagem enviada com sucesso!', 'Obrigado pela mensagem','success').then((value) => {
     javascript:window.location='index.html';
   });;</script>"; 
} else {
	echo "<script type='text/javascript'> swal('Falha ao enviar mensagem!', '$sql $conn->error','error').then((value) => {
		javascript:window.location='index.html';
	  });;</script>";
}
// Fechando a conexão com o banco
$conn->close();
?>
</body>
</html>
