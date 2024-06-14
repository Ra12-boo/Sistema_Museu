

<?php

# Conexao com a BD
require "bdconexao.php";

# Buscar todos os posts
$sql = 'SELECT * FROM recurso';
$stmt= $conexao->query($sql);
# Listar os Posts
//$stmt = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Recursos</title>
</head>
<body>
<header>
        <div class="barra-top">
            <samp>Desconto de 10% em agendamento online-código Museu Uige</samp>
        </div>
        <nav class="nav">
            <div class="div-imag">
            <span class="material-symbols-outlined">directions_run</span>
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
                        <a href="RE.php">Sobre</a>
                    </li>
                
                    <li>
                        <a href="#">
                        <span class="material-symbols-outlined">account_circle</span></a>
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
       <main>
       

       <section>
            <div>
            <img src="img/nota-dobrada-em-um-pedestal-de-marmore.jpg" alt=""width="500px" height="400px">
            </div>
       </section>
       <section id="info">
            
            <h1><?php echo $row ['titulo']; ?></h1>
            <h1><?php echo $row ['tipo']; ?></h1>
            <h1><?php echo $row ['formato']; ?></h1>
            <h1><?php echo $row ['ano']; ?></h1>

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