<?php 

class Usuarios
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

    public function cadastrar($nome, $email, $senha)
    {
        //verificar se o email já existe
        $cmd = $this->pdo->prepare("SELECT id FROM usuarios WHERE email = :email");
        $cmd->bindValue(":email", $email);
        $cmd->execute();

        if($cmd->rowCount()> 0)//veio um id
        {
            return false;
        } else {
            //cadastrar
            $cmd = $this->pdo->prepare("INSERT INTO usuarios (nome, email, senha) values(:n, :e, :s)");
            $cmd->bindValue(":n", $nome);
            $cmd->bindValue(":e", $email);
            $cmd->bindValue(":s", md5($senha));
            $cmd->execute();
            return true;

        }
    }

    public function entrar($email, $senha)
    {
        $cmd = $this->pdo->prepare("SELECT * FROM usuarios WHERE email = :e AND senha = :s");
        $cmd->bindValue(":e", $email);
        $cmd->bindValue(":s", md5($senha));
        $cmd->execute();

        if($cmd->rowCount() > 0) //se foi encontrado o email e senha
        {
            $dados = $cmd->fetch();
            session_start();
            
            if($dados['id'] == 1)
            {
                //usuario administrador
                $_SESSION['id_master'] = 1;
            } else {
                $_SESSION['id_usuario'] = $dados['id'];
            }
            return true;
        }else{
            return false;
        }
    }

    public function buscarDadosUser($id)
    {
        $cmd = $this->pdo->prepare("SELECT * FROM usuarios WHERE id = :id");
        $cmd->bindValue(":id", $id);
        $cmd->execute();

        $dados = $cmd->fetch();
        return $dados;
    }

    public function buscarTodosUsuarios()
    {
        $cmd = $this->pdo->prepare("SELECT usuarios.id, usuarios.nome, usuarios.email, COUNT(comentarios.id) as 'quantidade'
        from usuarios
        LEFT JOIN comentarios
        ON usuarios.id = comentarios.fk_id_usuario
        GROUP BY usuarios.id");

        $cmd->execute();
        $dados = $cmd->fetchAll(PDO::FETCH_ASSOC);
        return $dados;
    }
}

;?>