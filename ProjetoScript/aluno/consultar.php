<?php
include_once '../funcoes/banco.php';
$bd = conectar();
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING);
$select = "SELECT * FROM aluno where RA = '$id'";
$response = $bd->query($select);

if ($response->rowCount() == 0) {
  $bd = null;
  header("location:index.php");
  die();
}
$aluno = $response->fetch();
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
  <a href="index.php"><button class="btn_voltar">Voltar</button></a>
  <form action="">
    <div>
      <h3>RA: </h3>
      <p><?= $aluno['RA']; ?></p>
    </div>
    <div>
      <h3>Aluno: </h3>
      <p><?= $aluno['nome'] ?></p>
    </div>
    <div>
      <h3>CPF: </h3>
      <p><?= $aluno['cpf'] ?></p>
    </div>
    <div>
      <h3>RG: </h3>
      <p><?= $aluno['rg'] ?></p>
    </div>
    <div>
      <h3>Data de Nascimento: </h3>
      <p><?= $aluno['nascimento'] ?></p>
    </div>
    <div>
      <h3>Gênero: </h3>
      <p><?= $aluno["sexo"] == "M" ? 'Masculino' : 'Feminino' ?></p>
    </div>
  </form>

</body>

</html>