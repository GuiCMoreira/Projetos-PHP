<?php
include_once '../../../../script/banco.php';
$bd = conectar();
$id = filter_input(INPUT_GET, 'codigo_prod', FILTER_SANITIZE_STRING);
$select = "SELECT * FROM imagem  where codigo_prod = '$id'";
$response = $bd->query($select);

if ($response->rowCount() == 0) {
    $bd = null;
    header("location:index.php");
    die();
}
$produtos = $response->fetch();
?>



<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Upload de Imagens</title>
    </head>
    <body>
        <form action="carregar.php" 
              method="POST" 
              enctype="multipart/form-data">
            <div>
                <label>Arquivo</label>
                <input type="file" 
                       accept="image/png,image/jpeg"
                       name="arquivo">                
            </div>
            <input type="submit" value="Enviar">
        </form>
        
        <hr>
        <div>
            <form action="excluir.php" method="post">
                <?php
                    const CAMINHO = "assets/";
                    $diretorio = opendir(CAMINHO);
                    while(($nome = readdir($diretorio)) !== false){
                        if (filetype(CAMINHO.$nome) === "file"){
                            
                ?> 
                            <img src="<?=CAMINHO.$nome?>" alt="alt" width="80"/>
                            <input type="checkbox" name="imagem[]" 
                                   value="<?=CAMINHO.$nome?>">
                <?php
                       }
                   }
                ?>
                <br>
                <input type="submit" value="Excluir">
            </form>
        </div>
    </body>
</html>
