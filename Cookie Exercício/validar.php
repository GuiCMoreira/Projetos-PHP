<?php 

  $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_STRING);

  if ($nome != "") {
    


    header("Location: index.php");
  }
  else {
    header("Location: index.php?msg=erro");
  }

?>
```