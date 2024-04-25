<?php
include_once '../funcoes/banco.php';
$bd = conectar();
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING);
$select = "SELECT * FROM disciplinas where Cod_disc = '$id'";
$response = $bd->query($select);

if ($response->rowCount() == 0) {
  $bd = null;
  header("location:index.php");
  die();
}
$disciplinas = $response->fetch();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../styles/style.css">
  <title>Consultar Disciplinas</title>
</head>

<body>
  <a href="index.php"><button class="btn_voltar">Voltar</button></a>
  <form action="">
    <div>
      <h3>Código Disciplina (Identificação)</h3>
      <p><?= $disciplinas['Cod_disc']; ?></p>
    </div>
    <div>
      <h3>Nome: </h3>
      <p><?= $disciplinas['Nome'] ?></p>
    </div>
    <div>
      <h3>Carga horária: </h3>
      <p><?= $disciplinas['Carga_hora'] ?></p>
    </div>
    <div>
      <h3>Professor: </h3>
      <p><?= $disciplinas['Cod_prof'] ?></p>
    </div>
  </form>

</body>

</html>