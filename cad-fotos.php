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
            <span class="material-symbols-outlined"></span>
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
                        <span class="material-symbols-outlined"></span></a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
</header>
<hr>

<main>
    <div class="conteudo">
    <section class="Cadastrar-Formulario show">

        <form action="gravar-img.php" method="post" enctype="multipart/form-data" id="Form" >

            <h1>Cadastra aqui um Recurso</h1>

            <label for="">Seleciona Uma Imagem</label>
            <input type="file" name="foto" class="conteiner-input">

            <input type="submit" value="Inserir" name="txtfile" class="btn">
            <input type="button" value="Ver" class="btn" id="ver_dados">


        </form>

    </section>
    <section class="tabela">
        <h1> DADOS DE TODOS OS VISITANTES</h1>

        <table>
            <thead>
            <tr>
            <th>N/O</th>
            <th>Titulo</th>
            <th>Museu</th>
            <th>Tipo de Recurso</th>
            <th>Tipo Arquivo</th>
            <th>Descrição</th>
            <th>Ano</th>
            <th>Arquivo</th>
            <th>Atualizar</th>
            <th>Deletar</th>
            </tr>
        </thead>
        <?php 
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)):
    ?>
        <tbody>
        <tr>
        <td> <?php echo $row ['titulo']; ?></td>
        <td> <?php echo $row ['id_museu']; ?></td>
        <td><?php echo $row ['tipo']; ?></td>
        <td><?php echo $row ['formato']; ?></td>
        <td><?php echo $row ['descricao']; ?></td>
        <td><?php echo $row ['ano']; ?></td>
        <td><?php echo $row ['arquivo']; ?></td>
        <td><button>Editar</button></td>
        <td><button>Eliminar</button></td>
        </tr>
        </tbody>
        <?php endwhile;?>
        </table>
        <div id="Form">
        <input type="button" value="Voltar" class="btn" id="btn-voltar">
        </div>

    </section>
        </div>
    </main>

<script src="script.js"></script>
    
</body>
</html>
