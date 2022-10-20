<?php
    require_once 'prof.php';
    $p = new prof;

?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Professor</title>
	<link rel="stylesheet" type="text/css" href="Loginstyle.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet"> 
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
</head>
<body>
	<img class="wave" src="wave.png">
	<div class="container">
		<div class="img">
			<img src="professor.png">
		</div>
		<div class="login-content">
			<form method="POST">

				<img src="logo2.png">
				<h2 class="title">LOGIN PROFESSOR</h2>

           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Email</h5>
           		   		<input name="email" type="text" class="input">
           		   </div>
           		</div>


           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Senha</h5>
           		    	<input name="senha" type="password" class="input">
            	   </div>
            	</div>


            	<a href="#">Esqueceu sua senha?</a>
				<br>


				<input type="submit" value="Login" class="btn1">
				<a class="btn1" href="CadastroProf.php"><center>Cadastrar</center></a>

                <br>
				<a href="LoginAluno.php">Logar como aluno</a>

            </form>
        </div>
    </div>
    <script type="text/javascript" src="LoginAluno.js"></script>


	<?php
if(isset($_POST['email']))
{
    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);
    //verifica se esta preenchido
    if(!empty($email) && !empty($senha))
    {
        $p->conectarp("epiz_32595112_apoioaoprofessor", "sql104.epizy.com", "epiz_32595112", "ybrSiKJcKpnAnFs");

        if($p->logarp($email, $senha))
        {
            header("location: HomeProf.php");
        }
        else{
            echo"Email e/ou senha invalidos!";
        }
    }
    else{
        echo"Preencha todos os campos!";
    }


}
?>
</body>
</html>
