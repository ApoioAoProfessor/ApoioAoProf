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


					<h1 class="title has-text-centered">Formulário de Cadastro</h1>
 
					<form method="POST" action="Cadastro.php">
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
							<label class="label">RA</label>
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