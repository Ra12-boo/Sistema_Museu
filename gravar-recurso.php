<?php

require "bdconexao.php";

# Inserir dados na BD

$titulo = htmlspecialchars($_POST["txtTitulo"]);
$tipo_recurso= htmlspecialchars($_POST["tipo"]);
$formato = htmlspecialchars($_POST["tipoArquivo"]);
$descricao = htmlspecialchars($_POST["txtdescricao"]);
$museu = htmlspecialchars($_POST["museu"]);
$museu = filter_var($museu, FILTER_VALIDATE_INT);
$ano = date("Y-m-d");
$arquivo = "";

$stmtInserir = $conexao->prepare("
 INSERT INTO obra (
     titulo, tipo, formato,
     descricao, arquivo, id_museu, ano
  ) VALUES (
     :titulo, :tipo, :formato, :descricao, 
  :arquivo, :id_museu, :ano)
 ");

 $stmtInserir->bindParam(":titulo", $titulo);
 $stmtInserir->bindParam(":tipo", $tipo_recurso);
 $stmtInserir->bindParam(":formato", $formato);
 $stmtInserir->bindParam(":descricao", $descricao);
 $stmtInserir->bindParam(":arquivo", $arquivo);
 $stmtInserir->bindParam(":id_museu", $museu);
 $stmtInserir->bindParam(":ano", $ano);

$stmtInserir->execute();

header("location: Recursos.php");

