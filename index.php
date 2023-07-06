<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Login</title>
</head>
<body>
    <div class="login">
        <h1>Login</h1>
        <form class="login-form" method="POST" action="perguntas.php">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" class="form-field">

            <label for="pwd">Senha</label>
            <input type="text" name="senha" id="pwd" class="form-field">

            <button type="submit" name="login" class="form-btn">Entrar</button>

            <p>Não está registrado? <a href="cadastro.php">Crie uma conta</a></p>
        </form>
    </div>
</body>
</html>