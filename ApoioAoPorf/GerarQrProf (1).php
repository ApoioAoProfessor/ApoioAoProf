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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QRCode</title>
</head>
<body>
    <h1>Crie seu QRCode</h1>
    <input disabled="" type=hidden value="http://apoioaoprofessor.epizy.com/ConfirmaPresenca.php"></input>
    <br>
    <button onclick="GerarQRCode()">Gerar QRCode</button>
    <br>
    <img id="QRCodeImage">
    <script src="QrProf.js"></script>



    

</body>
</html>

