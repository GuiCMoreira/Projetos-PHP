<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./style.css" />
  <title>Controle de Receitas</title>
</head>

<body>
  <h2>Controle de Receitas</h2>

  <div class="container">
    <h4>Saldo atual</h4>

    <h1 id="balance" class="balance">R$ 0.00</h1>

    <div class="inc-exp-container">
      <div>
        <h4>Receitas</h4>
        <p id="money-plus" class="money plus">+ R$0.00</p>
      </div>
    </div>


    <h3>Adicionar transação</h3>

    <form id="form">
      <div class="form-control">
        <label for="text">Nome</label>
        <input autofocus type="text" id="text" placeholder="Digite o nome da receita" />
      </div>

      <div class="form-control">
        <label for="amount">Valor <br />
        </label>
        <input type="number" id="amount" placeholder="Digite o nome da receita" />
      </div>

      <button class="btn">Adicionar Receita</button>
    </form>
    <h3>Transações</h3>

    <ul id="transactions" class="transactions"></ul>
  </div>

  <script src="receitas.js"></script>
</body>

</html>