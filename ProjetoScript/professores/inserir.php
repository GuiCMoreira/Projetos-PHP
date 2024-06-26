<?php
$cod_prof = filter_input(INPUT_POST, 'cod_prof', FILTER_SANITIZE_SPECIAL_CHARS);
$nome = filter_input(INPUT_POST, 'Professor', FILTER_SANITIZE_SPECIAL_CHARS);
$cpf = filter_input(INPUT_POST, 'CPF', FILTER_SANITIZE_SPECIAL_CHARS);
$rg = filter_input(INPUT_POST, 'RG', FILTER_SANITIZE_SPECIAL_CHARS);
$nascimento = filter_input(INPUT_POST, 'Nascimento', FILTER_SANITIZE_SPECIAL_CHARS);
$salario = filter_input(INPUT_POST, 'Salario', FILTER_SANITIZE_NUMBER_INT);
$genero = filter_input(INPUT_POST, 'genero', FILTER_SANITIZE_SPECIAL_CHARS);

include_once "../funcoes/banco.php";
$bd = conectar();

$sql = " INSERT INTO professores"
  . " (Cod_prof, Nome, CPF, RG, Nascimento, Salario, Sexo)"
  . " VALUES ('$cod_prof', '$nome', '$cpf', '$rg', '$nascimento', $salario, '$genero')";

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
  header("location:novo.php?id=$cod_prof& "
    . " nome=$nome&rg=$rg&cpf=$cpf&salario=$salario&nascimento=$nascimento&erro=$erro");
  die();
}

$bd = null;

header("location:index.php");
?>