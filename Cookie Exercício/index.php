<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./styles/style.css">
  <title>Cadastro</title>
</head>
<body>

  <h1>Cadastrar Nomes</h1>

  <form action="validar.php" method="POST">
    <label for="n1">Nome: </label>
    <input type="string" name="nome" id="txtnome"> 

    <input type="submit" value="Cadastrar">

  <?php

    $erro = false;
    $msg = filter_input(INPUT_GET, "msg", FILTER_SANITIZE_SPECIAL_CHARS);

    if ($msg != "") {
      $erro = true;
    }
    
    if ($erro == true) {
      echo "<span>Campo vazio</span>";
    }

  ?>

  </form> <br><br>
    
  <form action="imprimir.php">
    <input type="submit" value="Ver Nomes">
  <?php

    $erro = false;
    $msg2 = filter_input(INPUT_GET, "msg2", FILTER_SANITIZE_SPECIAL_CHARS);

    if ($msg2 != "") {
      $erro = true;
    }
    
    if ($erro == true) {
      echo "<span>Não há nomes cadastrados</span>";
    }

  ?>
  </form>
    
</body>
</html>
