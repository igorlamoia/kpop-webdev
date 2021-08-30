<?php
// Configurando as variáveis pra conectar no banco
include "../connecta.php";
// Criando a conexao de fato
$conn = new mysqli($servername, $username, $password, $database);

include "../alerta.php";
// Checando se foi bem sucedida
if ($conn->connect_error) {
			// alerta de login não existente
			echo "<script type='text/javascript'> swal('Conexão falhou! $email $senha', '$conn->connect_error','error').then((value) => {
				javascript:window.location='index.html';
				});;</script>";
}

// Pegando os dados dos inputs enviados pelo formulário
$email 			 = $_POST['email'];
$senha 			 = $_POST['senha'];

// Guardando na variável $sql a string com os comandos pra ser executada
$sql = "SELECT * from usuarios WHERE EMAIL = 'igor@hotmail.com' AND SENHA = '0998'";


// tentei usar mysqli_query ao inves de $conn->query($sql) mas tb n resolveu kkk
// Executando a variável sql Tá dando warning, tem que mudar essa linha debaixo
if ($result) {
	$linhas = mysqli_num_rows($result); //conta as linhas retornadas

	if ($linhas == 1) {
			alerta('Usúario Encontrado!', 'Logando', 'success', 'index.html');
			//COLOCA O  header('Location: PAGINA.PHP'); AQUI
		} else {
			// alerta de login não existente
			alerta('Usúario não encontrado!', 'verifique seu login.', 'error', 'index.html');
	}
} else if (!$conn->query($sql)) {

	echo "Erro: " . $sql . "<br>" . $conn->error;
}
// Fechando a conexão com o banco
$conn->close();
?>
</body>

</html>