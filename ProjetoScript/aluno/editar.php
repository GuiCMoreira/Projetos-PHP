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
  <title>Editar Aluno</title>
</head>

<body>
  <a href="index.php"><button class="btn_voltar">Voltar</button></a>
  <form action="gravar.php" method="post">

    <div>
      <label>RA</label>
      <input type="text" name="ra" readonly value="<?= $aluno['RA']; ?>">
    </div>
    <div>
      <label>Nome</label>
      <input type="text" name="aluno" value="<?= $aluno['nome'] ?>">
    </div>
    <div>
      <label>CPF</label>
      <input type="text" name="cpf" value="<?= $aluno['cpf'] ?>">
    </div>
    <div>
      <label>RG</label>
      <input type="text" name="rg" value="<?= $aluno['rg'] ?>">
    </div>
    <div>
      <label>Data de Nascimento</label>
      <input type="date" name="nascimento" value="<?= $aluno['nascimento'] ?>">
    </div>
    <div>
      <label>Gênero</label>
      <select name="genero">
        <option value="M" <?= $aluno["sexo"] == "M" ? 'selected' : '' ?>>Masculino</option>
        <option value="F" <?= $aluno["sexo"] == "F" ? 'selected' : '' ?>>Feminino</option>
      </select>
    </div>
    <input type="submit" value="Salvar">

  </form>

</body>

</html>