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
      $nome = "Abacate";
      echo "Olá $nome";
    ?>

  </body>
</html>
