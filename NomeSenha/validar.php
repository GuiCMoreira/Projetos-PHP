<?php
  session_start();
  $nome = filter_input(INPUT_GET, "nome", FILTER_SANITIZE_STRING);
  $senha = filter_input(INPUT_GET, "senha", FILTER_SANITIZE_SPECIAL_CHARS);

  if ($nome == "Admin" && $senha == "123") {
  $_SESSION["usuario"] = $nome;
  $_SESSION["permissao"] = "adm";
  }
  elseif ($nome == "Gui" && $senha == "123") {
  $_SESSION["usuario"] = $nome;
  $_SESSION["permissao"] = "usuario";
  }
  else {
    unset($_SESSION["usuario"]);
    unset($_SESSION["permissao"]);
    header("Location: index.php?msg=erro");
    die;
  }
  header("location:principal.php");

?>
```