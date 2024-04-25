<?php
$ra = filter_input(INPUT_POST, 'ra', FILTER_SANITIZE_SPECIAL_CHARS);
$nome = filter_input(INPUT_POST, 'aluno', FILTER_SANITIZE_SPECIAL_CHARS);
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_SPECIAL_CHARS);
$rg = filter_input(INPUT_POST, 'rg', FILTER_SANITIZE_SPECIAL_CHARS);
$genero = filter_input(INPUT_POST, 'genero', FILTER_SANITIZE_SPECIAL_CHARS);
$nascimento = filter_input(INPUT_POST, 'nascimento', FILTER_SANITIZE_SPECIAL_CHARS);

include_once "../funcoes/banco.php";
$bd = conectar();

$sql = "UPDATE aluno
SET nome = '$nome',
nascimento = '$nascimento',
cpf = '$cpf',
rg = '$rg',
sexo = '$genero'
WHERE RA = '$ra'";

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