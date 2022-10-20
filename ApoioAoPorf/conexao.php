<?php

$host = "sql104.epizy.com";
$user = "epiz_32595112";
$pass = "ybrSiKJcKpnAnFs";
$dbname = "epiz_32595112_apoioaoprofessor";

try{
    //Conexao com a porta
    //$conn = new PDO("mysql:host=$host;port=$port;dbname=" . $dbname, $user, $pass);
    
    //Conexao sem a porta
    $conn = new PDO("mysql:host=$host;dbname=" . $dbname, $user, $pass);

    //echo "Conexão com banco de dados realizado com sucesso.";
}catch(PDOException $erro){
    echo "Erro: Conexão com banco de dados não realizado com sucesso. Erro gerando " . $erro->getMessage();
}

$conexao = mysqli_connect($host,$user,$pass, $dbname);
If ($conexao == FALSE)

{
    echo "Nao foi possivel conectar ao Banco de Dados.";
    exit;
}