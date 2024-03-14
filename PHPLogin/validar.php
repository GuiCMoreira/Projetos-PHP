<?php 

  $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
  $senha = filter_input(INPUT_POST, "senha", FILTER_SANITIZE_SPECIAL_CHARS);

  if ($email == "admin@admin.com" && $senha == "123") {
    header("Location: admin.php");
  } elseif ($email == "gui@gmail.com" && $senha == "123") {
    header("Location: usuario.php");
  } else {
    header("Location: index.php?msg=erro");
  }

  if ($email == "" || $senha == "") {
    echo "Preencha todos os campos", "<br><br>";
  }

?>
```