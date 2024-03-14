<?php 

  $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
  $senha = filter_input(INPUT_POST, "senha", FILTER_SANITIZE_STRING);

  if ($email == "" || $senha == "") {
    echo "Preencha todos os campos", "<br><br>";
  }

?>
```