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
  <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
  <link rel="stylesheet" href="../styles/reset.css" />
  <link rel="stylesheet" href="../styles/estilos.css" />
  <link rel="stylesheet" href="../styles/formulario.css" />
  <link rel="stylesheet" href="./mensagens.css" />

  <link rel="icon" type="image/png" href="../images/VSicone.png" />

</head>

<body>
  <div class="logotopo">
    <img src='../imagem/top.jpg' alt="logo do site">
  </div>
  <navbar class="menu">
    <ul>
      <li><a type="button" href="#">Ler Mensagens</a></li>
      <li><a type="button" href="../videos">Cadastrar Vídeos</a></li>
    </ul>
    <div style="margin-right: 10px;">
      <a style="color: white; display: flex; justify-content: center; align-items: center; gap: 10px" type="button" href="../home"><i title="sair" class="fas fa-sign-out-alt"></i>Sair</a>
    </div>
  </navbar>
  <section>
    <?php
    $mensagens = 0;
    while ($mensagem = $resultado->fetch_array()) {
      if (!$mensagem['VISUALIZADA']) {
        $mensagens += 1;
    ?>
        <div class="cartoes">
          <div class="dados">
            <span class="nome linear-text">
              <?php echo $mensagem['NOME']; ?>
            </span>
            <span class="email italico">
              <?php echo $mensagem['EMAIL']; ?>
            </span>
          </div>
          <span class="mensagem">
            <?php echo $mensagem['MENSAGEM']; ?>
          </span>
          <div class="final-cartao">
            <span class="data italico">
              <?php
              $data = explode("-", $mensagem['DATAHORA']);
              $dia = explode(" ", $data[2]);
              echo "$dia[0]/$data[1]/$data[0]";
              ?>
            </span>
            <div class="icones">
              <a title="Arquivar" href="./busca.php?id=<?php echo $mensagem["CODIGO"] . "&acao=1" ?>"><i class="fas fa-archive"></i></a>
              <a title="Excluir" href="./busca.php?id=<?php echo $mensagem["CODIGO"] . "&acao=2" ?>"><i class="far fa-trash-alt"></i></i></a>
            </div>
          </div>
        </div>
    <?php
      }
    }
    if (!$mensagens) {
      echo "SEM MENSAGEM";
    }
    ?>
  </section>
  <ul class="quadradinhos"></ul>
  <footer>
    <span>Contatos:</span>
    <a href="https://www.instagram.com/lamoiaigor/" target="_blank" rel="noopener">Igor Lamoia
      <img src="../imagem/instal.png" alt="instagram logo" /></a>
    <a href="https://www.instagram.com/michael_hinoyama/" target="_blank" rel="noopener">Michael Andre
      <img src="../imagem/instal.png" alt="instagram logo" /></a>
    <span>&copy 2021</span>
  </footer>
</body>
<script src="../scripts/formulario.js"></script>

</html>