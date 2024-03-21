<?php
  session_start();
  function logado(){
    if (!isset($_SESSION["usuario"])) {
      header("Location: index.php");
    }
  }

  $hora = function(){
    return date("H:m:s", time());
  };

  function logoff(){
    unset($_SESSION["usuario"]);
    unset($_SESSION["permissao"]);
    header("Location: index.php");
  }

  function menu(){
  echo "<ul>";
  switch ($_SESSION["permissao"]) {
    case 'adm':
        echo "<li>", "<a href='/manutencao.php'>Manutenção</a>";
        echo "<li>", "<a href='/backup.php'>Backup</a>";

    case 'usuario':
        echo "<li>", "<a href='/consultar.php'>Consultar</a>";
        echo "<li>", "<a href='/emitir.php'>Emitir</a>";
      break;
  }
  }
?>