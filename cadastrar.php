<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/cadastrar.css">
    <title>Cadastrar</title>
</head>
<body>
    <form method="POST">
        <h1>Cadastre sua conta</h1>
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" autocomplete="off">
        <label for="email">Email</label>
        <input type="email" name="email" autocomplete="off" id="email"><!-- autocomplete="off" para desligar o autocompletar -->
        <label for="senha">Senha</label>
        <input type="password" name="senha" id="senha">
        <label for="confSenha">Confirmar senha</label>
        <input type="password" name="confSenha" id="confSenha">
        <input type="submit" value="Cadastrar">
        <a href="entrar.php">Já tem uma conta? Entre!</a>
    </form>
</body>
</html>