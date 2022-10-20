<?php
    session_start();
    if(!isset($_SESSION['id_usuario']))
    {
        header("location: LoginAluno.php");
        exit;
    }
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Instascan</title>
    <script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js" ></script>	
  </head>
  <body>
    <video id="preview"></video>
    <script>
        let scanner = new Instascan.Scanner(
            {
                video: document.getElementById('preview')
            }
        );

        scanner.addListener('scan', function(content) {
            alert('Escaneou o conteudo: ' + content);
            window.open(content, "_blank");
        });

        Instascan.Camera.getCameras().then(cameras => 
        {
            if(cameras.length > 0){
                scanner.start(cameras[0]);
            } else {
                console.error("Não existe câmera no dispositivo!");
            }
        });
        
    </script>

        <a href="ConfirmaPresenca.php"> <i class="fi-rr-apps"></i><span>Presença</span> </a>

 </body>
</html>