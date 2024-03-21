<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./styles/style.css">
  <title>Login</title>
</head>
<body>

  <h1>Login</h1>

  <form action="validar.php" method="GET">
    <label for="n1">Nome: </label>
    <input type="String" name="nome" id="txtnome"> <br><br>

    <label for="n1">Senha: </label>
    <input type="password" name="senha" id="txtsenha"> <br><br>

    <input type="submit" value="Login"> <br><br>
  </form>

  <?php

    $erro = false;
    $msg = filter_input(INPUT_GET, "msg", FILTER_SANITIZE_SPECIAL_CHARS);

    if ($msg != "") {
      $erro = true;
    }
    
    if ($erro == true) {
      echo "<span>Nome e/ou Senha inválido</span>";
    }

  ?>
    
</body>
</html>
