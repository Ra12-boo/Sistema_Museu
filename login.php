

<?php

   
    // Verifica se o formulário foi enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtém o email e a senha do formulário
        require "bdconexao.php";
        
        $email = $_POST['email'];
        $senha = $_POST['senha'];
       
        // Consulta SQL para verificar as credenciais
        $sql = 'SELECT * FROM usuario WHERE email = :email';
        $stmt = $conexao->prepare($sql);
        $stmt->execute(['email' => $email]);
        $usuario = $stmt->fetch();
    
        if ($usuario && password_verify($senha, $usuario['senha'])) {
            // Credenciais corretas
            echo "Login bem-sucedido!";
    
            // Redirecionar para index.php após 2 segundos
            header("refresh:2;url=index.php");
            exit;
        } else {
            // Credenciais incorretas
            echo "Email ou senha incorretos.";
        }
    }
    
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Login</title>
</head>
<body>

    <main class="login">
    <div id="form-cadastro">
    <h1>Museu Uige</h1>
<form action="login.php" method="post" enctype="multipart/form-data">
    <div class="container-input">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="exemplo@gmail.com">
    </div>
    <div class="container-input">
        <label for="senha">Senha</label>
        <input type="password" id="senha" name="senha" require>
    </div>
    <button type="submit" class="btn">Entar</button>
</form>
<p>Não tem uma conta? <a href="register.php">Registre-se aqui</a></p>
</div>
</main>
</body>
</html>