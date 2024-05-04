<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */


$imagens = filter_input_array(INPUT_POST,FILTER_DEFAULT);
//echo var_dump($imagens);
if ($imagens !== null){
    foreach ($imagens as $linha){
        foreach ($linha as $key => $value) {
            //echo $key ,"->" , $value,"<br>";
            unlink($value);
        }
        
    }
}
header("location:index.php");