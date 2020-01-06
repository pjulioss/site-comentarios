<?php 
//Caso não exista a sessão do administrador, redirecione para a pagina principal
session_start();
if(!$_SESSION['id_master'])
{
    header("location:index.php");
}

require_once "Classes/Usuarios.php";

$use = new Usuarios("site_comentarios", "localhost","root", "" );
$dados = $use->buscarTodosUsuarios();

; ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/dados.css">
    <title>Dados</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="index.php">Inicio</a> </li>
            <li><a href="discussao.php">Discussão</a></li>
            <li><a href="sair.php">Sair</a></li>
        </ul>
    </nav>
    <table>
        <tr id='titulo'>
            <td>ID</td>
            <td>Nome</td>
            <td>Email</td>
            <td>Comentários</td>
        </tr>
    <?php 
        if(count($dados)> 0)
        {
            foreach($dados as $value)
            { ?>
                <tr>
                    <td><?= $value['id']?></td>
                    <td><?= $value['nome']?></td>
                    <td><?= $value['email']?></td>
                    <td><?= $value['quantidade']?></td>
                </tr>
    <?php  }
        } else {
            echo "Ainda não há usuários cadastrados!";
        }
    ; ?>
        


    </table>
</body>
</html>