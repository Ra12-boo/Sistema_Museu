<?php

# Conexao com a BD
require "bdconexao.php";

# Buscar todos os posts
$sql = 'SELECT * FROM artista';
$stmt= $conexao->query($sql);
//$stmt=$stmt->fetchAll();
# Listar os Posts
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Artista</title>
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
                        <a href="Obra.php">Obra de Arte</a>
                    </li>
                    <li>
                        <a href="RE.php">Recursos</a>
                    </li>
                    <li>
                        <a href="Consultar-Agenda.php">Agendamentos</a>
                    </li>
                    <li>
                        <a href="Consultar-Visitante.php">Visitante</a>
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
        <div  class="conteudo">
    <section class="Cadastrar-Formulario show">

        <form action="gravar-artista.php" method="post" id="Form">

<h1>Cadastra aqui um Artista</h1>

<label for="txt_nome">Nome</label>
<input type="text" name="txt_nome" class="conteiner-input">

<label for="txt_nacionalidade">Nacionalidade</label>
<input type="text" name="txt_nacionalidade" class="conteiner-input">


<label for="txt_sexo">Sexo</label>
<select name="txt_sexo" id="id_sexo" class="conteiner-input">

<option> Seleciona o Sexo</option>
<option value="Masculino">Masculino</option>
<option value="Femenino">Femenino</option>
</select>

<select name="txt_artista" id="id_artista" class="conteiner-input">

<option> Tipo de Artista</option>
<option value="Plastico">Plastico</option>
<option value="Artezão">Artezão</option>
</select>
<label for="">Foto</label>
<input type="number" name="txt_foto" class="conteiner-input">

<label for="txt_biografia">Biografia</label>
<textarea name="txt_biografia" id="" cols="20" rows="8" class="conteiner-input"></textarea>

<input type="submit" value="Inserir" name="btn_inserir" class="btn">
 <input type="button" value="Ver" class="btn" id="ver_dados">


    </form>

    </section>

    

    <section class="tabela">
    <h1>DADOS DE TODOS OS VISITANTES</h1>

        
<table>
        <thead>
    <tr>
    <th>ID</th>
    <th>nome</th>
    <th>nacionalidade</th>
    <th>sexo</th>
    <th>foto</th>
    <th>Tipo Artista</th>
    <th>Atualizar</th>
    <th>Deletar</th>
    </tr>
    </thead>
    <?php 
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)):
    ?>
    <tbody>
        <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['nome']; ?></td>
        <td><?php echo $row['nacionalidade']; ?></td>
        <td><?php echo $row['biografia']; ?></td>
        <td><?php echo $row['fotos_id']; ?></td>
        <td><?php echo $row['tipo_artista']; ?></td>
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