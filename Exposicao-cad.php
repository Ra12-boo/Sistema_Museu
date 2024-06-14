

<?php

# Conexao com a BD
require "bdconexao.php";

# Buscar todos os posts
$sql = 'SELECT * FROM exposicao';
$stmt= $conexao->query($sql);
//$stmt=$conexao->fetchAll();
# Listar os Posts
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exposição</title>
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
                        <a href="Artista-cad.php">Artista</a>
                    </li>
                    <li>
                        <a href="Obra.php">Obra de Arte</a>
                    </li>
                    <li>
                        <a href="RE.php">Recursos</a>
                    </li>
                    <li>
                        <a href="Consultar-Visitante.php">Visitantes</a>
                    </li>
                    <li>
                        <a href="Consultar-Agenda.php">Agendamentos</a>
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
    <main>
        <div class="conteudo">
    <section class="Cadastrar-Formulario show">

    <form action="gravar-exposicao.php" method="post" id="Form">

    <h1>Cadastra aqui uma Exposição</h1>

    <label for="">Titulo</label>
    <input type="text" name ="txtTitulo" class="conteiner-input">

    <label for="txt_data">Data de Inicio</label>
    <input type="dateInicio" class="conteiner-input">
    <label for="">Data Encerramento</label>
    <input type="date" name ="dataFim" class="conteiner-input">

    <label for="">Artista</label>
    <input type="number" name ="txtArtista" class="conteiner-input">

    <label for="">Recurso</label>
    <input type="number" name ="txtRecurso" class="conteiner-input">

    <label for="">Museu</label>
    <input type="number" name ="txtMuseu" class="conteiner-input">

    <label for="">Obra</label>
    <input type="number" name ="txtObra" class="conteiner-input">

    <label for="">Foto</label>
    <input type="number" name ="txt_foto" class="conteiner-input">

    <label for="">Descrisão</label>
    <textarea name ="txtDescricao" id="" cols="20" rows="8" class="conteiner-input"></textarea>

    <input type="submit" value="Inserir" name="btn_inserir" class="btn">
    <input type="button" value="Ver" class="btn" id="ver_dados">

</form>
</section>
    <section class="tabela">
    <h1> DADOS DE EXPOSIÇÃO</h1>
        <table>
        <thead>
            <tr>
            <th>ID</th>
            <th>Titulo</th>
            <th>Data Inicio</th>
            <th>Data Fim</th>
            <th>Capa</th>
            <th>Descrição</th>
            <th>Artista</th>
            <th>Obra</th>
            <th>Recurso</th>
            <th>Museu</th>
            <th>Foto</th>
            <th>Atualizar</th>
            <th>Deletar</th>
            </tr>
            </thead>
    <?php 
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)):
    ?>
        <tbody>
        <tbody>
            <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['titulo']; ?></td>
            <td><?php echo $row['data_inicio']; ?></td>
            <td><?php echo $row['data_fim']; ?></td>
            <td><?php echo $row['descricao']; ?></td>
            <td><?php echo $row['id_artista']; ?></td>
            <td><?php echo $row['id_obra']; ?></td>
            <td><?php echo $row['id_recurso']; ?></td>
            <td><?php echo $row['id_museu']; ?></td>
            <td><?php echo $row['fotos_id']; ?></td>
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