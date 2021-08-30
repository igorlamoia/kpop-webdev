<?php
// Guardando na variável $sql a string com os comandos pra ser executada
$sql = "SELECT * from videos";
$result = mysqli_query($conn, $sql);
$linhas = mysqli_fetch_row($result);

foreach ($linhas as $linha => $value) {
  echo "$value<br>";
}
exit;
?>
<!DOCTYPE html>

<html lang="pt-BR">

<head>

  <title>K-Vision K-Pop</title>
  <meta http-equiv="Content-type" content="text/html;charset=UTF-8">
  <link rel="stylesheet" type="text/css" href="../styles/estilos.css">

</head>

<body>
<header>
    <div class="logotopo">
        <img src='../imagem/top.jpg' alt="logo do site">
    </div>
    <navbar>
        <div class="menu">
            <ul>
                <li><a href=../home>Homes</a></li>
                <li><a href=../noticias>Noticiais</a></li>
                <li><a href=../contato>Contato</a></li>
                <li><a href="../login">Entrar</a></li>
            </ul>
        </div>
    </navbar>
</header>
  <br>
  <h2>MVs</h2></br>
    
  <div id="vid">
  <iframe width="536" height="320" src="https://www.youtube.com/embed/MqzX9JAZ08U" title="YouTube video player"
    frameborder="15" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
    allowfullscreen></iframe>
  <iframe width="536" height="320" src="https://www.youtube.com/embed/CuklIb9d3fI" title="YouTube video player"
    frameborder="15" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
    allowfullscreen></iframe>
  <iframe width="536" height="320" src="https://www.youtube.com/embed/XA2YEHn-A8Q" title="YouTube video player"
    frameborder="15" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
    allowfullscreen></iframe>
   </div>

</body>
<footer>
    <span>
        Contatos:
    </span> 
        <a href="https://www.instagram.com/lamoiaigor/">Igor Lamoia
        <img src="../imagem/instal.png" alt="instagram logo"/></a>
        <a href="https://www.instagram.com/michael_hinoyama/">Michael Andre
        <img src="../imagem/instal.png" alt="instagram logo"/></a>
<span>
    &copy 2021
</span>    
</footer>
</html>
