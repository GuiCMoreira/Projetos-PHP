<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
</head>
<body>

<?php

$nomeCookie = "cookie1";
$hora = time();
$conteudoCookie = array("texto", " do ", " cookie1", $hora);
$texto = serialize($conteudoCookie);

setcookie($nomeCookie, $texto, $hora + 60 * 2);

echo "Hora: $hora";

if (isset($_COOKIE[$nomeCookie])) {
  echo "apresentando o valor do cookie1<br>";
  echo var_dump(unserialize($_COOKIE[$nomeCookie]));
}
else {
  echo "o cookie1 não está disponível";
}

?>
  
</body>
</html>