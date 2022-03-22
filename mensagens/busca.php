<?php
session_start();
$id = $_GET["id"];
$acao = $_GET["acao"];
include "../alerta.php";
include "../connecta.php";

if ($conn->connect_error) {

	die("Conexão Falhou:" . $conn->connect_error);
}
// Pegando os dados dos inputs enviados pelo formulário
$email 			 = $_POST['email'];
$senha 			 = $_POST['senha'];

// Guardando na variável $sql a string com os comandos pra ser executada
$sql = "SELECT * from comentarios WHERE CODIGO = '$id'";
$resultado = mysqli_query($conn, $sql);

$usuario = $resultado->fetch_array();
// Executando a variável sql
if (isset($usuario['CODIGO']) && !empty($usuario['CODIGO'])) {
	//Editar
	if ($acao == '1') {

		// Guardando na variável $sql a string com os comandos pra ser executada
		$sql = "UPDATE comentarios SET VISUALIZADA = 1 WHERE CODIGO = '$id'";

		// Executando a variável sql
		if ($conn->query($sql)) {
			echo "<script type='text/javascript'> swal('Mensagem marcada como lida', 'Somente será visualizada no banco de dados','success').then((value) => {
				javascript:window.location='index.php';
			});;</script>";
		} else {
			echo "<script type='text/javascript'> swal('$sql', '$conn->error','success').then((value) => {
				javascript:window.location='../cadastrar';
					});;</script>";
		}
	} else if ($acao == '2') {
		// Guardando na variável $sql a string com os comandos pra ser executada
		$sql = "DELETE from comentarios WHERE CODIGO = '$id'";
		// Executando a variável sql
		if ($conn->query($sql)) {
			echo "<script type='text/javascript'> swal('Mensagem excluída com sucesso', 'Espero que tenha sido de propósito','success').then((value) => {
				javascript:window.location='index.php';
			});;</script>";
		} else {
			echo "<script type='text/javascript'> swal('$sql', '$conn->error','success').then((value) => {
				javascript:window.location='../cadastrar';
					});;</script>";
		}
	}
}
// Fechando a conexão com o banco
$conn->close();
?>
</body>

</html>