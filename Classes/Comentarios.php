<?php 

class Comentarios
{
    private $pdo;

    public function __construct($dbname, $host, $usuario, $senha)
    {
        try {
            $this->pdo = new PDO("mysql:dbname=".$dbname.";host=".$host, $usuario, $senha);
        } catch (PDOException $e) {
            echo "Erro com banco de dados: " . $e->getMessage();
        } catch (Exception $e) {
            echo "Erro: " . $e->getMessage();
        }
    }

    public function buscarComentarios()
    {
        //consulta (select) com subconsulta
        $cmd = $this->pdo->prepare("SELECT *, (SELECT nome FROM usuarios WHERE id = fk_id_usuario) as nome_pessoa FROM comentarios ORDER BY dia DESC");
        $cmd->execute();
        $dados = $cmd->fetchAll(PDO::FETCH_ASSOC);
        return $dados;
        //id, comentario, dia, hora, (nome_pessoa)
    }

    public function excluirComentario($id_comentario, $id_usuario)
    {
        if($id_usuario == 1)
        {
            $cmd = $this->pdo->prepare("DELETE FROM comentarios WHERE id = :id_com");
            $cmd->bindValue(":id_com", $id_comentario);
            $cmd->execute();
        } else {
            $cmd = $this->pdo->prepare("SELECT FROM comentarios WHERE id = :id_com AND fk_id_usuario == :id_user");
            $cmd->bindValue(":id_com", $id_comentario);
            $cmd->bindValue(":id_user", $id_usuario);
            $cmd->execute();

        }
    }
}




