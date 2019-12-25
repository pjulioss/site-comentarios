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
            <li>
                <a href="index.php">Inicio</a>
            </li>
            <li>
                <a href="#">Entrar</a>
            </li>
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
                <textarea name="texto" placeholder="Participe da discursão..."></textarea>
                <input type="submit" value="Comentar">
            </form>
            <div class="area-comentario">
                <img src="img/perfil.png">
                <h3>Fulaninho</h3>
                <h4>Hora / Data <a href="#">Excluir</a></h4>
                <p>Comentario de Fulano</p>
            </div>
            <div class="area-comentario">
                <img src="img/perfil.png">
                <h3>Zezinho</h3>
                <h4>Hora / Data <a href="#">Excluir</a></h4>
                <p>Comentario de Zezinho</p>
            </div>
            <div class="area-comentario">
                <img src="img/perfil.png">
                <h3>Fofoquilda</h3>
                <h4>Hora / Data <a href="#">Excluir</a></h4>
                <p>Comentario de Fofoquilda</p>
            </div>
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