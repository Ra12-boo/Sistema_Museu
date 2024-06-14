<?php
    if (isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['senha'])) {
    require "bdconexao.php";
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);


    $sql = "INSERT INTO usuario (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

    if ($conexao->query($sql) === TRUE) {
        echo "Usuário registrado com sucesso!";
    } else {
        echo "Erro: " . $sql . "<br>" . $conexao->error;
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Registro</title>
</head>
<body>

<main class="login">
    <div id="form-cadastro">

<h1>Regista-se</h1>

<form action="register.php" method="post">

    <div class="container-input">
        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome" placeholder="Digite o nome" require>
    </div>

    <div class="container-input">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="exemplo@gmail.com" require>
    </div>
    <div class="container-input">
        <label for="senha">Senha</label>
        <input type="password" id="senha" name="senha" require>
    </div>

    <button type="submit" class="btn">Salvar</button>
    </form>
    <p>Já tem uma conta? <a href="login.php">Faça login aqui</a></p>
    <p><?php echo "Usuário registrado com sucesso!";?></p>
    </div>
    </main>

    
</body>
</html>
