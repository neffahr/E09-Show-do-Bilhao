<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Cadastro</title>
</head>
<body>
    <div class="forms-wrapper">
        <div class="cadastro">
            <h1>Cadastro</h1>
            <form class="cadastro-form" method="POST" action="index.php">
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" class="form-field">
    
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-field">
    
                <label for="login">Login</label>
                <input type="text" name="login-nome" id="login" class="form-field">
    
                <label for="pwd">Senha</label>
                <input type="password" name="senha" id="pwd" class="form-field">
    
                <button type="submit" name="cadastro" class="form-btn">Cadastrar</button>
            </form>
        </div>
    </div>
</body>
</html>