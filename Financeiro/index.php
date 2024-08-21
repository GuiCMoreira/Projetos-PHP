<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./styleIndex.css" />
  <title>Controle de receitas e despesas</title>
</head>

<body>
  <div class="container">
    <h1>Saldo Atual: </h1>
    <h1 id="balance" class="balance">R$ 0.00</h1>
    <div class="buttons">
      <button onclick="window.location.href='receitas.php'">Receitas</button>
      <button onclick="window.location.href='despesas.php'">Despesas</button>
    </div>
  </div>

  <script src="script.js"></script>

</body>

</html>