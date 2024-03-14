<!DOCTYPE html>

<?php 
if (isset($_COOKIE["cookie"])) {
  if ($_COOKIE["cookie"] == "cookieUsuario") {
    header("Location: usuario.php");
    die();
  }
  elseif ($_COOKIE["cookie"] == "cookieAdmin") {
    header("Location: admin.php");
    die();
  }
  else {
    
  }
}
?>

<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./styles/style.css">
  <title>Login</title>
</head>
<body>

  <h1>Login</h1>

  <form action="validar.php" method="POST">
    <label for="n1">E-mail: </label>
    <input type="email" name="email" id="txtemail"> <br><br>

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
      echo "<span>Email e/ou Senha inválido</span>";
    }

  ?>
    
</body>
</html>
