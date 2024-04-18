<!DOCTYPE html>

<?php
include_once "../funcoes/banco.php";
$bd = conectar();
$consulta = "SELECT * FROM professores order by nome";
$resultado = $bd->query($consulta);
?>

<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Projeto Script</title>
</head>

<body>

  <a href="novo.php"><button>Novo Professor</button></a>

  <table>
    <thead>
      <tr>
        <th>Professor</th>
        <th>Ações</th>
      </tr>
    </thead>
    <tbody>
      <?php
      while ($prof = $resultado->fetch()) {
        echo "<tr>";
        echo "<td>";
        echo $prof['Nome'];
        echo "</td>";
        echo "<td>";
        echo "<a href='editar.php?id=" . $prof['Cod_prof'] . "'><button>Editar</button></a>";
        echo "<a href='consultar.php?id=" . $prof['Cod_prof'] . "'><button>Consultar</button></a>";
        echo "<a href='excluir.php?id=" . $prof['Cod_prof'] . "'><button>Excluir</button></a>";
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