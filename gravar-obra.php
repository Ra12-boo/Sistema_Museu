<?php

require "bdconexao.php";

# Inserir dados na BD

$titulo = htmlspecialchars($_POST["txtTitulo"]);
$tipo_obra = htmlspecialchars($_POST["tipo"]);
$formato = htmlspecialchars($_POST["arquivo"]);
$descricao = htmlspecialchars($_POST["txtConteudo"]);
$museu = htmlspecialchars($_POST["txtMuseu"]);
$museu = filter_var($museu, FILTER_VALIDATE_INT);
$artista = htmlspecialchars($_POST["txtAutor"]);
$artista = filter_var($artista, FILTER_VALIDATE_INT);
$ano = date("Y-m-d");
$foto = htmlspecialchars($_POST["txt_foto"]);
$foto = filter_var($museu, FILTER_VALIDATE_INT);

$stmtInserir = $conexao->prepare("
 INSERT INTO obra (
     titulo, tipo,
     formato, descricao, ano, id_artista, id_museu, fotos_id
  ) VALUES (
     :titulo, :tipo,  :formato, 
  :descricao, :ano, :id_artista, :id_museu, fotos_id)
 ");

 $stmtInserir->bindParam(":titulo", $titulo);
 $stmtInserir->bindParam(":tipo", $tipo_obra);
 $stmtInserir->bindParam(":formato", $formato);
 $stmtInserir->bindParam(":descricao", $descricao);
 $stmtInserir->bindParam(":ano", $ano);
 $stmtInserir->bindParam(":id_artista", $artista);
 $stmtInserir->bindParam(":id_museu", $museu);
 $stmtInserir->bindParam(":id_fotos", $foto);

$stmtInserir->execute();

header("location: Obras.php");
