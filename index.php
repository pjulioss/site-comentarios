<?php 
    require_once "Classes/Usuarios.php";
    session_start();
    if(isset($_SESSION['id_usuario']))
    {
        // $use = new Usuarios("site_comentarios", "localhost","root", "" ); //instanciando objeto
        $use = new Usuarios("epiz_25033836_sitecomentarios", "sql200.epizy.com", "epiz_25033836", "QBZbj5b5sF5T");
        $infoUsuario = $use->buscarDadosUser($_SESSION['id_usuario']);
        
    } elseif(isset($_SESSION['id_master'])) 
    {
        // $use = new Usuarios("site_comentarios", "localhost","root", "" ); //instanciando objeto
        $use = new Usuarios("epiz_25033836_sitecomentarios", "sql200.epizy.com", "epiz_25033836", "QBZbj5b5sF5T");
        $infoUsuario = $use->buscarDadosUser($_SESSION['id_master']);

    }


;?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Sistema de Comentários</title>
</head>
<body>
    <nav>
        <ul>
            <?php 
                if(isset($_SESSION['id_master']))
                { ?>
                    <li><a href="dados.php">Dados</a></li>
            <?php }; ?>
            
            <li><a href="discussao.php">Discursões</a></li>
            <?php 
                if(isset($infoUsuario))
                { ?>
                    <li><a href="sair.php">Sair</a></li>
               <?php } else { ?>
                    <li><a href="entrar.php">Entrar</a></li>
                <?php } ?>

        </ul>

    </nav>
    <!-- Sessões -->
    <?php 
    if(isset($_SESSION['id_master'])|| isset($_SESSION['id_usuario']))
    { ?>
        <h2>
            <?= "Seja bem vindo(a), " . $infoUsuario['nome'] ; ?>
        </h2>
        <?php }

; ?>
    <h3>Conteúdo Qualquer</h3>
    

</body>
</html>

