<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Novo Professor</title>
</head>

<body>
  <a href="index.php"><button>Voltar</button></a>

  <form action="gravar.php" method="post">

    <div>
      <label>Identificação</label>
      <input type="text" name="cod_prof" readonly value="">
    </div>
    <div>
      <label>Professor</label>
      <input type="text" name="Professor" value="">
    </div>
    <div>
      <label>CPF</label>
      <input type="text" name="CPF" value="">
    </div>
    <div>
      <label>RG</label>
      <input type="text" name="RG" value="">
    </div>
    <div>
      <label>Data de Nascimento</label>
      <input type="date" name="Nascimento" value="">
    </div>
    <div>
      <label>Salário</label>
      <input type="text" name="Salario" value="">
    </div>
    <div>
      <label>Gênero</label>
      <select name="genero">
        <option value="M">Masculino</option>
        <option value="F">Feminino</option>
      </select>
    </div>
    <input type="submit" value="Salvar">

  </form>

</body>

</html>