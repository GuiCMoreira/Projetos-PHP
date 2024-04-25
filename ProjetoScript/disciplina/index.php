<!DOCTYPE html>

<?php
include_once "../funcoes/banco.php";
$bd = conectar();
$consulta = "SELECT * FROM disciplinas order by Nome";
$resultado = $bd->query($consulta);
?>

<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../styles/style.css">
  <title>Disciplinas</title>
</head>

<body>
  <a href="../index.php"><button class="btn_voltar">Voltar</button></a>

  <a href="novo.php"><button>Nova Disciplina</button></a>

  <table>
    <thead>
      <tr>
        <th>Disciplinas</th>
        <th>Ações</th>
      </tr>
    </thead>
    <tbody>
      <?php
      while ($disciplinas = $resultado->fetch()) {
        echo "<tr>";
        echo "<td>";
        echo $disciplinas['Nome'];
        echo "</td>";
        echo "<td>";
        echo "<a href='editar.php?id=" . $disciplinas['Cod_disc'] . "'><button class='btn_editar'>Editar</button></a>";
        echo "<a href='consultar.php?id=" . $disciplinas['Cod_disc'] . "'><button class='btn_consultar'>Consultar</button></a>";
        echo "<a href='excluir.php?id=" . $disciplinas['Cod_disc'] . "'><button class='btn_excluir'>Excluir</button></a>";
        echo "</td>";
        echo "</tr>";
      }
      $resultado = null;
      $bd = null;
      ?>
    </tbody>
  </table>

</body>

</html>