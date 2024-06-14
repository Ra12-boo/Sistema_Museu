<?php

 require_once("bdconexao.php");

# Inserir dados na BD
$data = date("Y-m-d");
$hora=time("hh:mm");
$usuario= htmlspecialchars($_POST["txtUsuario"]);
$usuario = filter_var($usuario, FILTER_VALIDATE_INT);
$museu= htmlspecialchars($_POST["txtUsuario"]);
$museu = filter_var($museu, FILTER_VALIDATE_INT);
$stmtInserir = $conn->prepare("
 INSERT INTO agendamento (
     data_agenda, hora, id_usuario,
  ) VALUES (
     :data_agenda, :hora, 
  :id_usuario)
 ");

 $stmtInserir->bindParam(":data_agenda", $data);
 $stmtInserir->bindParam(":hora", $usuario);
 $stmtInserir->bindParam(":id_usuario", $usuario);
$stmtInserir->execute();
echo "Artista cadastrado com sucesso!";
header("location: index.php");