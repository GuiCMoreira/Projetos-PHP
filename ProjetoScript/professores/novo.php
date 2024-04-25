<!DOCTYPE html>

<?php
$codigo = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
$nome = filter_input(INPUT_GET, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$cpf = filter_input(INPUT_GET, 'cpf', FILTER_SANITIZE_SPECIAL_CHARS);
$rg = filter_input(INPUT_GET, 'rg', FILTER_SANITIZE_SPECIAL_CHARS);
$nascimento = filter_input(INPUT_GET, 'nascimento', FILTER_SANITIZE_SPECIAL_CHARS);
$salario = filter_input(INPUT_GET, 'salario', FILTER_SANITIZE_NUMBER_INT);
$genero = filter_input(INPUT_GET, 'genero', FILTER_SANITIZE_SPECIAL_CHARS);
$erro = filter_input(INPUT_GET, 'erro', FILTER_SANITIZE_SPECIAL_CHARS);
?>

<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../styles/style.css">
  <title>Novo Professor</title>
</head>

<body>
  <a href="index.php"><button class="btn_voltar">Voltar</button></a>

  <form action="inserir.php" method="post">

    <div>
      <label>Identificação</label>
      <input type="text" name="cod_prof" value="">
    </div>
    <div>
      <label>Professor</label>
      <input type="text" name="Professor" value="">
    </div>
    <div>
      <label>CPF</label>
      <input type="text" name="CPF" value="">
    </div>
    <div>
      <label>RG</label>
      <input type="text" name="RG" value="">
    </div>
    <div>
      <label>Data de Nascimento</label>
      <input type="date" name="Nascimento" value="">
    </div>
    <div>
      <label>Salário</label>
      <input type="text" name="Salario" value="">
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