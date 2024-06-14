<?php

 require_once("bdconexao.php");

# Inserir dados na BD

$nome = htmlspecialchars($_POST["txt_nome"]);
$sexo = htmlspecialchars($_POST["txt_sexo"]);
$foto = htmlspecialchars($_POST["txt_foto"]);
$foto = filter_var($museu, FILTER_VALIDATE_INT);
$biografia = htmlspecialchars($_POST["txt_biografia"]);
$nacionalidade = htmlspecialchars($_POST["txt_nacionalidade"]);
$tipo = htmlspecialchars($_POST["txt_artista"]);

$stmtInserir = $conn->prepare("
 INSERT INTO artista (
     nome, sexo,
     biografia, nacionalidade, tipo_artista, fotos_id
  ) VALUES (
     :nome, :sexo, 
  :foto, :biografia, :nacionalidade)
 ");

 $stmtInserir->bindParam(":nome", $nome);
 $stmtInserir->bindParam(":sexo", $sexo);
 $stmtInserir->bindParam(":fotos_id", $foto);
 $stmtInserir->bindParam(":biografia", $biografia);
 $stmtInserir->bindParam(":nacionalidade", $nacionalidade);
 $stmtInserir->bindParam(":tipo_artista", $tipo);

$stmtInserir->execute();
echo "Artista cadastrado com sucesso!";
header("location: Artistas.php");