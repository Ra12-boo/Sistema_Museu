<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cadastrar Fotos</title>
</head>
<body>

<header>
        <div class="barra-top">
            <samp>Desconto de 10% em agendamento online-código SERRAFIT</samp>
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
                        <a href="Exposicao-cad">Exposição</a>
                    </li>
                    <li>
                        <a href="Artista-cad.php">Artista</a>
                    </li>
                    <li>
                        <a href="Obra.php">Obras de Arte</a>
                    </li>
                    <li>
                        <a href="Consultar-Agenda.php">Agenda</a>
                    </li>
                    <li>
                        <a href="Consultar-Visitante.php">Visitante</a>
                    </li>
                    <li>
                        <a href="RE.php">Recursos</a>
                    </li>
                    <li>
                        <a href="exibir.php">galeria</a>
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
<body>
    <h1>Fotos</h1>
    <?php
    // Configuração do PDO
    require "bdconexao.php";
        // Prepara a declaração SQL para selecionar as fotos
        $sql = "SELECT id, nome, tipo, dados FROM fotos";
        $stmt = $conexao->query($sql);

        // Itera sobre os resultados e exibe cada foto
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<div>";
            echo "<h2>" . htmlspecialchars($row['nome']) . "</h2>";
            echo '<img src="data:' . htmlspecialchars($row['tipo']) . ';base64,' . base64_encode($row['dados']) . '" alt="' . htmlspecialchars($row['nome']) . '" width="200">';
            echo "</div>";
            echo "Consulta feita com sucesso";
        }

    ?>
</body>
</html>
