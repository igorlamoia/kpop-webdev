<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <title>K-Vision</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<?php 

/**
 * Cria um alerta, tendo como
 * - testando
 */
  function alerta($titulo, $mensagem, $sucesso, $direcionar = 'index.html') {
    echo "<script type='text/javascript'> swal('$titulo', '$mensagem','$sucesso').then((value) => {
      javascript:window.location='$direcionar';
      });;</script>";
  }
?>

<body style="height: 100vh; width: 100vw; overflow: hidden; background: no-repeat center url('../imagem/login.jpg'); backdrop-filter: grayscale(0.9) opacity(0.2);">
