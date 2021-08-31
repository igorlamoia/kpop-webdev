<?php
session_start();
$usuario = $_SESSION["email"];
if (!$usuario) {
  require "../alert.php";
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
  <title>Cadastro de vídeos</title>
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
      <li><a type="button" href="./#">Verificar Mesagens</a></li>
    </ul>
  </navbar>
  <div class="caixao">
    <div class="formulario">
      <div class="espacamento">
        <h1>Cadastro de Vídeos</h1>
        <form class="row g-3 needs-validation" method="POST" action="verifica.php">
          <div class="mb-3">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" class="form-control" id="nome" placeholder="Seu nome" name="nome" required />
          </div>
          <div class="mb-3">
            <label for="url" class="form-label">Url:</label>
            <input type="url" class="form-control" id="url" placeholder="https://youtube" name="url" required />
          </div>
          <div class="mb-3">
            <label for="banda" class="form-label">Banda</label>
            <input type="text" class="form-control" id="banda" placeholder="****" name="banda" required />
          </div>
          <button type="submit" name="enviar" class="botao" target="_blank">
            <span style="z-index: 1">Cadastrar Vídeo</span>
          </button>
        </form>
      </div>
    </div>
  </div>
  <ul class="quadradinhos"></ul>
</body>
<script src="../scripts/formulario.js"></script>

</html>