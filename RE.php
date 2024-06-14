
<?php

# Conexao com a BD
require "bdconexao.php";

# Buscar todos os posts
$sql = 'SELECT * FROM recurso';
$stmt= $conexao->query($sql);
//$stmt = $stmt->fetchAll();
# Listar os Posts

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Recursos Educacionais</title>
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
                        <a href="Exposicao-cad.php">Exposição</a>
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

        <form action="gravar-recurso" method="post" id="Form">

            <h1>Cadastra aqui um Recurso</h1>

            <label for="">Titulo</label>
            <input type="text" name="txtTitulo" class="conteiner-input">

            <label for="">Museu</label>
            <input type="number" name="museu" class="conteiner-input">


            <label for="">Tipo de Recurso</label>

            <select name="tipo" id="tipo-obra" class="conteiner-input">
            <option> Selecione o Tipo de Recurso</option>
            <option value="Obra Plastica">Recursos Educacionais</option>
            <option value="Artezao">Recursos Naturais</option>
            <option value="Literatura">Recursos Tecnologicos</option>
            </select>

            <label for="">Escolhe o Tipo de Arquivo</label>
            <select name="tipoArquivo" id="tipo-obra" class="conteiner-input">
            <option>Formato</option>
            <option value="PDF">PDF</option>
            <option value="Audio">Audio</option>
            <option value="Video">Video</option>
            </select>
            <label for="">Adiciona o Arquivo</label>
            <input type="file" name="arquivo" class="conteiner-input">
            <label for="">Ano</label>
            <input type="date" name="txtano" class="conteiner-input">
            <label for="">Descrição</label>
            <textarea name="txtdescricao" id="" cols="20" rows="8" class="conteiner-input"></textarea>


            <input type="submit" value="Inserir" name="btn_inserir" class="btn">
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