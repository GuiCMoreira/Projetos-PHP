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
    //$CookieInfo = session_get_cookie_params();
    //echo var_dump($CookieInfo);
    echo "<h3>" . $hora() . "</h3>";
  ?>

  <?php 
  if ($_SESSION["permissao"] == "adm") {
    
  ?>

    <h3>ADM</h3>

  <?php
  } else {

  ?>

    <h3>USUARIO</h3>

  <?php
  }
  ?>

  <form action="sair.php">
    <input type="submit" value="Sair">
  </form>
</body>
</html>
