<?php

  if (isset($_COOKIE["cookie"])) {
    $meuVetor = unserialize($_COOKIE["cookie"]);
  }else {
    $meuVetor = array();
  }

  $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_STRING);

  if ($nome == "") {
    header("Location: index.php?msg=erro");
  }
  else {
    array_push($meuVetor, $nome);
    setcookie("cookie", serialize($meuVetor), time() + 60 * 60);

    header("Location: index.php");
  }
