<?php
    session_start();
    if(!isset($_SESSION['id_usuario']))
    {
        header("location: LoginAluno.php");
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Menustyle.css">
    <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css">
    <title>ApoioAoProfessor</title>
    


</head>
<body>
    <aside class="">
        <div class="dots">
            <div class="dot_1"></div>
            <div class="dot_2"></div>
            <div class="dot_3"></div>
        </div>

        <div class="head_section">
            <div class="search_bar">
                <div class="search-box">
                    <input type="text" placeholder=" "/>
                    <span></span> 
                </div>               
            </div>
        </div>

    
            <div class="nav_links">
                <ul>
                    <li> <a href="EscanearALuno.php"> <i class="fi-rr-apps"></i><span>Presença</span> </a></li>
                    <li> <a href="#"> <i class="fi-rr-browser"></i><span>Projetos</span> </a></li>
                    <li> <a href="#"> <i class="fi-rr-comment-alt"></i><span>Calendario</span> </a></li>
                    <li> <a href="#"> <i class="fi-rr-document-signed"></i><span>Perfil</span> </a></li>
                    <li> <a href="Sair.php"> <i class="fi-rr-document-signed"></i><span>Sair</span> </a></li>
                    
                </ul>
            </div>
    </aside>
    
    <script src="Home.js"></script>



               
 

</body>
</html>