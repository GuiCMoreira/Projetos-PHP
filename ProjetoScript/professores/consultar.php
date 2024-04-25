<?php
include_once '../funcoes/banco.php';
$bd = conectar();
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING);
$select = "SELECT * FROM professores where Cod_prof = '$id'";
$response = $bd->query($select);

if ($response->rowCount() == 0) {
  $bd = null;
  header("location:index.php");
  die();
}
$prof = $response->fetch();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../styles/style.css">
  <title>Consultar</title>
</head>

<body>
  <form action="index.php">
    <input type="submit" value="Voltar">
    <div>
      <h3>Identificação: </h3>
      <p><?= $prof['Cod_prof']; ?></p>
    </div>
    <div>
      <h3>Professor: </h3>
      <p><?= $prof['Nome'] ?></p>
    </div>
    <div>
      <h3>CPF: </h3>
      <p><?= $prof['CPF'] ?></p>
    </div>
    <div>
      <h3>RG: </h3>
      <p><?= $prof['RG'] ?></p>
    </div>
    <div>
      <h3>Data de Nascimento: </h3>
      <p><?= $prof['Nascimento'] ?></p>
    </div>
    <div>
      <h3>Salário: </h3>
      <p><?= $prof['Salario'] ?></p>
    </div>
    <div>
      <h3>Gênero: </h3>
      <p><?= $prof["Sexo"] == "M" ? 'Masculino' : 'Feminino' ?></p>
    </div>

</body>

</html>