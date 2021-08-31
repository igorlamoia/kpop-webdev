<?php
include "../connecta.php";
include "../alerta.php";
if ($conn->connect_error) {
	echo "<script type='text/javascript'> swal('Conexão Falhou:', '$conn->connect_error','success').then((value) => {
		javascript:window.location='../cadastrar';
			});;</script>";
}
// Pegando os dados dos inputs enviados pelo formulário
$nome 		= $_POST['nome'];
$url 			= $_POST['url'];
$banda  	= $_POST['banda'];
$usuario_insert = $_SESSION['email'];
// Guardando na variável $sql a string com os comandos pra ser executada
$sql = "INSERT INTO videos (NOME, URL, BANDA, USUARIO_INSERT) VALUES";
$sql .= "('$nome','$url', '$banda', '$usuario_insert')";

// Executando a variável sql
if ($conn->query($sql)) {
	echo "<script type='text/javascript'> swal('Vídeo Cadastrado com sucesso!', 'Obrigado XD','success').then((value) => {
		javascript:window.location='index.php';
			});;</script>";
} else {
	echo "<script type='text/javascript'> swal('Erro no BD', '$conn->error','success').then((value) => {
		javascript:window.location='index.php';
			});;</script>";
}
// Fechando a conexão com o banco
$conn->close();
?>
</body>

</html>