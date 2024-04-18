<?php
include_once "../funcoes/banco.php";
$bd = conectar();
$consulta = "SELECT * FROM professores where Cod_prof = " . $_GET['id'];
$resultado = $bd->query($consulta);
if (Count($resultado) == 0) {
$bd = null;
header("Location: index.php");
die();
}
?>