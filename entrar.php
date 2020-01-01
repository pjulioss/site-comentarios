<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/entrar.css">
    <title>Entrar</title>
</head>
<body>
    <span>Sistema de Login</span>
    <form method="POST">
        <h1>Acesse sua conta</h1>
        <img src="img/envelope.png" alt="">
        <input type="email" name="email" autocomplete="off" placeholder="Email"><!-- autocomplete="off" para desligar o autocompletar -->
        <img src="img/cadeado.png" alt="">
        <input type="password" name="senha" placeholder="Senha">
        <input type="submit" value="Entrar">
        <a href="cadastrar.php">Não tem uma conta? Cadastre-se!</a>
    </form>
</body>
</html>