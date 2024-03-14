<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Início PHP</title>
  </head>
  <body>
  
    <form>
      <label>Digite seu nome: </label>
      <input type="text" name="txtnome" value="" />
      <button type="submit" value="Enviar">Enviar</button>
    </form>

    <?php
    
      $nome = "Abacate<br><br>";
      echo "Olá $nome";

      $nome_get = $_GET["txtnome"];
      $nome_post = $_POST["txtnome"];
      $nome_request = $_REQUEST["txtnome"];

      echo "Imprimindo com GET: $nome_get<br>";
      echo "Imprimindo com POST: $nome_post<br>";
      echo "Imprimindo com REQUEST: $nome_request<br>";

    ?>

  </body>
</html>
