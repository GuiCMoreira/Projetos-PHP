<!DOCTYPE html>

<?php
$ra = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
$nome = filter_input(INPUT_GET, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$cpf = filter_input(INPUT_GET, 'cpf', FILTER_SANITIZE_SPECIAL_CHARS);
$rg = filter_input(INPUT_GET, 'rg', FILTER_SANITIZE_SPECIAL_CHARS);
$nascimento = filter_input(INPUT_GET, 'nascimento', FILTER_SANITIZE_SPECIAL_CHARS);
$genero = filter_input(INPUT_GET, 'genero', FILTER_SANITIZE_SPECIAL_CHARS);
$erro = filter_input(INPUT_GET, 'erro', FILTER_SANITIZE_SPECIAL_CHARS);
?>

<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../styles/style.css">
  <title>Novo Aluno</title>
</head>

<body>

  <?php
  echo "<p>$erro</p>";
  ?>

  <a href="index.php"><button class="btn_voltar">Voltar</button></a>


  <form action="inserir.php" method="post">

    <div>
      <label>RA (Identificação)</label>
      <input type="text" name="ra" value="<?= $ra ?>">
    </div>
    <div>
      <label>Nome</label>
      <input type="text" name="nome" value="<?= $nome ?>">
    </div>
    <div>
      <label>CPF</label>
      <input type="text" name="cpf" value="<?= $cpf ?>">
    </div>
    <div>
      <label>RG</label>
      <input type="text" name="rg" value="<?= $rg ?>">
    </div>
    <div>
      <label>Data de Nascimento</label>
      <input type="date" name="nascimento" value="<?= $nascimento ?>">
    </div>
    <div>
      <label>Gênero</label>
      <select name="genero">
        <option value="M">Masculino</option>
        <option value="F">Feminino</option>
      </select>
    </div>
    <input type="submit" value="Salvar">

  </form>


</body>

</html>