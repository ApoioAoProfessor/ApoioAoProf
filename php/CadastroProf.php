<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bulma.min.css">
    <title>Cadastro</title>
</head>
<body>
    
    <section class="section">
		<div class="container">
			<div class="columns is-centered">
				<div class="column is-half">


					<h1 class="title has-text-centered">Formulário de Cadastro</h1>
 
					<form method="POST" action="CadastroProf.php">
						<div class="field">
							<label class="label">Nome</label>
							<div class="control">
								<input name="nome" class="input" type="text" placeholder="Seu nome">
							</div>
						</div>
 

						<div class="field">
							<label class="label">Email</label>
							<div class="control">
								<input name="email" class="input" type="email" placeholder="Seu email">
							</div>
						</div>
 

                        <div class="field">
							<label class="label">Codigo</label>
							<div class="control">
								<input name="ra" class="input" type="number" placeholder="Seu RA">
							</div>
						</div>
						
 
						<div class="field is-grouped">
							<div class="control">
                                <input type="submit" value="Enviar" name="cadastrar" class="button is-link is-medium"/>
							</div>
						</div>
					</form>
 
				</div>
			</div>
		</div>
	</section>


</body>
</html>


<?php
        if(isset($_POST['cadastrar'])){

        $conexao = mysqli_connect("localhost", "root", "", "presenca");

        if ($conexao == FALSE)
        {
            echo "Não foi possível conectar-se ao PhpMyAdmin";
            exit;
        }

        $Nome=$_POST['nome'];
        $Email=$_POST['email'];
        $Codigo=$_POST['ra'];
        $sql = "INSERT INTO professor (nome, email, ra) VALUES ('$Nome', '$Email', '$Codigo')";
        $resultado = mysqli_query($conexao, $sql);
        
        if (!$resultado)
        { 
            echo "<center>Erro na Gravação do Registro <br>"; 
        }
        else 
        {
             echo "<br><center>Registro Gravado";
             echo"<br><br>";
        }
    }
        ?>
