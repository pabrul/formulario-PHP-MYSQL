<html>

<head>
<title>Cadastrando...</title>
</head>

<body>
<?php
$host="localhost";
$user="root";
$pass="";
$banco="cadastro";
$conexao=mysqli_connect($host, $user, $pass) or die(mysqli_error());
mysqli_select_db($conexao,$banco) or die(mysqli_error());
?>

<?php
$nome=$_POST['nome'];
$email=$_POST['email'];

$sql=mysqli_query($conexao,"INSERT INTO usuarios(nome, email)VALUES ('$nome', '$email')");
echo "<center><h1>Cadastro realizado com sucesso</h1></center>
	  <button type='button' class='btn btn-success'><a href='cadastro.php'>Voltar</a> </button";
	 
mysqli_close($conexao);
?>
</body>
</html
