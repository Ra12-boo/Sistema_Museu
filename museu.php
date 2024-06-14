<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Museu</title>
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
                        <span class="material-symbols-outlined">account_circle</span></a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <main>

    <div class="conteiner">

<div class="Cadastrar-Formulario">
    <form action="grava-museu.php" method="post" id="Form">

    <h1>Cadastra aqui um Museu</h1>

    <label for="txt_nome">Nome</label>
    <input type="text" name="txt_nome" class="conteiner-input">

    <label for="">Pais</label>
    <input type="text" name="txtPais" class="conteiner-input">

    <label for="">Provincia</label>
    <input type="text" name="txtProvincia" class="conteiner-input">

    <label for="">Municipio</label>
    <input type="text" name="txtMunicipio" class="conteiner-input">

    <label for="">Contacto</label>
    <input type="tel" name="txtContacto" class="conteiner-input">

    <label for="">foto</label>
    <input type="file" name="txtFoto" class="conteiner-input">



<input type="submit" value="Inserir" name="btn_inserir" class="btn">


</form>
</div>
</body>
</html>