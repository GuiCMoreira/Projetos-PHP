<!DOCTYPE html>

<?php
$cod_disc = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
$nome = filter_input(INPUT_GET, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$carga_hora = filter_input(INPUT_GET, 'carga_hora', FILTER_SANITIZE_NUMBER_INT);
$cod_prof = filter_input(INPUT_GET, 'cod_prof', FILTER_SANITIZE_SPECIAL_CHARS);
$erro = filter_input(INPUT_GET, 'erro', FILTER_SANITIZE_SPECIAL_CHARS);
?>

<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../styles/style.css">
  <title>Nova Disciplina</title>
</head>

<body>

  <?php
  echo "<p>$erro</p>";
  ?>

  <a href="index.php"><button class="btn_voltar">Voltar</button></a>


  <form action="inserir.php" method="post">

    <div>
      <label>Código da Disciplina</label>
      <input type="text" name="Cod_disc" value="<?= $cod_disc ?>">
    </div>
    <div>
      <label>Nome</label>
      <input type="text" name="Nome" value="<?= $nome ?>">
    </div>
    <div>
      <label>Carga Horária</label>
      <input type="text" name="Carga_hora" value="<?= $carga_hora ?>">
    </div>
    <div>
      <label>Professor</label>
      <input type="text" name="Cod_prof" value="<?= $cod_prof ?>">
    </div>
    
    <input type="submit" value="Salvar">

  </form>


</body>

</html>