<?php
session_start();
include "../connecta.php";
// Guardando na variável $sql a string com os comandos pra ser executada
$sql = "SELECT * from comentarios";
$resultado = mysqli_query($conn, $sql);
$usuario = $_SESSION["email"];
if (!$usuario) {
  require "../alerta.php";
  echo "<script type='text/javascript'> swal('Sessão encerrada', 'Necessário realizar login','error').then((value) => {
		javascript:window.location='../home';
	  });;</script>";
}
// require "../connecta.php";
// $sql = "SELECT * from usuarios WHERE SENHA = '$senha' AND EMAIL = '$email'";
// $resultado = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>

<html lang="pt-br">

<head>
  <title>Mensagens enviadas</title>
  <meta charset="UTF-8" />
  <link rel="icon" type="image/png" href="../images/VSicone.png" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="../styles/reset.css" />
  <link rel="stylesheet" href="../styles/estilos.css" />
  <link rel="stylesheet" href="../styles/formulario.css" />
  <link rel="icon" type="image/png" href="../images/VSicone.png" />

</head>

<body>
  <div class="logotopo">
    <img src='../imagem/top.jpg' alt="logo do site">
  </div>
  <navbar class="menu">
    <ul>
      <li><a type="button" href="../home">Sair</a></li>
      <li><a type="button" href="../videos">Cadastrar Vídeos</a></li>
    </ul>
  </navbar>
<div>
    <?php 
    while ($video = $resultado->fetch_array()) {
    ?>
      <div>
        Usuario: <?php echo $video['NOME']; ?>
        mensagem: <?php echo $video['MENSAGEM']; ?>
      </div>
    <?php 
    } 
    ?>
    </div>
</body>
</html>