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
  <title>Editar Disciplina</title>
</head>

<body>
  <a href="index.php"><button class="btn_voltar">Voltar</button></a>
  <form action="gravar.php" method="post">

    <div>
      <label>Código Disciplina</label>
      <input type="text" name="Cod_disc" readonly value="<?= $disciplinas['Cod_disc']; ?>">
    </div>
    <div>
      <label>Nome</label>
      <input type="text" name="Nome" value="<?= $disciplinas['Nome'] ?>">
    </div>
    <div>
      <label>Carga Horária</label>
      <input type="text" name="Carga_hora" value="<?= $disciplinas['Carga_hora'] ?>">
    </div>
    <div>
      <label>Professor</label>
      <input type="text" name="Cod_prof" value="<?= $disciplinas['Cod_prof'] ?>">
    </div>
    <input type="submit" value="Salvar">

  </form>

</body>

</html>