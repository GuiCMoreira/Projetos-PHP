<!DOCTYPE html>

<?php

  if (isset($_COOKIE["cookie"])) {

  }else {
    header("Location: index.php?msg2=erro");
  }

?>

<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./styles/style.css">
  <title>Nomes</title>
</head>
<body>
  
  <h1>Nomes Cadastrados</h1>

  <form action="index.php">
  <input type="submit" value="Voltar">
  </form> 

  <h1>
  <?php 
    $array = unserialize($_COOKIE["cookie"]);
    foreach($array as $nome) {
      echo $nome . "<br>";
    }
  ?>
  </h1><br><br>

  <form action="apagarNomes.php">
  <input type="submit" value="Apagar todos os Nomes">
  </form>

  </body>
  </html>