<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <h1>Tabuada: </h1>

<?php 

  $n1 = filter_input(INPUT_GET, "n1", FILTER_SANITIZE_NUMBER_FLOAT);
  
  for ($i=0; $i < 11; $i++) {
    echo "$n1 * $i = " . ($n1 * $i), "<br>";
  };

?>

<br>

<a href="index.php"> Voltar </a>
  
</body>
</html>