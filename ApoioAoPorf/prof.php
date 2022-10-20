<?php


Class prof
{
    private $pdo;
    public $msgErro = "";

    public function conectarP($nome, $host, $usuario, $senha)
    {
        global $pdo;
        try
        {
        $pdo = new PDO("mysql:dbname=".$nome.";host=".$host,$usuario,$senha);
        } catch (PDOException $e) {
            $msgErro = $e->getMessage();
        }

    }


    public function cadastrarP($nome, $email, $codigo, $senha)
    {
        global $pdo;
        //verificar se ja esta cadastrado
        $sql = $pdo->prepare("SELECT id_usuario FROM Professor
            WHERE email = :e");
        $sql->bindValue(":e",$email);
        $sql->execute(); 
        if($sql->rowCount() > 0)
        {
            return false; //ja esta cadastrado
        }
        else{
            //caso nao, cadastrar
            $sql = $pdo->prepare("INSERT INTO Professor (nome, codigo, email, senha) 
                Values (:n, :c, :e, :s)");
            $sql->bindValue(":n",$nome);
            $sql->bindValue(":c",$codigo);
            $sql->bindValue(":e",$email);
            $sql->bindValue(":s",md5($senha));
            $sql->execute();
            return true; 

        }

        
    }


    public function logarP($email, $senha)
    {
        global $pdo;

        //verifica se o email e senha estao cadastrados, se sim
        $sql = $pdo->prepare("SELECT id_usuario FROM Professor
            WHERE email = :e AND senha = :s");
        $sql->bindValue(":e",$email);
        $sql->bindValue(":s",md5($senha));
        $sql->execute(); 
        if($sql->rowCount() > 0)
        {
            //entrar no sistema
            $dado = $sql->fetch();
            session_start();
            $_SESSION['id_usuario'] = $dado['id_usuario'];
            return true; //login com sucesso
        }
        else
        {
            return false; //nao foi possivel logar
        }


    }

}


function logout() {
    // Inicia a sessão
    session_start();
    
    // Destrói a sessão
    $_SESSION = array();
    session_destroy();
    
    // Redireciona para o login.php
    header('location: LoginProf.php');
    exit;
}

?>