<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro</title>
</head>
<body>

  <form action="processa.php" method="get">
  
    <h1>Cadastrar</h1>

    <label for="n1">Nome: </label>
    <input type="string" name="nome" step="0.1"> <br><br>

    <label for="n1">CPF (apenas números): </label>
    <input type="int" name="cpf" step="0.1"> <br><br>

    <label for="n1">Celular (apenas números com DDD): </label>
    <input type="int" name="celular" step="0.1"> <br><br>

    <label for="n1">Estado Civil: </label>
    <input type="radio" name="estadocivil" value="1"> Solteiro(a)
    <input type="radio" name="estadocivil" value="2"> Casado(a)
    <input type="radio" name="estadocivil" value="3"> Divorciado(a)
    <input type="radio" name="estadocivil" value="4"> Viúvo(a)
    <input type="radio" name="estadocivil" value="5"> Separado judicialmente <br><br>

    <label for="n1">E-mail: </label>
    <input type="string" name="email" step="0.1"> <br><br>

    <label for="n1">Senha: </label>
    <input type="string" name="senha" step="0.1"> <br><br>

    <input type="submit" value="Cadastrar">

  </form>

</body>
</html>