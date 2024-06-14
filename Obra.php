

<?php

# Conexao com a BD
require "bdconexao.php";

# Buscar todos os posts
$sql = 'SELECT * FROM obra';
$stmt= $conexao->query($sql);
//$stmt = $stmt->fetchAll();
# Listar os Posts
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obra</title>
    <link rel="stylesheet" href="style.css">
    
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
                        <a href="Artista-cad.php">Artista</a>
                    </li>
                    <li>
                        <a href="Exposicao.php">Exposição</a>
                    </li>
                    <li>
                        <a href="Consultar-Agenda.php">Agendamento</a>
                    </li>
                    <li>
                        <a href="Consultar-Visitante.php">Visitante</a>
                    </li>
                    <li>
                        <a href="RE.php">Recursos</a>
                    </li>
                    <li>
                        <a href="#">Usuario</a>
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

    <main>
    <div  class="conteudo">

        <section class="Cadastrar-Formulario show">

        <form action="gravar-obra.php" method="post" id="Form">

        <h1>Cadastra aqui uma Obra</h1>

        <label for="">Titulo</label>
        <input type="text" name="txtTitulo" class="conteiner-input">

        <label for="">Tipo de Obra</label>
        <select name="tipo" id="tipo-obra" class="conteiner-input">
        <option> Selecione o Tipo de Obra</option>
        <option value="Obra Plastica">Obra Plastica</option>
        <option value="Artezao">Artezão</option>
        <option value="Literatura">Literatura</option>
        </select>

        <label for="">Escolhe o Tipo de Arquivo</label>

        <select name="arquivo" id="tipo-obra" class="conteiner-input">
        <option>Formato</option>
        <option value="Obra Plastica">Imagem</option>
        <option value="Artezao">Video</option>
        </select>

        <label for="">Selecione o Arquivo</label>
        <input type="file" name="txtFoto" class="conteiner-input">
    
        <label for="">Autor</label>
        <input type="number" name="txtAutor" class="conteiner-input">
        <label for="">Foto</label>
        <input type="number" name="txt_foto" class="conteiner-input">

        <label for="">Museu</label>
        <input type="number" name="txtMuseu" class="conteiner-input">



        <label for="">Ano</label>
        <input type="date" name="txt_ano" class="conteiner-input">
        <label for="">Descrição</label>
        <textarea name="txtDescricao" id="" cols="20" rows="8" class="conteiner-input"></textarea>

        
        <input type="submit" value="Inserir" name="btn_inserir" class="btn">
        <input type="button" value="Ver" class="btn" id="ver_dados">


        </form>

    </section>
    <section class="tabela">
   
        <h1> DADOS DA TABELA OBRA</h1>
        
        <table>
       
            <thead>
            <tr>
            <th>Id</th>
            <th>Titulo</th>
            <th>Tipo de Obra</th>
            <th>Arquivo</th>
            <th>Formato Arquivo</th>
            <th>Descricao</th>
            <th>Ano</th>
            <th>Artista</th>
            <th>Museu</th>
            <th>Atualizar</th>
            <th>Deletar</th>
            </tr>
        </thead>
        <?php 
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)):
    ?>
        <tbody>
        <tr>
        <td> <?php echo $row ['id']; ?></td>
        <td> <?php echo $row ['titulo']; ?></td>
        <td><?php echo $row ['tipo']; ?></td>
        <td><?php echo $row ['formato']; ?></td>
        <td><?php echo $row ['descricao']; ?></td>
        <td><?php echo $row ['ano']; ?></td>
        <td><?php echo $row ['id_artista']; ?></td>
        <td><?php echo $row ['id_museu']; ?></td>
        <td><?php echo $row ['fotos_id']; ?></td>
        <td><button>Editar</button></td>
        <td><button>Eliminar</button></td>
        </tr>
        <tr>
        </tbody>
        <?php endwhile;?>

        </table>
        <div id="Form">
        <input type="button" value="Voltar" class="btn" id="btn-voltar">
        </div>
        

    </section>
    </div>
    
<script src="script.js"></script>
    </main>
    
</body>
</html>