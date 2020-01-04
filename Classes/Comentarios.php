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
}




