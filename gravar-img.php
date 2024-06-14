<?php 
if (isset($_POST['txtfile'])) {
    // Configuração do PDO
    require "bdconexao.php";
        // Verifica se o arquivo foi enviado
        if (isset($_FILES['foto']) && $_FILES['foto']['error'] == 0) {
            $nome = $_FILES['foto']['name'];
            $tipo = $_FILES['foto']['type'];
            $dados = file_get_contents($_FILES['foto']['tmp_name']);

            // Prepara a declaração SQL para inserir a foto
           
            $sql = "INSERT INTO fotos (nome, tipo, dados) VALUES (:nome, :tipo, :dados)";
            $stmt = $conexao->prepare($sql);
          

            // Executa a declaração com os parâmetros
            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':tipo', $tipo);
            $stmt->bindParam(':dados', $dados, PDO::PARAM_LOB);
            $stmt->execute();
            header("location: exibir.php");

            echo "Foto enviada com sucesso!";
        }
         else {
            echo "Erro ao enviar a foto.";
        }
        
    
}

?>