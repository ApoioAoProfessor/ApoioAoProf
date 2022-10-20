<?php
session_start();
ob_start();
if(!isset($_SESSION['id_usuario']))
    {
        header("location: LoginAluno.php");
        exit;
    }

    global $pdo;


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Presente</title>
</head>

<style>

    body{
        background-color:#fffde7;
    }

    .circles
    {
        border-radius: 50%;
        width: 30px;
        height: 30px;
        border:  5px solid;
        box-sizing: border-box;
        position: absolute;
    }
    .circle-orange
    {
        border-color: #fab846;
    }
    .circle-blue
    {
        border-color: #3594c5;
    }
    .circle-white
    {
        border-color: #fff;
    }

    @keyframes floating 
    {
        0%
        {
            top: 0px;
        }
        50%
        {
            top: -30px;
        }
        100%
        {
            top: 0px;
        }
    }
    @keyframes circles
    {
        0%
        {
            transform: scale(0.6);
            opacity: 0;
        }
        50%
        {
            transform: scale(1);
            opacity: 1;
        }
        100%
        {
            transform: scale(0.6);
            opacity: 0;
        }
    }
    .circles:nth-child(1)
    {
        animation: circles 2s ease-in-out infinite;
        top: 32%;
        left: 20%;
    }
    .circles:nth-child(2)
    {
        animation: circles 1s ease-in-out infinite;
        top: 5%;
        left: 10%;
    }
    .circles:nth-child(3)
    {
        animation: circles 3.2s ease-in-out infinite;
        top: 4%;
        left: 50%;
    }
    .circles:nth-child(4)
    {
        animation: circles 1s ease-in-out infinite;
        top: 63%;
        left: 10%;
    }
    .circles:nth-child(5)
    {
        animation: circles 4s ease-in-out infinite;
        top: 52%;
        left: 28%;
    }
    .circles:nth-child(6)
    {
        animation: circles 2.6s ease-in-out infinite;
        top: 79%;
        left: 73%;
    }
    .circles:nth-child(7)
    {
        animation: circles 3s ease-in-out infinite;
        top: 42%;
        left: 94%;
    }
    .circles:nth-child(8)
    {
        animation: circles 2.1s ease-in-out infinite;
        top: 12%;
        left: 83%;
    }
    .circles:nth-child(9)
    {
        animation: circles 3.8s ease-in-out infinite;
        top: 35%;
        left: 75%;
    }


</style>


<body>
    <div class="container">

        <?php

        if (isset($_SESSION['id_usuario'])) {
            
            echo "<h1>Perfil</h1>";

            include_once "conexao.php";

            $query_usuario = "SELECT id_usuario, nome, email, ra FROM usuarios WHERE id_usuario=:id LIMIT 1";
            $result_usuario = $conn->prepare($query_usuario);
            $result_usuario->bindParam(':id', $_SESSION['id_usuario'], PDO::PARAM_INT);
            $result_usuario->execute();

            if (($result_usuario) and ($result_usuario->rowCount() != 0)) {
                $row_usuario = $result_usuario->fetch(PDO::FETCH_ASSOC);
                extract($row_usuario);

                echo "ID: $id_usuario <br>";
                echo "Nome: $nome <br>";
                echo "E-mail: $email <br>";
                echo "RA: $ra <br><br>";
            } else {
                header("Location: HomeAluno.php");
            }
        } else {
            header("Location: LoginAluno.php");
        }
        ?>
       
       <form method="POST">
            <div class="field is-grouped">
				<div class="control">
                <input type="submit" value="Confirmar Presença" name="cadastrar"/>
				</div>
			</div>
        </form>



    <?php
    
        if (isset($_POST['cadastrar'])) {
        require "conexao.php";
        $Presente = 1;
        $alterando = "update usuarios set Presente = '$Presente' where id_usuario = '$id_usuario' ";
        $resultado = mysqli_query($conexao, $alterando);

        if ($resultado == true) {
            echo "<center>Registro alterado";
            sleep(5);
            header("Location: HomeAluno.php");
        } else {
            echo "<center>Ocorreu um erro ao tentar alterar o registro";
        }
    }
       
    ?>













<div class="circ">
        <div class="circles circle-orange"></div>
        <div class="circles circle-orange"></div>
        <div class="circles circle-orange"></div>
        <div class="circles circle-blue"></div>
        <div class="circles circle-blue"></div>
        <div class="circles circle-blue"></div>
        <div class="circles circle-white"></div>
        <div class="circles circle-white"></div>
        <div class="circles circle-white"></div>
    </div>
</body>

</html>