<?php
$cod_disc = filter_input(INPUT_POST, 'Cod_disc', FILTER_SANITIZE_SPECIAL_CHARS);
$nome = filter_input(INPUT_POST, 'Nome', FILTER_SANITIZE_SPECIAL_CHARS);
$carga_hora = filter_input(INPUT_POST, 'Carga_hora', FILTER_SANITIZE_SPECIAL_CHARS);
$professor = filter_input(INPUT_POST, 'Cod_prof', FILTER_SANITIZE_SPECIAL_CHARS);

include_once "../funcoes/banco.php";
$bd = conectar();

$sql = "UPDATE disciplinas
SET Nome = '$nome',
Carga_hora = '$carga_hora',
Cod_prof = '$professor'
WHERE Cod_disc = '$cod_disc'";

$bd->beginTransaction();
$i = $bd->exec($sql);
if ($i == 1) {
  $bd->commit();
} else {
  $bd->rollBack();
}

$bd = null;

header("location:index.php");
?>