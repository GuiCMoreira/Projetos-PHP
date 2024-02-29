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

            <label for="n1">Primeiro Número: </label>
            <input type="number" name="n1" step="0.1">
            
            <br><br>

            <label for="op">Operação: </label>
            <input type="radio" name="op" value="1"> Soma
            <input type="radio" name="op" value="2"> Subtração
            <input type="radio" name="op" value="3"> Divisão
            <input type="radio" name="op" value="4"> Multiplicação

            <br><br>

            <label for="n2">Segundo Número: </label>
            <input type="number" name="n2"step="0.1">
            
            <input type="submit" value="Calcular"><br><br>

        </form>

        <div></div>
        <div></div>
        <div></div>
        
        <form action="tabuada.php" method="get">
        
        <h1>Tabuada</h1>
            <label for="n1">Gerar tabuada do número: </label>
            <input type="number" name="n1" step="0.1">

            <input type="submit" value="Gerar"><br><br>

        </form>

</main>

</body>
</html>