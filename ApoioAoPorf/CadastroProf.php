<?php
    require_once 'prof.php';
    $p = new prof;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bulma.min.css">
    <title>Cadastro Normal</title>
</head>
<body>
    
    <section class="section">
		<div class="container">
			<div class="columns is-centered">
				<div class="column is-half">


					<h1 class="title has-text-centered">Formulário de Cadastro Professor</h1>
 
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
								<input name="codigo" class="input" type="number" placeholder="Seu Codigo">
							</div>
						</div>


                        <div class="field">
							<label class="label">Senhaa</label>
							<div class="control">
								<input name="senha" class="input" type="password" placeholder="Sua Senha">
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



	<?php
if(isset($_POST['nome']))
{
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $codigo = addslashes($_POST['codigo']);
    $senha = addslashes($_POST['senha']);
    //verifica se esta preenchido
    if(!empty($nome) && !empty($email) && !empty($codigo) && !empty($senha))
    {
        $p->conectarp("epiz_32595112_apoioaoprofessor", "sql104.epizy.com", "epiz_32595112", "ybrSiKJcKpnAnFs");
        
            if($p->cadastrarp($nome, $email, $codigo, $senha))
            {
                echo "Cadastrado com sucesso!";
            }
            else{
                echo"Email ja cadastrado!";
            }
        
    }
    else
    {
        echo "Preencha todos os campos!";
    }
    
}






?>

</body>
</html>