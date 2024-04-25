<?php
$cod_disc = filter_input(INPUT_GET, 'Cod_disc', FILTER_SANITIZE_SPECIAL_CHARS);
$nome = filter_input(INPUT_GET, 'Nome', FILTER_SANITIZE_SPECIAL_CHARS);
$carga_hora = filter_input(INPUT_GET, 'Carga_hora', FILTER_SANITIZE_NUMBER_INT);
$cod_prof = filter_input(INPUT_GET, 'Cod_prof', FILTER_SANITIZE_SPECIAL_CHARS);
$erro = filter_input(INPUT_GET, 'erro', FILTER_SANITIZE_SPECIAL_CHARS);

include_once "../funcoes/banco.php";
$bd = conectar();

$sql = " INSERT INTO disciplinas"
  . " (Cod_disc, Nome, Carga_hora, Cod_prof)"
  . " VALUES ('$cod_disc', '$nome', '$carga_hora', '$cod_prof')";

$bd->beginTransaction();

try {
  $i = $bd->exec($sql);

  if ($i != 1) {
    $bd->rollBack();
  } else {
    $bd->commit();
  }
} catch (PDOException $e) {
  $bd->rollBack();
  $bd = null;
  $erro = erros($e->getMessage());
  header("location:novo.php?id=$cod_disc& "
    . " nome=$nome&carga_hora=$carga_hora&cod_prof=$cod_prof&erro=$erro");
  die();
}

$bd = null;

header("location:index.php");
?>