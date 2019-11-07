<!DOCTYPE html>
<html>
<head>
	<title> Cadastro</title>
</head>
</body>
<form method="POST" action="processa_cad_usuario.php">
	
	<div class="form-group">
		<label>Nome:</label>
		<input type="text" class="form-control"name="txt_nome_usuario" placeholder="Seu nome">
		<small class="form-text text-muted">Formulário com PHP e MySQLi.</small>
	</div>
	<div class="form-group">
		<label for="exampleInputPassword1">E-mail</label>
		<input type="email"  name="txt_email_usuario" class="form-control" placeholder="E-mail">
	</div>
	<button type="submit" value="Cadastrar" class="btn btn-primary">Cadastrar</button>	

	<!--<input type="submit" value="Cadastrar">  
		Você também pode usar o input no lugar do button se preferir-->

	</form>
</body>
</html>
