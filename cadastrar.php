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
        <input type="text" name="nome" id="nome" autocomplete="off" maxlength="40" required>
        <label for="email">Email</label>
        <input type="email" name="email" autocomplete="off" id="email" maxlength="40" required><!-- autocomplete="off" para desligar o autocompletar -->
        <label for="senha">Senha</label>
        <input type="password" name="senha" id="senha" required>
        <label for="confSenha">Confirmar senha</label>
        <input type="password" name="confSenha" id="confSenha" required>
        <input type="submit" value="Cadastrar">
        <a href="entrar.php">Já tem uma conta? Entre!</a>
    </form>
</body>
</html>

<?php 
if(isset($_POST['nome']))
{
    $nome = htmlentities(addslashes($_POST['nome']));
    $email = htmlentities(addslashes($_POST['email']));
    $senha = htmlentities(addslashes($_POST['senha']));
    $confSenha = htmlentities(addslashes($_POST['confSenha']));

    require_once 'Classes/Usuarios.php';

    if($senha == $confSenha)
    {
        $use = new Usuarios("site_comentarios", "localhost","root", "" );
        if($use->cadastrar($nome, $email, $senha))
        { ?>
             <div class="msgOk">
                 Cadastro feito com sucesso!
                 <a href="entrar.php">Clique aqui para acessar sua conta!</a>
            
            </div>
<?php       } else { ?>
             <div class="msgErro">O email já existe!</div>
<?php        } ?>
<?php    } else { ?>
           <div class="msgErro">As duas senhas não conferem!</div>
<?php    } 
}




; ?>
