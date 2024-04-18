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
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Editar Professor</title>
</head>

<body>
  <form action="gravar.php" method="post">

    <div>
      <label>Identificação</label>
      <input type="text" name="cod_prof" readonly value="<?= $prof['Cod_prof']; ?>">
    </div>
    <div>
      <label>Professor</label>
      <input type="text" name="Professor" value="<?= $prof['Nome'] ?>">
    </div>
    <div>
      <label>CPF</label>
      <input type="text" name="CPF" value="<?= $prof['CPF'] ?>">
    </div>
    <div>
      <label>RG</label>
      <input type="text" name="RG" value="<?= $prof['RG'] ?>">
    </div>
    <div>
      <label>Data de Nascimento</label>
      <input type="date" name="Nascimento" value="<?= $prof['Nascimento'] ?>">
    </div>
    <div>
      <label>Salário</label>
      <input type="text" name="Salario" value="<?= $prof['Salario'] ?>">
    </div>
    <div>
      <label>Gênero</label>
      <select name="genero">
        <option value="M" <?= $prof["Sexo"] == "M" ? 'selected' : '' ?>>Masculino</option>
        <option value="F" <?= $prof["Sexo"] == "F" ? 'selected' : '' ?>>Feminino</option>
      </select>
    </div>
    <input type="submit" value="Salvar">

  </form>

</body>

</html>