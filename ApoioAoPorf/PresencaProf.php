<?php
    session_start();
    if(!isset($_SESSION['id_usuario']))
    {
        header("location: LoginProf.php");
        exit;
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="refresh" content="5">
        <title> Listar Contatos</title>
    </head>
    <body>
        <h1>Presente</h1>
        <?php
        
            
            $MySQLi = new MySQLi( 'sql104.epizy.com', 'epiz_32595112', 'ybrSiKJcKpnAnFs', 'epiz_32595112_apoioaoprofessor' );
            $query = "SELECT nome, ra FROM `usuarios` WHERE Presente=1;";
            $result = $MySQLi->query($query);
            while($fetch = $result->fetch_assoc()) {
                echo "<p>";
                foreach ($fetch as $field => $value) {
                    echo $field . ' : ' .  $value . ' <br> ';
                }
                echo "</p>";
            }
            ?>

            <h1>Faltas</h1>

        <?php
        
           

                $cx = mysqli_connect("sql104.epizy.com", "epiz_32595112", "ybrSiKJcKpnAnFs");
                $db = mysqli_select_db($cx, "epiz_32595112_apoioaoprofessor");


                $sql = mysqli_query($cx, "SELECT nome, ra FROM usuarios WHERE Presente=0") or die( 
                    mysqli_error($cx) //caso haja um erro na consulta 
                  );
                  
                  //pecorrendo os registros da consulta. 
                  while($aux = mysqli_fetch_assoc($sql)) { 
                    echo "-----------------------------------------<br />"; 
                    echo "Nome:".$aux["nome"]."<br />"; 
                    echo "RA:" .$aux["ra"]."<br />";

                ?> 

                    <form method="POST">
                        <div class="field is-grouped">
                            <div class="control">
                            <input type="submit" value="Presenca manual <?php echo "do ".$aux["nome"]." "  ?>" name="Presente"/>
                            </div>
                        </div>
                    </form>

               
                <?php
                    echo "-----------------------------------------<br />"; 
                        }   
                   
                ?>  

        <?php
            //Mudar o name do botao
            if (isset($_POST['presente'])) {
                require "conexao.php";
                $alterando = "update usuarios set Presente = '1' ";
                $resultado = mysqli_query($conexao, $alterando);
        
                if ($resultado == true) {
                    echo "<center>Registro alterado";
                } else {
                    echo "<center>Ocorreu um erro ao tentar alterar o registro";
                }
        }
        
        ?>

                

        <form method="POST">
            <div class="field is-grouped">
				<div class="control">
                <input type="submit" value="Encerrar chamda" name="encerrar"/>
				</div>
			</div>
        </form>


        <?php
    
        if (isset($_POST['encerrar'])) {
        require "conexao.php";
        $Presente = 1;
        $alterando = "update usuarios set Presente = '0' ";
        $resultado = mysqli_query($conexao, $alterando);

        if ($resultado == true) {
            echo "<center>Registro alterado";
        } else {
            echo "<center>Ocorreu um erro ao tentar alterar o registro";
        }
    }
       
    ?>




    </body>
</html>
