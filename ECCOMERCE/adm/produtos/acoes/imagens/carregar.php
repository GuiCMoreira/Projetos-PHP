<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
ini_set("upload_max_filesize", "50M");
if (isset($_FILES["arquivo"])){
    $arquivo = $_FILES["arquivo"];
    $diretorio = "imagens/";
    $nome = $arquivo["name"];
    $nome_tmp = $arquivo["tmp_name"];
    $tamanho = $arquivo["size"];
    $erro = $arquivo["error"];
    switch ($erro){
        case UPLOAD_ERR_OK:
            move_uploaded_file($nome_tmp,$diretorio.$nome.time());
            header("location:index.php");
            break;
        case UPLOAD_ERR_INI_SIZE:
            echo "php - tamanho excedido";
            break;
        case UPLOAD_ERR_FORM_SIZE:
            echo "html -  tamanho excedido";
            break;
    }
    
}
else{
    header("location:index.php");
}