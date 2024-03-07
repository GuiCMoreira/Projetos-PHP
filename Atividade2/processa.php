<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Validando</title>
</head>
<body>

  <h1>Valindando</h1>

  <?php 
  
  $nome = filter_input(INPUT_GET, "nome", FILTER_SANITIZE_STRING);
  $cpf = filter_input(INPUT_GET, "cpf", FILTER_SANITIZE_NUMBER_FLOAT);
  $celular = filter_input(INPUT_GET, "celular", FILTER_SANITIZE_NUMBER_FLOAT);
  $estadocivil = filter_input(INPUT_GET, "estadocivil", FILTER_SANITIZE_NUMBER_FLOAT);
  $email = filter_input(INPUT_GET, "email", FILTER_SANITIZE_EMAIL);
  $senha = filter_input(INPUT_GET, "senha", FILTER_SANITIZE_STRING);

   if ($nome == "") {
    echo "Nome INVÁLIDO", "<br><br>";
  } 
  else {
    echo "Nome: $nome", "<br><br>";
  }

   if ($cpf == "") {
    echo "CPF INVÁLIDO", "<br><br>";
  }
  else {
    echo "CPF: $cpf", "<br><br>";
  }

   if ($celular == "") {
    echo "Celular INVÁLIDO", "<br><br>";
  }
  else {
    echo "Celular: $celular", "<br><br>";
  }

   if ($estadocivil == "") {
    echo "Estado Civil INVÁLIDO", "<br><br>";
  }
  else {
    switch ($estadocivil) {
      case '1':
        echo "Estado Civil: Solteiro(a)", "<br><br>";
        break;
      
      case '2':
        echo "Estado Civil: Casado(a)", "<br><br>";
        break;
      
      case '3':
        echo "Estado Civil: Divorciado(a)", "<br><br>";
        break;
      
      case '4':
        echo "Estado Civil: Viúvo(a)", "<br><br>";
        break;
      
      case '5':
        echo "Estado Civil: Separado Judicialmente", "<br><br>";
        break;
    }
  }

   if ($email == "") {
    echo "Email INVÁLIDO", "<br><br>";
  }
  else {
    echo "Email: $email", "<br><br>";
  }

   if ($senha == "") {
    echo "Senha INVÁLIDA", "<br><br>";
  }
  else {
    echo "Senha: $senha", "<br><br>";
  }

  ?>

  <form action="index.php">
  <input type="submit" value="Voltar"><br><br>
</form>

</body>
</html>