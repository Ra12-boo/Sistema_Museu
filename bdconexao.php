<?php
try {
    
    $conexao = new PDO(
    "mysql:host=localhost;dbname=bdmuseu", 
    "root", 
    "");
    
    } catch (PDOException $ex) {
       
        echo "Erro ao conectar com 
       a base de dados. \n" 
       . $ex->getMessage();


        exit;
    }