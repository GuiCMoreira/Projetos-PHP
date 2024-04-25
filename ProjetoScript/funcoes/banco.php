<?php

function conectar()
{
  $user = "root";
  $pass = "";
  $dsn = "mysql:host=localhost;dbname=escola";
  $connection = new PDO($dsn, $user, $pass);
  $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  return $connection;
}

function erros($e)
{
  if (str_contains($e, "PRIMARY")) {
    return "O código de identificação já está cadastrado";
  } else {
    return $e;
  }
}

?>