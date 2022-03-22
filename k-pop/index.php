<?php
include "../connecta.php";
// Guardando na variável $sql a string com os comandos pra ser executada
$sql = "SELECT * from videos";
$resultado = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>

<html lang="pt-BR">

<head>

  <title>K-Vision K-Pop</title>
  <meta http-equiv="Content-type" content="text/html;charset=UTF-8">
  <link rel="stylesheet" type="text/css" href="../styles/estilos.css">
  <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
  <style>
    section {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      align-items: center;
      min-height: 80vh;
      gap: 10px;
      padding: 30px;
    }

    body {
      margin: 0 !important;
    }
  </style>
</head>

<body>
  <header>
    <div class="logotopo">
      <img src='../imagem/top.jpg' alt="logo do site">
    </div>
    <navbar>
      <div class="menu">
        <ul>
          <li><a href=../home>Home</a></li>
          <li><a href=../noticias>Notícias</a></li>
          <li><a href="#">K-pop</a></li>
          <li><a href=../contato>Contato</a></li>
        </ul>
        <div style="margin-right: 10px;">
          <a title="Entrar" style="color: white; display: flex; justify-content: center; align-items: center; gap: 10px" type="button" href="../login"><i class="fas fa-sign-in-alt"></i>Entrar</a>
        </div>
      </div>

    </navbar>
  </header>
  <section>
    <?php
    while ($video = $resultado->fetch_array()) {
    ?>
      <iframe width="536" height="320" src="<?php echo $video['URL']; ?>" title="YouTube video player" frameborder="15" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <?php
    }
    ?>
  </section>


</body>
<footer>
  <span>
    Contatos:
  </span>
  <a href="https://www.instagram.com/lamoiaigor/">Igor Lamoia
    <img src="../imagem/instal.png" alt="instagram logo" /></a>
  <a href="https://www.instagram.com/michael_hinoyama/">Michael Andre
    <img src="../imagem/instal.png" alt="instagram logo" /></a>
  <span>
    &copy 2021
  </span>
</footer>

</html>