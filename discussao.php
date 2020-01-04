<?php 
    session_start();
    require_once "Classes/Comentarios.php";
    $com = new Comentarios("site_comentarios", "localhost","root", "" ); //instanciando objeto
    $coments = $com->buscarComentarios();
; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/discussao.css">
    <title>Sistema de comentários</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="index.php">Inicio</a></li>
            <?php
                if(isset($_SESSION['id_master']))
                { ?>
                    <li><a href="dados.php">Dados</a></li>
               <?php }
                if(isset($_SESSION['id_usuario']) || isset($_SESSION['id_master']))
                { ?>
                    <li><a href="sair.php">Sair</a></li>
            <?php } else { ?>
                    <li><a href="entrar.php">Entrar</a></li>
            <?php } ;?>
        </ul>
    </nav>

    <div class="container">
        <section>
            <h1>Guia Definitivo: Como criar um blog e ganhar dinheiro com ele</h1>
            <img src="img/blog.jpg" alt="blog">

            <p class="txt">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repudiandae, incidunt.</p>
            <p class="txt">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Placeat exercitationem quaerat laborum nihil minus aliquam obcaecati quae assumenda quia similique. Molestiae blanditiis accusantium autem? Totam voluptates voluptas rerum officiis fuga.</p>
            <p class="txt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem neque ratione quo quaerat possimus corrupti provident amet aliquid, temporibus officiis.</p>
            <p class="txt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem asperiores ex doloribus nihil non sequi adipisci expedita corrupti dolores facilis enim doloremque, iure magnam porro alias ipsum illo labore minus maiores laborum impedit, deleniti quidem? Iste labore quaerat pariatur sapiente, quam maxime distinctio ullam, fuga consequuntur quis similique soluta asperiores?</p>

            <!-- Area dos comentarios -->

            <h2>Deixe seu comentário</h2>
            <form method="POST">
                <img src="img/perfil.png" alt="perfil">
                <textarea name="texto" placeholder="Participe da discursão..." maxlength="400"></textarea>
                <input type="submit" value="Comentar">
            </form>

            <!-- Mostrando os comentarios do banco de dados -->
            <?php 
                if(count($coments)> 0)
                {
                    foreach($coments as $value)
                    { ?>
                        <div class="area-comentario">
                            <img src="img/perfil.png">
                            <h3> <?=$value['nome_pessoa'] ?> </h3>
                            <h4> 
                                <?php 
                                    $data = new DateTime($value['dia']);
                                    echo $data->format('d/m/Y');
                                    echo " - ";
                                    echo $value['horario'];
                                ?><a href="#"> Excluir</a>
                            </h4>
                            <p><?= $value['comentarios']?></p>
                        </div> 
                <?php    }
                } else {
                    echo "Sem comentários";
                }
            ; ?>
            

        </section>

        <section id="conteudo1">
            <div>
                <img src="img/imagem.jpg" alt="">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui facere alias unde consequatur assumenda vel aspernatur, et excepturi laboriosam atque suscipit harum deserunt blanditiis eveniet repellat tenetur incidunt sequi soluta.</p>
            </div>
        </section>

        <section id="conteudo2">
            <div>
                <h5>Titulo Qualquer</h5>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magnam rerum voluptatibus modi, dolore nam officiis velit vero sunt vel culpa quas reiciendis hic sit optio accusamus qui quia neque provident, eaque dolores impedit alias maiores?</p>

            </div>
        </section>
    </div><!-- fim do container -->
</body>
</html>