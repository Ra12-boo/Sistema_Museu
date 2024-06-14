<?php

require "bdconexao.php";

# Inserir dados na BD

$nome = htmlspecialchars($_POST["txtnome"]);
$Pais = htmlspecialchars($_POST["txtPais"]);
$provincia = htmlspecialchars($_POST["txtProvincia"]);
$Municipio = htmlspecialchars($_POST["txtMunicipio"]);
$Contacto = htmlspecialchars($_POST["txtContacto"]);
$Contacto = filter_var($Contacto, FILTER_VALIDATE_INT);
$foto = "";

$stmtInserir = $conexao->prepare("
 INSERT INTO museu (
     nome, pais, provincia,
     municipio, contacto, foto
  ) VALUES (
     :nome, :pais, :provincia, :municipio, 
  :contacto, :foto)
 ");

 $stmtInserir->bindParam(":nome", $nome);
 $stmtInserir->bindParam(":pais", $Pais);
 $stmtInserir->bindParam(":provincia", $provincia);
 $stmtInserir->bindParam(":municipio", $Municipio);
 $stmtInserir->bindParam(":contacto", $Contacto);
 $stmtInserir->bindParam(":foto", $foto);

$stmtInserir->execute();

header("location: index.php");

