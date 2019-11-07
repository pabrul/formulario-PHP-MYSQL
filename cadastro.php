<!DOCTYPE html>
<html>
<head>

	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Pablo Batista">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<style type="text/css">
		body{
			background-color: #44122D;
		}

		h2 { color: #ffffff; 
			font-family: 'Raleway',sans-serif; 
			font-size: 30px; font-weight: 800; 
			line-height: 72px; margin: 0 0 24px; 
			text-align: center; 
			text-transform: uppercase; }

			.login-wrap{
				width:315px;
				margin: 0 auto;
				margin-top:20px;
				border:1px solid #eee;
				padding:15px;
				background: #f8f8f8;
				border-radius: 10px;
			}

			.form-group.last { margin-bottom:0px; }
		</style>

		<title> Cadastro</title>
	</head>
</body>
<form name="signup" method="post" action="cadastrando.php">

	<hr>
	<h2 style="text-align: center">Simples Cadastro para formulário com PHP</h2>
	<hr>


	<div class="container">
		<div class="row" align="">
			<div class="login-wrap" align="center">
				<form class="form-horizontal" role="form">
					<div class="form-group">
						<hr>
						<label for="inputEmail3" class="col-sm-3 control-label">
						Email:</label>
						<div class="col-sm-9">
							<input type="text" name="email" class="form-control" placeholder="Digite Aqui seu Email" required>
						</div>
						<small class="form-text text-muted">Pode usar esse exemplo para criar
						formulários maiores.</small>
						
						<hr>
					</div>
					<div class="form-group">
						<label for="inputPassword3" class="col-sm-3 control-label">
						Nome:</label>
						<div class="col-sm-9">
							<input  type="text" name="nome" class="form-control" placeholder="Digite Aqui seu Nome" required>
						</div>
						<hr>
					</div>

					<div class="form-group last">
						<div class="col-sm-offset-3 col-sm-9">
							<button type="submit" value="cadastrar" class="btn btn-primary btn-lg btn-block">
							Cadastrar</button>
							
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

</form>
</body>
</html>
