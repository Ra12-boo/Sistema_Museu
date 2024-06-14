<?php

 require_once("bdconexao.php");

# Inserir dados na BD


# Inserir dados na BD

$titulo = htmlspecialchars($_POST["txtTitulo"]);
$data_inicio = date("Y-m-d");
$data_fim = date("Y-m-d");
$Artista = htmlspecialchars($_POST["txtArtista"]);
$Artista = filter_var($Artista, FILTER_VALIDATE_INT);
$Recurso = htmlspecialchars ($_POST["txtRecurso"]);
$Recurso = filter_var($Recurso, FILTER_VALIDATE_INT);
$Obra = htmlspecialchars($_POST["txtObra"]);
$Obra = filter_var($Obra, FILTER_VALIDATE_INT);
$descricao = htmlspecialchars($_POST["txtDescricao"]);
$museu = htmlspecialchars($_POST["txtMuseu"]);
$museu = filter_var($museu, FILTER_VALIDATE_INT);
$foto = htmlspecialchars($_POST["txt_foto"]);
$foto = filter_var($museu, FILTER_VALIDATE_INT);

$stmtInserir = $conn->prepare("
 INSERT INTO exposicao (
     titulo, data_inicio, data_fim,
     descricao, id_artista, id_obra, id_recurso, id_museu, fotos_id
  ) VALUES (
     :titulo, :data_inicio, :data_fim,
  :descricao, :id_artista, :id_obra, :id_recurso, :id_museu, fotos_id)
 ");

 $stmtInserir->bindParam(":titulo", $titulo);
 $stmtInserir->bindParam(":data_inicio", $data_inicio);
 $stmtInserir->bindParam(":data_fim", $data_fim);
 $stmtInserir->bindParam(":descricao", $descricao);
 $stmtInserir->bindParam(":id_artista", $Artista);
 $stmtInserir->bindParam(":id_obra", $Obra);
 $stmtInserir->bindParam(":id_recurso", $Recurso);
 $stmtInserir->bindParam(":id_museu", $museu);
 $stmtInserir->bindParam(":fotos_id", $foto);

$stmtInserir->execute();
echo "Artista cadastrado com sucesso!";

header("location: Exposicao.php");
?>
