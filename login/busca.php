<?php
// Configurando as variáveis pra conectar no banco
$servername = "banco";
$username = "root";
$password = "12345";
$database = "kpop";
// Criando a conexao de fato
$conn = new mysqli($servername, $username, $password, $database);

include "../alerta.php";
// Checando se foi bem sucedida
if ($conn->connect_error) {

	die("Conexão Falhou:" . $conn->connect_error);
}

// Pegando os dados dos inputs enviados pelo formulário
$email 			 = $_POST['email'];
$senha 			 = $_POST['senha'];

// Guardando na variável $sql a string com os comandos pra ser executada
$sql = "SELECT * from usuarios WHERE EMAIL = 'igor@hotmail.com' AND SENHA = '0998'";
$result = mysqli_query($conn, $sql);


// tentei usar mysqli_query ao inves de $conn->query($sql) mas tb n resolveu kkk
// Executando a variável sql Tá dando warning, tem que mudar essa linha debaixo
if ($result) {
	$linhas = mysqli_num_rows($result); //conta as linhas retornadas

	if ($linhas == 1) {
		echo "<script type='text/javascript'> swal('Usúario Encontrado! $email $senha', 'verifique seu login.','success').then((value) => {
				javascript:window.location='index.html';
				});;</script>";
		//COLOCA O  header('Location: PAGINA.PHP'); AQUI
	} else {
		// alerta de login não existente
		echo "<script type='text/javascript'> swal('Usúario não encontrado Merda! $email $senha', 'verifique seu login.','error').then((value) => {
		javascript:window.location='index.html';
	  });;</script>";
	}
} else if (!$conn->query($sql)) {

	echo "Erro: " . $sql . "<br>" . $conn->error;
}
// Fechando a conexão com o banco
$conn->close();
?>
</body>

</html>