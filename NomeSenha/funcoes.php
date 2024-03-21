<?php
  session_start();
  function logado(){
    if (!isset($_SESSION["usuario"])) {
      header("Location: index.php");
    }
  }

$hora = function () {
  return date("H:m:s", time());
  };
?>