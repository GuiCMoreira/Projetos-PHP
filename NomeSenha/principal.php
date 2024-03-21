<?php
include_once './funcoes.php';
logado();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./styles/style.css">
  <title>Página Principal</title>
</head>
<body>
  <h1>Página Principal</h1>
  
  <?php
    if (isset($_SESSION["usuario"])) {
      $logado = $_SESSION["usuario"];
    } else {
      $logado = "";
    }
    echo "<h3> Seja bem-vindo $logado </h3>";
    echo "<h3>" . $hora() . "</h3>";
  ?>

  <?php 
    menu();
  ?>

  <?php 
    if ($_SESSION["permissao"] == "adm") {
      echo "<h3>Você é ADM</h3>";
    } else {
      echo "<h3>Você é USUARIO</h3>";
    }
  ?>

  <form action="logoff.php">
    <input type="submit" value="logoff">
  </form>
</body>
</html>
