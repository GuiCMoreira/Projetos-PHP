<?php
$ra = filter_input(INPUT_POST, 'ra', FILTER_SANITIZE_SPECIAL_CHARS);
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_SPECIAL_CHARS);
$rg = filter_input(INPUT_POST, 'rg', FILTER_SANITIZE_SPECIAL_CHARS);
$nascimento = filter_input(INPUT_POST, 'nascimento', FILTER_SANITIZE_SPECIAL_CHARS);
$genero = filter_input(INPUT_POST, 'genero', FILTER_SANITIZE_SPECIAL_CHARS);

include_once "../funcoes/banco.php";
$bd = conectar();

$sql = " INSERT INTO aluno"
  . " (RA, nome, cpf, rg, nascimento, sexo)"
  . " VALUES ('$ra', '$nome', '$cpf', '$rg', '$nascimento', '$genero')";

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
  header("location:novo.php?id=$ra& "
    . " nome=$nome&rg=$rg&cpf=$cpf&nascimento=$nascimento&genero=$genero&erro=$erro");
  die();
}

$bd = null;

header("location:index.php");
?>