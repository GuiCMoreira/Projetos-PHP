<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Operações</title>
</head>
<body>

<main>
        <form action="operacoes.php" method="get">
        <h1>Operações</h1>

            <p>1 - Soma</p>
            <p>2 - Subtração</p>
            <p>3 - Divisão</p>
            <p>4 - Multiplicação</p>
            <p>5 - Média</p>

            <label for="op">Escolha a operação</label>
            <input type="number" name="op" value="<?=$op?>"><br><br>


            <label for="n1">Primeiro Número</label>
            <input type="number" name="num1" value="<?=$n1?>">

            <label for="n2">Segundo Número</label>
            <input type="number" name="num2" value="<?$n2?>">
            
            <input type="submit" value="Calcular"><br><br>

        </form>
</main>

</body>
</html>