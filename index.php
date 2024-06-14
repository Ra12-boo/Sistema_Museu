<?php

# Conexao com a BD
require "bdconexao.php";
# Buscar todos os posts

$sql = 'SELECT nome FROM museu';
$stmt = $conexao->query($sql);

// Verificar se há resultados
if ($stmt->rowCount() > 0) {
    // Percorrer os resultados
    while ($row = $stmt->fetch()) {
        // Outros campos da tabela museu
    }
} else {
    echo 'Nenhum museu encontrado.';
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>index</title>
</head>
<body>
    <header>
        <div class="barra-top">
            <samp>Desconto de 10% em agendamento online-código Museu Uige</samp>
        </div>
        <nav class="nav">
            <div class="div-imag">
            <span class="material-symbols-outlined"></span>
               
            <p>  
                Museu do Uige
                </p>
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
                        <a href="Obra.php">Cadastrar</a>
                    </li>
                    <li>
                        <a href="sobre.php">Sobre</a>
                    </li>
                    <li>
                        <a href="login.php">Login</a>
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


    <main class="corpo">
   
        <div class="div-cima">
         <h3>O museu é uma casa de criação onde se preserva a memória de uma cidade, de um país, 
            de uma pessoa, enfim é o lugar de histórias interessantes que nos faz viajar no tempo. 
            Mas, apesar de contar histórias que já aconteceram, o Museu é o lugar para pensarmos 
            o presente e refletirmos sobre o nosso tempo</h3> 
        </div>
        <section class="for-agenda">

        <div class="agendamento">
            <h1>Não exite!</h1>
            <h1>Os museus asseguram a preservação e conservação da herança cultural e natural da 
                comunidade, servem de foco cultural e de centro de pesquisa, provendo oportunidades de 
                envolvimento dacomunidade no seu funcionamento, como ainda ensinam Timoty</h1> 
        </div>

        <script src="script.js"></script>
    </main>

    <footer id="rodape">

        <div>
            <p>Contactos</p>
            <p>Email: museuuige@gamil.com</p>
            <p>Tell: 930310962</p>
            <p>Todos os direitos reservados</p>
        </div>
    </footer>
                     
   <!-- <div class="form">
                <form action="" method="post">
                <label for="">Visitante</label>
                <label for="">Tipo de Obra</label>
                
            <select name="txt_nome-vistante" id="tipo-obra" class="conteiner-input">

                <option>Nome do Visitante</option>
                <option value="Obra Plastica">Obra Plastica</option>
                 <option value="Artezao">Artezão</option>
                <option value="Literatura">Literatura</option>
            </select>
                <label for="">Selecione o Data</label>
                <input type="date" name="txt_data-agenda" class="conteiner-input">
                <label for="">Selecione a Hora</label>
                <input type="time" name="txt_hora-agenda" class="conteiner-input">

                <button type="submit" nome="salvar-agenda">Salavr</button>
                <button nome="voltar" id="voltar-agenda">Voltar</button>

                </form>
        </div>
    </footer><!-->

</body>
</html>