

<?php

# Conexao com a BD
require "bdconexao.php";

# Buscar todos os posts
$sql = 'SELECT 
agendamento.id AS agendamento_id,
agendamento.data_agenda,
agendamento.hora,
usuario.nome AS usuario_nome,
usuario.email AS usuario_email,
museu.nome AS museu_nome
FROM 
agendamento
INNER JOIN 
usuario ON agendamento.id_usuario = usuario.id
INNER JOIN 
museu ON agendamento.id_museu = museu.id;';
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
    <title>Agendamentos</title>
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
                        <a href="Exposicao-cad.php">Exposição</a>
                    </li>
                    <li>
                        <a href="Obra.php">Obra de Arte</a>
                    </li>
                    <li>
                        <a href="RE.php">Recursos</a>
                    </li>
                    <li>
                        <a href="Consultar-Visitante.php">Usuarios</a>
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
   

   <H1> DADOS DE TODOS OS AGENDAMENTOS</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Data da Agenda</th>
                <th>Hora</th>
                <th>Nome do Usuario</th>
                <th>Museu</th>
                <th>Atualizar</th>
                <th>Deletar</th>
            </tr>
        </thead>
        <?php        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)):
        ?>
       <tbody>
            <tr>
                <td><?php echo $row['agendamento_id']; ?></td>
                <td><?php echo $row['data_agenda']; ?></td>
                <td><?php echo $row['hora']; ?></td>
                <td><?php echo $row['usuario_email']; ?></td>
                <td><?php echo $row['museu_nome']; ?></td>
                <td><button>Editar</button></td>
                <td><button>Eliminar</button></td>
            </tr>
       </tbody>
       <?php endwhile;?>
    </table>
    
</body>
</html>