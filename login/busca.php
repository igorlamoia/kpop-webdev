<?php
session_start();
include "../alerta.php";
include "../connecta.php";

if ($conn->connect_error) {

	die("Conexão Falhou:" . $conn->connect_error);
}
// Pegando os dados dos inputs enviados pelo formulário
$email 			 = $_POST['email'];
$senha 			 = $_POST['senha'];
// Guardando na variável $sql a string com os comandos pra ser executada
$sql = "SELECT * from usuarios WHERE SENHA = '$senha' AND EMAIL = '$email'";

$resultado = mysqli_query($conn, $sql);
$usuario = $resultado->fetch_array();
// Executando a variável sql
if (isset($usuario['NOME']) && !empty($usuario['NOME'])) { ?>
<?php
	$_SESSION["email"] = $usuario['EMAIL'];
	echo "<script type='text/javascript'> swal('Usuário encontrado!', 'Realizar login','success').then((value) => {
     javascript:window.location='../home';
   });;</script>";
} else {
	echo "<script type='text/javascript'> swal('Usuário não encontrado', 'Tente novamente ou cadastre-se','error').then((value) => {
		javascript:window.location='index.html';
	  });;</script>";
}
// Fechando a conexão com o banco
$conn->close();
?>
</body>

</html>