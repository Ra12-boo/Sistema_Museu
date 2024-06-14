<?php

# Conexao com a BD
require "bdconexao.php";

# Buscar todos os posts
$sql = 'SELECT 
exposicao.id AS exposicao_id,
exposicao.titulo AS exposicao_titulo,
exposicao.data_inicio,
exposicao.data_fim,
exposicao.descricao,
obra.titulo AS obra_titulo,
artista.nome AS artista_nome,
museu.nome AS museu_nome
FROM 
exposicao
INNER JOIN 
obra ON exposicao.id_obra = obra.id
INNER JOIN 
artista ON exposicao.id_artista = artista.id
INNER JOIN 
museu ON exposicao.id_museu = museu.id;'
;
$stmt= $conexao->query($sql);
//$stmt = $stmt->fetchAll();
# Listar os Posts
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Exposicao</title>
</head>
<body>
<header>
        <div class="barra-top">
            <samp>Desconto de 10% em agendamento online-código Museu Uige</samp>
        </div>
        <nav class="nav">
            <div class="div-imag">
            <span class="material-symbols-outlined"></span>
                <p>Museu do Uige</p>
            </div>

            <div>
                <ul>
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="Obras.php">Obra de Arte</a>
                    </li>
                    <li>
                        <a href="Artistas.php">Artista</a>
                    </li>
                    <li>
                        <a href="Recursos.php">Recursos</a>
                    </li>
                    <li>
                        <a href="Exposicao.php">Exposições</a>
                    </li>
                    <li>
                        <a href="sobre.php">Sobre</a>
                    </li>
                
                    <li>
                        <a href="#">
                        <span class="material-symbols-outlined"></span></a>
                        </div>
                    </li>
                </ul>
            </div>
            </nav>
        </header>
        <hr>
        <?php 
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)):
    ?>
        <div class="biografia">
        Exposição Uige
       </div>
       <main>
       
       <section>
            <div>
                <img src="img/wp2186240.jpg" alt="" width="600px" height="400px">
            </div>
       </section>
       <section id="info">
            <h1>Exposição Nº:<?php echo $row ['exposicao_id']; ?></h1>
            <h1><?php echo $row ['exposicao_titulo']; ?>Titulo</h1>
            <h1><?php echo $row ['data_inicio']; ?>Artista</h1>
            <h1><?php echo $row ['data_fim']; ?>R</h1>
            <h1>Titulo da Obra<?php echo $row ['obra_titulo']; ?></h1>
            <h1>Artista: <?php echo $row ['artista_nome']; ?></h1>
            <h1>Realizador: <?php echo $row ['museu_nome']; ?></h1>

       </section>
       </main>
       <div class="biografia">
       <?php echo $row ['descricao']; ?>
       </div>
       <?php
endwhile;
?>
    <footer id="rodape">
        <div>
            <p>Contactos</p>
            <p>Email: museuuige@gamil.com</p>
            <p>Tell: 930310962</p>
            <p>Todos os direitos reservados</p>
        </div>
    </footer>
</body>
</html>