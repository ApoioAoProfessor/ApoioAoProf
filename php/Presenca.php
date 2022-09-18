<?php
include_once 'Conecta.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title> Listar Contatos</title>
    </head>
    <body>
        <h1>Listar Mensagem</h1>
        <?php
        //SQL para selecionar os registros
        $result_msg_cont = "SELECT * FROM aluno ORDER BY RA ASC";

        //Seleciona os registros
        $resultado_msg_cont = $conn->prepare($result_msg_cont);
        $resultado_msg_cont->execute();

        while ($row_msg_cont = $resultado_msg_cont->fetch(PDO::FETCH_ASSOC)) {
            echo "RA: " . $row_msg_cont['RA'] . "<br>";
            echo "Nome: " . $row_msg_cont['Nome'] . "<br>";
            echo "E-mail: " . $row_msg_cont['Email'] . "<br>";
            echo "Presnte: " . $row_msg_cont['Presente'] . "<br><hr>";
        }
        ?>
    </body>
</html>
